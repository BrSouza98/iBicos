<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Celke - Formulario de Contato</title>
    </head>
    <body>
        <h1>Cadastrar Mensagem</h1>
        <form method="POST" action="proc_cad_msg.php">
            <label>Nome: </label>
            <input type="text" name="nome" placeholder="Inserir o nome completo"><br><br>
   
            <label>Telefone: </label>
            <input type="text" name="telefone" placeholder="Assunto da mensagem"><br><br>    

            <label>E-mail: </label>
            <input type="email" name="email" placeholder="Seu melhor e-mail"><br><br>            
                    
            <label>Senha: </label>
            <input type="password"name="senha" rows="3" cols="50"></input><br><br>
            
            <input name="SendCadCont" type="submit" value="Cadastrar">
        </form>
    </body>
</html>
