<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">

    <title>Usuário</title> <!-- Usar label -->
    <link href="CSS/usuario.css" rel="stylesheet">

</head>
<body>

    <header>Usuario</header>
</head>
    <body>
        <section>
            <nav>
                <ul id="menu">
                    <li><a href="inicio.html">Inicio</a></li>
                    <li><a href="cad_item.html">Emprestar Item</a></li>
                    <li><a href="relatorio.html">Relatórios</a></a></li>
                    <li><a href="usuario.html" class="active">Usuário</a></li>
                    <li><a href="login.html">Sair</a></li>
                </ul>
            </nav>
    


        <article>    
            <h1>Gerencie seus dados</h1>       
            <form action="#" method="post">
            Nome de Usuário:<input type="text" name="Nome" /><br><br>
            Login:<!-- Dados do PHP--><br><br>
            Senha:<input type= "password" name="Senha" /><br><br>
            Telefone:<input type="text" name="Telefone" /><br><br> <!--usar type tel-->
            <input type="submit" value="Salvar"> <br><br>

            Sua Atividade (emprestimos e devoluções com datas)  
            </form>
         </article>
    </section>
    
  
</body>
</html>