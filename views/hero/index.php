<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Иван Никитин - Герой Победы</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700;900&family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --soft-red: #e63946;
            --dark-red: #9d0208;
            --light-red: #ffcad4;
            --cream: #fff9ec;
            --light-gold: #ffd7ba;
            --dark: #2b2d42;
            --transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Montserrat', sans-serif;
            background-color: var(--cream);
            color: var(--dark);
            line-height: 1.7;
            overflow-x: hidden;
            background-image: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100"><rect width="100" height="100" fill="%23fff9ec"/><path d="M0 50 Q25 30, 50 50 T100 50 L100 100 L0 100 Z" fill="%23ffcad480"/></svg>');
            background-size: cover;
        }

        /* Шапка */
        .hero-section {
            position: relative;
            min-height: 100vh;
            padding: 30px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            overflow: hidden;
            background-image: url("");
            clip-path: polygon(0 0, 100% 0, 100% 90%, 0 100%);
            margin-bottom: -50px;
        }

        .hero-content {
            position: relative;
            z-index: 2;
            max-width: 900px;
            color: white;
            padding: 40px 20px;
            animation: fadeInUp 1.2s ease-out;
        }

        .victory-title {
            font-size: 1.5rem;
            letter-spacing: 4px;
            text-transform: uppercase;
            margin-bottom: 20px;
            color: var(--dark-color);
            font-weight: 500;
        }

        .hero-title {
            font-family: 'Playfair Display', serif;
            font-size: 4.2rem;
            font-weight: 800;
            margin-bottom: 25px;
            line-height: 1.1;
        }

        .hero-subtitle {
            font-size: 1.8rem;
            margin-bottom: 40px;
            font-weight: 400;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
            opacity: 0.9;
        }

        .hero-quote {
            font-style: italic;
            font-size: 1.4rem;
            max-width: 700px;
            margin: 40px auto;
            padding: 20px;
            position: relative;
            background: rgba(0, 0, 0, 0.15);
            border-radius: 12px;
            backdrop-filter: blur(5px);
        }

        .scroll-down {
            position: absolute;
            bottom: 40px;
            left: 50%;
            transform: translateX(-50%);
            color: white;
            font-size: 2rem;
            animation: bounce 2s infinite;
            z-index: 10;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(5px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% { transform: translateY(0) translateX(-50%); }
            40% { transform: translateY(-15px) translateX(-50%); }
            60% { transform: translateY(-7px) translateX(-50%); }
        }

        /* Основные разделы */
        .section {
            padding: 100px 30px;
            max-width: 1400px;
            margin: 0 auto;
        }

        .section-title {
            font-family: 'Playfair Display', serif;
            font-size: 3.2rem;
            text-align: center;
            margin-bottom: 70px;
            position: relative;
            color: var(--dark-red);
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -20px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: linear-gradient(to right, var(--light-red), var(--soft-red));
            border-radius: 2px;
        }

        /* Биография */
        .bio-container {
            display: flex;
            flex-wrap: wrap;
            gap: 40px;
            margin-top: 50px;
        }

        .bio-text {
            flex: 1;
            min-width: 300px;
            background: white;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 15px 40px rgba(157, 2, 8, 0.08);
            transition: var(--transition);
        }

        .bio-text:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 50px rgba(157, 2, 8, 0.12);
        }

        .bio-text h3 {
            font-size: 1.5rem;
            color: var(--dark-red);
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 2px solid var(--light-red);
        }

        .bio-text p {
            margin-bottom: 25px;
            line-height: 1.8;
        }

        .bio-image {
            flex: 1;
            min-width: 300px;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 15px 40px rgba(157, 2, 8, 0.1);
            background: linear-gradient(135deg, var(--dark-red) 0%, var(--soft-red) 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            transition: var(--transition);
        }

        .bio-image:hover {
            transform: scale(1.02);
            box-shadow: 0 20px 50px rgba(157, 2, 8, 0.15);
        }

        .bio-image-content {
            padding: 40px;
            text-align: center;
            color: white;
            z-index: 2;
        }

        .bio-image-title {
            font-family: 'Playfair Display', serif;
            font-size: 2.3rem;
            margin-bottom: 15px;
        }

        .bio-image-dates {
            font-size: 1.4rem;
            margin-bottom: 30px;
            opacity: 0.9;
            font-weight: 300;
        }

        .order-icon {
            font-size: 7rem;
            color: var(--light-gold);
            margin: 20px 0;
            filter: drop-shadow(0 0 10px rgba(0, 0, 0, 0.2));
        }

        /* Боевой путь */
        .timeline {
            position: relative;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .timeline::after {
            content: '';
            position: absolute;
            width: 4px;
            background: linear-gradient(to bottom, var(--soft-red), var(--dark-red));
            top: 0;
            bottom: 0;
            left: 50%;
            margin-left: -2px;
            border-radius: 2px;
        }

        .timeline-item {
            padding: 20px 40px;
            position: relative;
            width: 50%;
            opacity: 0;
            transform: translateY(30px);
            transition: var(--transition);
        }

        .timeline-item.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .timeline-item:nth-child(odd) {
            left: 0;
        }

        .timeline-item:nth-child(even) {
            left: 50%;
        }

        .timeline-content {
            padding: 30px;
            background: white;
            position: relative;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(157, 2, 8, 0.08);
            transition: var(--transition);
            border-left: 4px solid var(--soft-red);
        }

        .timeline-content:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 40px rgba(157, 2, 8, 0.12);
            border-left: 4px solid var(--dark-red);
        }

        .timeline-year {
            font-family: 'Playfair Display', serif;
            font-size: 2rem;
            font-weight: 700;
            color: var(--dark-red);
            margin-bottom: 15px;
            display: flex;
            align-items: center;
        }

        .timeline-year::before {
            content: '';
            display: inline-block;
            width: 15px;
            height: 15px;
            background: var(--soft-red);
            border-radius: 50%;
            margin-right: 15px;
        }

        .timeline-title {
            font-size: 1.4rem;
            margin-bottom: 15px;
            color: var(--dark);
            font-weight: 600;
        }

        /* Награды */
        .awards-section {
            background: linear-gradient(135deg, var(--cream) 0%, #fff0f3 100%);
            position: relative;
            overflow: hidden;
            padding: 100px 30px;
            clip-path: polygon(0 10%, 100% 0, 100% 90%, 0 100%);
            margin: 80px 0;
        }

        .awards-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-top: 50px;
            max-width: 1400px;
            margin: 50px auto 0;
        }

        .award-card {
            background: white;
            border-radius: 20px;
            padding: 35px;
            text-align: center;
            box-shadow: 0 15px 40px rgba(157, 2, 8, 0.08);
            transition: var(--transition);
            position: relative;
            overflow: hidden;
            border: 1px solid rgba(230, 57, 70, 0.1);
        }

        .award-card:hover {
            transform: translateY(-12px);
            box-shadow: 0 20px 50px rgba(157, 2, 8, 0.12);
        }

        .award-icon {
            font-size: 3.5rem;
            color: var(--soft-red);
            margin-bottom: 25px;
            display: block;
            transition: var(--transition);
        }

        .award-card:hover .award-icon {
            transform: scale(1.1);
            color: var(--dark-red);
        }

        .award-title {
            font-size: 1.4rem;
            margin-bottom: 15px;
            color: var(--dark-red);
            font-weight: 700;
        }

        .award-date {
            font-size: 1.1rem;
            color: var(--dark);
            font-weight: 600;
            margin-bottom: 15px;
            background: var(--light-red);
            display: inline-block;
            padding: 8px 20px;
            border-radius: 30px;
        }

        .award-highlight {
            background: linear-gradient(135deg, var(--soft-red) 0%, var(--dark-red) 100%);
            transform: scale(1.03);
            color: white;
        }

        .award-highlight .award-icon,
        .award-highlight .award-title,
        .award-highlight p {
            color: white;
        }

        .award-highlight .award-date {
            background: var(--light-gold);
            color: var(--dark);
        }

        /* Подвиги */
        .exploits-section {
            background: white;
            position: relative;
            border-radius: 30px;
            padding: 80px 40px;
            box-shadow: 0 20px 50px rgba(157, 2, 8, 0.08);
            margin: 40px 0;
        }

        .exploits-content {
            position: relative;
            z-index: 2;
            max-width: 1200px;
            margin: 0 auto;
        }

        .quote-block {
            margin: 50px 0;
            padding: 40px;
            background: var(--cream);
            color: var(--dark);
            border-radius: 20px;
            position: relative;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(157, 2, 8, 0.05);
            border-left: 5px solid var(--soft-red);
            transition: var(--transition);
        }

        .quote-block:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(157, 2, 8, 0.1);
        }

        .quote-text {
            font-style: italic;
            font-size: 1.3rem;
            position: relative;
            z-index: 2;
            line-height: 1.8;
            margin-bottom: 20px;
        }

        .quote-source {
            font-weight: 700;
            text-align: right;
            font-size: 1.1rem;
            font-style: normal;
            color: var(--dark-red);
        }

        .quote-date {
            display: block;
            font-weight: 400;
            font-size: 1rem;
            margin-top: 5px;
            color: var(--soft-red);
        }

        /* После войны */
        .postwar-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-top: 50px;
        }

        .postwar-card {
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 15px 40px rgba(157, 2, 8, 0.08);
            transition: var(--transition);
            position: relative;
        }

        .postwar-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 50px rgba(157, 2, 8, 0.12);
        }

        .postwar-img {
            height: 200px;
            background: var(--light-red);
            position: relative;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--dark-red);
            font-size: 3.5rem;
        }

        .postwar-content {
            padding: 30px;
        }

        .postwar-title {
            font-size: 1.4rem;
            margin-bottom: 15px;
            color: var(--dark-red);
            font-weight: 700;
        }

        /* Подвал */
        .footer {
            background: linear-gradient(135deg, var(--dark-red) 0%, var(--soft-red) 100%);
            color: white;
            padding: 100px 30px 60px;
            text-align: center;
            position: relative;
            overflow: hidden;
            margin-top: 100px;
            clip-path: polygon(0 10%, 100% 0, 100% 100%, 0 100%);
        }

        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
            position: relative;
            z-index: 2;
        }

        .footer-title {
            font-family: 'Playfair Display', serif;
            font-size: 2.5rem;
            margin-bottom: 25px;
            color: var(--light-gold);
        }

        .footer-quote {
            font-size: 1.3rem;
            max-width: 800px;
            margin: 0 auto 40px;
            line-height: 1.8;
            font-style: italic;
            opacity: 0.9;
        }

        .remembrance {
            display: inline-block;
            padding: 16px 45px;
            background: transparent;
            color: white;
            font-size: 1.1rem;
            text-decoration: none;
            border-radius: 50px;
            margin: 20px 0;
            transition: var(--transition);
            border: 2px solid rgba(255, 255, 255, 0.3);
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            backdrop-filter: blur(5px);
        }

        .remembrance:hover {
            background: rgba(255, 255, 255, 0.15);
            transform: translateY(-5px);
            border-color: rgba(255, 255, 255, 0.5);
        }

        .copyright {
            margin-top: 70px;
            padding-top: 25px;
            border-top: 1px solid rgba(255, 255, 255, 0.2);
            color: rgba(255, 255, 255, 0.8);
        }

        /* Анимации */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(40px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Адаптивность */
        @media (max-width: 1000px) {
            .hero-title {
                font-size: 3.5rem;
            }

            .hero-subtitle {
                font-size: 1.5rem;
            }

            .section {
                padding: 80px 20px;
            }

            .section-title {
                font-size: 2.8rem;
            }

            .timeline::after {
                left: 31px;
            }

            .timeline-item {
                width: 100%;
                padding-left: 70px;
                padding-right: 25px;
                left: 0 !important;
            }
        }

        @media (max-width: 600px) {
            .hero-title {
                font-size: 2.8rem;
            }

            .victory-title {
                font-size: 1.2rem;
            }

            .section {
                padding: 60px 15px;
            }

            .section-title {
                font-size: 2.3rem;
            }

            .bio-text,
            .bio-image {
                min-width: 100%;
            }

            .timeline-year {
                font-size: 1.8rem;
            }

            .timeline-content {
                padding: 25px;
            }

            .quote-text {
                font-size: 1.1rem;
            }
        }
    </style>
</head>
<body>
<!-- Геройский заголовок -->
<section class="hero-section" id="hero">
    <div class="hero-content">
        <div class="victory-title">День Победы • 9 Мая • 1945</div>
        <h1 class="hero-title">Иван Георгиевич Никитин</h1>
        <h2 class="hero-subtitle">Кавалер Ордена Александра Невского, герой Великой Отечественной войны</h2>
        <p class="hero-quote">"Политрук Никитин, находясь в действующей армии, в боях под ст. Узловой, оставшись у орудия только с командиром взвода, сдерживал натиск вражеской пехоты..."</p>
    </div>

</section>

<!-- Биография -->
<section class="section" id="biography">
    <h2 class="section-title">Жизненный путь героя</h2>
    <div class="bio-container">
        <div class="bio-text">
            <h3>Ранние годы</h3>
            <p>Иван Георгиевич Никитин родился 16 сентября 1920 года в деревне Редкое Новосибирской области. Детство и юность Ивана прошли в суровых условиях сибирской деревни, что закалило его характер и подготовило к будущим испытаниям.</p>

            <h3>Начало службы</h3>
            <p>В октябре 1940 года Иван Никитин был призван на службу в Красную Армию. Начинал службу наводчиком в стрелковом полку. Уже в апреле 1941 года, проявив лидерские качества, он был избран секретарём бюро ВЛКСМ.</p>

            <h3>Военные годы</h3>
            <p>С октября 1941 года Никитин становится комиссаром батареи. После ранения возвращается на ту же должность. В июле 1942 года назначается комиссаром дивизиона.</p>

            <h3>Послевоенная жизнь</h3>
            <p>После войны Иван Георгиевич трудился в Новосибирской и Омской областях. В 1956 году переехал в Курганскую область. Работал на Юргамышском маслозаводе, затем в Курганском стройтресте.</p>
            <p>Закончил свой трудовой путь в 1962 году. Проживал в городе Кургане. Ушёл из жизни 6 февраля 1996 года.</p>
        </div>

        <div class="bio-image">
            <div class="bio-image-content">
                <div class="bio-image-title">Иван Никитин</div>
                <div class="bio-image-dates">1920 - 1996</div>
                <div class="order-icon">
                    <i class="fas fa-medal"></i>
                </div>
                <p>Кавалер Ордена Александра Невского</p>
                <p>Трижды награждён Орденом Красной Звезды</p>
            </div>
        </div>
    </div>
</section>

<!-- Боевой путь -->
<section class="section" id="military-path">
    <h2 class="section-title">Боевой путь</h2>
    <div class="timeline">
        <div class="timeline-item">
            <div class="timeline-content">
                <div class="timeline-year">1940</div>
                <h3 class="timeline-title">Начало службы</h3>
                <p>Призван на службу в октябре 1940 года. Начинал службу наводчиком в 277-м стрелковом полку.</p>
            </div>
        </div>

        <div class="timeline-item">
            <div class="timeline-content">
                <div class="timeline-year">1941</div>
                <h3 class="timeline-title">Секретарь комсомола</h3>
                <p>В апреле 1941 года избран секретарём бюро ВЛКСМ в Дальневосточном военном округе.</p>
            </div>
        </div>

        <div class="timeline-item">
            <div class="timeline-content">
                <div class="timeline-year">1941</div>
                <h3 class="timeline-title">Комиссар батареи</h3>
                <p>С октября 1941 года — комиссар батареи в 3-м отдельном истребительно-противотанковом дивизионе.</p>
            </div>
        </div>

        <div class="timeline-item">
            <div class="timeline-content">
                <div class="timeline-year">1942</div>
                <h3 class="timeline-title">Комиссар дивизиона</h3>
                <p>В июле 1942 года назначается на должность комиссара дивизиона.</p>
            </div>
        </div>

        <div class="timeline-item">
            <div class="timeline-content">
                <div class="timeline-year">1942</div>
                <h3 class="timeline-title">Командир батареи</h3>
                <p>В октябре 1942 года назначается командиром батареи в 817-м стрелковом полку.</p>
            </div>
        </div>

        <div class="timeline-item">
            <div class="timeline-content">
                <div class="timeline-year">1943</div>
                <h3 class="timeline-title">Командир дивизиона</h3>
                <p>После ранения возвращается на фронт командиром 384-го отдельного истребительно-противотанкового дивизиона.</p>
            </div>
        </div>

        <div class="timeline-item">
            <div class="timeline-content">
                <div class="timeline-year">1945</div>
                <h3 class="timeline-title">Увольнение в запас</h3>
                <p>18 декабря 1945 года уволен в запас в звании майора.</p>
            </div>
        </div>
    </div>
</section>

<!-- Награды -->
<section class="awards-section" id="awards">
    <h2 class="section-title">Боевые награды</h2>
    <div class="awards-container">
        <div class="award-card">
            <i class="fas fa-star award-icon"></i>
            <h3 class="award-title">Орден Красной Звезды</h3>
            <div class="award-date">22 декабря 1942 г.</div>
            <p>За образцовое выполнение боевых заданий командования</p>
        </div>

        <div class="award-card">
            <i class="fas fa-star award-icon"></i>
            <h3 class="award-title">Орден Красной Звезды</h3>
            <div class="award-date">23 января 1943 г.</div>
            <p>За личное мужество и отвагу в боях</p>
        </div>

        <div class="award-card">
            <i class="fas fa-star award-icon"></i>
            <h3 class="award-title">Орден Красной Звезды</h3>
            <div class="award-date">19 февраля 1943 г.</div>
            <p>За проявленную храбрость и стойкость</p>
        </div>

        <div class="award-card award-highlight">
            <i class="fas fa-crown award-icon"></i>
            <h3 class="award-title">Орден Александра Невского</h3>
            <div class="award-date">4 сентября 1944 г.</div>
            <p>За умелое командование дивизионом и личное мужество</p>
        </div>

        <div class="award-card">
            <i class="fas fa-shield-alt award-icon"></i>
            <h3 class="award-title">Медаль "За оборону Ленинграда"</h3>
            <div class="award-date">3 октября 1943 г.</div>
            <p>За участие в героической обороне Ленинграда</p>
        </div>

        <div class="award-card">
            <i class="fas fa-shield-alt award-icon"></i>
            <h3 class="award-title">Медаль "За оборону Москвы"</h3>
            <div class="award-date">31 мая 1945 г.</div>
            <p>За участие в героической обороне Москвы</p>
        </div>

        <div class="award-card">
            <i class="fas fa-medal award-icon"></i>
            <h3 class="award-title">Медаль "За победу над Германией"</h3>
            <div class="award-date">1945 г.</div>
            <p>За участие в Великой Отечественной войне</p>
        </div>
    </div>
</section>

<!-- Подвиги -->
<section class="exploits-section" id="exploits">
    <h2 class="section-title">Боевые подвиги</h2>
    <div class="exploits-content">
        <div class="quote-block">
            <p class="quote-text">"Политрук Никитин И. Г., находясь в действующей армии с 17.11.1941 г., будучи ответственным секретарём части, в боях под ст. Узловой, оставшись у орудия только с ком. взвода (расчёт был выведен из строя) в течение нескольких часов, работая в качестве наводчика, сдерживал натиск вражеской пехоты. При этом было уничтожено две огневые точки противника и до 100 фашистов."</p>
            <p class="quote-source">Из наградного листа<span class="quote-date">1941 год</span></p>
        </div>

        <div class="quote-block">
            <p class="quote-text">"Политрук Никитин в боях под г. Киров Смоленской области морально хорошо подготовил батарею к боевым действиям с фашизмом. Здесь батарея за несколько дней боёв уничтожила 6 дзотов и около 120 чел. пехоты. В боях под гор. Зубцов батарея уничтожила несколько огневых точек противника."</p>
            <p class="quote-source">Из наградного листа<span class="quote-date">1942 год</span></p>
        </div>

        <div class="quote-block">
            <p class="quote-text">"Тов. Никитин в ночь с 7 на 8.02.1943 г. с группой бойцов и командиров смелыми и дерзкими действиями просочились вглубь обороны фрицев в р-не поселка Торфяник и под ураганным ружейно-пулемётным огнём утащили у немцев 37-мм пушку, которая вела беспокойный огонь по нашим позициям."</p>
            <p class="quote-source">Из наградного листа<span class="quote-date">Февраль 1943 года</span></p>
        </div>

        <div class="quote-block">
            <p class="quote-text">"Тов. Никитин, командуя дивизионом, в боях за деревни Курпетки, Лапково и Ольховка Эстонской ССР 3 и 4 августа 1944 г., находясь в боевых порядках орудий, которые действовали в боевых порядках пехоты, показал высокое искусство управления боем, мужество и отвагу."</p>
            <p class="quote-source">Из представления к Ордену Александра Невского<span class="quote-date">Август 1944 года</span></p>
        </div>
    </div>
</section>

<!-- После войны -->
<section class="section" id="postwar">
    <h2 class="section-title">Жизнь после войны</h2>
    <div class="postwar-container">
        <div class="postwar-card">
            <div class="postwar-img">
                <i class="fas fa-home"></i>
            </div>
            <div class="postwar-content">
                <h3 class="postwar-title">Возвращение к мирной жизни</h3>
                <p>После демобилизации Иван Георгиевич вернулся в Сибирь. Работал в Новосибирской и Омской областях, восстанавливая разрушенное войной народное хозяйство.</p>
            </div>
        </div>

        <div class="postwar-card">
            <div class="postwar-img">
                <i class="fas fa-industry"></i>
            </div>
            <div class="postwar-content">
                <h3 class="postwar-title">Работа в Курганской области</h3>
                <p>В сентябре 1956 года переехал в Курганскую область. Работал на Юргамышском маслозаводе, затем в Курганском стройтресте.</p>
            </div>
        </div>

        <div class="postwar-card">
            <div class="postwar-img">
                <i class="fas fa-book"></i>
            </div>
            <div class="postwar-content">
                <h3 class="postwar-title">Общественная деятельность</h3>
                <p>Иван Георгиевич активно участвовал в ветеранском движении, встречался со школьниками и студентами, передавая память о войне молодому поколению.</p>
            </div>
        </div>
    </div>
</section>

<!-- Подвал -->


<script>
    // Анимация появления элементов при скролле
    function animateOnScroll() {
        const items = document.querySelectorAll('.timeline-item');

        items.forEach(item => {
            const itemPosition = item.getBoundingClientRect().top;
            const screenPosition = window.innerHeight * 0.8;

            if (itemPosition < screenPosition) {
                item.classList.add('visible');
            }
        });
    }

    // Инициализация
    document.addEventListener('DOMContentLoaded', () => {
        // Первоначальная проверка видимых элементов
        animateOnScroll();

        // Проверка при скролле
        window.addEventListener('scroll', animateOnScroll);

        // Плавная прокрутка для кнопок
        document.querySelectorAll('.scroll-down, .remembrance').forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                const targetId = this.getAttribute('href');
                const targetElement = document.querySelector(targetId);

                window.scrollTo({
                    top: targetElement.offsetTop,
                    behavior: 'smooth'
                });
            });
        });
    });
</script>
</body>
</html>