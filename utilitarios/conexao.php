//acesso ao servidor
    $servidor = "localhost";
    $banco = "corona";
    $usuario = "root";
    $password = "";

    $conexao = mysqli_connect($sevidor, $usuario, $password, $banco);

    if(mysqli_connect_errno()){
        die("Conexão falhou!"mysqli_connect_error);
    }