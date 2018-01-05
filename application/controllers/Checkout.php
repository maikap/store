<?php

class Checkout extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library(array('Payment'));
        date_default_timezone_set('Asia/Kolkata');

    }
    function index(){
        $this->data = array(
            'title' => "All Items",
            'css'=>array(base_url('public/css/checkout.css'),base_url('public/css/main.css'))
        );
        $this->load->view('header',$this->data);
        $this->load->view('checkout.php');
        $this->load->view('footer');
    }
    function pay(){
         $this->payment->makepayment();
    }
}