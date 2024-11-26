<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Session\Session;
class Auth extends ResourceController {
    use ResponseTrait;


    public function register() {
        $model = new UserModel();
        $data = [
            'username' => $this->request->getVar('username'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
        ];
        if ($model->save($data)) {
            return $this->respondCreated(['message' => 'User created']);
        } else {
            return $this->failValidationErrors($model->errors());
        }
    }
   
    public function login()
    {
        // Load the session service
        $session = \Config\Services::session();
        
        // Load form and URL helpers
        helper(['form', 'url']);
        
        // Initialize the UserModel
        $model = new UserModel();
    
        // Check if the request method is POST
        if ($this->request->getMethod() == 'post') {
            // Set validation rules for the login form
            $rules = [
                'username' => 'required',
                'password' => 'required'
            ];
    
            // Validate the form input based on the rules
            if (!$this->validate($rules)) {
                // Set flash error message if validation fails
                $session->setFlashdata('error', 'Validation errors occurred.');
                // Redirect back to the login form with input data
                return redirect()->back()->withInput();
            }
    
            // Retrieve posted username and password
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');
    
            // Ensure $password is a non-null string
            if (is_null($password) || !is_string($password)) {
                // Set flash error message for invalid password format
                $session->setFlashdata('error', 'Invalid password format.');
                // Redirect back to the login form with input data
                return redirect()->back()->withInput();
            }
    
            // Fetch user from the database by username
            $user = $model->where('username', $username)->first();
    
            // Verify the user and password
            if ($user && password_verify($password, $user['password'])) {
                // Generate a unique token
                $token = bin2hex(random_bytes(16));
                // Update the user's token in the database
                $model->update($user['id'], ['token' => $token]);
    
                // Store the token in the session
                $session->set('user_token', $token);
    
                // Set a success flash message
                $session->setFlashdata('success', 'Login successful!');
                // Redirect to the add car page
                return redirect()->to('/add_car');
            } else {
                // Set an error flash message for invalid credentials
                $session->setFlashdata('error', 'Invalid username or password.');
                // Redirect back to the login form with input data
                return redirect()->back()->withInput();
            }
        }
    
        // Load the login form view if not a POST request
        return view('login');
    }
    


    public function logout1() {
        session()->destroy();
        return redirect()->to('/login');
    }

    public function login_old() {
        $model = new UserModel();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $user = $model->where('username', $username)->first();

        if ($user && password_verify($password, $user['password'])) {
            $token = bin2hex(random_bytes(16));
            $model->update($user['id'], ['token' => $token]);
            return $this->respond(['token'=>$token]);
        } else {
            return $this->failUnauthorized('Invalid Credentials');
        }

        return view('login');
    }

    public function logout() {
        $model = new UserModel();
        $token = $this->request->getHeader('Authorization')->getValue();
        $model->where('token', $token)->set(['token'=>null])->update();
        return $this->respond(['message' => 'Logged out']);
    }
}