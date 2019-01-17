<?php
  class Pages {
    public function __construct(){
     
    }

    public function index(){
      echo "i can see this";
    }

    public function about($id){
      echo $id;
    }
  }