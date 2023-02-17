<?php
 
require_once 'init.php';
 
//pega os dados do formu�rio
$CPF = isset($_POST['CPF']) ? $_POST['CPF'] : "";
$CEP = isset($_POST['CEP']) ? $_POST['CEP'] : "";
$Email = isset($_POST['Email']) ? $_POST['Email'] : "";
$Login = isset($_POST['Login']) ? $_POST['Login'] : "";
$Senha = isset($_POST['Senha']) ? $_POST['Senha'] : "";
$Confirmar_Senha = isset($_POST['Confirmar_Senha']) ? $_POST['Confirmar_Senha'] : "";


 
// valida��o (bem simples, s� pra evitar dados vazios)
if (empty($CPF) || empty($CEP) || empty($Email) || empty($Login) || empty($Senha) || empty($Confirmar_Senha))
{
    echo "Volte e preencha todos os campos";
    exit;
}
 

// insere no banco
$PDO = db_connect();
$sql = "INSERT INTO cadastro (CPF, CEP, Email, Login, Senha, Confirmar_Senha) VALUES(:CPF, :CEP, :Email, :Login, :Senha, :Confirmar_Senha)";
$stmt = $PDO->prepare($sql);
$stmt->bindParam(':CPF', $CPF);
$stmt->bindParam(':CEP', $CEP);
$stmt->bindParam(':Email', $Email);
$stmt->bindParam(':Login', $Login);
$stmt->bindParam(':Senha', $Senha);
$stmt->bindParam(':Confirmar_Senha', $Confirmar_Senha);



if ($stmt->execute())
{
    header("Location: login.php");
}
else
{
    echo "Erro ao cadastrar";
    print_r($stmt->errorInfo());
}