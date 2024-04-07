<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar Usuario</title>
    <link href="CSS/cadu.css" rel="stylesheet">
</head>
    <body>
        <header>CADASTRAR USUARIOS</header>
       
        <section>
            <nav>
                <ul id="menu">
                    <li><a href="inicio.php">Inicio</a></li>
                    <li><a href="cad_item.php">Emprestar Item</a></li>
                    <li><a href="relatorio.php">Relatórios</a></a></li>
                    <li><a href="usuario.php">Usuário</a></li>
                    <li><a href="login.php">Sair</a></li>
                </ul>
            </nav>      

        <article>            
            <form action="#" method="post">

                <label for="Nome">Nome</label>
                <input type="text" name="Nome" placeholder="Nome"/> 


                <label for="Login">Login</label>
                <input type="text" name="Login" placeholder="Login"/>


                <label for="Senha">Senha</label>
                <input type="password" name="Senha" placeholder="Senha"/>


                <label for="Telefone">Telefone</label>
                <input type="tel" name="Telefone" placeholder="Telefone"/>


                <input type="submit" value="Salvar"/>
           
            </form>
        </article>
        </section>
    </body>
</html>