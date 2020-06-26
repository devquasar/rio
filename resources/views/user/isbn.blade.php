@extends('layouts.app')

@section('title-block')ISBN @endsection

@section('content')
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <h1 class="display-3">Генерация заявления isbn</h1>
            <form method="post" action="{{ route('isbn.form.submit') }}">
                @csrf
                <div class="form-group">
                    <label for="title">Название</label>
                    <input type="text" class="form-control" name="title"/>
                </div>
                <div class="form-group">
                    <label for="author">Автор</label>
                    <input type="text" class="form-control" name="author"/>
                </div>
                <div class="form-group">
                    <label for="address">Адрес</label>
                    <input type="text" class="form-control" name="address"/>
                </div>
                <div class="form-group">
                    <label for="pages">Кол-во страниц</label>
                    <input type="number" id="page" name="pages"
                           min="1" class="form-control">
                </div>
                <div class="form-group">
                    <label for="count">Кол-во книг</label>
                    <input type="number" id="page" name="count"
                           min="1" class="form-control">
                </div>
                <div class="form-group">
                    <label for="date">Дата заполнения</label>
                    <input type="date" name="date"
                           placeholder="Дата издания" id="date" class="form-control">
                </div>

                <button type="submit" class="btn btn btn-outline-primary"><i class="fa fa-plus"></i> Добавить</button>
            </form>
        </div>
    </div>
@endsection
