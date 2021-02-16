@extends('layouts/plantilla');
@section('cuerpo')
<main class="h-75 d-flex justify-content-center align-items-center">
  <div class="bg-light border border-secondary p-5 d-flex flex-column justify-content-around  ">
    <h1>Envia aquí tu sugeréncia...</h1>
    <form class="d-flex flex-column align-items-center " method="POST" action="{{ route('mail') }}">
      @csrf
      <div class="form-group m-2">
        <input class="form-control" name="asunto" placeholder="Asunto...">
        {!! $errors->first('asunto','<small>:message</small>') !!}
      </div>
      <div class="form-group m-2">
        <textarea class="form-control" name="mensaje" placeholder="Mensaje..."></textarea>
        {!! $errors->first('mensaje','<small>:message</small>') !!}
      </div>
      <button class="btn btn-dark">Enviar</button>
    </form>
  </div>
</main>

@endsection
