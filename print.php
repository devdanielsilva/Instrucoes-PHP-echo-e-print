<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Treino de Print</title>
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
        background: rgb(188, 0, 255);
        background: linear-gradient(315deg, rgba(188, 0, 255, 1) 0%, rgba(0, 134, 255, 1) 100%);
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
        /*A declaração print
    A instrução print pode ser usada com ou sem parênteses:print ou print().
    Exibindo texto:
    
    O exemplo a seguir mostra como gerar texto com o comandoprint (observe que o texto pode conter marcação HTML): */

    print "<h1>PHP é Divertido de Aprender!</h1>";
    print "Hello World!<br>";
    print "Estou feliz em aprender PHP!<br>";

    /*O exemplo a seguir mostra como gerar texto e variáveis com print: */
    $txt1 ="Aprendendo PHP";
    $txt2 ="Curso de PHP";
    $x =5;
    $y =4;
    print"<br><h2>". $txt1 ."</h2>";
    print"Estudando PHP no ". $txt2 ."<br>";
    print $x + $y . " Calleri";
    
        ?>
    </div>
</body>

</html>