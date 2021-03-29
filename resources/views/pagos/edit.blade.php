@extends('layouts.main')

@section('contenido')
	<form action="/pagos/{{ $payment->id }}/edit" method="POST" class="form">
		@if ($errors->any())
		  @foreach ($errors->all() as $error)
		    <div class="message-error">
		    	{{ $error }}
		    </div>
		  @endforeach
		@endif
		@csrf
		<input type='text' name='amount' @isset($payment) value="{{ $payment -> amount }}" @endisset placeholder="Ingresa el monto"/>
		<input type='date' name='fecha' @isset($payment) value="{{ $payment -> date }}" @endisset placeholder="Selecciona fecha" />
		<button type="submit">Guardar</button>
	</form>
@endsection