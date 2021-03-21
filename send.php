<?php

function sendSMS($to, $message){
    $URL = "https://api.smsmarket.com.br/webservice-rest/send-single?user=igorgso&password=igor06&type=0&country_code=55&number=".$to."&content=".urlencode($message);
    $fp = fopen($URL, 'r');
    return fread($fp, 1024);
}
$mensagem = $_POST["nome"].", tome agora seu medicamento VIA ORAL: 1 comprimido de prednisona 20mg. O próximo alerta será em 24 horas. O tratamento termina em 5 dias.";
$response = sendSMS($_POST["celular"],$mensagem);
header("Location: http://www.nahora.me");
?>