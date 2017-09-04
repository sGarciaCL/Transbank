<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Contiene datos de integración para realizar pruebas de conectividad
 **/
return $integration_default = array(

/**
 * Llave Privada
 **/
"private_key" => "-----BEGIN RSA PRIVATE KEY-----<br/>"
    . 
    . "-----END RSA PRIVATE KEY-----",

/**
 * Certificado Publico
 **/
"public_cert" => "-----BEGIN CERTIFICATE-----<br/>"
    .>"
    . "-----END CERTIFICATE-----",

/**
 * Certificado Privado
 **/
"webpay_cert" => "-----BEGIN CERTIFICATE-----<br/>"
    . 
    . "-----END CERTIFICATE-----",

/**
 * Codigo Comercio
 **/
"commerce_code" => "597020000541",

);
