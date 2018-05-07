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
                        {{$post->description}}
                    </div>

                </div>


            @empty
                <div class="alert-danger">{{__('No hay Respuestas')}}</div>
            @endforelse

            {{$replies->links()}}
        </div>


    </div>
@endsection