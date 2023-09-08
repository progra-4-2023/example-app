
@extends('my-layout.my-app')
@section('title', 'Mi página de pruebas')
@section('sidebar')
    @include('my-layout.my-complex-menu', ['status' => 'failed']) {{-- datos adicionales --}}
@endsection

        
@section('content')

        <p>Contador de session: {{$session_counter}}</p>
        <p>Contador de cache: {{$cache_counter}}</p>
        {{$texto}}
        <form method="GET">
            @csrf
            <input type="checkbox"
                name="active"
                value="active"
                @checked(old('active', true)) />
            <input type="submit"/>
        </form>
        <br/>
        <a href="{{route('mi-controller', ['texto' => 'hola-mundo'])}}"> ir a hola mundo </a> <br/>

        @forelse ($records as $record)
            @if ($loop->first)
                <ul>
            @endif

            <li>{{ $record }}</li>
            @if ($loop->last)
            </ul>
            @endif
        @empty    {{-- si no hay records se imprime lo siguiente: --}}
            <p>No users</p>
        @endforelse

        <br/>

        @php
            $isActive = false;
            $hasError = false;
        @endphp
        
        <span @class([
            'p-4',
            'font-bold' => $isActive,
            'text-gray-500' => ! $isActive,
            'bg-red-50' => $hasError,
        ])>Un mensaje</span><br/>
        <span class="p-4 {!! $isActive?'font-bold':'text-gray-500'!!}"> Otro mensaje</span>
@endsection