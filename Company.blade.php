@extends('component.layouts')

@section('title', 'Сведения об организации')

@section('content')
<div class="company-info-page">
    <!-- Герой-секция -->
    <section class="hero-section">
    <div class="hero-content">
        <div class="hero-text">
            <h1>Сведения об организации</h1>
            <p class="hero-subtitle">Официальная информация об автошколе Mario Drive</p>
        </div>
        <div class="hero-decoration">
            <div class="decor-circle decor-circle-1"></div>
            <div class="decor-circle decor-circle-2"></div>
            <div class="decor-line"></div>
        </div>
    </div>
</section>
    <!-- Основной контент -->
    <div class="container">
        <!-- Общая информация -->
        <section class="info-section">
            <div class="section-card">
                <h2><i class="icon">🏢</i> Общая информация</h2>
                <div class="info-grid">
                    <div class="info-item">
                        <h3>Полное наименование</h3>
                        <p>ООО "Автошкола Mario Drive"</p>
                    </div>
                    <div class="info-item">
                        <h3>Год основания</h3>
                        <p>2018</p>
                    </div>
                    <div class="info-item">
                        <h3>Юридический адрес</h3>
                        <p>г. Иркутск, ул. Ленина, 123, офис 45</p>
                    </div>
                    <div class="info-item">
                        <h3>ИНН/КПП</h3>
                        <p>1234567890 / 123456789</p>
                    </div>
                    <div class="info-item">
                        <h3>ОГРН</h3>
                        <p>1234567890123</p>
                    </div>
                    <div class="info-item">
                        <h3>Лицензия</h3>
                        <p>№12345 от 12.03.2018 (бессрочная)</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Руководство -->
        <section class="management-section">
            <div class="section-card">
                <h2><i class="icon">👔</i> Руководство</h2>
                <div class="management-grid">
                    <div class="person-card">
                        <div class="person-photo">
                            <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-1.2.1&auto=format&fit=crop&w=334&q=80" alt="Директор">
                        </div>
                        <div class="person-info">
                            <h3>Иванов Сергей Петрович</h3>
                            <p class="position">Директор</p>
                            <p class="detail">Опыт работы: 15 лет</p>
                            <p class="detail">Образование: высшее педагогическое</p>
                        </div>
                    </div>
                    <div class="person-card">
                        <div class="person-photo">
                            <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-1.2.1&auto=format&fit=crop&w=334&q=80" alt="Методист">
                        </div>
                        <div class="person-info">
                            <h3>Смирнова Ольга Васильевна</h3>
                            <p class="position">Методист</p>
                            <p class="detail">Опыт работы: 12 лет</p>
                            <p class="detail">Образование: кандидат педагогических наук</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Документы -->
        <section class="documents-section">
            <div class="section-card">
                <h2><i class="icon">📂</i> Документы</h2>
                <div class="documents-grid">
                    <div class="document-card">
                        <div class="doc-icon">📄</div>
                        <h3>Лицензия на образовательную деятельность</h3>
                        <a href="#" class="btn-download">Скачать</a>
                    </div>
                    <div class="document-card">
                        <div class="doc-icon">📑</div>
                        <h3>Свидетельство о гос. регистрации</h3>
                        <a href="#" class="btn-download">Скачать</a>
                    </div>
                    <div class="document-card">
                        <div class="doc-icon">📊</div>
                        <h3>Программа обучения</h3>
                        <a href="#" class="btn-download">Скачать</a>
                    </div>
                    <div class="document-card">
                        <div class="doc-icon">📝</div>
                        <h3>Договор публичной оферты</h3>
                        <a href="#" class="btn-download">Скачать</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

<style>
    /* Основные переменные */
    :root {
        --primary: #3a86ff;
        --primary-dark: #2667cc;
        --secondary: #f8f9fa;
        --text: #2c3e50;
        --text-light: #666;
        --white: #ffffff;
        --shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        --radius: 12px;
        background: linear-gradient(hsla(222, 64.60%, 81.20%, 0.40), rgba(118, 171, 241, 0.6));
    }

    /* Общие стили страницы */
    .company-info-page {
        font-family: 'Arial', sans-serif;
        color: var(--text);
        line-height: 1.6;
        padding-bottom: 60px;
    }

    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
    }

    /* Герой-секция */
    .hero-section {
        position: relative;
        height: 300px;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        background-color: #f8f9fa;
        margin-bottom: 60px;
        overflow: hidden;
    }

    .hero-content {
        position: relative;
        z-index: 2;
        max-width: 800px;
        padding: 0 20px;
    }

    .hero-text h1 {
        font-size: 2.8rem;
        margin-bottom: 1rem;
        color: #2c3e50;
        font-weight: 700;
        position: relative;
        display: inline-block;
    }

    .hero-text h1:after {
        content: '';
        display: block;
        width: 80px;
        height: 4px;
        background: #3a86ff;
        margin: 15px auto;
        border-radius: 2px;
    }

    .hero-subtitle {
        font-size: 1.4rem;
        color: #666;
        max-width: 600px;
        margin: 0 auto;
    }

    .hero-decoration {
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        z-index: 1;
    }

    .decor-circle {
        position: absolute;
        border-radius: 50%;
        background: rgba(58, 134, 255, 0.1);
    }

    .decor-circle-1 {
        width: 300px;
        height: 300px;
        top: -150px;
        right: -150px;
    }

    .decor-circle-2 {
        width: 200px;
        height: 200px;
        bottom: -100px;
        left: -100px;
        background: rgba(58, 134, 255, 0.05);
    }

    .decor-line {
        position: absolute;
        height: 100%;
        width: 1px;
        background: rgba(58, 134, 255, 0.1);
        left: 50%;
        top: 0;
    }

    @media (max-width: 768px) {
        .hero-section {
            height: 250px;
        }
        
        .hero-text h1 {
            font-size: 2.2rem;
        }
        
        .hero-subtitle {
            font-size: 1.2rem;
        }
    }

    @media (max-width: 576px) {
        .hero-section {
            height: 200px;
        }
        
        .hero-text h1 {
            font-size: 1.8rem;
        }
        
        .hero-text h1:after {
            width: 60px;
            height: 3px;
            margin: 10px auto;
        }
    }

    /* Карточки секций */
    .section-card {
        background: var(--white);
        border-radius: var(--radius);
        padding: 40px;
        box-shadow: var(--shadow);
        margin-bottom: 40px;
        position: relative;
        overflow: hidden;
    }

    .section-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 8px;
        height: 100%;
        background: var(--primary);
    }

    .section-card h2 {
        font-size: 1.8rem;
        margin-bottom: 30px;
        display: flex;
        align-items: center;
        gap: 15px;
    }

    .icon {
        font-size: 1.8rem;
    }

    /* Сетка информации */
    .info-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 25px;
    }

    .info-item h3 {
        color: var(--primary);
        font-size: 1.1rem;
        margin-bottom: 8px;
    }

    .info-item p {
        color: var(--text);
    }

    /* Руководство */
    .management-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 30px;
    }

    .person-card {
        display: flex;
        background: var(--secondary);
        border-radius: var(--radius);
        overflow: hidden;
        box-shadow: var(--shadow);
    }

    .person-photo {
        width: 200px;
        flex-shrink: 0;
    }

    .person-photo img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .person-info {
        padding: 25px;
        flex-grow: 1;
    }

    .person-info h3 {
        font-size: 1.3rem;
        margin-bottom: 10px;
    }

    .position {
        color: var(--primary);
        font-weight: bold;
        margin-bottom: 8px;
    }

    .detail {
        color: var(--text-light);
        margin-bottom: 6px;
        font-size: 0.95rem;
    }

    /* Документы */
    .documents-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 20px;
    }

    .document-card {
        background: var(--secondary);
        border-radius: var(--radius);
        padding: 25px 20px;
        text-align: center;
        box-shadow: var(--shadow);
        transition: transform 0.3s;
    }

    .document-card:hover {
        transform: translateY(-5px);
    }

    .doc-icon {
        font-size: 2.5rem;
        margin-bottom: 15px;
        color: var(--primary);
    }

    .document-card h3 {
        font-size: 1.1rem;
        margin-bottom: 20px;
        min-height: 60px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .btn-download {
        display: inline-block;
        padding: 8px 20px;
        background: var(--primary);
        color: white;
        border-radius: 50px;
        text-decoration: none;
        font-weight: 600;
        transition: background 0.3s;
    }

    .btn-download:hover {
        background: var(--primary-dark);
    }

    /* Адаптивность */
    @media (max-width: 1024px) {
        .management-grid,
        .documents-grid {
            grid-template-columns: repeat(2, 1fr);
        }

        .contacts-content {
            grid-template-columns: 1fr;
        }

        .map-wrapper {
            height: 300px;
        }
    }

    @media (max-width: 768px) {
        .hero-section {
            height: 300px;
        }

        .hero-content h1 {
            font-size: 2.2rem;
        }

        .hero-content p {
            font-size: 1.2rem;
        }

        .section-card {
            padding: 30px;
        }

        .info-grid {
            grid-template-columns: 1fr;
        }

        .person-card {
            flex-direction: column;
        }

        .person-photo {
            width: 100%;
            height: 200px;
        }
    }

    @media (max-width: 576px) {
        .documents-grid {
            grid-template-columns: 1fr;
        }

        .section-card {
            padding: 25px 20px;
        }

        .hero-content h1 {
            font-size: 1.8rem;
        }
    }
</style>
@endsection