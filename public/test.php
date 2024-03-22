<?php

    $username = 'ciniutek';
    $password = 'd13j9kex';
    $loginUrl = 'https://premiumy.pl/';

    //init curl
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $loginUrl);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, 'login='.$username.'&password='.$password);
    curl_setopt($ch, CURLOPT_COOKIEJAR, 'cookie.txt');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

    //execute the request (the login)
    $store = curl_exec($ch);

    echo $store;
    
    
    