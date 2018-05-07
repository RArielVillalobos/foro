@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1 class="text-center text-muted">{{__('Posts')}}</h1>
            @forelse($posts as $post)
                <div class="panel panel-default">
                    <div class="panel-heading panel-heading-post">
                        <a href="/posts/{{$post->id}}">{{$post->title}}</a>
                        <span class="pull-right">{{$post->user->name}}</span>
                    </div>
                    <div class="panel-body">
                        {{$post->description}}
                    </div>

                </div>


            @empty
                <div class="alert-danger">{{__('No hay Post')}}</div>
            @endforelse

            {{$posts->links()}}

            @Logged()
                Esta Identificado
            @else
                @include('partials.login_link',['mensaje'=>"Inicia Sesion Para Crear Un post"])

            @endLogged()
        </div>


    </div>
@endsection