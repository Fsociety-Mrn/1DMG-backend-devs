<?php

namespace App\Controllers;

use CodeIgniter\API\ResponseTrait;

class API extends BaseController
{
    use ResponseTrait;

    public function index()
    {
        // Load the database library
        $db = db_connect();
        $db->reconnect();

        // Check the database connection
        if (!$db->connID) {
            // Connection failed
            $response = [
                'success' => false,
                'message' => 'Database connection failed: ' . $db->error(),
            ];
        } else {
            // Connection successful
            $response = [
                'success' => true,
                'message' => 'Database connection successful',
            ];
        }

        // Close the database connection
        $db->close();

        // Return the JSON response
        return $this->response->setJSON($response);
    }
    

    public function create_post()
    {
        // Handle POST request
        return $this->respond([
            'message' => 'This is a create post.'
        ]);
    }

    public function read_posts()
    {
        // Handle POST request
        return $this->respond([
            'message' => 'Read ALL request.'
        ]);
    }

    public function update_posts()
    {
        // Handle POST request
        return $this->respond([
            'message' => 'Retrieve All POSTS/specific post request.'
        ]);
    }

    public function delete_post()
    {
        // Handle POST request
        return $this->respond([
            'message' => 'Retrieve All delete specific post request.'
        ]);
    }
}