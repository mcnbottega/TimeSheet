<?php 

/*
 * Arquivo: login.php
 * Localizacao: modules/home/controllers
 * Autor: Maicon
 * Mail: mcn.bottega@gmail.com
 * Data: 23/03/2020
 * Descricao: Controlador módulo de home
 */

if (!defined('BASEPATH')) { exit('No direct script access allowed'); }

class Home extends MY_Controller {
    
    private $data;
    
    public function __construct() {
        parent::__construct();     
        $modelPadrao = $this->router->class . '_model';
        $this->load->model($modelPadrao, 'model'); 
        
        $this->data['carregar']['modulo'] = $this->router->class;
    }
    
    public function index() {
         $this->data['carregar']['interna'] = 'home';
        
        $this->templates->home($this->data);
    }

    
}