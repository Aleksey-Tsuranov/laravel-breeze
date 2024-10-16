@extends('layouts.app')

@section('title', 'О техникуме')

@section('content')
    <h1>Специальности</h1>
    <div class="about-content">
        <div class="about">
            <img src="{{ asset('images/job-1.jpg') }}" alt="Специальность">
            <h2>Химик</h2>
            <p>Что-то связанное с химией</p>
        </div>
        <div class="about">
            <img src="{{ asset('images/job-2.jpg') }}" alt="Специальность">
            <h2>Электрик</h2>
            <p>Что-то связанное с электрикой</p>
        </div>
        <div class="about">
            <img src="{{ asset('images/job-3.jpg') }}" alt="Специальность">
            <h2>Информатик</h2>
            <p>Что-то связанное с компьютерами</p>
        </div>
        <div class="about">
            <img src="{{ asset('images/job-4.jpg') }}" alt="Специальность">
            <h2>Книжник</h2>
            <p>Что-то связанное с бумагой</p>
        </div>
        <div class="about">
            <img src="{{ asset('images/job-5.jpg') }}" alt="Специальность">
            <h2>Механик</h2>
            <p>Что-то связанное с механизмами</p>
        </div>
    </div>
@endsection
