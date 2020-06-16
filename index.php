<?php
    require_once 'config.php';
    use Captcha\Classes\MyCaptcha;

    $mycaptcha = new MyCaptcha();
    $mycaptcha->get();
?>