<?php
// Dependências 
require_once '../functions/funcoes.php';


//Tratamento form
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Checa e instancia 
    $dataNasc = isset($_POST['data']) && !empty($_POST['data']) ? new DateTime($_POST['data']) : null;

    $idade = isset($_POST['idade']) && !empty($_POST['idade']) ? $_POST['idade'] : null;

    // Chama funções
    if ($dataNasc && $idade) {

        $tempoRestante = tempoVida($idade);

        $xp = vidaXP($idade, $dataNasc);
        $proximaIdade = $idade + 1;
    }
} else {
    header('Location: ../index.php');
    exit();
}


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profécia Alien</title>
    <link rel="shortcut icon" href="../resources/icon-disco-voador-96.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/submit.css">
</head>

<body>

    <div class="container-text">
        <a href="../index.php" class="btn-return">
            Voltar
        </a>
    </div>

    <div class="container-text">
        <h2>&#129702; Ano final: <?= $tempoRestante['dataFinal'] ?> </h2>
    </div>

    <!--======== CARTAO XP ========= -->

    <div class="card">
        <div class="exp-header">
            <!-- Placeholder icone  -->
            <div class="icon">
                <img src="../resources/health.png" alt="Icon">
            </div>

            <!-- XP  -->
            <div class="exp-points">
                <p style="font-size: 15px; color: #737373;">Você possui:</p>
                <?= $xp['xpDias'] ?> exp points
            </div>
        </div>

        <!-- Progresso  -->
        <div class="progress-bar">
            <div class="progress"></div>
        </div>

        <!-- Level (idade)  -->
        <div class="level-info">

            <span>
                LEVEL <?= $idade ?>
            </span>

            <span>
                <?= $xp['niver'] ?> exp para o <strong>LEVEL <?= $proximaIdade ?> </strong>
            </span>
        </div>

    </div>


    <!--====== BARRAS TEMPO DE VIDA ======== -->

    <div class="container-text">
        <h2>&#128302; Restam:</h2>
    </div>

    <!-- proprieda '--NUM' = total de preenchimento ; '--CLR' = cores  -->

    <div class="container">

        <div class="card-circulo">
            <div class="porcento" style="--clr:#04fc43;--num:20;">
                <div class="dot"></div>
                <svg>
                    <circle cx="70" cy="70" r="70"></circle>
                    <circle cx="70" cy="70" r="70"></circle>
                </svg>

                <!--====== Tempo em Dias ======== -->
                <div class="num">
                    <h2>
                        <?= $tempoRestante['dias'] ?> 
                    </h2>
                    <p>dias</p>
                </div>

            </div>
        </div>


        <!--====== Tempo em Semanas ======== -->

        <div class="card-circulo">
            <div class="porcento" style="--clr:#04fc43;--num:40;">
                <div class="dot"></div>
                <svg>
                    <circle cx="70" cy="70" r="70"></circle>
                    <circle cx="70" cy="70" r="70"></circle>
                </svg>

                <div class="num">
                    <h2>
                        <?= $tempoRestante['semanas'] ?>
                    </h2>
                    <p>semanas</p>
                </div>

            </div>
        </div>


        <!--====== Tempo em Meses ======== -->

        <div class="card-circulo">
            <div class="porcento" style="--clr:#04fc43;--num:62;">
                <div class="dot"></div>
                <svg>
                    <circle cx="70" cy="70" r="70"></circle>
                    <circle cx="70" cy="70" r="70"></circle>
                </svg>

                <div class="num">
                    <h2>
                        <?= $tempoRestante['meses'] ?>
                    </h2>
                    <p>meses</p>
                </div>

            </div>
        </div>

        <!--====== Tempo em Anos ======== -->

        <div class="card-circulo">
            <div class="porcento" style="--clr:#04fc43;--num:80;">
                <div class="dot"></div>
                <svg>
                    <circle cx="70" cy="70" r="70"></circle>
                    <circle cx="70" cy="70" r="70"></circle>
                </svg>

                <div class="num">
                    <h2>
                        <?= $tempoRestante['anos'] ?>
                    </h2>
                    <p>anos</p>
                </div>

            </div>
        </div>


    </div>



</body>

</html>