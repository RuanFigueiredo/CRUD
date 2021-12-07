<h1>oi iaiii</h1>


<form action="{{route('livros.store')}}" method="post">
@csrf

<label>nome do livro<input type="text" name="nome"></label><br>
<label>categoria<input type="text" name="categoria"></label><br>
<label>código<input type="text" name="codigo"></label><br>
<label>autor<input type="text" name="autor"></label><br>
<label>ebook<input type="checkbox" name="ebook"></label><br>
<label>pessoa id<input type="text" name="pessoa_id"></label><br>
<button>salvar</button>



</form>