<?php

//Necessário testar em dominio com SSL
define("URL", "https://artesete-1.onrender.com/");

$sandbox = true;
if($sandbox){
    define("EMAIL_PAGSEGURO", "orlandoparga@gmail.com");
    define("TOKEN_PAGSEGURO", "AF60C4C5D8B34727ABFB15ED2DE4AB1A");
    define("URL_PAGSEGURO", "https://ws.sandbox.pagseguro.uol.com.br/v2/");
    define("SCRIPT_PAGSEGURO", "https://sandbox.pagseguro.uol.com.br/v2/checkout/pagseguro.directpayment.js");
}else{
    define("EMAIL_PAGSEGURO", "Seu e-mail no PagSeguro");
    define("TOKEN_PAGSEGURO", "Seu token no PagSeguro");
    define("URL_PAGSEGURO", "https://ws.pagseguro.uol.com.br/v2/");
    define("SCRIPT_PAGSEGURO", "https://stc.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.directpayment.js");
}