@extends('component.layouts')

@section('content')
<div class="thanks-container">
    <h1>Спасибо за вашу заявку!</h1>
    <p>Мы получили ваши данные и скоро свяжемся с вами для уточнения деталей.</p>
    <a href="/" class="home-link">Вернуться на главную</a>
</div>

<style>
.thanks-container {
    max-width: 600px;
    margin: 60px auto;
    text-align: center;
    padding: 30px;
    background: #f9f9f9;
    border-radius: 8px;
}

.thanks-container h1 {
    color: #42b983;
    margin-bottom: 20px;
}

.thanks-container p {
    font-size: 18px;
    margin-bottom: 30px;
}

.home-link {
    display: inline-block;
    padding: 12px 24px;
    background: #42b983;
    color: white;
    text-decoration: none;
    border-radius: 4px;
    transition: background-color 0.3s;
}

.home-link:hover {
    background-color: #3aa876;
}
</style>
@endsection