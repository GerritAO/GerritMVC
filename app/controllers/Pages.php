<?php
  class Pages {
    public function __construct(){
     
    }

    public function index(){
      echo " it works";
    }

    public function about($id){
      echo $id;
    }
  }