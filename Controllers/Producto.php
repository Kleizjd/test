<?php

class Producto extends Controllers{

    public function __construct(){
        parent::__construct();
    }
    public function Producto() {
        $data['page_tag'] = "Producto";
		$data['page_title'] = "Producto <small> Test</small>";
		$data['page_name'] = "producto";
		// $data['page_functions_js'] = "functions_prueba.js";
		$this->views->getView($this,"producto",$data);
    }
    public function setProducto(){

    }
}