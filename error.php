<?php
ini_set('error_log', __DIR__.'/php_errors.log');
echo $n1;

try {
    throw new Exception("Error Processing Request", 1);
    
} catch (Exception $err) {
    error_log($err->getMessage());
}
?>