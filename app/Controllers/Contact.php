<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Contact extends Controller
{

    protected $email;
    protected $session;

    
    public function __construct()
    {
        helper(['form','url']);
        $this->email = \Config\Services::email();
        $this->session = \Config\Services::session();
    }

    public function contactUs(): string{
        return view('contactUs');
    }

    public function submit()
    {
        $validation =  \Config\Services::validation();


        $validation->setRules([
            'name' => 'required',
            'email' => 'required|valid_email',
            'phone' => 'required',
            'subject' => 'required',
            'message' => 'required'
        ]);

        if ($validation->withRequest($this->request)->run() == FALSE) {
            // Validation failed, reload the form with errors
            return view('contact_us_page', ['validation' => $validation]);
        } else {
            // Validation successful, send the email
            $name = $this->request->getPost('name');
            $email = $this->request->getPost('email');
            $phone = $this->request->getPost('phone');
            $subject = $this->request->getPost('subject');
            $message = $this->request->getPost('message');

            $adminEmail = getenv('ADMIN_EMAIL');

            $this->email->setFrom($email, $name);
            $this->email->setTo($adminEmail); // sender email address
            $this->email->setSubject($subject);
            $this->email->setMessage("Name: $name\nEmail: $email\nPhone: $phone\nMessage:\n$message");

            if ($this->email->send()) {
                $this->session->setFlashdata('success', 'Email sent successfully!.');
                return redirect()->to('/contact-us');
            } else {
                $this->session->setFlashdata('error', 'Failed to send the email.');
                return redirect()->back()->withInput();
            }
        }
    }
}
