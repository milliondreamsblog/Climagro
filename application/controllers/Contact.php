<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('email');
        $this->load->model('Contact_model'); // Assuming you have a model to save contact data
    }

    public function index() {
        $this->load->view('contact-us'); // Your view file
    }

    public function submit() {
        // Set validation rules
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('phone', 'Phone', 'required');
        $this->form_validation->set_rules('subject', 'Subject', 'required');
        $this->form_validation->set_rules('comment', 'Message', 'required');

        if ($this->form_validation->run() == FALSE) {
            // Validation failed
            $response = [
                'status' => 'error',
                'message' => validation_errors()
            ];
            redirect('contact-us');
        } else {
            // Validation passed
            $data = [
                'name' => $this->input->post('name', TRUE),
                'email' => $this->input->post('email', TRUE),
                'phone' => $this->input->post('phone', TRUE),
                'course' => $this->input->post('subject', TRUE),
                'message' => $this->input->post('comment', TRUE),
                'created' => date("d-m-y")
            ];

            // Insert data into the database or perform any necessary action
            $this->Contact_model->insert_contact($data);
            
                // Send email
            $this->load->library('email');
            $this->email->from($data['email'], $data['name']);
            $this->email->to('contact@climagroanalytics.com'); // Replace with your email
            $this->email->cc(['utsav@climagroanalytics.com', 'neha@climagroanalytics.com','nrjkk1@gmail.com']);
            $this->email->subject('New Contact Form Submission: ' . $data['subject']);
            $this->email->message(
                "You have received a new message:\n\n" .
                "Name: " . $data['name'] . "\n" .
                "Email: " . $data['email'] . "\n" .
                "Phone: " . $data['phone'] . "\n" .
                "Subject: " . $data['subject'] . "\n" .
                "Message: " . $data['message'] . "\n\n" .
                "Submitted on: " . $data['created']
            );
    
            if ($this->email->send()) {
                $this->session->set_flashdata('success', 'Your message has been sent successfully!');
            } else {
                $this->session->set_flashdata('error', 'Unable to send email. Please try again later.');
            }

            // Send success response
            $response = [
                'status' => 'success',
                'message' => 'Your message has been sent successfully!'
            ];
        }
        $this->session->set_flashdata('success', 'Your message has been sent successfully!');
        redirect('contact-us');
        // Return response in JSON format
        json_encode($response);
    }
    public function pageConsulting() {
        // Set validation rules
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('phone', 'Phone', 'required');
        $this->form_validation->set_rules('subject', 'Subject', 'required');
        $this->form_validation->set_rules('comment', 'Message', 'required');

        if ($this->form_validation->run() == FALSE) {
            // Validation failed
            $response = [
                'status' => 'error',
                'message' => validation_errors()
            ];
            redirect('contact-us');
        } else {
            // Validation passed
            $data = [
                'name' => $this->input->post('name', TRUE),
                'email' => $this->input->post('email', TRUE),
                'phone' => $this->input->post('phone', TRUE),
                'course' => $this->input->post('subject', TRUE),
                'message' => $this->input->post('comment', TRUE),
                'created' => date("d-m-y")
            ];

            // Insert data into the database or perform any necessary action
            $this->Contact_model->insert_contact($data);

            // Send success response
            $response = [
                'status' => 'success',
                'message' => 'Your message has been sent successfully!'
            ];
        }
        $this->session->set_flashdata('success', 'Your message has been sent successfully!');
        redirect('contact-us');
        // Return response in JSON format
        json_encode($response);
    }
}
