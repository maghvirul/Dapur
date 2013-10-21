<?php

class Form extends CI_Controller {
    
    function __construct(){
        parent::__construct();
        
        $this->load->helper(array('form', 'url'));

		$this->load->library(array('form_validation','cart'));
    }

	function index()
	{
		$this->load->helper(array('form', 'url'));

		$this->load->library('form_validation');
        
        $this->form_validation->set_message('required', 'Field %s sangat dibutuhkan');
        $this->form_validation->set_error_delimiters('<div style="color:red;">', '</div>'); 
        
        $this->form_validation->set_rules('username', 'Username', 'callback_username_check');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');


		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('myform');
		}
		else
		{
			$this->load->view('formsuccess');
		}
	}
    
    function keranjang(){
        $this->load->library('cart');
        $data = array(
               array(
                       'id'      => 'sku_123ABC',
                       'qty'     => 1,
                       'price'   => 39.95,
                       'name'    => 'T-Shirt',
                       'options' => array('Size' => 'L', 'Color' => 'Red')
                    ),
               array(
                       'id'      => 'sku_567ZYX',
                       'qty'     => 1,
                       'price'   => 9.95,
                       'name'    => 'Coffee Mug'
                    ),
               array(
                       'id'      => 'sku_965QRS',
                       'qty'     => 1,
                       'price'   => 29.95,
                       'name'    => 'Shot Glass'
                    )
            );

        $this->cart->insert($data);
        
        if($_POST){
            $this->cart->update($_POST);
        }
        
        $this->load->view('cart');
    }
    
    function username_check($str)
	{
		if ($str == 'test')
		{
			$this->form_validation->set_message('username_check', 'The %s field can not be the word "test"');
			return FALSE;
		}
		else
		{
			return TRUE;
		}
	}

}
?>
