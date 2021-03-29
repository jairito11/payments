@extends('layouts.main')

@section('contenido')
	<form action="/pagos/create" method="POST" class="form">
		@if ($errors->any())
		  @foreach ($errors->all() as $error)
		    <div class="message-error">
		    	{{ $error }}
		    </div>
		  @endforeach
		@endif
		@csrf
		<input type='text' name='amount' placeholder="Ingresa el monto"/>
		<input type='date' name='fecha' placeholder="Selecciona fecha" />
		<button type="submit">Guardar</button>
	</form>
@endsection