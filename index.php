<?php
$ch = curl_init("http://localhost:8080/ping");
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_exec($ch);
// curl_exec($ch);
curl_close($ch);
