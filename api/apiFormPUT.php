<?php

$inputJSON = file_get_contents("php://input"); // Pegando as strings passados pelo input 
$inputArray = json_decode($inputJSON); // Transformando as strings em arrays

// Verificando se o botão enviar foi clicado
if ($inputArray->action == 'send') {
  $archive = fopen('../assets/archives/data.txt', 'a+'); // Criar um aquivo e escreve os dados nele
  $email = $inputArray->email;
  $name = $inputArray->name;

  fwrite($archive, 'Email: ' . $email . "\r\n");
  fwrite($archive, 'Nome: ' . $name . "\r\n");
  fwrite($archive, '--------------------------------' . "\r\n");
  fclose($archive);

  // Criando um array com os dados enviado pelo formulário e retornando sucesso
  echo json_encode([
    'status' => 'Sucesso',
    'messageName' => "O nome $name foi gravado com sucesso!",
    'messageEmail' => "O $email foi gravado com sucesso!"
  ]);
}
