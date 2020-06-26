@extends('layouts.app')

@section('title-block')Публикации @endsection

@section('content')
    <h1 class="mb-4">Инструменты для издателя</h1>
    <div class="row">
        <div class="col-md-4">
            <div class="card" style="width: 18rem; height: 22rem;">
                <img src="{{ asset('gost.png') }}" class="card-img-top mb-4" alt="...">
                <div class="card-body">
                    <span class="badge badge-pill badge-info">В разработке</span>
                    <h5 class="card-title">Cоставление ГОСТ ссылок</h5>
                    <p class="card-text">Составление ГОСТ ссылок на литературу на основе заполненной формы.</p>
                    <a href="#" class="btn btn-primary">Попробовать</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" style="width: 18rem; height: 22rem;">
                <img src="{{ asset('gostarray.png') }}" class="card-img-top mb-3" alt="...">
                <div class="card-body">
                    <span class="badge badge-pill badge-info">В разработке</span>
                    <h5 class="card-title">Валидация массива ссылок</h5>
                    <p class="card-text">Валидация массива ГОСТ ссылок на литературу на основе заполненной формы.</p>
                    <a href="#" class="btn btn-primary">Попробовать</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" style="width: 18rem; height: 22rem;">
                <img src="{{ asset('isbn.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <span class="badge badge-pill badge-success">Опробуйте!</span>
                    <h5 class="card-title">Генерация заявления isbn</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="{{ route('isbn.form') }}" class="btn btn-primary">Попробовать</a>
                </div>
            </div>
        </div>
    </div>
@endsection
