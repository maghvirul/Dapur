<?php 

class Matematika extends CI_Controller {
    private $data;
    private $rules = array(
                        array(
                             'field'   => 'pertama', 
                             'label'   => 'Bilangan Pertama', 
                             'rules'   => 'required|numeric'
                          ),
                       array(
                             'field'   => 'kedua', 
                             'label'   => 'Bilangan Kedua', 
                             'rules'   => 'required|numeric'
                          ),
                       array(
                             'field'   => 'operasi', 
                             'label'   => 'Operasi', 
                             'rules'   => 'required'
                          )
                    );
    
    function __construct(){
        parent::__construct();
        
        $this->load->library('form_validation');
        $this->load->helper('form');
    }
    
    function index() {
      $this->data->hasil = '0';
        $this->form_validation->set_rules($this->rules);
        
        if($this->form_validation->run()) {
            $pertama = $this->input->post('pertama');
            $kedua = $this->input->post('kedua');
            
            switch($this->input->post('operasi')) {
                case 'tambah':
                $this->data->hasil = $pertama+$kedua;
                continue;
                
                case 'kurang':
                $this->data->hasil = $pertama-$kedua;
                continue;
                
                case 'kali':
                $this->data->hasil = $pertama*$kedua;
                continue;
            }
        }
        
        $this->data->pertama = set_value('pertama');
        $this->data->kedua = set_value('kedua');
        
        $this->load->view('publik/matematika',$this->data);
    }
}

?>