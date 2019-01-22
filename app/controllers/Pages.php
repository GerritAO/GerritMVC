<?php
  class Pages extends Controller{
    public function __construct(){
     
    }

    public function index(){
      $data =  [
        'title'=>'Welcome Gerrit'
      ];
      $this->view('pages/home',$data);
    }

    public function about(){
      $this->view('pages/about');
      
      
    }
  }