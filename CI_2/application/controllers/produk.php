<?php 

class Produk extends CI_Controller{
    function __construct(){
        parent::__construct();
    }
    
    function index(){
     $this->data->produk = array(array( 'nama'  => 'Sepatu',
                                        'harga' => '10000'),
                                        
                                array(  'nama'  => 'T-Shirt',
                                        'harga' => '20000'),
                                
                                array(  'nama'  => 'Celana',
                                        'harga' => '25000'),
        
                            );
        
        $this->load->view('publik/view_produk',$this->data);
    }
    
    function parser(){
        $this->load->library('to_roman');
        $this->load->library('parser');
        
        $this->parser_data = array  (   
                'kategori'  =>  'Sepatu',
                'deskripsi' =>  'Berisi berbagai macam merk dan jenis sepatu',
                'produk'    => array(
                                 array(     'nama'  =>  'CR7 Series',
                                            'tahun' =>  $this->to_roman->convert('1985'),
                                            'harga' =>  '10000'),
                                            
                                 array(     'nama'  =>  'Beckham Series',
                                            'tahun' =>  $this->to_roman->convert('1998'),
                                            'harga' =>  '20000'),
                                    
                                 array(     'nama'  =>  'Adidas Messie',
                                            'tahun' =>  $this->to_roman->convert('2010'),
                                            'harga' =>  '25000'),
                        )
                );
                                        
        $this->parser->parse('publik/parser_produk',$this->parser_data);
    }
    
}

?>