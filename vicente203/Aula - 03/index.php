<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $altura = 1.70;
        $ativo = true;
        $peso = 200;
        $profissão = "Lider do Jovem Aprendiz do Moniari";
        $cidade = "Porto Alegre";
        $estado = "Rio Grande do Sul";
        $país = "Argentina";
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

</body>
</html>