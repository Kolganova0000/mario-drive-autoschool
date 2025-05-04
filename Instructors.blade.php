@extends('component.layouts')

@section('title', 'Инструктора')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<style>
:root {
    --primary: #3498db;
    --primary-dark: #2980b9;
    --secondary: #f8f9fa;
    --text: #2c3e50;
    --text-light: #7f8c8d;
    --white: #ffffff;
    --shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    --radius: 15px;
    background: linear-gradient(hsla(222, 64.60%, 81.20%, 0.40), rgba(118, 171, 241, 0.6));
}

/* Герой секция */
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

/* Декоративные элементы */
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
    background: rgba(52, 152, 219, 0.1);
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
    background: rgba(52, 152, 219, 0.05);
}

.decor-line {
    position: absolute;
    height: 100%;
    width: 1px;
    background: rgba(52, 152, 219, 0.1);
    left: 50%;
    top: 0;
}

/* Основные стили */
.container {
    width: 100%;
    max-width: 1200px;
    margin: 0 auto;
    padding: 2rem 1rem;
    box-sizing: border-box;
}

.section-title {
    position: relative;
    margin-bottom: 3rem;
    font-weight: 700;
    color: var(--text);
    text-align: center;
    font-size: 2rem;
}

.section-title:after {
    content: '';
    display: block;
    width: 80px;
    height: 4px;
    background: var(--primary);
    margin: 15px auto 0;
}

.instructors-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
    gap: 1.5rem;
    margin-top: 2rem;
}

.instructor-card {
    transition: all 0.3s ease;
    border-radius: var(--radius);
    overflow: hidden;
    background: var(--white);
    box-shadow: 0 2px 10px rgba(0,0,0,0.05);
    display: flex;
    flex-direction: column;
}

.instructor-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 20px rgba(0,0,0,0.1);
}

.card-image {
    height: 300px;
    width: 100%;
    object-fit: cover;
    object-position: top;
}

.card-content {
    padding: 1.5rem;
    display: flex;
    flex-direction: column;
    flex-grow: 1;
}

.card-title {
    font-weight: 600;
    color: var(--text);
    margin: 0 0 0.75rem;
    font-size: 1.25rem;
}

.instructor-category {
    display: inline-flex;
    align-items: center;
    background-color: var(--secondary);
    padding: 0.25rem 0.75rem;
    border-radius: 50px;
    font-size: 0.85rem;
    font-weight: 500;
    color: var(--text-light);
    margin-bottom: 1rem;
}

.instructor-info {
    margin-bottom: 1rem;
}

.info-item {
    display: flex;
    align-items: center;
    margin-bottom: 0.5rem;
    font-size: 0.95rem;
}

.info-item i {
    margin-right: 0.5rem;
    color: var(--primary);
    min-width: 20px;
    text-align: center;
}

.details-content {
    padding-top: 1rem;
    border-top: 1px solid #eee;
    margin-top: auto;
}

.details-list {
    list-style: none;
    padding: 0;
    margin: 0;
}

.details-item {
    padding: 0.75rem 0;
    border-bottom: 1px solid #f5f5f5;
    display: flex;
    flex-wrap: wrap;
}

.details-item:last-child {
    border-bottom: none;
}

.details-item strong {
    display: flex;
    align-items: center;
    color: var(--text-light);
    margin-right: 0.5rem;
}

.details-item strong i {
    margin-right: 0.5rem;
}

.status-badge {
    display: inline-block;
    padding: 0.25rem 0.75rem;
    border-radius: 50px;
    font-size: 0.8rem;
    font-weight: 500;
    background-color: #e0e0e0;
    color: #616161;
}

.status-badge.active {
    background-color: #d4edda;
    color: #155724;
}

.toggle-btn {
    align-self: flex-start;
    margin-top: 1rem;
    background-color: var(--primary);
    color: white;
    border: none;
    padding: 0.5rem 1.25rem;
    border-radius: 50px;
    font-weight: 500;
    cursor: pointer;
    transition: all 0.3s ease;
    display: inline-flex;
    align-items: center;
}

.toggle-btn:hover {
    background-color: var(--primary-dark);
    transform: translateY(-2px);
}

.toggle-btn i {
    margin-right: 0.5rem;
}

.collapse {
    display: none;
}

.collapse.show {
    display: block;
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
    
    .instructors-grid {
        grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
    }
    
    .section-title {
        font-size: 1.75rem;
        margin-bottom: 2rem;
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
    
    .instructors-grid {
        grid-template-columns: 1fr;
    }
    
    .card-image {
        height: 250px;
    }
}
</style>

<!-- Герой секция -->
<section class="hero-section">
    <div class="hero-content">
        <div class="hero-text">
            <h1>Наши инструкторы</h1>
            <p class="hero-subtitle">Профессиональные педагоги с индивидуальным подходом к каждому ученику</p>
        </div>
        <div class="hero-decoration">
            <div class="decor-circle decor-circle-1"></div>
            <div class="decor-circle decor-circle-2"></div>
            <div class="decor-line"></div>
        </div>
    </div>
</section>

<!-- Основной контент -->


    <div class="instructors-grid">
        @foreach($instructors as $instructor)
            <div class="instructor-card">
                <img src="{{ $instructor->photo ? Storage::url($instructor->photo) : asset('storage/instructors/photos/default.png') }}" 
                     class="card-image" 
                     alt="Фото инструктора {{ $instructor->first_name }} {{ $instructor->last_name }}">
                
                <div class="card-content">
                    <h3 class="card-title">{{ $instructor->first_name }} {{ $instructor->last_name }}</h3>
                    <span class="instructor-category">
                        <i class="fas fa-car"></i> {{ $instructor->category }}
                    </span>
                    
                    <div class="instructor-info">
                        <div class="info-item">
                            <i class="fas fa-phone"></i> {{ $instructor->phone_number }}
                        </div>
                        <div class="info-item">
                            <i class="fas fa-envelope"></i> {{ $instructor->email }}
                        </div>
                        <div class="info-item">
                            <i class="fas fa-star"></i> Стаж: {{ $instructor->experience_years }} лет
                        </div>
                    </div>
                    
                    <div class="details-content collapse" id="details-{{ $instructor->id }}">
                        <ul class="details-list">
                            <li class="details-item">
                                <strong><i class="fas fa-id-card"></i>Лицензия:</strong>
                                <span>{{ $instructor->license_number }}</span>
                            </li>
                            <li class="details-item">
                                <strong><i class="fas fa-car"></i>Машина:</strong>
                                <span>{{ $instructor->car_make }} {{ $instructor->car_model }} ({{ $instructor->car_year }})</span>
                            </li>
                            <li class="details-item">
                                <strong><i class="fas fa-palette"></i>Цвет:</strong>
                                <span>{{ $instructor->car_color }}</span>
                            </li>
                            <li class="details-item">
                                <strong><i class="fas fa-id-badge"></i>Номер:</strong>
                                <span>{{ $instructor->car_license_plate }}</span>
                            </li>
                            <li class="details-item">
                                <strong><i class="fas fa-info-circle"></i>Описание:</strong>
                                <span>{{ $instructor->bio ?? 'Опытный инструктор с индивидуальным подходом к каждому ученику.' }}</span>
                            </li>
                            <li class="details-item">
                                <strong><i class="fas fa-check-circle"></i>Статус:</strong>
                                <span class="status-badge {{ $instructor->is_active ? 'active' : '' }}">
                                    {{ $instructor->is_active ? 'Активен' : 'Не активен' }}
                                </span>
                            </li>
                        </ul>
                    </div>

                    <button class="toggle-btn" 
                            type="button" 
                            data-target="#details-{{ $instructor->id }}">
                        <i class="fas fa-chevron-down"></i>Подробнее
                    </button>
                </div>
            </div>
        @endforeach
    
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const toggleButtons = document.querySelectorAll('.toggle-btn');
    
    toggleButtons.forEach(button => {
        button.addEventListener('click', function() {
            const targetId = this.getAttribute('data-target');
            const target = document.querySelector(targetId);
            const icon = this.querySelector('i');
            
            if (target.classList.contains('show')) {
                target.classList.remove('show');
                icon.classList.remove('fa-chevron-up');
                icon.classList.add('fa-chevron-down');
                this.innerHTML = '<i class="fas fa-chevron-down"></i>Подробнее';
            } else {
                target.classList.add('show');
                icon.classList.remove('fa-chevron-down');
                icon.classList.add('fa-chevron-up');
                this.innerHTML = '<i class="fas fa-chevron-up"></i>Скрыть';
            }
        });
    });
});
</script>

@endsection