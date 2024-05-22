<?php

namespace App\Controllers;

use CodeIgniter\API\ResponseTrait;

class Test extends BaseController
{
    use ResponseTrait;

    public function index()
    {
        // Return a simple JSON response
        return $this->respond([
            'message' => 'Hello Friend.'
        ]);
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
