<? php 
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Verificar as credenciais (exemplo simples)
    if ($username === 'admin' && $password === 'senha123') {
        echo "Login bem-sucedido!";
    } else {
        echo "Credenciais inválidas. Tente novamente.";
    }
}
?>