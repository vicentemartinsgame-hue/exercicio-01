<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            text-align: center;
            background-color: floralwhite;
            margin: 0;
            padding: 0;
        }
        h1 {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 30px;
            color: whitesmoke;
            background-color: burlywood;
        }
        p {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 18px;
            color: black;
        }
    </style>
</head>
<body>
    <h1>
        <?php 
            $saudacao = "Oi";
            echo"Portifolio Do Andrei<br><br>
            $saudacao, mundo<br>";
            echo $saudacao . ", mundo";
        ?>
    </h1>
    <p>
        <?php 
            echo "<br>Jhonni Lindo Farmador de Aura e Profissional em tomar protozoarios por 50 pila<br>";
            $nome = "Andrei";
            $idade = 16;
            echo "<br>Olá, $nome<br>
            Sua idade é $idade";

            echo "<br><br>Olá, " . $nome . "<br>
            Sua idade é " . $idade;
        ?>
    </p>
</body>
</html>