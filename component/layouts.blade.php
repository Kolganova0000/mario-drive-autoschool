<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <style>
        /* Сброс отступов для body и html */
        html, body {
            margin: 0;
            padding: 0;
            width: 100%;
        }
        
        /* Основные стили шапки */
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 2rem;
            background-color: #3D3B3B;
            color: white;
            box-shadow: 0 2px 10px #3D3B3B;
            width: 100%;
            box-sizing: border-box;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 15px;
            text-decoration: none;
        }

        .logo img {
            height: 70px; /* Увеличил размер логотипа */
            transition: transform 0.3s ease;
        }

        .logo:hover img {
            transform: scale(1.05);
        }

        .logo h1 {
            font-size: 1.5rem;
            font-weight: 600;
            color: white;
            margin: 0;
        }

        nav ul {
            list-style: none;
            display: flex;
            gap: 1.5rem;
            align-items: center;
            margin: 0;
            padding: 0;
        }

        nav a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            padding: 0.5rem 0;
            position: relative;
        }

        /* Стили для выпадающих меню */
        .dropdown {
            position: relative;
        }

        .dropdown > a::after {
            content: "▾";
            margin-left: 5px;
        }

        .dropdown-menu {
            position: absolute;
            top: 100%;
            left: 0;
            background-color: white;
            border-radius: 4px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
            min-width: 200px;
            z-index: 1000;
            opacity: 0;
            visibility: hidden;
            transform: translateY(10px);
            transition: all 0.3s ease;
        }

        .dropdown:hover .dropdown-menu {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }

        .dropdown-menu a {
            color: #333;
            padding: 0.75rem 1.5rem;
            display: block;
            white-space: nowrap;
            border-bottom: 1px solid #f0f0f0;
        }

        /* Стили для кнопки входа */
        .login-btn {
            background-color: #42b983;
            color: white;
            border: none;
            padding: 8px 20px;
            border-radius: 4px;
            font-weight: 500;
        }

        /* Основное содержимое */
        main {
            min-height: calc(100vh - 180px); /* Чтобы footer всегда был внизу */
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            box-sizing: border-box;
        }

        /* Подвал */
        .site-footer {
            background-color: #3D3B3B;
            color: white;
            padding: 1.5rem 2rem;
            text-align: center;
            width: 100%;
            box-sizing: border-box;
        }
        
        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
        }
        
        .footer-links {
            display: flex;
            justify-content: center;
            gap: 1.5rem;
            flex-wrap: wrap;
        }
        
        .footer-links a {
            color: #ddd;
            text-decoration: none;
            transition: color 0.2s;
        }
        
        .footer-links a:hover {
            color: #42b983;
        }

        /* Адаптивность */
        @media (max-width: 768px) {
            header {
                flex-direction: column;
                padding: 1rem;
            }

            .logo img {
                height: 60px; 
            }

            nav ul {
                flex-direction: column;
                gap: 0.5rem;
                margin-top: 1rem;
            }

            .dropdown-menu {
                position: static;
                box-shadow: none;
                display: none;
            }

            .dropdown:hover .dropdown-menu {
                display: block;
            }
            
            .site-footer {
                padding: 1rem;
            }
            
            .footer-links {
                gap: 1rem;
            }
        }
    </style>
</head>
<body>
    <header>
        <a href="/" class="logo"> 
            <img src="/images/logo.png" alt="Логотип автошколы Mario Drive">
        </a>
        
        <nav>
            <ul>
                <li class="dropdown">
                    <a href="#">Об автошколе</a>
                    <div class="dropdown-menu">
                        <a href="#">Отзывы</a>
                        <a class="nav-link {{ request()->routeIs('Instructors') ? 'active' : '' }}" href="{{ route('Instructors') }}">Инструкторы</a>
                        <a class="nav-link {{ request()->routeIs('Company') ? 'active' : '' }}" href="{{ route('Company') }}">Сведения об организации</a>
                    </div>
                </li>

                <a class="nav-link {{ request()->routeIs('Service') ? 'active' : '' }}" href="{{ route('Service') }}">Услуги и цены</a>
                <a class="nav-link {{ request()->routeIs('Promotions') ? 'active' : '' }}" href="{{ route('Promotions') }}">Акции</a>
                <a class="nav-link {{ request()->routeIs('Contacts') ? 'active' : '' }}" href="{{ route('Contacts') }}">Контакты</a>
                <li>
    <a class="nav-link {{ request()->routeIs('student.login') ? 'active' : '' }} login-btn" href="{{ route('student.login') }}">
        Личный кабинет
    </a>
</li>
            </ul>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="site-footer">
        <div class="footer-content">
            <p>© {{ date('Y') }} Автошкола Mario Drive. Все права защищены.</p>
            <div class="footer-links">
                <a href="#">Контакты</a>
                <a href="#">Политика конфиденциальности</a>
            </div>
        </div>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>