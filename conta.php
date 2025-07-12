<?php

// Inicialização das variáveis
$saldo = 1_000.00;
$titular = "Wanderson Vitor";
$opcao = 0;

function exibirMenu($saldo, $titular) {
    echo "******************\n";
    echo "Titular: $titular\n";
    echo "Saldo atual: R$" . number_format($saldo, 2) . "\n";
    echo "******************\n";
    echo "Opções:\n";
    echo "1. Consultar saldo atual\n";
    echo "2. Sacar valor\n";
    echo "3. Depositar valor\n";
    echo "4. Sair\n";
    echo "******************\n";
}

function sacar(&$saldo, $valor) {
    if ($valor > $saldo) {
        echo "Saldo insuficiente!\n";
        return false;
    }
    $saldo -= $valor;
    echo "Saque de R$" . number_format($valor, 2) . " realizado!\n";
    return true;
}

function depositar(&$saldo, $valor) {
    if ($valor <= 0) {
        echo "Valor inválido!\n";
        return false;
    }
    $saldo += $valor;
    echo "Depósito de R$" . number_format($valor, 2) . " realizado!\n";
    return true;
}

do {
    exibirMenu($saldo, $titular);
    echo "Escolha uma opção: ";
    $opcao = (int) fgets(STDIN);

    switch ($opcao) {
        case 1:
            echo "Saldo atual: R$" . number_format($saldo, 2) . "\n";
            break;
        case 2:
            echo "Digite o valor a sacar: ";
            $valor = (float) fgets(STDIN);
            sacar($saldo, $valor);
            break;
        case 3:
            echo "Digite o valor a depositar: ";
            $valor = (float) fgets(STDIN);
            depositar($saldo, $valor);
            break;
        case 4:
            echo "Obrigado por usar nosso sistema! até mais =D\n";
            break;
        default:
            echo "Opção inválida!\n";
            break;
    }
} while ($opcao != 4);

?>
