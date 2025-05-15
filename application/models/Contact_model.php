<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function insert_contact($data) {
        // Insert contact data into your database
        $this->db->insert('tbl_enquiry', $data);
    }
}
