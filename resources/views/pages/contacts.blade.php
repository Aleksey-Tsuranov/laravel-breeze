@extends('layouts.app')

@section('title', 'Контакты')

@section('content')
    <h1>Контакты</h1>
    <div class="contacts-content">
        <div class="contact">
            <img src="{{ asset('images/con-1.jpg') }}" alt="Контакт">
            <h2>Бобров Глеб Фёдорович</h2>
            <p>Директор</p>
        </div>
        <div class="contact">
            <img src="{{ asset('images/con-2.jpg') }}" alt="Контакт">
            <h2>Тихомирова Ангелина Назаровна</h2>
            <p>Завуч I</p>
        </div>
        <div class="contact">
            <img src="{{ asset('images/con-3.jpg') }}" alt="Контакт">
            <h2>Власов Павел Владимирович</h2>
            <p>Физорг</p>
        </div>
        <div class="contact">
            <img src="{{ asset('images/con-4.jpg') }}" alt="Контакт">
            <h2>Козлов Роберт Глебович</h2>
            <p>Завуч II</p>
        </div>
        <div class="contact">
            <img src="{{ asset('images/con-5.jpg') }}" alt="Контакт">
            <h2>Лукин Александр Кириллович</h2>
            <p>Завуч III</p>
        </div>
        <div class="contact">
            <img src="{{ asset('images/con-6.jpg') }}" alt="Контакт">
            <h2>Захарова Виктория Данииловна</h2>
            <p>Психолог</p>
        </div>
    </div>
@endsection