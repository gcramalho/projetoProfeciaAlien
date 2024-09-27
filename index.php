<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profécia Cosmica</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="resources/icon-disco-voador-96.png" type="image/x-icon">
</head>

<body>

    <!-- FORMULÁRIO -->

    <div class="form-cosmico">

        <form action="submit/calcula_morte.php" method="post" onsubmit="return validaIdade()">

            <div id="alien">
                <img src="resources/alien.png" alt="alien cinza imagem">
            </div>

            <div class="texto">
                <h2>Olá, mortal! Eu sou Jeff, o alien profeta e irei calcular o seu ano final.</h2>
                <h4 style="margin-left: 1rem;">Primeiro, me forneça algumas informações:</h4>
            </div>

            <div class="input-wrapper">

                <div class="input-idade">
                    <label for="idade">Qual é a sua idade terraquea?</label>
                    <input type="number" name="idade" id="idade" required>

                    <div class="error-message" id="age-error"></div>
                </div>

                <div class="input-nasc">
                    <label for="data">Informe sua data de nascimento:</label>
                    <input type="date" name="data" id="data" required>
                </div>

            </div>

            <!-- Estilização botão  -->
            <div id="container-botao">

                <button type="submit" class="btn">
                    <strong>Calcular Ano Final</strong>

                    <div id="container-estrelas">
                        <div id="estrelas"></div>
                    </div>

                    <div id="brilho">
                        <div class="circle"></div>
                        <div class="circle"></div>
                    </div>

                </button>

            </div>
        </form>
    </div>


    <!-- Validação da idade (máx.: 80)  -->
    <script>
        function validaIdade(){
            var idade = document.getElementById("idade").value;
            if (idade > 80 || idade < 1){
                document.getElementById("age-error").innerHTML = "Erro: A idade deve estar entre 1 a 79 anos."
                return false;
            }
            return true;
        }
    </script>
</body>

</html>