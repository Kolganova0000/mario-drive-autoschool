@extends('component.layouts')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<!-- Герой секция -->
<section class="hero-section">
    <div class="hero-content">
        <div class="hero-text">
            <h1>Наши программы обучения</h1>
            <p class="hero-subtitle">Выберите подходящий курс для получения водительского удостоверения</p>
        </div>
        <div class="hero-decoration">
            <div class="decor-circle decor-circle-1"></div>
            <div class="decor-circle decor-circle-2"></div>
            <div class="decor-line"></div>
        </div>
    </div>
</section>

<!-- Блок с услугами -->
<section class="services-section">
    <div class="container">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
                <button type="button" class="alert-close">&times;</button>
            </div>
        @endif

        <div class="services-grid">
            @foreach($services as $service)
            <div class="service-card">
                <div class="card-header">
                    <h3 class="service-title">{{ $service->name }}</h3>
                </div>
                
                <div class="card-body">
                    <p class="service-description">{{ $service->description }}</p>
                    
                    <div class="service-meta">
                        <span class="duration-badge">
                            <i class="far fa-clock"></i>
                            @if($service->duration_hours)
                                {{ $service->duration_hours }} час.
                            @else
                                Индивидуально
                            @endif
                        </span>
                        <span class="price-value">
                            {{ number_format($service->price, 0, ',', ' ') }} ₽
                        </span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

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

/* Базовые стили */
.container {
    width: 100%;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
    box-sizing: border-box;
}

/* Секция героя */
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
    color: var(--text);
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

/* Декоративные элементы фона */
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

/* Уведомления */
.alert {
    padding: 15px;
    margin-bottom: 30px;
    border-radius: var(--radius);
    position: relative;
}

.alert-success {
    background-color: #d1e7dd;
    color: #0f5132;
    border: 1px solid #badbcc;
}

.alert-close {
    position: absolute;
    top: 15px;
    right: 15px;
    background: none;
    border: none;
    font-size: 1.2rem;
    cursor: pointer;
    color: inherit;
}

/* Сетка услуг */
.services-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
    gap: 2rem;
    margin: 0 auto;
}

/* Карточка услуги */
.service-card {
    background: var(--white);
    border-radius: var(--radius);
    overflow: hidden;
    box-shadow: var(--shadow);
    display: flex;
    flex-direction: column;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    border: 1px solid #e2e8f0;
}

.service-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
}

/* Шапка карточки */
.card-header {
    padding: 1.25rem;
    background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
    color: var(--white);
    position: relative;
    min-height: 60px;
}

/* Тело карточки */
.card-body {
    padding: 1.5rem;
    flex-grow: 1;
    display: flex;
    flex-direction: column;
}

.service-title {
    font-size: 1.25rem;
    font-weight: 700;
    margin: 0;
    color: var(--white);
}

.service-description {
    color: var(--text-light);
    margin-bottom: 1.5rem;
    font-size: 0.95rem;
    line-height: 1.6;
}

/* Мета-данные услуги */
.service-meta {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-top: auto;
}

.duration-badge {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    padding: 0.5rem 1rem;
    border-radius: 50px;
    background: var(--secondary);
    color: var(--text-light);
    font-size: 0.9rem;
    font-weight: 500;
}

.price-value {
    font-size: 1.5rem;
    font-weight: 700;
    color: var(--primary);
}

/* Адаптивность */
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
    
    .services-grid {
        grid-template-columns: 1fr;
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
    
    .service-meta {
        flex-direction: column;
        align-items: flex-start;
        gap: 1rem;
    }
    
    .price-value {
        align-self: flex-end;
    }
}
</style>

<script>
// Простой скрипт для закрытия уведомлений
document.querySelectorAll('.alert-close').forEach(button => {
    button.addEventListener('click', () => {
        button.closest('.alert').style.display = 'none';
    });
});
</script>
@endsection