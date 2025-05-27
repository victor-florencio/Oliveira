<?php
session_start();

$host = 'localhost';
$user = 'root';
$pass = '';
$db   = 'jardineiros';

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}

$email = $_POST['email'] ?? '';
$senha = $_POST['senha'] ?? '';
$tipo  = $_POST['tipo'] ?? '';
$modo  = $_POST['modo'] ?? 'login';
$localidade = $_POST['localidade'] ?? null;

// No login, localidade pode ser null ou ignorada
// No cadastro, localidade obrigatória para jardineiro (e cliente pode deixar null ou vazio)

if (!$email || !$senha || !$tipo) {
    echo "Preencha todos os campos obrigatórios.";
    exit;
}

if ($modo === 'cadastro') {
    // Verifica se email já existe
    $stmt = $conn->prepare("SELECT id FROM usuarios WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        echo "Email já cadastrado.";
        exit;
    }

    // Se for jardineiro, localidade é obrigatória
    if ($tipo === 'jardineiro' && (!$localidade || trim($localidade) === '')) {
        echo "Localidade é obrigatória para jardineiros.";
        exit;
    }

    $senhaHash = password_hash($senha, PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO usuarios (email, senha, tipo, localidade) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $email, $senhaHash, $tipo, $localidade);
    
    if ($stmt->execute()) {
        echo "Cadastro realizado com sucesso! <a href='index.html'>Voltar para Login</a>";
    } else {
        echo "Erro ao cadastrar.";
    }

} elseif ($modo === 'login') {
    $stmt = $conn->prepare("SELECT id, senha, tipo FROM usuarios WHERE email = ? AND tipo = ?");
    $stmt->bind_param("ss", $email, $tipo);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($usuario = $result->fetch_assoc()) {
        if (password_verify($senha, $usuario['senha'])) {
            $_SESSION['id'] = $usuario['id'];
            $_SESSION['email'] = $email;
            $_SESSION['tipo'] = $tipo;

            if ($tipo === 'cliente') {
                header("Location: cliente.php");
            } else {
                header("Location: jardineiro.php");
            }
            exit;
        } else {
            header("Location: index.html?erro=1");
            exit;
        }
    } else {
        header("Location: index.html?erro=1");
        exit;
    }
}

$conn->close();
?>
