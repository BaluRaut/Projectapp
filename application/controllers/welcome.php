<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
    
     /**-----------------------------------------------------
      * ----------------------------------------------------
      * Load construct- all libraries and helper and database
      */
         function __construct()
         {
             parent::__construct();
             $this->load->helper('url');
         }
         
      /**-----------------------------------------------------
      * ----------------------------------------------------
      * Load Index of the controller file It will automatically call when user load the controller name in the browser
      */
	public function index()
	{
               // This is for the load views/welcome_message.php file in browser
		//$this->load->view('welcome_message');
            redirect('user/login');
	}
        public function projects()
        {
            echo "op";
            die();
            //$this->load->views('projects');
            
        }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */