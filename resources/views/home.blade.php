@extends('layout')

@section('content')
    <a href="/create">Criar Processo</a>

    <div class="pb-3">
        <form action="/">
            <div class="input-group input-group-lg">
                <input type="text" class="form-control" id="search" name="search" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
                <div class="input-group-prepend p-1">
                    <a href="#">
                        <button style="height: 40px" type="submit" class="btn btn-primary">Buscar</button>
                    </a>
                    <a href="/">
                        <button type="button" class="btn btn-danger">Limpar</button>
                    </a>
                </div>
            </div>
        </form>
    </div>

    <div class="bd-example">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Pasta</th>
                <th scope="col">Nº Processo</th>
                <th scope="col">Autor</th>
                <th scope="col">Réu</th>
                <th scope="col">Vara</th>
                <th scope="col text-center">Ação</th>
                <th scope="col">Andamento</th>
                <th scope="col"><ion-icon name="folder-open-outline"></ion-icon></th>
            </tr>
            </thead>
            <tbody>
            @foreach($querys as $query)
                <tr>
                    <td>{{ $query->id }}</td>
                    <td>{{ $query->pasta }}</td>
                    <td>{{ $query->processo }}</td>
                    <td>{{ $query->autor }}</td>
                    <td>{{ $query->reu }}</td>
                    <td>{{ $query->vara }}</td>
                    <td >{{ $query->action() }}</td>
                    <td>{{ $query->andamento }}</td>
                    <td>
                        @if($query->folder)
                            <a target="_blank" href="/storage/{{ $query->folder }}"><ion-icon style="color: blue; cursor: pointer"  name="folder-open-outline"></ion-icon></a>

                        @else
                            <ion-icon style="color: red" name="lock-closed-outline"></ion-icon>
                        @endif
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
