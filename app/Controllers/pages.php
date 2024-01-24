<?php
namespace App\Controllers;

class Pages extends BaseController {
    
    public function index(){
        $data=['title'=>'Inicio',
        'mensaje'=>'Descubre nuestros muñecos artesanales',
        'saludo'=>'Bienvenido al mundo encantado de los muñecos hechos a mano'];
        return view('pages/index', $data);
    }
}
?>