<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    function __construct() {

        parent::__construct();
        error_reporting(E_PARSE);
        $this->load->model('Md');
        $this->load->library('session');
        $this->load->library('encrypt');
    }

    public function index() {
        // $url = 'http://www.arm.novariss.com/index.php/product/lists';
        $url = 'http://10.0.0.251/arm/index.php/product/lists'; // path to your JSON file
        //$url = 'http://localhost/arm/index.php/product/lists';
        $data = file_get_contents($url);
        $characters = json_decode($data); // decode the JSON feed
        // var_dump($characters);
        $cats= array();
        foreach ($characters as $l ){
            
          $cats[] =  $l->Category;            
        }
        $unique_cats = array_unique($cats);    
       
        $datas = array(
            'c' => $characters,
            'p'=>$unique_cats
        );
        $this->load->view('index', $datas);
    }
    public function product() {

        $id = urldecode($this->uri->segment(3));
        $url = 'http://10.0.0.251/arm/index.php/product/select/' . $id; // path to your JSON file 

        // $url = 'http://www.arm.novariss.com/index.php/product/select/' . $id ;     
        $data = file_get_contents($url); // put the contents of the file into a variable
 
        // var_dump($data);
        $characters = json_decode($data); // decode the JSON feed

        $datas = array(
            
            'c' => $characters
        );
        $this->load->view('product-page', $datas);
    }
    public function category() {
         $cat = urlencode($this->uri->segment(3));
        // $url = 'http://www.arm.novariss.com/index.php/product/lists';
        $url = 'http://10.0.0.251/arm/index.php/product/category/'.$cat; 
        //$url = 'http://localhost/arm/index.php/product/lists';
        $data = file_get_contents($url);
        $characters = json_decode($data); // decode the JSON feed
        // var_dump($characters);
        
        $urls = 'http://10.0.0.251/arm/index.php/product/lists'; // path to your JSON file
        //$url = 'http://localhost/arm/index.php/product/lists';
        $datap = file_get_contents($urls);
        $charactersp = json_decode($datap); // decode the JSON feed
        // var_dump($characters);
        $catsp= array();
        foreach ($charactersp as $l ){
            
          $catsp[] =  $l->Category;            
        }
        $unique_cats = array_unique($catsp);     
       
      
        $datas = array(
            'c' => $characters,
            'p'=>$unique_cats
        );
        $this->load->view('category-page', $datas);
    }

    public function mail() {
        $this->load->helper(array('form', 'url'));
       
//info@aamedsupplies.com

        $email = $this->input->post('email');
        $name = $this->input->post('name');
        $phone = $this->input->post('phone');
        $body = $this->input->post('body');     
       

        $subject = "Online Inquiry";       
         $from_email = $email;    
         //Load email library 
         $this->load->library('email'); 
   
         $this->email->from($from_email, 'Your Name'); 
         //$this->email->to('info@aamedsupplies.com');
         $this->email->to('weredouglas@gmail.com');
         $this->email->subject($subject); 
         $this->email->message($body); 
   
         //Send mail 
         if($this->email->send()) 
         $this->session->set_flashdata("email_sent","Email sent successfully."); 
         else 
         $this->session->set_flashdata("email_sent","Error in sending Email."); 
         //$this->load->view('email_form'); 
       
        redirect('/home', 'refresh');
    }

    

    public function GUID() {
        if (function_exists('com_create_guid') === true) {
            return trim(com_create_guid(), '{}');
        }

        return sprintf('%04X%04X-%04X-%04X-%04X-%04X%04X%04X', mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(16384, 20479), mt_rand(32768, 49151), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535));
    }

}

?>