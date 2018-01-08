<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class MainController extends CI_Controller
{

		function __construct()
	{
		Parent::__construct();
		$this->load->library('form_validation');
		
		
		
	}


public function index()
{


$this->load->view('test');


}


function bikin_barcode($kode)
{
//kita load library nya ini membaca file Zend.php yang berisi loader
//untuk file yang ada pada folder Zend
$this->load->library('zend');
 
//load yang ada di folder Zend
$this->zend->load('Zend/Barcode');
 
//generate barcodenya
//$kode = 12345abc;
Zend_Barcode::render('code128', 'image', array('text'=>$kode), array());
}
//end of class



}?>