# 🏦 Sistema Bancário em PHP (CLI)

Este é um projeto simples em PHP que simula um sistema bancário no terminal (linha de comando), desenvolvido como parte dos estudos para carreira na área de tecnologia.

## ✨ Funcionalidades

- Exibir saldo e titular da conta
- Sacar valor (com validação e limite de saldo)
- Depositar valor (com validação de entrada)
- Extrato com histórico de operações e data/hora
- Menu interativo no terminal (CLI)

## 💡 Objetivo

O objetivo deste projeto é colocar em prática conceitos fundamentais da linguagem PHP, como:

- Estruturas condicionais e repetição
- Arrays associativos
- Funções e passagem por referência
- Manipulação de entrada via terminal
- Boas práticas de estruturação e validação

## 🧱 Estrutura do Código

- `exibirMenu()` – Apresenta o menu principal e informações da conta
- `sacar()` – Realiza um saque com validações
- `depositar()` – Realiza um depósito com validações
- `registrar()` – Adiciona uma operação ao extrato
- `historico` – Array que armazena todas as ações realizadas

## ▶️ Como Executar

Você pode executar este projeto diretamente no terminal com PHP instalado:

```bash
php banco.php
