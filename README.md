# Projeto: Função de Cálculo de Desconto com PHPUnit

Este projeto implementa uma função PHP chamada `calcularDesconto()`, que aplica descontos com base na categoria do cliente. Também foram criados testes unitários utilizando o framework **PHPUnit**.

---

## 🧮 Descrição da Função

A função `calcularDesconto($valorCompra, $categoriaCliente)` aplica os seguintes descontos:

| Categoria | Desconto |
|-----------|----------|
| `premium` | 20%      |
| `regular` | 10%      |
| `novo`    | 5%       |
| outros    | 0%       |

Retorna `"Valor inválido"` se o valor da compra for menor ou igual a 0.

---

## 📁 Estrutura de Pastas

