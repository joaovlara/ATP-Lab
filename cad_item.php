<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Emprestar Itens</title> <!--Client Side-->
    <link href="CSS/caditem.css" rel="stylesheet">

</head>
    <body>
        <header>O QUE VOCÊ QUER EMPRESTAR?</header>
        <section>
            <nav>
                <ul id="menu">
                    <li><a href="inicio.php">Inicio</a></li>
                    <li><a href="cad_item.php" class="active">Emprestar Item</a></li>
                    <li><a href="relatorio.php">Relatórios</a></a></li>
                    <li><a href="usuario.php">Usuário</a></li>
                    <li><a href="login.html">Sair</a></li>
                </ul>
            </nav>



        <article>
            <form action="caditem.php" method="post" enctype="multipart/form-data">

                <label for="Titulo">Titulo</label>
            <input type="text" name="Titulo" placeholder="Titulo"/>

<br><br><br>             
            <input type="file" name="foto" id="idFoto"/>
<br><br><br>
            <label for="textarea">Descrição</label>
          <textarea id="descr" name="descr" placeholder="Descreva o item..." style="height:200px"></textarea>
    
           <label for="data_dev">Data de devolução:</label> 
        <input type="date" name="data_dev" />

        
        <input type="submit" value="Salvar"/>
            
            </form>
        </article>
        </section>       
    </body>
</html>