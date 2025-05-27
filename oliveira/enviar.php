<?php
// Verifica se os dados foram enviados via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nome = $_POST['nome_cliente'];
  $localidade = $_POST['localidade'];
  $tipo_servico = $_POST['tipo_servico'];
  $detalhes = $_POST['detalhes'];

  header("Location: enviar.php");

  // Exemplo: exibir os dados
  echo "<h2>Dados recebidos:</h2>";
  echo "Nome: $nome <br>";
  echo "Localidade: $localidade <br>";
  echo "Tipo de Serviço: $tipo_servico <br>";
  echo "Detalhes: $detalhes <br>";

  // Você pode agora redirecionar, salvar no banco ou usar $_SESSION
}
?>