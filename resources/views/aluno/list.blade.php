@extends('base')
@section('conteudo')

<form action="{{route('aluno.surch')}}" method="post">

    @csrf
/resources/views/aluno/list.@php

@endphp
    <label for="">Nome</label><br>
    <input type="text" name="nome"><br>

    <label for="">Telefone</label><br>
    <input type="text" name="telefone"><br>

    <label for="">CPF</label><br>
    <input type="text" name="cpf"><br>

    <button type="submit">Slavar</button>
    <button><a href="{{url('aluno')}}">Voltar</a><button>

    </form>

    <hr>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Telefone</th>
                <th>CPF</th>
                <th colspan="2">Ações</th>
            </tr>

        </thead>
        <tbody>
            @foreach ($dados as $item)
            <tr>
          <td>{{$item->id}}</td>
          <td>{{$item->nome}}</td>
          <td>{{$item->tlefone}}</td>
          <td>{{$item->cpf}}</td>
          <td>Editar</td>
          <td><a href="{{route('aluno.destroy',$item->id)}}">Excluir</a></td>
            </tr>

            @endforeach

        </tbody>
    </table>

@stop
