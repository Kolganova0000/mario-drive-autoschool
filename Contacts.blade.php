@extends('component.layouts')

@section('title', 'Контакты')

@section('content')
<div class="contacts-page">
    <!-- Герой-секция -->
    <section class="hero-section">
        <div class="hero-content">
            <div class="hero-text">
                <h1>Контакты</h1>
                <p class="hero-subtitle">Свяжитесь с нашей командой или посетите наш офис</p>
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
        <section class="contact-info-section">
            <div class="section-card">
                <h2><i class="icon">📞</i> Контактная информация</h2>
                <div class="info-grid">
                    <div class="info-item">
                        <h3>Телефон</h3>
                        <p><a href="tel:+78001234567">+7 800 123-45-67</a></p>
                    </div>
                    <div class="info-item">
                        <h3>Email</h3>
                        <p><a href="mailto:info@mariodrive.ru">info@mariodrive.ru</a></p>
                    </div>
                    <div class="info-item">
                        <h3>Адрес офиса</h3>
                        <p>664000, Россия, г. Иркутск,<br>ул. Ленина, д. 123, офис 45</p>
                    </div>
                    <div class="info-item">
                        <h3>Время работы офиса</h3>
                        <p>Понедельник–пятница: 09:00–18:00<br>Суббота: 10:00–14:00<br>Воскресенье: выходной</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="map-section">
            <div class="section-card">
                <h2><i class="icon">🗺️</i> Как нас найти</h2>
                <div class="map-wrapper">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2248.0650925454267!2d104.29931611601522!3d52.291015158566616!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5d2e79d23b1842ab%3A0x52f56de28eaf77a4!2z0JrQu9C40YHRgtGA0L7QtNCw0LvQs9Cw0YbQuNGG0LjQu9GM!5e0!3m2!1sru!2sru!4v1587450459222!5m2!1sru!2sru" 
                        width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy">
                    </iframe>
                </div>
            </div>
        </section>
    </div>
</div>

<style>
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

    .contacts-page {
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

    .hero-section {
        position: relative;
        height: 300px;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        background-color: var(--secondary);
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
        background: var(--primary);
        margin: 15px auto;
        border-radius: 2px;
    }

    .hero-subtitle {
        font-size: 1.4rem;
        color: var(--text-light);
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

    .info-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
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

    .map-wrapper {
        height: 400px;
        border-radius: var(--radius);
        overflow: hidden;
    }
</style>
@endsection
