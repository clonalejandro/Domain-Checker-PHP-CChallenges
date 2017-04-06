<?php
/**
 * Created by IntelliJ IDEA.
 * User: alejandrorioscalera
 * Date: 6/4/17
 * Time: 14:39
 */


/** REST  **/

function comprobator($domain, $sucess, $error){

    if (gethostbyname($domain) != $domain) {
        $state = $error;
    }
    else { $state = $sucess; }
    return $state;
}
