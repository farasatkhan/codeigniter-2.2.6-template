<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Templates extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }
    
    public function index() {
        $this->load->view('template');
    }
    
    public function view($page = 'home') {
        if(file_exists(APPPATH.'views/templates/'.$page.'.php')) {
            $this->load->view('templates/'.$page);
        } else {
            show_404();
        }
    }
}