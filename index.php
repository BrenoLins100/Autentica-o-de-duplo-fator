<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/spectre.css/0.4.5/spectre.min.css">
    <title>Dupla autenticação</title>
</head>
<body>

    <div class="container">
        <h1>Cadastrar</h1>

        <div class=" form-group formulario">

        <?php 
            echo "<form action='token.php' method='POST'>";
            echo "<label class='form-label' for='email'>Email</label>";
            echo "<input class='form-input' type='email' name='email' id='email'>";
            echo "<label class='form-label' for='senha'>Senha:</label>";
            echo "<input class='form-input' type='password' name='senha' id='senha'>";

                  $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
                $result = '';
                $codigo = '';
                for ($i = 0; $i < 10; $i++)
                    $result .= $characters[mt_rand(0, 61)];
                    $codigo = $result; 
                    
                    echo " <br> <p>Token de acesso: (copie esse código para validar o acesso)</p> <input class='form-input' type='text' name='codigo' readonly value='$codigo'> <br>";
                    echo "<button class='btn btn-primary' type='submit'>Autenticar</button>";
                    
                    

                    
                echo"</form>";
            ?>
        </div>

    </div>
    
</body>
</html>