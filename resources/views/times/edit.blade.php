<x-layout titulo='Editar Times'>

<a href="{{ route('times.index') }}">Voltar</a>

    <h1>Editar Times</h1>

    <form action="{{ route('times.update', $time->id) }}" method="post">
        @csrf
        @method('PUT')
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" value="{{$time->nome}}">

        <label for="sede">Cidade Sede:</label>
        <input type="text" name="sede" id="sede" value="{{$time->sede}}">

        <label for="cor">Cor uniforme:</label>
        <input type="text" name="cor" id="cor" value="{{$time->cor}}">

        <label for="dt_fund">data Fundação:</label>
        <input type="date" name="dt_fund" id="dt_fund" value="{{$time->dt_fund}}">

        <button type="submit">Salvar</button>
   
</x-layout>