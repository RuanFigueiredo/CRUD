<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>livro</title>
    <style>
        label{
            float:left;
            display:block;
            width:90px;
        }

    </style>
</head>
<body>
    
    <form action="{{route('salvar_livro') }}" method="post">
        @csrf
        <div><label for ="pessoa_id">pessoa_id</label><input type="text" name="pessoa_id" id="pessoa_id"></div>
        <div><label for ="nome">nome</label><input type="text" name="nome" id="nome"></div>
        <div><label for ="categoria">categoria</label><input type="text" name="categoria" id="categoria"></div>
        <div><label for ="codigo">código</label><input type="text" name="codigo" id="codigo"></div>
        <div><label for ="Autor">autor</label><input type="text" name="Autor" id="Autor"></div>
        <div><label for ="Ebook">Ebook</label><input type="text" name="Ebook" id="Ebook"></div>
        <div><label for ="Tamanho do arquivo">Tamanho do arquivo</label><input type="tamanho_do_arquivo" name="tamanho_do_arquivo" id="tamanho_d0_arquivo"></div>
        <div><label for ="peso">Peso</label><input type="text" name="peso" id="peso"></div>
        
        <button type="submit">salvar</button>
    </form>
    
</body>
</html>