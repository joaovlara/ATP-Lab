<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>login</title>
    <body>
        <form action="inicio.php" method="post">

                <style>
                    body{        
                        font-family: Arial, Helvetica, sans-serif;
                        background-color: #cecece;
                        background-size: 100%;
                        }
                    div{
                        background-color: rgb(27, 27, 27)	;
                        transform: translate(-50%,-50%);
                        position: absolute;
                        top: 50%;
                        left: 50%;
                        padding: 100px;    
                        color: #fff;
                        }
                    input{
                        padding: 15px;
                        border: none;
                        outline: none;
                        font-size: 25px;
                        }
                    button{
                        background-color: 	#375faa;
                        border: none;
                        padding: 15px;
                        width: 100%;            
                        color: white;
                        font-size: 25px;            
                        }
                    button:hover{
                        background-color: #27467e;
                        cursor: pointer;
                        }
                </style>
            </head>
            <body>
                <div>    
                    <input type="text" name="Login" placeholder="Login">
                    <br><br>
                    <input type="password" name="Senha" placeholder="Senha">
                    <br><br>
                    <button>Entrar</button>
      
                </div>
        </form>           
            </body>
            </html>