<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class app extends CI_Controller {

 function __construct()
   {
       parent::__construct();
       $this->load->helper('cookie');
       $this->load->helper('url');
        $this->load->library('session');
   
        

        if ( $this->session->token == NULL ) {
            if  (empty( $this->input->get("token"))  ) {
                $this->session->set_userdata('checked', 'yes');
                redirect("http://161.35.178.32:8888/check_login?url=".  current_url() , 'refresh');
            } 
            if (empty( $this->input->get("token")))  {
                $this->session->set_userdata('token', 'invalid');
            } else {
                $this->session->set_userdata('token', $this->input->get("token"));
            }

            redirect(base_url() , "refresh");
        } else {
             
            if (!empty($this->input->get("token"))) {
              $this->session->set_userdata('token', $this->input->get("token"));
              redirect(base_url()); 
            } 

            
        }

   
        
   }


	/**
	 * Index Page for this controller.
	 */
	public function index()
	{
        $firstname = "";        

            if (  $this->session->checked == "no" ) {

                  $this->session->set_userdata('checked', 'yes');
                   redirect("http://161.35.178.32:8888/check_login?url=".  current_url() , 'refresh');

            }

          $this->session->set_userdata('checked', 'no');


        if ($this->session->has_userdata("token") && $this->session->token != 'invalid') {    
        $url = 'http://161.35.178.32:8888/getuserinfo';
        $data = array( "token" => $this->session->token);
            $jdata= ( json_decode($this->postRequest($url,$data)));
           $firstname = $jdata->firstname;

        } else {
         $firstname = "";
        }
    
	   	$this->load->view('index', array("firstname" => $firstname));

             $this->session->set_userdata('checked', 'no');
	}

    public function login()
    {

        
        $this->load->view('login');
    }
    public function register()
    {
        $this->load->view('register');
    }
    public function logout()
    {
         // $this->session->set_userdata('checked', 'no');
        $url = "http://161.35.178.32:8888/logout";
        $this->session->sess_destroy();
        
        redirect($url. "?url=" . base_url(), 'refresh');
    }
    
  


    private  function getRequest($url)
    {
        /* API URL */
        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => $url,
        ]);
        // Send the request & save response to $resp
        $resp = curl_exec($curl);
        // Close request to clear up some resources
        curl_close($curl);
        return $resp;
    }

    private  function postRequest($url,$data)
    {
        $curl = curl_init();
        // Set some options - we are passing in a useragent too here
        curl_setopt_array($curl, [
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => $url,
            CURLOPT_POST => 1,
            CURLOPT_POSTFIELDS => $data
        ]);
        // Send the request & save response to $resp
         $resp = curl_exec($curl);
         // Close request to clear up some resources
        curl_close($curl);
        return $resp;
    }

    public function getuserinfo() {
        $url = 'http://161.35.178.32:8888/getuserinfo';
        $data = array( "token" => $this->session->token);
        echo "REST POST http://161.35.178.32:8888/getuserinfo ... with sending current usertoken: ".$this->session->token ."<br><br><br>";
        echo $this->postRequest($url,$data);

    }



}

