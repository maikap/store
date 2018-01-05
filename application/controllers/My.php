<?php
class My extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Kolkata');

    }
    function profile(){
        $this->data = array(
            'title' => "All Items",
            'css'=>array(base_url('public/css/my.css'),base_url('public/css/main.css'),base_url('public/css/footer.css'))
        );
        $this->load->view('header.php',$this->data);
        $this->load->view('profile.php');
        $this->load->view('footer.php');
    }
    function orders(){
        $this->data = array(
            'title' => "All Items",
            'css'=>array(base_url('public/css/my.css'),base_url('public/css/main.css'))
        );
        $this->load->view('header.php',$this->data);
        $this->load->view('orders.php');
        $this->load->view('footer.php');
    }
    function demo(){
        $this->data = array(
            'title' => "All Items",
            'css'=>array(base_url('public/css/main.css').base_url('public/css/plugin/responsive.css'))
        );
        $this->load->view('header.php',$this->data);
        $this->load->view('products/demo.php');
        $this->load->view('footer.php');
    }
    function details(){
        $this->load->view('shipment.php');
    }
    function addresses(){
        $this->load->view('address.php');
    }
}