<?php
    namespace Captcha\Classes;
    class MyCaptcha{

        public $symbols = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        public $rnd;
        public $dir;
        public $image;
        public $black;
        public $color;
        public $white;

        public function get(){
            $this->rnd = substr(str_shuffle($this->symbols),0, 1).'-'.substr(str_shuffle($this->symbols), 0, 2).'-'.
                substr(str_shuffle($this->symbols), 0, 2).'-'.substr(str_shuffle($this->symbols),0, 1);

            $this->dir = __DIR__.'/../fonts/';
            
            $this->image = imagecreatetruecolor(200, 60);
            $this->black = imagecolorallocate($this->image, 0, 0, 0);
            $this->color = imagecolorallocate($this->image, 192, 18, 117);
            $this->white = imagecolorallocate($this->image, 255, 255, 255);
            
            imagefilledrectangle($this->image,0,0,399,99,$this->white);
            imagettftext ($this->image, 30, 0, 10, 40, $this->color, $this->dir.'19537.ttf', $this->rnd);

            header('Content-Disposition: attachment; filename="'.$this->rnd.'.png"');
            imagepng($this->image);
        }
    }