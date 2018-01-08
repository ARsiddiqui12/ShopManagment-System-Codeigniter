<?php

if(!file_exists('application/views/'.$pagename.'.php'))
{

show_404();

}else{

$this->load->view('template/header');
$this->load->view($pagename);
$this->load->view('template/footer');
}










?>