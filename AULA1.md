# 📖 AULA 1: Fundamentos de PHP

**Data:** 19/05/2026  
**Nível:** Iniciante (Fundamentos)  
**Duração esperada:** 1-2 horas

---

## 1. CONCEITO

PHP é uma linguagem **server-side** que funciona diferente de Python e TypeScript:

### Como funciona:
- **Python**: Roda no seu computador ou servidor (você controla tudo)
- **TypeScript/Node**: Roda no servidor (mas é JavaScript assíncrono)
- **PHP**: Roda no servidor **a cada requisição HTTP** (stateless por padrão)

### Variáveis em PHP:
- Todas começam com `$`
- Tipagem fraca (como Python)
- Podem mudar de tipo dinamicamente

### Tipos de Dados:
String, Integer, Float, Boolean, Array, NULL, Object, Resource

---

## 2. EXEMPLO PRÁTICO

```php
<?php
// VARIÁVEIS - Começam sempre com $
$nome = "Heitor";                    // String
$idade = 25;                          // Integer
$altura = 1.75;                       // Float
$ativo = true;                        // Boolean
$habilidades = ["PHP", "Python", "TS"]; // Array
$vazio = null;                        // NULL

// Exibir valores (como print() em Python)
echo $nome;                           // Exibe: Heitor
echo "<br>";                          // Quebra de linha HTML

// Concatenação - diferente de Python!
echo "Nome: " . $nome;                // Usa PONTO (.) não +
echo "Idade: " . $idade . " anos";

// Tipos dinâmicos
$variavel = "texto";
echo gettype($variavel);              // string

$variavel = 42;
echo gettype($variavel);              // integer
?>
```

---

## 3. EXPLICAÇÃO DO CÓDIGO

| Linha | O que faz | Diferença |
|-------|----------|-----------|
| `<?php` | Tag de abertura do PHP | Obrigatória no início |
| `$nome = ...` | Define variável com `$` | Em Python é sem `$` |
| `echo $nome` | Exibe valor | Em Python é `print()` |
| `"..." . $var` | Concatena com PONTO | Python usa `+` ou f-string |
| `gettype($var)` | Retorna tipo da variável | Python usa `type()` |
| `true/false` | Booleanos (minúsculos) | PHP é `true/false`, não `True/False` |

---

## 4. EXERCÍCIO GUIADO

Criar arquivo `exercicio1.php`:

```php
<?php
// Complete este código:

$seu_nome = "???"; // Coloque seu nome aqui
$sua_idade = ??;   // Sua idade
$linguagem = "PHP";

// Exiba estas mensagens:
// "Olá, MEU NOME é Heitor"
// "Tenho 25 anos"
// "Estou aprendendo PHP"
// "Meu tipo de dado é: string"

?>
```

**Passo a passo:**
1. Declare as 3 variáveis com seus dados
2. Use `echo` para exibir cada mensagem
3. Use `.` para concatenar
4. Use `gettype()` para mostrar o tipo

---

## 5. EXERCÍCIO INDEPENDENTE

Criar `seu_exercicio1.php` com:

### Requisitos:

1. **Variáveis:**
   - `$nome_completo` (seu nome)
   - `$profissao` (seu trabalho)
   - `$anos_experiencia` (anos de experiência)
   - `$linguagens_conhecidas` (array com 3 linguagens)
   - `$salario_expectativa` (float)

2. **Exiba:**
   - "Olá! Meu nome é [NOME]"
   - "Trabalho como [PROFISSÃO]"
   - "Tenho [ANOS] anos de experiência"
   - "Conheço: [ARRAY]" (use a posição do array)
   - "Meu salário esperado é: R$ [VALOR]"
   - "Tipos de dados: [tipo1], [tipo2], ..."

3. **Use:**
   - Pelo menos 5 variáveis de tipos diferentes
   - Concatenação com `.`
   - Acesso a array com índice `$array[0]`
   - Função `gettype()` para 2 variáveis

---

## 6. DESAFIO EXTRA

Criar um currículo simples em HTML + PHP que exiba:
- Nome (título)
- Profissão
- Habilidades (usar array)
- Experiência
- Formação

Com estilo básico em CSS e cores diferentes para seções. Usar variáveis para TUDO.

```php
<?php
// Exemplo estrutura:

$nome = "Heitor Araújo";
$profissao = "Desenvolvedor Full Stack";
$habilidades = ["PHP", "Python", "TypeScript"];
$experiencia = "3 anos";
$formacao = "Engenharia da Computação";

// Crie HTML com essas variáveis
?>
```

---

## 7. CHECKLIST DO APRENDIZADO

- [ ] Entendi que variáveis em PHP começam com `$`
- [ ] Sei os 6 tipos de dados básicos
- [ ] Entendo como concatenar com `.`
- [ ] Usei `echo` para exibir valores
- [ ] Acessei posições de arrays
- [ ] Testei `gettype()` em diferentes variáveis
- [ ] Consegui criar o exercício independente

---

## 8. PRÓXIMAS AULAS

→ **AULA 2:** Operadores (aritméticos, comparação, lógicos)
→ **AULA 3:** Condicionais (if/else/switch)
→ **AULA 4:** Loops (for, foreach, while)
→ **AULA 5:** Arrays avançados
→ **AULA 6:** Funções

---

**Status:** ⏳ Aguardando seu `seu_exercicio1.php`
