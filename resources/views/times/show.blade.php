<x-layout titulo='Visualizar Times'>
<a href="{{ route('times.index') }}">Voltar</a>
    <h1>Visualizar Times</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Sede</th>
                <th>Cor</th>
                <th>Fundação</th>
                <th>Ações</th>
            </tr>
        </thead>
            <tbody>
                    <tr>
                        <td>{{$time->id}}</td>
                        <td>{{$time->nome}}</td>
                        <td>{{$time->sede}}</td>
                        <td>{{$time->cor}}</td>
                        <td>{{$time->dt_fund}}</td>
                        <td style="display: flex"> 
                            <button type="button" style="background-color: lightblue;">
                            <a href=" {{ route('times.edit', $time->id) }}">Editar</a>
                            </button>&nbsp
                            <form action="{{ route('times.destroy', $time->id) }}" method="POST">
                            @csrf 
                            @method('DELETE')
                            <button type="submit" style="background-color: lightcoral;">Excluir</button>
                            </form>
                       </td>
                    </tr>
            </tbody>
                        
    </table>

</x-layout>