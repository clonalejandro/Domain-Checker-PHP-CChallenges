<?php
/**
 * Created by IntelliJ IDEA.
 * User: alejandrorioscalera
 * Date: 6/4/17
 * Time: 14:33
 */


/** SMALL CONSTRUCTORS **/

require "core.php";

$domain = "clonalejandro.me";
$sucess = "Domain is available";
$error = "Domain is ready in use";


/** REST **/

$res = comprobator($domain, $sucess, $error);

echo $res;
