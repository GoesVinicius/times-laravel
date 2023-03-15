<x-layout titulo='Listar Times'>
    <h1>Listar Times</h1>
    @include('components/flash-msg')
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Sede</th>
                <th>Ações</th>
            </tr>
        </thead>
            <tbody>
                @foreach($times as $time)
                    <tr>
                        <td>{{$time->id}}</td>
                        <td>{{$time->nome}}</td>
                        <td>{{$time->sede}}</td>
                        <td> 
                            <button type="button" style="background-color: lightyellow">
                            <a href="{{ route('times.show', $time->id) }}">Ver</a>
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
    </table>
    <a href="{{ route('times.create') }}">Cadastrar</a>
</x-layout>