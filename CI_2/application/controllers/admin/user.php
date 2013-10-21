<?php

class User extends CI_Controller {
    function __construct() {
        parent::__construct();
    }
    
    function index() {
        echo 'Hello World!';
    }
    
    function nama($nama='',$status='') {
        echo 'Nama User :';
        echo '<br>';
        echo $nama;
        echo '<br>';
        echo $status;
        echo '<br>';
    }
    
    function peringatan(){
        echo 'Anda sudah di alihkan!';
    }
    
    function _rahasia() {
        echo 'Halaman ini bersifat rahasia!';
    }
    
    function _remap($method)
    {
        if ($method == 'nama')
        {
            $this->peringatan();
        }
        else
        {
            $this->$method();
        }
    }
}

?>