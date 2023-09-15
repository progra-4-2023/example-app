@extends('my-layout.my-app')
@section('content')
    <h1>{{ __('messages.welcome') }}</h1>
    <p>
    {{ __('messages.please_fill', ['name' => $name]) }}
</p>
    <form method="POST">

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        @csrf
        <label for="nombre">Nombre:</label> 
        <input type="text" id="nombre" name="nombre" value="{{old('nombre')}}" class="@error('nombre') is-invalid @enderror"><br/>
        @error('nombre')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <label for="email">Email:</label> <input type="text" id="email" name="email" value="{{old('email')}}"><br/>
        <input type="checkbox" id="publicidad" name="publicidad" @checked(old('publicidad'))><label for="publicidad">Recibir Publicidad</label><br/>
        <label for="mensaje">Mensaje:</label> <br/>
        <textarea id="mensaje" name="mensaje"> {{old('mensaje')}}</textarea><br/>
        <input type="submit" value="Enviar"/>
    </form>
@endsection
