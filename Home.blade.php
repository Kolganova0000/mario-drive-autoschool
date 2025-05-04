@extends('component.layouts')

@section('content')
<section class="hero">
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <h1>Автошкола <span class="brand">Mario Drive</span> в Иркутске</h1>
            <p class="hero-subtitle">Обучаем вождению с 2018 года</p>
            <a href="{{ route('application.form') }}" class="cta-button pulse">Начать обучение сегодня</a>
        </div>
    </section>

    <!-- Секция "Что получает каждый ученик" -->
    <section class="benefits-section">
        <div class="container">
            <h2>Что получает каждый ученик</h2>
            <p class="subtitle">Мы заботимся о комфорте и успехе наших студентов</p>

            <div class="benefits-grid">
                <div class="benefit-card">
                    <div class="benefit-icon">🚘</div>
                    <h3>Обучение на новом автомобиле</h3>
                    <p>Современные автомобили 2022-2023 года выпуска с МКПП и АКПП</p>
                </div>

                <div class="benefit-card">
                    <div class="benefit-icon">📍</div>
                    <h3>Автодром в центре города</h3>
                    <p>Удобно расположенная площадка с полным набором упражнений</p>
                </div>

                <div class="benefit-card">
                    <div class="benefit-icon">🏥</div>
                    <h3>Бесплатная медкомиссия</h3>
                    <p>Организуем прохождение медкомиссии без дополнительных затрат</p>
                </div>

                <div class="benefit-card">
                    <div class="benefit-icon">💳</div>
                    <h3>Рассрочка до 1 года</h3>
                    <p>Гибкая система оплаты без переплат и скрытых комиссий</p>
                </div>

                <div class="benefit-card">
                    <div class="benefit-icon">🎓</div>
                    <h3>Бесплатное занятие студентам</h3>
                    <p>Специальное предложение для учащихся вузов и колледжей</p>
                </div>

                <div class="benefit-card">
                    <div class="benefit-icon">📚</div>
                    <h3>Классические лекции</h3>
                    <p>Очные занятия с преподавателями в современных классах</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Секция "Этапы обучения 1" -->
    <section class="learning-steps">
        <div class="container">
            <h2>Как проходит обучение на категорию А</h2>
            <p class="subtitle">Пошаговый путь к получению водительских прав категория А</p>

            <div class="steps-container">
                <!-- Этап 1 -->
                <div class="step-card">
                    <div class="step-number">1</div>
                    <div class="step-content">
                        <h3>Теоретическая подготовка</h3>
                        <div class="step-image">
                            <img src="https://avatars.mds.yandex.net/i?id=67f28545e99b00bb88919bc2072b0e4b_l-5247089-images-thumbs&n=13" alt="Теория">
                        </div>
                        <ul>
                            <li>15 очных занятий по 1,5 часа</li>
                            <li>Занятия в современных классах</li>
                            <li>Живое общение с преподавателями</li>
                        </ul>
                    </div>
                </div>

                <!-- Этап 2 -->
                <div class="step-card">
                    <div class="step-number">2</div>
                    <div class="step-content">
                        <h3>Практика на автодроме</h3>
                        <div class="step-image">
                            <img src="https://avatars.mds.yandex.net/get-altay/6477742/2a0000018bd9cc3aca48a68ed0b52d42c1a6/XXXL" alt="Автодром">
                        </div>
                        <ul>
                            <li>30 часов занятий</li>
                            <li>4 экзаменационных упражнений</li>
                            <li>Индивидуальный подход</li>
                        </ul>
                    </div>
                </div>

                <!-- Этап 3 -->
                <div class="step-card">
                    <div class="step-number">3</div>
                    <div class="step-content">
                        <h3>Экзаменационная подготовка</h3>
                        <div class="step-image">
                            <img src="https://avatars.mds.yandex.net/i?id=a9f15ca0dd4e83d9d9ffcf0287d398bab7d809d5-10502494-images-thumbs&n=13" alt="Экзамен">
                        </div>
                        <ul>
                            <li>Внутренний экзамен</li>
                            <li>Разбор типичных ошибок</li>
                            <li>Сопровождение в ГИБДД</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Секция "Этапы обучения 2" -->
    <section class="learning-steps">
        <div class="container">
            <h2>Как проходит обучение на категорию B</h2>
            <p class="subtitle">Пошаговый путь к получению водительских прав категория B</p>

            <div class="steps-container">
                <!-- Этап 1 -->
                <div class="step-card">
                    <div class="step-number">1</div>
                    <div class="step-content">
                        <h3>Теоретическая подготовка</h3>
                        <div class="step-image">
                            <img src="https://avatars.mds.yandex.net/i?id=67f28545e99b00bb88919bc2072b0e4b_l-5247089-images-thumbs&n=13" alt="Теория">
                        </div>
                        <ul>
                            <li>25 очных занятий по 1,5 часа</li>
                            <li>Занятия в современных классах</li>
                            <li>Живое общение с преподавателями</li>
                            <li>Разбор сложных вопросов</li>
                        </ul>
                    </div>
                </div>

                <!-- Этап 2 -->
                <div class="step-card">
                    <div class="step-number">2</div>
                    <div class="step-content">
                        <h3>Практика на автодроме</h3>
                        <div class="step-image">
                            <img src="https://avatars.mds.yandex.net/get-altay/6477742/2a0000018bd9cc3aca48a68ed0b52d42c1a6/XXXL" alt="Автодром">
                        </div>
                        <ul>
                            <li>10 часов занятий</li>
                            <li>4 экзаменационных упражнений</li>
                            <li>Индивидуальный подход</li>
                        </ul>
                    </div>
                </div>

                <!-- Этап 3 -->
                <div class="step-card">
                    <div class="step-number">3</div>
                    <div class="step-content">
                        <h3>Городское вождение</h3>
                        <div class="step-image">
                            <img src="https://sun1-54.userapi.com/s/v1/ig2/4rdVNZqrBt9Or_L4mpAqFJmeQ654TCxZjSNvcO6fJK0ypFoy0xW5dcugacWhyoN0O1_j2EZcW9mbC-np9z9k57G-.jpg?quality=95&as=32x21,48x32,72x48,108x72,160x107,240x160,360x240,480x320,540x360,640x426,720x480,1024x682&from=bu&u=yllKBlXt_aAnGrDuJLWQn4K-g0Qwkh05wua5CCO-oiA&cs=1024x682" alt="Город">
                        </div>
                        <ul>
                            <li>54-56 часов практики</li>
                            <li>Реальные маршруты ГИБДД</li>
                            <li>Разные погодные условия</li>
                            <li>Парковка в ограниченном пространстве</li>
                        </ul>
                    </div>
                </div>

                <!-- Этап 4 -->
                <div class="step-card">
                    <div class="step-number">4</div>
                    <div class="step-content">
                        <h3>Экзаменационная подготовка</h3>
                        <div class="step-image">
                            <img src="https://avatars.mds.yandex.net/get-altay/1676973/2a00000169223b28c646d44102333e778101/XXL_height" alt="Экзамен">
                        </div>
                        <ul>
                            <li>Внутренний экзамен</li>
                            <li>Разбор типичных ошибок</li>
                            <li>Сопровождение в ГИБДД</li>
                            <li>Поддержка после получения прав</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

     <!-- Секция "Этапы обучения 3" -->
     <section class="learning-steps">
        <div class="container">
            <h2>Как проходит обучение на категорию C</h2>
            <p class="subtitle">Пошаговый путь к получению водительских прав категория C</p>

            <div class="steps-container">
                <!-- Этап 1 -->
                <div class="step-card">
                    <div class="step-number">1</div>
                    <div class="step-content">
                        <h3>Теоретическая подготовка</h3>
                        <div class="step-image">
                            <img src="https://avatars.mds.yandex.net/i?id=67f28545e99b00bb88919bc2072b0e4b_l-5247089-images-thumbs&n=13" alt="Теория">
                        </div>
                        <ul>
                            <li>25 очных занятий по 1,5 часа</li>
                            <li>Занятия в современных классах</li>
                            <li>Живое общение с преподавателями</li>
                            <li>Разбор сложных вопросов</li>
                        </ul>
                    </div>
                </div>

                <!-- Этап 2 -->
                <div class="step-card">
                    <div class="step-number">2</div>
                    <div class="step-content">
                        <h3>Практика на автодроме</h3>
                        <div class="step-image">
                            <img src="https://avatars.mds.yandex.net/get-altay/6477742/2a0000018bd9cc3aca48a68ed0b52d42c1a6/XXXL" alt="Автодром">
                        </div>
                        <ul>
                            <li>15 часов занятий</li>
                            <li>4 экзаменационных упражнений</li>
                            <li>Индивидуальный подход</li>
                        </ul>
                    </div>
                </div>

                <!-- Этап 3 -->
                <div class="step-card">
                    <div class="step-number">3</div>
                    <div class="step-content">
                        <h3>Городское вождение</h3>
                        <div class="step-image">
                            <img src="https://avatars.mds.yandex.net/i?id=f20254314a527aa88b2456f0856a53bb0ea23431-6361230-images-thumbs&n=13" alt="Город">
                        </div>
                        <ul>
                            <li>30 часов практики</li>
                            <li>Реальные маршруты ГИБДД</li>
                            <li>Разные погодные условия</li>
                        </ul>
                    </div>
                </div>

                <!-- Этап 4 -->
                <div class="step-card">
                    <div class="step-number">4</div>
                    <div class="step-content">
                        <h3>Экзаменационная подготовка</h3>
                        <div class="step-image">
                            <img src="https://avatars.mds.yandex.net/i?id=3780cfa609339f112d098277120866333228a31e-12422594-images-thumbs&n=13" alt="Экзамен">
                        </div>
                        <ul>
                            <li>Внутренний экзамен</li>
                            <li>Разбор типичных ошибок</li>
                            <li>Сопровождение в ГИБДД</li>
                            <li>Поддержка после получения прав</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Секция "Наши преимущества" -->
    <section class="advantages-section">
        <div class="container">
            <h2>Почему выбирают Mario Drive</h2>
            <p class="subtitle">Наши конкурентные преимущества</p>

            <div class="advantages-grid">
                <div class="advantage-item">
                    <div class="advantage-icon-bg">
                        <div class="advantage-icon">🏆</div>
                    </div>
                    <h3>92% сдачи с первого раза</h3>
                    <p>Лучший показатель в регионе благодаря эффективной методике</p>
                </div>

                <div class="advantage-item">
                    <div class="advantage-icon-bg">
                        <div class="advantage-icon">👨‍🏫</div>
                    </div>
                    <h3>Опытные инструкторы</h3>
                    <p>Средний стаж наших преподавателей - 8 лет</p>
                </div>

                <div class="advantage-item">
                    <div class="advantage-icon-bg">
                        <div class="advantage-icon">⏱️</div>
                    </div>
                    <h3>Гибкий график</h3>
                    <p>Занятия с 7:00 до 22:00, включая выходные</p>
                </div>

                <div class="advantage-item">
                    <div class="advantage-icon-bg">
                        <div class="advantage-icon">💰</div>
                    </div>
                    <h3>Прозрачная цена</h3>
                    <p>Никаких скрытых платежей и доплат за бензин</p>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        :root {
            --primary-color: #E63946; /* Яркий красный */
            --primary-dark: #C1121F;
            --secondary-color: #457B9D; /* Синий */
            --accent-color:rgb(88, 94, 187); /* Оранжевый */
            --dark-color: #1D3557; /* Темно-синий */
            --light-color:rgb(128, 174, 235); /* Светло-кремовый */
            --text-color: #2B2D42;
            --text-light: #8D99AE;
            --shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            --transition: all 0.3s ease;
            background: linear-gradient(hsla(222, 64.60%, 81.20%, 0.40), rgba(118, 171, 241, 0.6));
        }

        /* Герой секция (новый стиль) */
        .hero {
            position: relative;
            height: 90vh;
            min-height: 700px;
            background: 
                linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.6)),
                url('https://images.unsplash.com/photo-1568605117036-5fe5e7bab0b7?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80') no-repeat center center/cover;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            margin-bottom: 60px;
            clip-path: polygon(0 0, 100% 0, 100% 90%, 0 100%);
        }

        .hero-content {
            position: relative;
            z-index: 2;
            max-width: 900px;
            padding: 0 40px;
            animation: fadeInUp 1s ease;
        }

        .hero h1 {
            font-size: 4rem;
            margin-bottom: 1.5rem;
            font-weight: 800;
            line-height: 1.2;
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);
        }

        .hero-subtitle {
            font-size: 1.8rem;
            margin-bottom: 2.5rem;
            font-weight: 300;
            text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.5);
        }

        .brand {
            color: var(--accent-color);
            font-weight: 700;
        }

        .cta-button {
            padding: 18px 50px;
            font-size: 1.3rem;
            background-color: var(--accent-color);
            color: var(--dark-color);
            border: none;
            border-radius: 50px;
            cursor: pointer;
            transition: var(--transition);
            font-weight: 600;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .cta-button:hover {
            background-color: var(--primary-color);
            color: white;
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.3);
        }

        .pulse {
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }


        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% {transform: translateY(0);}
            40% {transform: translateY(-10px);}
            60% {transform: translateY(-5px);}
        }

        /* Остальные стили (оригинальные с небольшими изменениями) */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: var(--text-color);
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 40px; /* Увеличил отступы по бокам */
        }

        section {
            padding: 80px 0;
        }

        h2 {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 15px;
            color: var(--dark-color);
        }

        .subtitle {
            text-align: center;
            font-size: 1.2rem;
            color: while;
            margin-bottom: 60px;
        }

        /* Секция преимуществ */
        .benefits-section {
            background-color: var(--light-color);
        }

        .benefits-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
            margin-top: 50px;
        }

        .benefit-card {
            background: white;
            border-radius: 12px;
            padding: 30px;
            text-align: center;
            transition: var(--transition);
            box-shadow: var(--shadow);
        }

        .benefit-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }

        .benefit-icon {
            font-size: 3rem;
            margin-bottom: 20px;
            color: var(--primary-color);
        }

        .benefit-card h3 {
            font-size: 1.3rem;
            margin-bottom: 15px;
        }

        .benefit-card p {
            color: var(--text-light);
        }

        /* Секция этапов обучения */
        .learning-steps {
            background-color: white;
        }

        .steps-container {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
            margin-top: 50px;
        }

        .step-card {
            position: relative;
            background: white;
            border-radius: 12px;
            overflow: hidden;
            transition: var(--transition);
            box-shadow: var(--shadow);
        }

        .step-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }

        .step-number {
            position: absolute;
            top: -15px;
            left: -15px;
            width: 60px;
            height: 60px;
            background-color: var(--primary-color);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.8rem;
            font-weight: bold;
            z-index: 2;
        }

        .step-content {
            padding: 30px;
        }

        .step-content h3 {
            font-size: 1.4rem;
            margin-bottom: 15px;
        }

        .step-image {
            height: 180px;
            border-radius: 8px;
            overflow: hidden;
            margin-bottom: 20px;
        }

        .step-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: var(--transition);
        }

        .step-card:hover .step-image img {
            transform: scale(1.05);
        }

        .step-content ul {
            list-style-type: none;
            padding: 0;
        }

        .step-content li {
            margin-bottom: 10px;
            padding-left: 20px;
            position: relative;
            color: var(--text-light);
        }

        .step-content li:before {
            content: "•";
            color: var(--primary-color);
            font-size: 1.5rem;
            position: absolute;
            left: 0;
            top: -5px;
        }

        /* Секция наших преимуществ */
        .advantages-section {
            background: linear-gradient(135deg, var(--dark-color) 0%, var(--secondary-color) 100%);
            color: white;
            padding: 100px 0;
            clip-path: polygon(0 5%, 100% 0, 100% 100%, 0% 100%);
            margin-top: -50px;
        }

        .advantages-section h2,
        .advantages-section .subtitle {
            color: white;
        }

        .advantages-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 30px;
            margin-top: 50px;
        }

        .advantage-item {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(5px);
            border-radius: 12px;
            padding: 30px;
            text-align: center;
            transition: var(--transition);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .advantage-item:hover {
            transform: translateY(-10px);
            background: rgba(255, 255, 255, 0.15);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
        }

        .advantage-icon-bg {
            width: 80px;
            height: 80px;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
        }

        .advantage-icon {
            font-size: 2.5rem;
            color: var(--accent-color);
        }

        .advantage-item h3 {
            font-size: 1.3rem;
            margin-bottom: 15px;
        }

        .advantage-item p {
            opacity: 0.9;
        }

        /* Анимации */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Адаптивность */
        @media (max-width: 1024px) {
            .benefits-grid,
            .advantages-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .steps-container {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 768px) {
            .hero {
                height: 80vh;
                min-height: 500px;
            }

            .hero h1 {
                font-size: 3rem;
            }

            .hero-subtitle {
                font-size: 1.4rem;
            }

            h2 {
                font-size: 2rem;
            }

            .container {
                padding: 0 20px;
            }
        }

        @media (max-width: 576px) {
            .hero {
                height: 90vh;
                min-height: 500px;
                clip-path: polygon(0 0, 100% 0, 100% 95%, 0 100%);
            }

            .hero h1 {
                font-size: 2.2rem;
            }

            .hero-subtitle {
                font-size: 1.1rem;
            }

            .benefits-grid,
            .advantages-grid,
            .steps-container {
                grid-template-columns: 1fr;
            }

            .benefit-card,
            .advantage-item,
            .step-card {
                padding: 20px;
            }
        }
    </style>

    <script>
        // Анимация появления элементов при скролле
        document.addEventListener('DOMContentLoaded', function() {
            const animateOnScroll = function() {
                const elements = document.querySelectorAll('.benefit-card, .step-card, .advantage-item');
                
                elements.forEach(element => {
                    const elementPosition = element.getBoundingClientRect().top;
                    const windowHeight = window.innerHeight;
                    
                    if (elementPosition < windowHeight - 100) {
                        element.style.opacity = '1';
                        element.style.transform = 'translateY(0)';
                    }
                });
            };
            
            window.addEventListener('scroll', animateOnScroll);
            animateOnScroll(); // Запустить при загрузке
        });
    </script>


@endsection