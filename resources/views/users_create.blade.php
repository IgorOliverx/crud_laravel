@extends('master')


@section('content')


    <h2>Criar</h2>

    @if(session()->has('message'))
        {{session()->get('message')}}
    @endif

    <form action="{{route('users.store')}}" method="post">
        @csrf
        <input type="text" name="name" id="name" placeholder="Seu nome" >
        <input type="email" name="email" id="email" placeholder="Seu email" >
        <input type="password" name="password" id="password" placeholder="Sua Senha" >
        <button type="submit">Criar</button>
    </form>


@endsection
