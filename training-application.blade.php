@extends('component.layouts')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<!-- Герой секция -->
<section class="hero-section">
    <div class="hero-content">
        <div class="hero-text">
            <h1>Заявка на обучение</h1>
            <p class="hero-subtitle">Оставьте свои данные и мы свяжемся с вами для записи</p>
        </div>
        <div class="hero-decoration">
            <div class="decor-circle decor-circle-1"></div>
            <div class="decor-circle decor-circle-2"></div>
            <div class="decor-line"></div>
        </div>
    </div>
</section>

<!-- Форма заявки -->
<section class="application-section">
    <div class="container">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
                <button type="button" class="alert-close">&times;</button>
            </div>
        @endif

        <div class="application-card">
            <div class="card-header">
                <h3 class="card-title">Форма заявки</h3>
            </div>
            
            <form method="POST" action="{{ route('application.store') }}" class="application-form">
                @csrf
                
                <div class="form-group">
                    <label for="full_name">
                        <i class="fas fa-user"></i> ФИО*
                    </label>
                    <input type="text" id="full_name" name="full_name" required>
                </div>
                
                <div class="form-group">
                    <label for="phone">
                        <i class="fas fa-phone"></i> Телефон*
                    </label>
                    <input type="tel" id="phone" name="phone" required>
                </div>
                
                <div class="form-group">
                    <label for="email">
                        <i class="fas fa-envelope"></i> Email
                    </label>
                    <input type="email" id="email" name="email">
                </div>
                
                <div class="form-group">
                    <label for="category">
                        <i class="fas fa-car"></i> Категория прав
                    </label>
                    <select id="category" name="category">
                        <option value="">Выберите категорию</option>
                        <option value="A">A - Мотоциклы</option>
                        <option value="B">B - Легковые автомобили</option>
                        <option value="C">C - Грузовые автомобили</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="notes">
                        <i class="fas fa-comment"></i> Дополнительная информация
                    </label>
                    <textarea id="notes" name="notes" rows="4"></textarea>
                </div>
                
                <button type="submit" class="submit-btn">
                    <i class="fas fa-paper-plane"></i> Отправить заявку
                </button>
            </form>
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

/* Контейнер */
.container {
    width: 100%;
    max-width: 800px;
    margin: 0 auto;
    padding: 0 20px;
    box-sizing: border-box;
}

/* Карточка заявки */
.application-card {
    background: var(--white);
    border-radius: var(--radius);
    overflow: hidden;
    box-shadow: var(--shadow);
    margin-bottom: 60px;
}

/* Шапка карточки */
.card-header {
    padding: 1.5rem;
    background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
    color: var(--white);
    text-align: center;
}

.card-title {
    font-size: 1.5rem;
    font-weight: 600;
    margin: 0;
}

/* Форма заявки */
.application-form {
    padding: 2rem;
}

.form-group {
    margin-bottom: 1.5rem;
}

.form-group label {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    margin-bottom: 0.75rem;
    font-weight: 500;
    color: var(--text);
}

.form-group label i {
    color: var(--primary);
    width: 20px;
    text-align: center;
}

.form-group input,
.form-group select,
.form-group textarea {
    width: 100%;
    padding: 0.75rem 1rem;
    border: 1px solid #ddd;
    border-radius: var(--radius);
    font-size: 1rem;
    transition: border-color 0.3s;
}

.form-group input:focus,
.form-group select:focus,
.form-group textarea:focus {
    outline: none;
    border-color: var(--primary);
}

.form-group textarea {
    resize: vertical;
    min-height: 120px;
}

/* Кнопка отправки */
.submit-btn {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 0.5rem;
    width: 100%;
    padding: 1rem;
    background: var(--primary);
    color: white;
    border: none;
    border-radius: var(--radius);
    font-size: 1rem;
    font-weight: 500;
    cursor: pointer;
    transition: all 0.3s;
}

.submit-btn:hover {
    background: var(--primary-dark);
    transform: translateY(-2px);
}

.submit-btn i {
    font-size: 1rem;
}

/* Уведомления */
.alert {
    padding: 1rem;
    margin-bottom: 2rem;
    border-radius: var(--radius);
    position: relative;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.alert-success {
    background-color: #d1e7dd;
    color: #0f5132;
    border: 1px solid #badbcc;
}

.alert-close {
    background: none;
    border: none;
    font-size: 1.2rem;
    cursor: pointer;
    color: inherit;
    padding: 0;
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
    
    .application-form {
        padding: 1.5rem;
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
    
    .card-title {
        font-size: 1.3rem;
    }
    
    .form-group label {
        font-size: 0.95rem;
    }
}
</style>

<script>
// Закрытие уведомлений
document.querySelectorAll('.alert-close').forEach(button => {
    button.addEventListener('click', () => {
        button.closest('.alert').style.display = 'none';
    });
});
</script>
@endsection