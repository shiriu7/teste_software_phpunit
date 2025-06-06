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

## 📦 **TUTORIAL: Como rodar o projeto com PHPUnit**

---

### 🔻 1. Baixar o Projeto `.zip`

1. Baixe o arquivo `.zip` do repositório.
2. Extraia o conteúdo em uma pasta local, por exemplo:
   `C:\xampp\htdocs\EXERCICIOS`

> **Dica:** Se você estiver usando XAMPP, salve dentro da pasta `htdocs`.

---

### ⚙️ 2. Instalar o Composer (Gerenciador de pacotes PHP)

**O Composer é necessário para instalar o PHPUnit.**

#### 👉 Passos para instalar o Composer no Windows:

1. Acesse: [https://getcomposer.org/download/](https://getcomposer.org/download/)
2. Baixe o **Composer-Setup.exe** (instalador para Windows)
3. Execute o instalador
4. Durante a instalação, selecione o caminho do PHP.
   Exemplo (XAMPP):
   `C:\xampp\php\php.exe`
5. Finalize a instalação.

#### 🧪 Teste se o Composer foi instalado:

Abra o terminal (CMD) e digite:

```bash
composer -V
```

Deve aparecer algo como:

```bash
Composer version 2.x.x
```

---

### 📦 3. Instalar o PHPUnit via Composer

1. No terminal, navegue até a pasta do projeto.
   Exemplo:

```bash
cd C:\xampp\htdocs\EXERCICIOS
```

2. Execute o comando abaixo para instalar o PHPUnit como dependência de desenvolvimento:

```bash
composer require --dev phpunit/phpunit ^9
```

Isso vai criar a pasta `vendor/` e os arquivos `composer.lock` automaticamente.

---

### 🧪 4. Executar os Testes com PHPUnit

No terminal, ainda dentro da pasta do projeto, execute:

```bash
vendor\bin\phpunit CalcularDescontoTest.php
```

Se tudo estiver certo, você verá algo como:

```
OK (6 tests, 6 assertions)
```

---

### 📝 Dica: Adicione um script no `composer.json`

Para facilitar, edite o arquivo `composer.json` e adicione:

```json
"scripts": {
    "test": "phpunit CalcularDescontoTest.php"
}
```

Então, em vez do caminho completo, você pode rodar:

```bash
composer test
```

---

### 📁 Estrutura Final Esperada

```
/EXERCICIOS
├── CalcularDescontoTest.php
├── funcoes.php
├── composer.json
├── composer.lock
├── vendor/
├── README.md
├── requirements.txt
```


