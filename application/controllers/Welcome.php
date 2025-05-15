<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Welcome extends CI_Controller
{
	var $data;
	function __construct()
	{
		parent::__construct();
		if (sizeof($_GET) > 0) {
			redirect(base_url());
		}
		$this->load->model("Publicmodel", "p");
		// $this->load->model('Blog_model', 'b');
		$this->data['allmeta'] = $this->p->allmetacontent($this->uri->segment(1));
		$this->data['geodata'] = $this->p->getalldata("tbl_geocode");
		$this->data['companydata'] = $this->p->getalldata("tbl_company");
		$this->data['coursecat'] = $this->p->productlist(0, "id", "tbl_course_category", 'services_short');
	}

	public function index()

	{
		echo "TEST123";
		$this->data['sliderlist'] = $this->p->productlist(0, "id", "tbl_slider", 'slide_short');
		$this->data['coursecatlist'] = $this->p->productlist(0, "id", "tbl_course_category", 'services_short');
		$this->data['courselist'] = $this->p->productlist(0, "id", "tbl_pages", 'page_short');
		$this->data['servicelist'] = $this->p->productlist(0, "id", "tbl_services");
		$this->data['technologieslist'] = $this->p->productlist(0, "id", "tbl_technologies");
		$this->data['teamlist'] = $this->p->getloopdata(1, "teamtype", "tbl_team", 'serialnum');
		$this->data['testimonial'] = $this->p->productlist(0, "id", "tbl_testimonial", 'services_short');
		$this->data['faq'] = $this->p->productlist(0, "id", "tbl_faq", 'services_short');
		// $this->data['worklist']=$this->p->productlist(0, "id", "tbl_testimonial", 'services_short');
		// $this->data['aluminilist']=$this->p->getloopdata(0, "teamtype", "tbl_team", 'serialnum');
		// $this->data['video'] = $this->p->youtubeVideo();
		$this->load->view('front/frontpage', $this->data);
	}

	public function team()
	{
		$this->data['coursecatlist'] = $this->p->productlist(0, "id", "tbl_course_category", 'services_short');
		$this->data['teamlist'] = $this->p->getloopdata(1, "teamtype", "tbl_team", 'serialnum');
		$this->data['aluminilist']=$this->p->getloopdata(0, "teamtype", "tbl_team", 'serialnum');
		$this->load->view('front/teampage', $this->data);
	}

	// public function work()
	// {
	// 	$this->data['coursecatlist']=$this->p->productlist(0, "id", "tbl_course_category", 'services_short');
	// 	$this->data['workcat']=$this->p->getloopdata(1, "work", "tbl_work_category", 'services_short');
	// 	$this->data['worklist']=$this->p->productlist(0, "id", "tbl_work", 'services_short');
	// 	$this->load->view('front/studentwork', $this->data);
	// }

	public function portfolio()
	{
		$this->data['coursecatlist'] = $this->p->productlist(0, "id", "tbl_course_category", 'services_short');
		$this->data['workcat'] = $this->p->getloopdata(1, "work", "tbl_work_category", 'services_short');
		$this->data['worklist'] = $this->p->productlist(0, "id", "tbl_work", 'services_short');
		$this->load->view('front/portfolio', $this->data);
	}

	public function tutorial()
	{
		$this->data['coursecatlist'] = $this->p->productlist(0, "id", "tbl_course_category", 'services_short');
		$this->data['workcat'] = $this->p->getloopdata(1, "tutorial", "tbl_work_category", 'services_short');
		$this->data['worklist'] = $this->p->productlist(0, "id", "tbl_tutorial", 'services_short');
		$this->load->view('front/tutorials', $this->data);
	}

	public function testimonials()
	{
		$this->data['coursecatlist'] = $this->p->productlist(0, "id", "tbl_course_category", 'services_short');
		$this->data['worklist'] = $this->p->productlist(0, "id", "tbl_testimonial", 'services_short');
		$this->load->view('front/testimonials', $this->data);
	}



	public function about()
	{
		$this->data['servicelist'] = $this->p->productlist(0, "id", "tbl_services");
		$this->data['teamlist'] = $this->p->getloopdata(1, "teamtype", "tbl_team", 'serialnum');
		$this->data['aluminilist'] = $this->p->getloopdata(0, "teamtype", "tbl_team", 'serialnum');
		$this->data['coursecatlist'] = $this->p->productlist(0, "id", "tbl_course_category", 'services_short');
		$this->load->view('front/aboutpage', $this->data);
	}

	public function gmacalumini()
	{
		$this->data['coursecatlist'] = $this->p->productlist(0, "id", "tbl_course_category", 'services_short');
		$totalalumini = $this->p->getloopdata(0, "teamtype", "tbl_team", 'serialnum');
		$this->load->library('pagination');
		$config = [
			'base_url' => base_url('gmac-alumini'),
			'total_rows' => count($totalalumini),
			'per_page' => 9,
			'full_tag_open' => "<ul class='pagination'>",
			'full_tag_close' => "</ul>",
			'next_tag_open' => "<li>",
			'next_tag_close'	=>	'</li>',
			'prev_tag_open' => "<li>",
			'prev_tag_close'	=>	'</li>',
			'last_tag_open' => "<li>",
			'last_tag_close'	=>	'</li>',
			'first_tag_open' => "<li>",
			'first_tag_close'	=>	'</li>',
			'num_tag_open' => "<li>",
			'num_tag_close'	=>	'</li>',
			'cur_tag_open' => "<li class='active'><a href=''>",
			'cur_tag_close'	=>	'</a></li>',
		];
		$this->pagination->initialize($config);
		$this->data['teamlist'] = $this->p->getloopdata(0, "teamtype", "tbl_team", 'serialnum', $config['per_page'], $this->uri->segment(2));
		$this->load->view('front/gmacalumini', $this->data);
	}

	public function contact()
	{
		$this->data['coursecatlist'] = $this->p->productlist(0, "id", "tbl_course_category", 'services_short');
		$this->data['servicelist'] = $this->p->productlist(0, "id", "tbl_services");
		$this->load->view('front/contactpage', $this->data);
	}

	public function blog()
	{
		$this->data['coursecatlist'] = $this->p->productlist(0, "id", "tbl_blog_category", 'services_short');
		$this->data['blog'] = $this->p->productlist(0, "id", "tbl_blog");
		$this->load->view('front/blogs', $this->data);
	}
	
	public function news()
	{
		$this->data['coursecatlist'] = $this->p->productlist(0, "id", "tbl_course_category", 'services_short');
		$this->data['servicelist'] = $this->p->productlist(0, "id", "tbl_news");
		$this->load->view('front/news', $this->data);
	}
	public function article()
	{
		$this->data['coursecatlist'] = $this->p->productlist(0, "id", "tbl_course_category", 'services_short');
		$this->data['servicelist'] = $this->p->productlist(0, "id", "tbl_services");
		$this->load->view('front/articles', $this->data);
	}
	public function franchise()
	{
		$this->data['coursecatlist'] = $this->p->productlist(0, "id", "tbl_course_category", 'services_short');
		$this->data['servicelist'] = $this->p->productlist(0, "id", "tbl_services");
		$this->load->view('front/franchise', $this->data);
	}
	public function technologies()
	{
		$this->data['coursecatlist'] = $this->p->productlist(0, "id", "tbl_course_category", 'services_short');
		$this->data['servicelist'] = $this->p->productlist(0, "id", "tbl_services");
		$this->load->view('front/technologies', $this->data);
	}
	public function solutions()
	{
		$this->data['coursecatlist'] = $this->p->productlist(0, "id", "tbl_course_category", 'services_short');
		$this->data['servicelist'] = $this->p->productlist(0, "id", "tbl_services");
		$this->load->view('front/solutions', $this->data);
	}
	public function sercies()
	{

		$this->data['coursecatlist'] = $this->p->productlist(0, "id", "tbl_course_category", 'services_short');
		$this->data['servicelist'] = $this->p->productlist(0, "id", "tbl_services");
		$this->load->view('front/servicespage', $this->data);
	}
	public function validation()
	{
		$name 	 = $_POST['name'];
		$email 	 = $_POST['email'];
		$phone 	 = $_POST['phone'];
		$course  = $_POST['course'];
		$message = $_POST['message'];
		if ($this->form_validation->run('enquiry') == FALSE) {
			echo validation_errors();
		} else {
			$data = $this->input->post();
			$createdDate = date('Y-m-d H:i:s');
			$saveEnqueryArr = array(
				'name'    => $name,
				'email'   => $email,
				'phone'   => $phone,
				'course'  => $course,
				'message' => $message,
				'created' => $createdDate
			);
			$this->db->insert('tbl_enquiry', $saveEnqueryArr);
			$this->load->library('email');
			$this->email->set_mailtype("html");
			$this->email->set_newline("\r\n");
			$this->email->from("$email", " $name");
			$this->email->to("info@globalpda.Com");
			$this->email->cc(array("nrjkk1@gmail.com"));
			$this->email->subject("$course : Global Power Data Inquiry");
			$body = $this->load->view('front/inquiryemail', $data, TRUE);
			$this->email->message($body);
			if (!$this->email->send()) {
				echo false;
			} else {
				echo true;
			}
		}
	}

	public function franchisevalidation()
	{
		$name 	   	= $_POST['name'];
		$email 	  	= $_POST['email'];
		$phone 	  	= $_POST['phone'];
		$state 	 	= $_POST['state'];
		$distic	 	= $_POST['distic'];
		$place		= $_POST['place'];
		$message 	= $_POST['message'];
		if ($this->form_validation->run('franchise') == FALSE) {
			echo validation_errors();
		} else {
			$data = $this->input->post();
			$this->load->library('email');
			$this->email->set_mailtype("html");
			$this->email->set_newline("\r\n");
			$this->email->from("$email", " $name");
			$this->email->to("info@globalpda.Com");
			$this->email->cc(array("nrjkk1@gmail.com"));
			$this->email->subject("$distic : Franchise Inquiry");
			$body = $this->load->view('front/franchiesemail', $data, TRUE);
			$this->email->message($body);
			if (!$this->email->send()) {
				echo false;
			} else {
				echo true;
			}
		}
	}

	public function activities()
	{
		$this->data['coursecatlist'] = $this->p->productlist(0, "id", "tbl_course_category", 'services_short');
		$this->data['activielist'] = $this->p->productlist(0, "id", "tbl_office_work", 'services_short', 'work_category=1');
		$this->load->view('front/activities', $this->data);
	}

	public function notfound()
	{
		$this->data['coursecatlist'] = $this->p->productlist(0, "id", "tbl_course_category", 'services_short');
		$pageurl = current_url();
		if ($this->uri->segment(1) == 'index.html') {
			redirect(base_url());
		}
		$detail = $this->p->singledetail($pageurl, "old_url", "tbl_redirect");
		if ($detail) {
			if ($detail->new_url != '') {
				redirect($detail->new_url);
			}
		}
		$this->data['whylist'] = $this->p->productlist(0, "id", "tbl_pages", 'page_short');
		$this->load->view('front/notfound', $this->data);
	}
}
