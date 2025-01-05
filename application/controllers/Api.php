<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH . '/libraries/REST_Controller.php';

class Api extends REST_Controller {

    function __construct()
    {
        // Construct the parent class
        parent::__construct();
    }

    public function users_get()
    {
        // Users from a data store e.g. database
        $users = [
            ['id' => 0, 'name' => 'John', 'email' => 'john@example.com'],
            ['id' => 1, 'name' => 'Jim', 'email' => 'jim@example.com'],
        ];

        $this->response( $users, 200 );
    }
}