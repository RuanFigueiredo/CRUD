<h1>show show show</h1>


<form action="{{route('livros.update', $livro->id)}}" method="post">
@csrf

@method('PUT')

<label>nome do livro<input type="text" name="nome" value="{{$livro->nome}}"></label><br>
<label>categoria<input type="text" name="categoria"  value="{{$livro->categoria}}"></label><br>
<label>código<input type="text" name="codigo"  value="{{$livro->codigo}}"></label><br>
<label>autor<input type="text" name="autor"  value="{{$livro->autor}}"></label><br>
<label>ebook<input type="checkbox" name="ebook" {{$livro->ebook ? 'checked' : ''}}></label><br>
<label>pessoa id<input type="text" name="pessoa_id"  value="{{$livro->pessoa_id}}"></label><br>
<button>atualizar</button>




</form>



<form action="{{route('livros.destroy', $livro->id)}}" method="post">
@csrf

@method('DELETE')


<button>deletar</button>



</form>