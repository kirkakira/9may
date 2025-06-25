<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;
use yii\web\UploadedFile;

/**
 * @property int $id
 * @property string $title
 * @property string $content
 * @property int $author_id
 * @property string $created_at
 * @property string $updated_at
 * @property string|null $image
 *
 * @property User $author
 */
class Article extends ActiveRecord
{
    /**
     * @var UploadedFile
     */
    public $imageFile;

    public static function tableName()
    {
        return 'article';
    }

    public function rules()
    {
        return [
            [['title', 'content', 'author_id'], 'required'],
            [['content'], 'string'],
            [['author_id'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['title'], 'string', 'max' => 255],
            [['image'], 'string', 'max' => 255],
            [['imageFile'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg, jpeg'],
            [['author_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::class, 'targetAttribute' => ['author_id' => 'id']],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Заголовок',
            'content' => 'Содержание',
            'author_id' => 'Автор',
            'created_at' => 'Дата создания',
            'updated_at' => 'Дата обновления',
            'image' => 'Изображение',
            'imageFile' => 'Файл изображения',
        ];
    }

    public function getAuthor()
    {
        return $this->hasOne(User::class, ['id' => 'author_id']);
    }

    /**
     * Загружает изображение на сервер
     * @return bool
     */
    public function upload()
    {
        if ($this->imageFile === null) {
            return true; // Нет файла для загрузки - это нормально
        }

        // Проверяем, что файл действительно был загружен
        if (!is_uploaded_file($this->imageFile->tempName)) {
            Yii::error("Temp file not found: {$this->imageFile->tempName}");
            $this->addError('imageFile', 'Ошибка загрузки файла');
            return false;
        }

        $uploadDir = Yii::getAlias('@webroot/uploads/');
        if (!file_exists($uploadDir)) {
            mkdir($uploadDir, 0775, true);
        }

        $filename = Yii::$app->security->generateRandomString() . '.' . $this->imageFile->extension;
        $destination = $uploadDir . $filename;

        // Используем copy вместо saveAs для надежности
        if (copy($this->imageFile->tempName, $destination)) {
            // Удаляем старое изображение
            if ($this->image && file_exists($uploadDir . $this->image)) {
                @unlink($uploadDir . $this->image);
            }
            $this->image = $filename;
            return true;
        }

        $this->addError('imageFile', 'Не удалось сохранить файл');
        return false;
    }

    /**
     * Возвращает URL изображения
     * @return string|null
     */
    public function getImageUrl()
    {
        return $this->image ? Yii::getAlias('@web/uploads/') . $this->image : null;
    }

    public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) {
            if ($this->isNewRecord) {
                $this->created_at = date('Y-m-d H:i:s');
            }
            $this->updated_at = date('Y-m-d H:i:s');
            return true;
        }
        return false;
    }
}