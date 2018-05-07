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

                <h3 class="text-muted">{{__('Añadir Nuevo POST al Foro ')}}</h3>
                @include('partials.errors')
                <form method="post" action="/posts">
                    {{csrf_field()}}

                    <input type="hidden"  name="forum_id" value="{{$forum->id}}">
                    <div class="form-group">
                        <input type="hidden" name="user_id"value="{{auth()->user()->id}}">
                        <input type="hidden" name="forum_id"value="{{$forum->id}}">
                        <label for="" class="col-md-12 control-label">{{__('Titulo')}}</label>
                        <input id="" class="form-control" name="title" value="{{old('titulo')}}">

                    </div>

                    <div class="form-group">
                        <label for="descripcion" class="col-md-12 control-label">{{__('Descripcion')}}</label>
                        <textarea id="descripcion" class="form-control" name="description" value="{{old('description')}}"></textarea>

                    </div>
                    <button type="submit" class="btn btn-default"name="agregar">Agregar Post</button>
                </form>
            @else
                @include('partials.login_link',['mensaje'=>"Inicia Sesion Para Crear Un post"])

            @endLogged()
        </div>


    </div>
@endsection