@extends('component.layouts')

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-md-4">
            @include('student.partials.profile_card')
        </div>
        
        <div class="col-md-8">
            <div class="card mb-4">
                <div class="card-header">Ближайшие занятия</div>
                <div class="card-body">
                    @if($upcomingLessons->count())
                        <ul class="list-group">
                            @foreach($upcomingLessons as $lesson)
                                <li class="list-group-item">
                                    <strong>{{ $lesson->date->format('d.m.Y H:i') }}</strong> - 
                                    {{ $lesson->topic }}
                                    <span class="badge bg-primary float-end">
                                        {{ $lesson->type }}
                                    </span>
                                </li>
                            @endforeach
                        </ul>
                    @else
                        <div class="alert alert-info">
                            Нет запланированных занятий
                        </div>
                    @endif
                    <a href="{{ route('student.schedule') }}" class="btn btn-sm btn-outline-primary mt-3">
                        Полное расписание
                    </a>
                </div>
            </div>
            
            <div class="card">
                <div class="card-header">Быстрые действия</div>
                <div class="card-body">
                    <div class="d-grid gap-2 d-md-flex">
                        <a href="{{ route('student.profile') }}" class="btn btn-outline-secondary">
                            Редактировать профиль
                        </a>
                        <a href="{{ route('student.progress') }}" class="btn btn-outline-secondary">
                            Мои успехи
                        </a>
                        <a href="{{ route('student.payments') }}" class="btn btn-outline-secondary">
                            Платежи
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection