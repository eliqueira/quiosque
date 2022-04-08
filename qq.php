<?php

try {
    $username = "quiosque";
    $password = "nJom.dv/(5MKhf)X";
    $pdo = new PDO('mysql:host=localhost;dbname=quiosque', $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $pdo->prepare('INSERT INTO usuarios ( nome, sobrenome, senha, email) '
            . 'VALUES(:nome, :sobrenome,:senha, :email)');
    $stmt->execute(array(
        ':nome' => 'Jose2',
        ':sobrenome' => 'Mujica1',
        ':senha' => '1234',
        ':email' => 'jose@google1.com'
    ));
    echo "Inserido com sucesso";
} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
}
?>