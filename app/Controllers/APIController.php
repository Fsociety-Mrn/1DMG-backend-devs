<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class APIController extends BaseController
{
    public function index()
    {
          // Check if the database is connected
          $db = db_connect();
          $db->reconnect();
  
          if (!$db->connID) {
              return $this->response->setJSON(['status' => 'connected']);
          } else {
              return $this->response->setJSON(['status' =>  $db->error() ]);
          }

                  // Close the database connection
        $db->close();
          
    }

    public function create()
    {
        try {
            // Get JSON data from the request body
            $requestData = $this->request->getJSON();
            
    
            // Load the database connection
            $db = db_connect();
    
            // data schema
            $data = [
                'title' => $requestData->title,
                'content' => $requestData->content,
                'author' => $requestData->author
            ];
    
            // Insert the data into the database
            $db->table('data_model')->insert($data);
            
            // Close the database connection and return status 201 - Created
            $db->close();
 
            return $this->response->setStatusCode(201)->setJSON(['success' => true]);
        } catch (\Exception $e) {

            // Close the database connection return status 500 - Internal Server Error
            $db->close();
            return $this->response->setStatusCode($e->getCode())->setJSON(['success' => false, 'error' => $e->getMessage()]);
        }
    }

    public function read($id = null)
    {
        try {

            // Load the database connection
            $db = db_connect();
            
     
            if (empty($id)){
                $data =  $data = $db->table('data_model')->where('id', $id)->get();
            }else{
                $data = $db->table('data_model')->get();
            }

            $data = $db->table('data_model')->get();

            $result = $data->getResultArray();

            $db->close();
            return $this->response->setStatusCode(201)->setJSON($result);
        } catch (\Exception $e) {

            $db->close();
            return $this->response->setStatusCode($e->getCode())->setJSON(['success' => false, 'error' => $e->getMessage()]);
        }
    }
    
}
