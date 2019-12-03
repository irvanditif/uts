<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Log_model extends CI_Model{  

    private $_table = "log";

    function tampil_data()
    {
        return $this->db->query("select * from log");
    }
}
