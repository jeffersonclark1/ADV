@extends('layout')

@section('content')

    <h2>Criar Processo</h2>

    <form action="/store" method="post" enctype="multipart/form-data">
        @csrf
        <div class="input-group input-group-sm mb-3">
            <input type="text" id="pasta" name="pasta" placeholder="pasta" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
        </div>
        <div class="input-group input-group-sm mb-3">
            <input type="text" id="processo" name="processo"  placeholder="processo" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
        </div>
        <div class="input-group input-group-sm mb-3">
            <input type="text" id="autor" name="autor" placeholder="autor" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
        </div>
        <div class="input-group input-group-sm mb-3">
            <input type="text" id="reu" name="reu" placeholder="reu" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
        </div>
        <div class="input-group input-group-sm mb-3">
            <input type="text" id="vara" name="vara"  placeholder="vara" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
        </div>

        <div class="input-group input-group-sm mb-3">
            <select  class="form-control"  name="acao" id="acao">
                <option value="0">Trabalhista</option>
                <option value="1">Civil</option>
            </select>
        </div>

        <div class="input-group mb-3">
            <textarea class="form-control" id="andamento" name="andamento" aria-label="With textarea"></textarea>
        </div>

        <div class="input-group mb-3">

            <div class="custom-file">
                <input type="file" class="custom-file-input" id="file" name="file" aria-describedby="inputGroupFileAddon01">
                <label class="custom-file-label" for="file">Anexar arquivo</label>
            </div>
        </div>

        <div class="pt-2">
            <button type="submit" class="btn btn-success">Gravar</button>
        </div>

    </form>


@endsection
