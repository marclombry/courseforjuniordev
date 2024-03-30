<?php 
namespace MyApp\Core\Model;

trait tempalte {
    public static function Render(string $text) {
        return '<p>'.$text.'</p>';
    }
}