<?php

use yii\db\Migration;

class m250608_220853_add_image_to_article extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('article', 'image', $this->string(255));
    }

    public function safeDown()
    {
        $this->dropColumn('article', 'image');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m250608_220853_add_image_to_article cannot be reverted.\n";

        return false;
    }
    */
}
