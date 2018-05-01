<?php
$key = "HaiHello";
$enc = base64_encode ($key);
$dec = base64_decode ($enc);
echo 'Encrypted : '.$enc.'<br>';
echo 'Decrypted : '.$dec.'<br>';

?>