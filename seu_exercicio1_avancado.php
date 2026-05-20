<?php


$primeiroNome = 'Heitor';
$ultimoNome = 'Araujo';
$nomeCompleto = $primeiroNome . ' ' . $ultimoNome;
$profissao = "QA";
$anosExperiencia = 0.4;
$linguagensConhecidas = ["TS", "PYTHON", "JAVA"];
$salarioExpectativa = 3500;

echo "Olá! Meu nome é " . htmlspecialchars($nomeCompleto) . "<br>";
echo "Tenho " . htmlspecialchars($anosExperiencia) . " Anos de experiencia<br>";
echo "Trabalho como " . htmlspecialchars($profissao) . "<br>";
echo "conheço: " . htmlspecialchars(implode(', ', $linguagensConhecidas)) . "<br>";
echo "Meu salário esperado é: R$ " . htmlspecialchars($salarioExpectativa) . "<br>";
echo "Tipos de dados: " . gettype($linguagensConhecidas) . " " . gettype($salarioExpectativa) . "\n" . "<br>";


/*

checklist
[X] Entendi que variáveis em PHP começam com $
[X] Sei os 6 tipos de dados básicos
[X] Entendo como concatenar com .
[X] Usei echo para exibir valores
[X] Acessei posições de arrays
[X] Testei gettype() em diferentes variáveis
[X] Consegui criar o exercício independente */
?>
<!DOCTYPE html>
<html>
<head>
    <title>Currículo - <?= htmlspecialchars($nomeCompleto) ?></title>
    <style>
        body { font-family: Arial; margin: 20px; }
        .secao { background: #f0f0f0; padding: 15px; margin: 10px 0; border-left: 4px solid #007bff; }
        h1 { color: #9004a3; }
        h2 { color: #8a1f1f; margin-top: 20px; }
    </style>
</head>
<body>
    <div class="secao">
        <h1><?= htmlspecialchars($nomeCompleto) ?></h1>
        <p><strong>Profissão:</strong> <?= htmlspecialchars($profissao) ?></p>
    </div>

    <div class="secao">
        <h2>Experiência</h2>
        <p><?= $anosExperiencia ?> <?= $anosExperiencia >=   1 ? "Anos" : "Meses" ?></p>
    </div>

    <div class="secao">
        <h2>Habilidades</h2>
        <ul>
            <?php foreach ($linguagensConhecidas as $linguagem): ?>
                <li><?= htmlspecialchars($linguagem) ?></li>
            <?php endforeach; ?>
        </ul>
    </div>

    <div class="secao">
        <h2>Pretensão Salarial</h2>
        <p>R$ <?= number_format($salarioExpectativa, 2, ',', '.') ?></p>
    </div>
</body>
</html>

  