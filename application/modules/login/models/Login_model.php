<?php

if (!defined('BASEPATH')) { exit ('No direct script access allowed'); }

class Login_model extends CI_Model {
    
    public function __construct() {
        parent::__construct();
        $this->PERMISSAO = 'PERMISSAO_E_S';
    }
    
    public function buscaLogin($post) {
        
        //error_reporting(E_ALL);
           
        $dados = array(
            $post['email'],
            $post['senha']
        );
        
        $sql = 
            ' SELECT '.
                ' u.name,'.
                ' u.email,'.
                ' u.username'.
            ' FROM users u'.
            ' WHERE u. email = ? '.
            ' AND u.password = sha1(?) ';
               
        $r = $this->db->query($sql, $dados);
        
        $a = $r->row_array();

        return array('name' => $a['name'], 'email' => $a['email'], 'username' => $a['username']);;
    }
    
}