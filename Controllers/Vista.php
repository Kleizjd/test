<?php 

	class Vista extends Controllers{
		public function __construct()
		{
            parent::__construct();
            session_start();
		}

		public function Vista()
		{
			$data['page_id'] = 2;
			$data['page_tag'] = "Vista - Tienda Virtual";
			$data['page_title'] = "Vista - Tienda Virtual";
			$data['page_name'] = "dashboard";
			$data['page_functions_js'] = "functions_vista.js";
			
				$this->views->getView($this,"vista",$data);

		}

	
	}
 ?>