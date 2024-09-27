<?php 
// ======== Tempo Restante ========

function tempoVida($idade, $expecativaVida = 80)
{

    $anosRestando = $expecativaVida - $idade;
    $diasRestando = $anosRestando * 365;
    $mesesRestando = $anosRestando * 12;
    $semanasRestando = $anosRestando * 52;

    
    // ======== RETORNA INFO ========
    return [
        'dataFinal' => ($anosRestando + date('Y')),
        'anos' => $anosRestando,
        'meses' => $mesesRestando,
        'semanas' => $semanasRestando,
        'dias' => $diasRestando,
    ];
    
}

// ##########################################################################################


function vidaXP($idade, $dataNasc)
{
    // ====== XP (tempo-existência) EM SEGUNDOS ======

    $anoNascimento = $dataNasc->format('Y');
    $xpSegundos = strtotime($anoNascimento) - $idade;


    // ====== XP (tempo-existência) EM DIAS ======
    $atual = new DateTime();
    $inicio = $dataNasc;
    $intervalo = $inicio->diff($atual);



    // ====== DIAS ATÉ PRÓXIMA IDADE ======
    $ano_atual = date('Y');
    $proxNiver = new DateTime($ano_atual . '-' . $dataNasc->format('m-d'));
    
    // Se aniver já passou, ajusta p/ próximo ano 
    if ($atual > $proxNiver){
        $proxNiver->modify('+1 year');
    }

    $intervaloNiver = $atual->diff($proxNiver);


    // ========= RETORNO ============
    return [
        'anoNascimento' => $anoNascimento,
        'xpSegs' => $xpSegundos,
        'xpDias' => $intervalo->days,
        'niver' => $intervaloNiver->days,
    ];
}


?>