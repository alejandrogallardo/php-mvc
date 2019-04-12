<?php

    class Pages extends Controller {
        
        public function __construct(){
            //echo 'Pages loades';
            //$this->postModel = $this->model('Post'); just for test from Post model
        }

        public function index(){
            // $posts = $this->postModel->getPosts(); just for test from Post model
            $data = [
                'title' => 'Welcome',
                // 'posts' => $posts, just for test from Post model use foreach on index.html create database first
                'document' => 'This is a random string'
            ];

            $this->view('pages/index', $data);
        }

        public function about(){
            $data = [
                'title' => 'About Us',
                'document' => 'This is About page'
            ];
            $this->view('pages/about', $data);
        }
    }