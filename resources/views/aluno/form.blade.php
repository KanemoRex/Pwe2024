@extends('base')
@section('conteudo')

<form action="{{route("aluno.store")}}" method="">

    @csrf

    <label for="">Nome</label><br>
    <input type="text" name="nome"><br>

    <label for="">Telefone</label><br>
    <input type="text" name="telefone"><br>

    <label for="">CPF</label><br>
    <input type="text" name="cpf"><br>

    <button type="submit">Slavar</button>
    <button><a href="{{url('aluno')}}">Voltar</a><button>

    </form>


@stop
