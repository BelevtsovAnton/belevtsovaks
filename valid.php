<?php

$errors = [];

$name = $_POST['name'];
$email = $_POST['email'];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (empty($name)) {
        $errors['name'] = "Введіть ваше ім'я";
    }
    if (empty($email)) {
        $errors['email'] = "Введіть електрону адресу";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Невірна адреса";
    }

    if (count($errors) === 0) {

        $token = "6713439506:AAHEbdZsdLFmvcUlYCb0sUlsazjDU_D2bBk";

        $chat_id = "-4042580098";
        $arr = [
            'Їм`я користувача :' => $name,
            'email :' => $email,
        ];

        foreach ($arr as $key => $value) {
            $txt .= "<b>" . $key . "</b>" . $value . "%0A";
        }

        
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $response = curl_exec($ch);
        curl_close($ch);
    }
    header('Location: page.php');
    exit();
}


