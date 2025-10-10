<?php
// ==================================================================
// INÍCIO DA LÓGICA PHP PARA BUSCAR O PRODUTO
// ==================================================================

// Simulação de um "banco de dados" de produtos.
// Em um site real, você substituiria esta parte por uma consulta ao seu banco de dados.
$produtos = [
    1 => [
        'nome' => 'Sandália HELLO KITTY © Licenciado/Original',
        'preco' => 61.96,
        'imagem' => 'https://i.imgur.com/O1U6mF1.png', // Imagem do seu produto
        'descricao' => 'Uma linda e confortável sandália da Hello Kitty, perfeita para o dia a dia das crianças. Produto original e licenciado, garantindo qualidade e durabilidade.',
        'opcoes_tamanho' => ['23/24', '25/26', '27/28', '29/30']
    ],
    2 => [
        'nome' => 'Tênis Esportivo Masculino',
        'preco' => 129.90,
        'imagem' => 'https://via.placeholder.com/400x400.png?text=Tênis+Esportivo',
        'descricao' => 'Tênis ideal para práticas esportivas, com amortecimento de impacto e design moderno.',
        'opcoes_tamanho' => ['39', '40', '41', '42', '43']
    ],
    // Adicione mais produtos aqui...
];

// Pega o ID do produto da URL.
$produto_id = isset($_GET['id'] ) ? (int)$_GET['id'] : null;

// Busca o produto no array.
$produto = ($produto_id && isset($produtos[$produto_id])) ? $produtos[$produto_id] : null;

// ==================================================================
// FIM DA LÓGICA PHP
// ==================================================================


// ==================================================================
// INÍCIO DO CONTEÚDO HTML/CSS PARA EXIBIR O PRODUTO
// ==================================================================
// Este bloco deve ser inserido no corpo (<body>) da sua página principal,
// onde o conteúdo do produto deve aparecer.
?>

<?php if ($produto): ?>

    <style>
        /* Estilos específicos para a página de detalhes do produto */
        .pagina-produto {
            max-width: 960px;
            margin: 40px auto;
            padding: 20px;
            display: flex;
            flex-wrap: wrap; /* Permite que os itens quebrem para a linha de baixo em telas menores */
            gap: 40px;
            font-family: Arial, sans-serif;
            background-color: #fff; /* Fundo branco para a área do produto */
        }

        .produto-galeria {
            flex: 1 1 400px; /* Ocupa o espaço disponível, base de 400px */
        }

        .produto-galeria img {
            max-width: 100%;
            border-radius: 8px;
            border: 1px solid #eee;
        }

        .produto-info {
            flex: 1 1 300px; /* Ocupa o espaço disponível, base de 300px */
            display: flex;
            flex-direction: column;
        }

        .produto-nome {
            font-size: 28px;
            font-weight: 600;
            color: #333;
            line-height: 1.3;
            margin: 0 0 15px 0;
        }

        .produto-preco {
            font-size: 32px;
            font-weight: bold;
            color: #e75480; /* Cor rosa/pink similar à da imagem */
            margin-bottom: 20px;
        }
        
        .produto-descricao {
            font-size: 16px;
            color: #666;
            line-height: 1.6;
            margin-bottom: 25px;
        }

        .produto-opcoes label {
            display: block;
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .produto-opcoes select {
            width: 100%;
            padding: 12px;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 16px;
            margin-bottom: 25px;
        }

        .botao-comprar {
            display: block;
            width: 100%;
            background-color: #28a745; /* Verde para o botão de compra */
            color: #fff;
            text-align: center;
            padding: 15px 0;
            font-size: 18px;
            font-weight: bold;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .botao-comprar:hover {
            background-color: #218838;
        }

        /* Estilos para telas menores (responsivo) */
        @media (max-width: 768px) {
            .pagina-produto {
                flex-direction: column;
                margin: 20px auto;
                padding: 15px;
            }
            .produto-nome { font-size: 24px; }
            .produto-preco { font-size: 28px; }
        }
    </style>

    <main class="pagina-produto">
        <div class="produto-galeria">
            <img src="<?php echo htmlspecialchars($produto['imagem']); ?>" alt="<?php echo htmlspecialchars($produto['nome']); ?>">
        </div>

        <div class="produto-info">
            <h1 class="produto-nome"><?php echo htmlspecialchars($produto['nome']); ?></h1>
            <p class="produto-preco">R$ <?php echo number_format($produto['preco'], 2, ',', '.'); ?></p>
            
            <div class="produto-opcoes">
                <label for="tamanho">Tamanho:</label>
                <select name="tamanho" id="tamanho">
                    <?php foreach ($produto['opcoes_tamanho'] as $tamanho): ?>
                        <option value="<?php echo htmlspecialchars($tamanho); ?>"><?php echo htmlspecialchars($tamanho); ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <p class="produto-descricao"><?php echo htmlspecialchars($produto['descricao']); ?></p>

            <a href="#" class="botao-comprar">COMPRAR</a>
        </div>
    </main>

<?php else: ?>

    <div style="text-align: center; padding: 50px; font-family: Arial, sans-serif;">
        <h1 style="color: #d9534f;">Produto não encontrado</h1>
        <p style="color: #555;">O item que você está procurando não está mais disponível.</p>
        <a href="index.php" style="text-decoration: none; color: #007bff;">Voltar à página inicial</a>
    </div>

<?php endif; ?>

<?php
?>
