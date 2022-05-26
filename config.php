<?php

define("PROJECT_URL", "http://localhost/php_template/");

define("PROJECT_NAME", "PROJECT NAME");

define("PROJECT_VERSION", "1.00.1000-alpha1");

define("PROJECT_ROOT" , $_SERVER["DOCUMENT_ROOT"]. "/php_template");


/** DataLayer config params 
 * Read coffeecode/dataLayer documentation in Packagist for more information
 * @link https://packagist.org/packages/coffeecode/datalayer    
 */
define("DATA_LAYER_CONFIG", [
    "driver" => "mysql",
    "host" => "localhost",
    "port" => "3306",
    "dbname" => "db_template",
    "username" => "admin",
    "passwd" => "root",
    "options" => [
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_CASE => PDO::CASE_NATURAL
    ]
]);

/** Message Helper 
 * @param String $messageText Description/text of message
 * @param String $messageType Indicates the type of the message
 *  - 'Default' (Default): Default message
 *  - 'Error': Error message
 *  - 'Success': Success message
 */
function message(String $messageText, string $messageType = "Default") : stdClass
{
    $message = [
        "toast_body" => filter_var($messageText, 515),
        "title_class" => match($messageType){
            default => "text-primary",
            "Default" => "text-primary",
            "Error" => "text-danger",
            "Success" => "text-success"
        },
        "title" => match($messageType){
            default => "Mensagem",
            "Default" => "Mensagem",
            "Error" => "Erro",
            "Success" => "Sucesso"
        }
    ];
    
    return (object) $message;
}