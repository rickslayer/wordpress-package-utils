<?php
namespace Actio\Handler;

class DBHandler {
    private $query;
    private $id;
    private $instance;

    public function __construct()
    {
        global $wpdb;
        $this->instance = $wpdb;
    }

}
