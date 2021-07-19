<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Calculadora</title>
    <link rel="stylesheet" type="text/css" href="src/css/calculadora.css"/>
    <script src="src/js/calculadora.js"></script>
</head>
<body>
    <div class="fundo">
        <div class="calculadora">
            <h1>Calculadora</h1>
            <form method="GET" action="calc.php">
                <input type="text" name="resultado" id="resultado" value="
                <?php echo (!empty($_GET['total']) ? $_GET['total'] : ''); ?>"></input>

            <table>
                <tr>
                    <td><button type="button" class="botao" onclick="clean()">C</button></td>
                    <td><button type="button" class="botao" onclick="back()"><</button></td>
                    <td><button type="button" class="botao" onclick="insert('/')">/</button></td>
                    <td><button type="button" class="botao" onclick="insert('*')">x</button></td>
                </tr>
                <tr>
                    <td><button type="button" class="botao" onclick="insert('7')">7</button></td>
                    <td><button type="button" class="botao" onclick="insert('8')">8</button></td>
                    <td><button type="button" class="botao" onclick="insert('9')">9</button></td>
                    <td><button type="button" class="botao" onclick="insert('-')">-</button></td>
                </tr>
                <tr>
                    <td><button type="button" class="botao" onclick="insert('4')">4</button></td>
                    <td><button type="button" class="botao" onclick="insert('5')">5</button></td>
                    <td><button type="button" class="botao" onclick="insert('6')">6</button></td>
                    <td><button type="button" class="botao" onclick="insert('+')">+</button></td>
                </tr>
                <tr>
                    <td><button type="button" class="botao" onclick="insert('1')">1</button></td>
                    <td><button type="button" class="botao" onclick="insert('2')">2</button></td>
                    <td><button type="button" class="botao" onclick="insert('3')">3</button></td>
                    <td rowspan="2"><button type="submit" class="botao" style="height: 106px">=</button></td>
                </tr>
                <tr>
                    <td colspan="2"><button type="button" class="botao" style="width: 106px;" onclick="insert('0')">0</button></td>
                    <td><button type="button" class="botao" onclick="insert('.')">.</button></td>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>