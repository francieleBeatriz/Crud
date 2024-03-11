<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
    <link rel="stylesheet" href="styles/cadastro.css">
</head>
<body>
<h1>Cadastrar Usuário</h1>
    <form method="POST" action="cadastrar_action.php" >
            <label for="nome">
                Nome <input type="text" name="nome" id="nome"/>
            </label>
            <label for="email">
                Email <input type="email" name="email" id="email"/>
            </label>

            <input type="submit" value="Salvar"
            id="btnSalvar">

        <div class="erro">
            <?php
                if(isset($_GET["erro"]) && $_GET["erro"] == 1){
                    echo'Email já cadastrado. Digite um email diferente.';
                }
                else if(isset($_GET["erro"]) && $_GET["erro"] == 2){
                    echo'Nome ou Email não preenchidos. Preencha corretamente os campos.';
                }
            ?>
        </div>
    </form>
</body>
</html>

