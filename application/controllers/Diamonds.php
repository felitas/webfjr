<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Diamonds extends CI_Controller {

	public function index()
	{	
		$data['title'] = 'Fajar Baru Jewellery - Products';
		$this->template->load('default','diamonds/all_products',$data);
	}

}
?>