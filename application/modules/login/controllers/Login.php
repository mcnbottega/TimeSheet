<?php 

/*
 * Arquivo: login.php
 * Localizacao: modules/login/controllers
 * Autor: Maicon
 * Mail: mcn.bottega@gmail.com
 * Data: 23/03/2020
 * Descricao: Controlador módulo de login
 */

if (!defined('BASEPATH')) { exit('No direct script access allowed'); }

class Login extends MX_Controller {
    
    private $model;
    private $data;
    
    public function __construct() {
        parent::__construct();
        $this->model = $this->router->class . '_model';
        $this->data['carregar']['modulo'] = $this->router->class;
    }
    
    public function index() {
        
        if (isset($this->session->userdata['sessaoTimeSheet'])) { 
            redirect(base_url('home'));
        }
        
        // CSS para serem carregados nessa página
        $this->data['css'][] = 'assets/global/plugins/select2/select2.css';
        $this->data['css'][] = 'assets/admin/pages/css/login.css';
        
        // JS para serem carregados nessa página
        $this->data['js'][] = 'assets/global/plugins/jquery-validation/js/jquery.validate.min.js';
        $this->data['js'][] = 'assets/global/plugins/select2/select2.min.js';
        $this->data['js'][] = 'assets/global/scripts/metronic.js';
        $this->data['js'][] = 'assets/admin/layout/scripts/layout.js';
        $this->data['js'][] = 'assets/admin/pages/scripts/login.js';
        
        // Carrega view
        $this->templates->login($this->data);
    }
    
    public function validar() {
        
        // Busca post
        $post = $this->input->post();
        
        // Busca model
        $model = $this->model;
        $this->load->model($model);

        
        $return = $this->$model->buscaLogin($post);  
        
        if (!empty($return)){

                $data['sessaoTimeSheet'] = $return;
                $this->session->set_userdata($data);
                redirect(base_url('home'));

        }else {

            $this->session->set_flashdata('erro_login', 'Usuário e/ou senha incorretos');
            redirect(base_url());

        }  
    }
    
    public function sair() {
        $this->session->unset_userdata('sessaoTimeSheet');
        $this->session->set_userdata();
        $this->session->set_flashdata('erro_login', 'Você foi deslogado do sistema!');
        redirect(base_url());
    }
    
}