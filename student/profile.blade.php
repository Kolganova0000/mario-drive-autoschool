@extends('component.layouts')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Редактирование профиля</div>
                
                <div class="card-body">
                    <form method="POST" action="{{ route('student.profile.update') }}">
                        @csrf
                        @method('PUT')
                        
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">ФИО</label>
                            <div class="col-md-6">
                                <input id="name" type="text" 
                                       class="form-control @error('name') is-invalid @enderror" 
                                       name="name" value="{{ old('name', $student->name) }}" required>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">Email</label>
                            <div class="col-md-6">
                                <input id="email" type="email" 
                                       class="form-control" 
                                       value="{{ $student->email }}" disabled>
                                <small class="text-muted">Для изменения email обратитесь к администратору</small>
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <label for="phone" class="col-md-4 col-form-label text-md-end">Телефон</label>
                            <div class="col-md-6">
                                <input id="phone" type="text" 
                                       class="form-control @error('phone') is-invalid @enderror" 
                                       name="phone" value="{{ old('phone', $student->phone) }}" required>
                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <label for="birth_date" class="col-md-4 col-form-label text-md-end">Дата рождения</label>
                            <div class="col-md-6">
                                <input id="birth_date" type="date" 
                                       class="form-control @error('birth_date') is-invalid @enderror" 
                                       name="birth_date" value="{{ old('birth_date', $student->birth_date->format('Y-m-d')) }}" required>
                                @error('birth_date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">Новый пароль</label>
                            <div class="col-md-6">
                                <input id="password" type="password" 
                                       class="form-control @error('password') is-invalid @enderror" 
                                       name="password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">Подтверждение пароля</label>
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" 
                                       class="form-control" 
                                       name="password_confirmation">
                            </div>
                        </div>
                        
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Сохранить изменения
                                </button>
                                <a href="{{ route('student.dashboard') }}" class="btn btn-link">
                                    Отмена
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection