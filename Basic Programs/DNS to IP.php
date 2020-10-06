<?php
echo "Type your url : ";
$dns = trim(fgets(fopen("php://stdin","r")));
echo "\r\n";

if(strstr($dns, "http"))
{
    echo "IP : " . gethostbyname(parse_url($dns, PHP_URL_HOST));
} else {
    echo "IP : " . gethostbyname($dns);
}
