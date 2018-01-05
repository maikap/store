<?php
class Products extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Kolkata');

    }
    /*Main FUnctions***************************************************************************************************************/
    public function product_lookup()
    {
        $seg1=$this->uri->segment(2);
        $seg2=$this->uri->segment(3);
        $seg3=$this->uri->segment(4);
        $this->data = array(
            'title' => "All Items",
            'css'=>array(base_url('public/css/products.css'),base_url('public/css/main.css'))
        );
        $this->load->view('header', $this->data);
        $this->load->view('products/index');
        $this->load->view('footer');
    }
    public function view(){
        $this->data = array(
            'title' => "View Items",
            'css'=>array(base_url('public/css/view.css'),base_url('public/css/magnifier.css')),
            'js'=>array(base_url('public/js/magnifier.js'))
        );
        $this->load->view('header', $this->data);
        $this->load->view('products/view');
        $this->load->view('footer');
    }
}