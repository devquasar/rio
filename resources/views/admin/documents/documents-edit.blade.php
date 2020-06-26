@extends('admin.layouts.app')

@section('title')Редактирование документа @endsection

@section('content')
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <h1 class="display-3">Редактирование документа</h1>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                <br />
            @endif
            <form method="post" action="{{ route('documents.update', $document->id) }}" enctype="multipart/form-data">
                @method('PATCH')
                @csrf
                <div class="form-group">
                    <label for="name">Название документа</label>
                    <input type="text" class="form-control" name="name" value={{ $document->name }}/>
                </div>
                <label for="href">Документ: </label>
                <div class="form-group">
                    <label class="btn btn btn-outline-dark btn-file">
                        Загрузить <input type="file" style="display: none;" name="href" id="href" class="form-control">
                    </label>
                </div>
                <button type="submit" class="btn btn-primary">Обновить</button>
            </form>
        </div>
    </div>
@endsection
