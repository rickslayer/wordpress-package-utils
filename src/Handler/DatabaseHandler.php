<?php
namespace Actio\Handler;

final class DatabaseHandler 
{
    private $db;
    public function __construct()
    {
        global $wpdb;
        $this->db = $wpdb;

    }
    
    public function get($query)
    {
        die(print_r($this->db->get_results($query), true));
    }

    public function where()
    {
        
    }

   
}
