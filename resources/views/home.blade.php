@extends('layouts.app')

@section('title')Главная страница@endsection

@section('content')
    <div class="container">
        <div class="jumbotron p-4 p-md-5 text-white rounded bg-dark">
            <div class="col-md-6 px-0">
                <h1 class="display-4 font-italic"><p>Добро пожаловать.</p><p>Новоиспеченный портал РИО</p></h1>
                <p class="lead my-3">Здесь вы можетесь ознакомиться с публикациями авторов ЧГУ им. И.Н.Ульянова а также найти необходимую информацию касающуюся деятельности отдела.</p>
                <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Ознакомиться с разделом публикации</a></p>
            </div>
        </div>
        <h2 class="font-italic">Последние публикации</h2>
        <div class="row mb-4">
            @foreach ($last as $record)
                <div class="col-md-6">
                    <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-100 position-relative">
                        <div class="col p-4 d-flex flex-column position-static">
                            <h3 class="mb-0">{{ $record->name }}</h3>
                            <p><small>{{ $record->author }}</small></p>
                            <div class="mb-1 text-muted">{{ date('M d Y', strtotime($record->date)) }}</div>
                            <p class="card-text mb-auto">{{ mb_strimwidth($record->description, 0, 100, "...") }}</p>
                            <a href="#" class="stretched-link">Подробнее</a>
                        </div>
                        <div class="col-auto d-none d-lg-block">
                            <img src="{{ asset('storage/'.$record->image) }}" alt="image" width="200" height="230">
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <main role="main" class="container">
        <div class="row">
            <div class="col-md-8 blog-main">
                <h3 class="pb-4 mb-4 font-italic border-bottom">
                    Новости из-под нашего пера:
                </h3>

                @foreach($news as $oneNews)
                    @include('inc.news-card', compact('oneNews'))
                @endforeach
            </div>

            <!-- /.blog-main -->
            <aside class="col-md-4 blog-sidebar">
                <div class="p-4">
                    <h4 class="font-italic">Нормативные документы</h4>
                    <ol class="list-unstyled mb-0">
                        @foreach($documents as $document)
                            <li><a href="{{ route('documents.download', $document->id) }}">{{ $document->name }}</a></li>
                        @endforeach
                    </ol>
                </div>
                <div class="p-4">
                    <h4 class="font-italic">Веб ресурсы</h4>
                    <ol class="list-unstyled">
                        <li><a href="#">CHUVSU</a></li>
                        <li><a href="https://edu.gov.ru/">EDU GOV</a></li>
                        <li><a href="#">Facebook</a></li>
                    </ol>
                </div>
                <div class="p-4 mb-3 bg-light rounded">
                    <h4 class="font-italic">Случайный факт о деятельности</h4>
                    <p class="mb-0">{{ $fact->text }}</p>
                </div>
            </aside><!-- /.blog-sidebar -->

        </div><!-- /.row -->

    </main>
@endsection
