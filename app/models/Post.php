<?php

    /**
     * this is an example model
     * just for test connection to database
     * this is not part of the framework
     */
    
    class Post{
        private $db;

        public function __construct(){
            $this->db = new Database;
        }

        public function getPosts(){
            // database table posts id and title just for test
            $this->db->query("SELECT * FROM posts");
            return $this->db->resultSet();
        }
    }