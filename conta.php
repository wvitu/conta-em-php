<?php

$saldo = 1_000.00;
$titular = "Wanderson Vitor";
$opcao = 0;
$historico = [];

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
    echo "5. Ver extrato\n";
    echo "******************\n";
}

function registrar(&$historico, $mensagem) {
    $data = date("d/m/Y H:i:s");
    $historico[] = "[$data] $mensagem";
}

function sacar(&$saldo, $valor, &$historico) {
    if ($valor > $saldo) {
        echo "Saldo insuficiente!\n";
        registrar($historico, "Tentativa de saque R$" . number_format($valor, 2) . " - saldo insuficiente.");
        return false;
    }
    $saldo -= $valor;
    echo "Saque de R$" . number_format($valor, 2) . " realizado!\n";
    registrar($historico, "Saque de R$" . number_format($valor, 2));
    return true;
}

function depositar(&$saldo, $valor, &$historico) {
    if ($valor <= 0) {
        echo "Valor inválido!\n";
        registrar($historico, "Tentativa de depósito inválido: R$" . number_format($valor, 2));
        return false;
    }
    $saldo += $valor;
    echo "Depósito de R$" . number_format($valor, 2) . " realizado!\n";
    registrar($historico, "Depósito de R$" . number_format($valor, 2));
    return true;
}

do {
    exibirMenu($saldo, $titular);
    echo "Escolha uma opção: ";
    $opcao = (int) fgets(STDIN);

    switch ($opcao) {
        case 1:
            echo "Saldo atual: R$" . number_format($saldo, 2) . "\n";
            registrar($historico, "Consulta de saldo");
            break;
        case 2:
            echo "Digite o valor a sacar: ";
            $valor = (float) fgets(STDIN);
            sacar($saldo, $valor, $historico);
            break;
        case 3:
            echo "Digite o valor a depositar: ";
            $valor = (float) fgets(STDIN);
            depositar($saldo, $valor, $historico);
            break;
        case 4:
            echo "Adeus!\n";
            break;
        case 5:
            echo "\n--- Extrato de operações ---\n";
            foreach ($historico as $linha) {
                echo $linha . "\n";
            }
            echo "-----------------------------\n";
            break;
        default:
            echo "Opção inválida!\n";
            break;
    }
} while ($opcao != 4);

?>
