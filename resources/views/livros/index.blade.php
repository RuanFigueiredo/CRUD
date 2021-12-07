<a href="{{ route('livros.create') }}"> + novo livro</a>


@foreach ($livros as $livro)
    <p>  {{ $livro->nome }}</p>
@endforeach