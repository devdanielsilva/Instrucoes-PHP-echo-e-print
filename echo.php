<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Treino de Echo</title>
    <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        display: flex;
        justify-content: center;
        align-items: center;
        background: rgb(255, 179, 0);
        background: linear-gradient(315deg, rgba(255, 179, 0, 1) 0%, rgba(4, 0, 255, 1) 80%);
        background-repeat: no-repeat;
        width: 100%;
        height: 617px;
    }

    div {
        margin: 150px;
        padding: 100px;
        color: whitesmoke;
    }
    </style>
</head>

<body>
    <div class="container">
        <?php
        /*Instruções PHP echo e print
        echo eprint são mais ou menos iguais
        Ambas são usadas para enviar dados para a tela.
        As diferenças são pequenas:
        •
        echo não tem valor de retorno, masprint tem valor de retorno 1, portanto pode ser usado em expressões.
        •
        echo pode receber vários parâmetros (embora tal uso seja raro), enquantoprint pode receber um argumento.
        •
        echo é mais rápido queprint. */
        
        /*A declaração de eco do PHP
        echo pode ser usada com ou sem parênteses:echo ouecho()
        Exibir texto
        O exemplo a seguir mostra como gerar texto com echo (observe que o texto pode conter marcação HTML): */
       
        echo "<h1>PHP é divertido!</h1>";
        echo "Hello World!<br>";
        echo "Estou aprendendo PHP!<br>";
        echo "Essa"," String"," foi"," criada"," com múltiplos parâmetros. <br>";

        /*Variáveis de exibição
        O exemplo a seguir mostra como gerar texto e variáveis com echo: */
        $n1 = "Praticando PHP";
        $n2 = "Curso de PHP";
        $x = 7;
        $y = 9;

        echo "<br><h2>" . $n1 . "</h2>";
        echo "Estudando PHP no " . $n2 . "<br>";
        echo "$x + $y";
        
        ?>
    </div>
</body>

</html>