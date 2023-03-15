<x-layout titulo='Cadstrar Times'>
<a href="{{ route('times.index') }}">Listagem</a>
    <h1>Cadastrar Times</h1>

    <form action="{{ route('times.store') }}" method="post">
        @csrf
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome">

        <label for="sede">Cidade Sede:</label>
        <input type="text" name="sede" id="sede">

        <label for="cor">Cor uniforme:</label>
        <input type="text" name="cor" id="cor">

        <label for="dt_fund">data Fundação:</label>
        <input type="date" name="dt_fund" id="dt_fund">

        <button type="submit">Cadastrar</button>
    </form>
    
</x-layout>