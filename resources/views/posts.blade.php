@extends('layouts.app')

@section('content')
    <div class="container">
    <div class="row">
        <div class="col">
            @foreach($posts as $post)
                <div class="card mb-3 ">
                    <div class="card-header bg-info">
                        {{$post->titulo}}
                    </div>
                    <div class="card-body">
                        {{$post->contenido}}

                        <div class="list-group mt-3">
                            @foreach($post->comentarios as $comentario)
                                <div class="list-group-item">
                                    <p>{{$comentario->contenido}}</p>
                                    <small>{{$comentario->createdAt}}</small>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
