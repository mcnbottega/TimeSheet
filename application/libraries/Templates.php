<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

    /*
     * Biblioteca de templates
     * @Autor: Maicon Bottega
     * @Mail: mcn.bottega@gmail.com
     * @Data: 13/03/2020
     */

    class Templates {
        
        private $ci;
        
        public function __construct() {
            $this->ci =& get_instance();
        }

        public function padrao($data) {
            $this->ci->load->view('template/cabecalho', $data);
            $this->ci->load->view('template/barra_topo', $data);
            $this->ci->load->view($data['carregar']['modulo'] . '/' . $data['carregar']['interna'], $data);
            $this->ci->load->view('template/rodape', $data);
            $this->ci->load->view('template/js', $data);
        }

        public function login($data) {
            $this->ci->load->view('template/cabecalho', $data);
            $this->ci->load->view('login/login');
            $this->ci->load->view('template/js', $data);
        }

        public function home($data){
            $this->ci->load->view('template/cabecalho', $data);
            $this->ci->load->view('template/menu_esquerda', $data);
            $this->ci->load->view($data['carregar']['modulo'] . '/' . $data['carregar']['interna'], $data);
            $this->ci->load->view('template/rodape', $data);
            $this->ci->load->view('template/js', $data);
        }

    }
/*
 * Fim do arquivo templates.php
 * Location: ./application/libraries
 */