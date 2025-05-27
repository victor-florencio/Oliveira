<?php
session_start();
require 'conn.php';

if (!isset($_SESSION['id']) || $_SESSION['tipo'] !== 'jardineiro') {
  header('Location: index.html');
  exit;
}

require 'conn.php';
$jardineiro_id = $_SESSION['id'];

// Buscar pedidos (só mostrar os mais recentes por enquanto)
$sql = "SELECT p.*, u.email 
        FROM pedidos p
        JOIN usuarios u ON p.cliente_id = u.id
        ORDER BY p.data_pedido DESC
        LIMIT 10";
$pedidos = $conn->query($sql);

// Buscar lista de clientes que conversaram com o jardineiro
$sql_chat = "SELECT DISTINCT u.id, u.email
             FROM mensagens m
             JOIN usuarios u ON u.id = m.remetente_id OR u.id = m.destinatario_id
             WHERE (m.remetente_id = $jardineiro_id OR m.destinatario_id = $jardineiro_id)
             AND u.id != $jardineiro_id";
$clientes_chat = $conn->query($sql_chat);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <title>Área do Jardineiro</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    #chatBox {
      height: 300px;
      overflow-y: auto;
      border: 1px solid #ccc;
      padding: 10px;
    }
  </style>
</head>
<body class="bg-gray-100 p-6">
  <div class="container">
    <h1 class="text-3xl font-bold mb-6 text-center">Bem-vindo, Jardineiro!</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
      <!-- Pedidos locais -->
      <div class="bg-white p-4 rounded-lg shadow-md">
        <h2 class="text-xl font-semibold mb-4">Pedidos de Clientes</h2>
        <?php if ($pedidos->num_rows > 0): ?>
          <ul class="list-group">
            <?php while($p = $pedidos->fetch_assoc()): ?>
              <li class="list-group-item">
                <strong><?= htmlspecialchars($p['email']) ?></strong><br>
                <?= htmlspecialchars($p['descricao']) ?><br>
                <small><?= htmlspecialchars($p['endereco']) ?> - <?= htmlspecialchars($p['cidade']) ?>/<?= htmlspecialchars($p['estado']) ?></small>
              </li>
            <?php endwhile; ?>
          </ul>
        <?php else: ?>
          <p class="text-gray-600">Nenhum pedido disponível ainda.</p>
        <?php endif; ?>
      </div>

      <!-- Área de bate-papo -->
      <div class="bg-white p-4 rounded-lg shadow-md">
        <h2 class="text-xl font-semibold mb-4">Chat com Clientes</h2>
        <form id="chatForm" method="POST" action="enviar_mensagem.php" class="mb-3">
          <label class="block mb-2 text-sm">Escolha o cliente:</label>
          <select name="destinatario_id" required class="form-select mb-2">
            <?php while($c = $clientes_chat->fetch_assoc()): ?>
              <option value="<?= $c['id'] ?>"><?= $c['email'] ?></option>
            <?php endwhile; ?>
          </select>
          <textarea name="mensagem" rows="2" required class="form-control mb-2" placeholder="Digite sua mensagem..."></textarea>
          <button type="submit" class="btn btn-success w-full">Enviar</button>
        </form>

        <div id="chatBox">
          <?php
          $sql_mensagens = "SELECT m.*, u.email FROM mensagens m
                            JOIN usuarios u ON u.id = m.remetente_id
                            WHERE (remetente_id = $jardineiro_id OR destinatario_id = $jardineiro_id)
                            ORDER BY data_envio DESC LIMIT 10";
          $mensagens = $conn->query($sql_mensagens);
          if ($mensagens->num_rows > 0):
            while ($m = $mensagens->fetch_assoc()):
          ?>
            <div class="mb-2">
              <strong><?= htmlspecialchars($m['email']) ?>:</strong>
              <?= htmlspecialchars($m['mensagem']) ?><br>
              <small class="text-muted"><?= date("d/m H:i", strtotime($m['data_envio'])) ?></small>
            </div>
          <?php endwhile; else: ?>
            <p class="text-gray-600">Nenhuma mensagem ainda.</p>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
