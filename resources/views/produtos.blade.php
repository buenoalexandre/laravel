<h2>Página de Produtos</h2>

<hr>

<!-- <form method="get">  metodo get mostra as informações dos campos-->
<form method="post">
    @csrf

    <b>Produto</b>
    <input type="text" name="produto"><br><br>
    
    <b>Preço</b>
    <input type="text" name="preco"><br><br>

    <b>Categoria</b>
    <input type="text" name="categoria"><br><br>

    <input type="submit" value="Salvar">

</form>

<hr>

<label>Produto: {{$produto}}</label><br>
<label>Preço: {{$preco}}</label><br>
<label>Categoria: {{$categoria}}</label><br>