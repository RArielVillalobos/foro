@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1 class="text-center text-muted">{{__('Respuestas')}}</h1>
            <h4>{{__("Auto del Debate")}}: {{$post->user->name}}</h4>
            <a href="/forums/{{$post->forum->id}}" class="btn btn-info pull-right">Volver</a>
            <div class="clearfix"></div>
            <hr>
            @forelse($replies as $reply)
                <div class="panel panel-default">
                    <div class="panel-heading panel-heading-reply">
                        <p>{{__('Respuesta de')}}:{{$reply->user->name}}</p>

                    </div>
                    <div class="panel-body">
                        {{$reply->reply}}
                    </div>

                </div>


            @empty
                <div class="alert-danger">{{__('No hay Respuestas')}}</div>
            @endforelse

            {{$replies->links()}}

            @Logged()
            <h3 class="text-muted">{{__('Añadir respuesta al foro')}}</h3>
            @include('partials.errors')
            <form method="post" action="/replies">
                {{csrf_field()}}
                <input type="hidden" name="post_id" value="{{$post->id}}">
                <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
                <div class="form-group">
                    <label for="reply" class="col-md-12 control-label">Respuesta</label>
                    <textarea id="reply" class="form-control" name="reply"></textarea>
                </div>
                <button type="submit" name="agregarReply" class="btn btn-default">Añadir Respuesta</button>



            </form>


            @else
                @include('partials.login_link',['mensaje'=>"inicia sesion para responder"])

            @endLogged()
        </div>


    </div>
@endsection