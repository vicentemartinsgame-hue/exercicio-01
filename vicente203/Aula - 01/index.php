<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            font-family: Arial, Helvetica, sans-serif;
        }
        h1 {
            font-size: 25px;
        }
        p {
            font-size: 18px;
        }
    </style>
</head>
<body>
    <h1>
        <?php
            $titulo = "203 Internet";
            echo $titulo;
        ?>
    </h1>
    <p>
        <?php 
            $saudacao = "Olá Mundo";
            $nome = "Andrei";
            $idade = "16";
            $escola = "Cedup";
            $linguagem = "PHP";
            $titulo = $saudacao . ", Eu sou $nome em tenho $idade anos. Estou estudando $linguagem no $escola";
            $subtitulo = "Seja bem-vindo(a) ao curso de $linguagem!";
            $ano = 2026;

            echo $titulo . "<br>";
            echo $subtitulo;
        ?>
    </p>
</body>
</html>