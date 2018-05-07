@extends('layouts.app')

@section('content')
 <div class="row">
     <div class="col-md-8 col-md-offset-2">
         <h1 class="text-center text-muted">{{__('Foros')}}</h1>
         @forelse($forums as $forum)
             <div class="panel panel-default">
                 <div class="panel-heading panel-heading-forum">
                     <a href="/forums/{{$forum->id}}">{{$forum->name}}</a>
                     <span class="pull-right">Post:{{$forum->posts->count()}} Respuestas:{{$forum->replies->count()}}</span>
                 </div>
                 <div class="panel-body">
                     {{$forum->description}}
                 </div>

             </div>


         @empty
             <div class="alert-danger">{{__('No hay Foros')}}</div>
         @endforelse

         {{$forums->links()}}
         <h2>Añadir un nuevo Foro</h2>

         <hr>
         @include('partials.errors')
         <form method="post" action="/forums">
             {{csrf_field()}}
             <div class="form-group">
                 <label for="name" class="col-md-12 control-label">{{__("Nombre")}}</label>
                 <input id="name" class="form-control" name="nombre" value="{{old('nombre')}}">


             </div>
             <div class="form-group">
                 <label for="descripcion"class="col-md-12 control-label">{{__("Descripcion")}}</label>
                 <textarea id="descripcion" class="form-control" name="descripcion" value="{{old('descripcion')}}"></textarea>
             </div>
             <button type="submit" name="enviar" class="btn btn-default">Crear Foro</button>

         </form>
     </div>


 </div>
@endsection