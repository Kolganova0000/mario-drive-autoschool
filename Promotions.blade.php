@extends('component.layouts')

@section('content')
<section class="hero-section">
    <div class="hero-content">
        <div class="hero-text">
            <h1>Текущие акции</h1>
            <p class="hero-subtitle">Выберите подходящее предложение для экономии на обучении</p>
        </div>
        <div class="hero-decoration">
            <div class="decor-circle decor-circle-1"></div>
            <div class="decor-circle decor-circle-2"></div>
            <div class="decor-line"></div>
        </div>
    </div>
</section>

<!-- Блок с акциями -->
<section class="promo-section" id="promotions">
    <div class="container">
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="promo-grid">
            @foreach($promotions as $promotion)
            <div class="promo-card {{ $promotion->is_active ? '' : 'inactive' }}">
                <div class="card-header">
                    <span class="status-badge {{ $promotion->is_active ? 'active' : 'inactive' }}">
                        {{ $promotion->is_active ? 'Активно' : 'Завершено' }}
                    </span>
                </div>
                
                <div class="card-body">
                    <h3 class="promo-title">{{ $promotion->title }}</h3>
                    <p class="promo-description">{{ $promotion->description }}</p>
                    
                    <div class="promo-value">
                        @if($promotion->discount_amount)
                        <div class="discount-amount">
                            <span>-{{ number_format($promotion->discount_amount, 0, ',', ' ') }} ₽</span>
                        </div>
                        @elseif($promotion->discount_percent)
                        <div class="discount-percent">
                            <span>-{{ $promotion->discount_percent }}%</span>
                        </div>
                        @endif
                    </div>
                </div>
                
                <div class="card-footer">
                    <div class="promo-dates">
                        <div class="date-item">
                            <i class="far fa-calendar-alt"></i>
                            <span>{{ $promotion->start_date->format('d.m.Y') }} - {{ $promotion->end_date->format('d.m.Y') }}</span>
                        </div>
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

/* Адаптивность героя */
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

/* Сетка акций */
.promo-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
    gap: 2rem;
}

/* Карточка акции */
.promo-card {
    background: white;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
    display: flex;
    flex-direction: column;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    border: 1px solid #e2e8f0;
}

.promo-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
}

.promo-card.inactive {
    opacity: 0.7;
}

.promo-card.inactive:hover {
    transform: none;
    box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
}

/* Шапка карточки */
.card-header {
    padding: 1.25rem;
    background: linear-gradient(135deg, #4f46e5 0%, #7c3aed 100%);
    color: white;
    position: relative;
    min-height: 60px;
}

/* Бейджи статуса */
.status-badge {
    position: absolute;
    top: 1rem;
    right: 1rem;
    padding: 0.25rem 0.75rem;
    border-radius: 9999px;
    font-size: 0.75rem;
    font-weight: 600;
    text-transform: uppercase;
}

.status-badge.active {
    background: rgba(255, 255, 255, 0.2);
    backdrop-filter: blur(5px);
}

.status-badge.inactive {
    background: rgba(0, 0, 0, 0.2);
    backdrop-filter: blur(5px);
}

/* Тело карточки */
.card-body {
    padding: 1.5rem;
    flex-grow: 1;
    display: flex;
    flex-direction: column;
}

.promo-title {
    font-size: 1.25rem;
    font-weight: 700;
    margin-bottom: 1rem;
    color: #1e293b;
}

.promo-description {
    color: #64748b;
    margin-bottom: 1.5rem;
    font-size: 0.95rem;
    line-height: 1.6;
}

/* Значение скидки */
.promo-value {
    margin-top: auto;
    margin-bottom: 1rem;
    text-align: center;
}

.discount-amount, .discount-percent {
    font-size: 2.5rem;
    font-weight: 800;
    color: #4f46e5;
    line-height: 1;
}

/* Футер карточки */
.card-footer {
    padding: 1.25rem 1.5rem;
    border-top: 1px solid #f1f5f9;
}

/* Даты проведения акции */
.promo-dates {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    color: #64748b;
    font-size: 0.875rem;
}

.promo-dates i {
    color: #94a3b8;
}
</style>
@endsection
