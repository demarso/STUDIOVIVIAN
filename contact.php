<?php

// Server side validation
function isValid() {
    // Esta é a validação mais básica para fins de demonstração. Substitua isso pela sua própria validação do lado do servidor
    if($_POST['name'] != "" && $_POST['email'] != "" && $_POST['message'] != "") {
        return true;
    } else {
        return false;
    }
}

$error_output = '';
$success_output = '';

if(isValid()) {
    // Crie uma solicitação POST para obter a pontuação do reCAPTCHA v3 do Google
    $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
    $recaptcha_secret = '6LekEXMgAAAAADh07IqXrr1OG7s0cXFYBAmQ4_R8'; // Insert your secret key here
    $recaptcha_response = $_POST['recaptcha_response'];

    // Make and decode POST request
    $recaptcha = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response);
    $recaptcha = json_decode($recaptcha);

    // Agir com base na pontuação retornada
    if ($recaptcha->success == true && $recaptcha->score >= 0.5 && $recaptcha->action == 'contact') {
        // Este é um humano. Insira a mensagem no banco de dados OU envie um email
        $success_output = "Sua mensagem foi enviada com sucesso!";
    } else {
        // A pontuação inferior a 0,5 indica atividade suspeita. Retornar um erro
        $error_output = "Algo deu errado. Por favor, tente novamente!";
    }
} else {
    // Falha na validação do lado do servidor
    $error_output = "Favor preencher os campos obrigatórios!";
}

$output = array(
    'error'     =>  $error_output,
    'success'   =>  $success_output
);

// A saída precisa estar no formato JSON
echo json_encode($output);

?>