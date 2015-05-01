<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quotes extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    
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
	public function index()
	{
		$this->load->view('index');
	}

    public function index_json()
    {
        $this->load->model("Quote");
        $data['quotes'] = $this->Quote->all();
        echo json_encode($data);
    }
    
    public function index_html(){
        $this->load->model("Quote");
        $data['quotes'] = $this->Quote->all();
        $this->load->view("partial",$data);
    }
    public function add(){
        $post = $this->input->post(null,true);
        $this->load->model("Quote");
        $data['quotes'] = $this->Quote->add($post);
        redirect();
    }
    public function create(){
        $post = $this->input->post(null,true);
        $this->load->model("Quote");
        $this->Quote->add($post);
        $data['quotes'] = $this->Quote->all();
        $this->load->view("partial", $data);
    }
}
