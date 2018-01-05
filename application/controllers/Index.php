<?php
class Index extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set('UTC');

    }
    /*Main FUnctions***************************************************************************************************************/
    public function index()
    {
        $this->data = array(
            'title' => "Soppelo - The online local store for electronics,clothing,accessories,hardwares,appliances etc.",
            'css'=>array(base_url('public/css/index.css')),
        );
        $this->load->view('index',$this->data);
    }
}