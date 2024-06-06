<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class APIController extends BaseController
{
    public function index()
    {
        return $this->response->setJSON(["API test"]);
    }

    public function create()
    {
        try {

            // Load the database connection asd
            $db = db_connect();

            // Get JSON data from the request body
            $requestData = $this->request->getJSON();
            
            // data schema
            $data = [
                'title' => $requestData->title,
                'content' => $requestData->content,
                'author' => $requestData->author,
                'updated_at' => null
            ];
    
            // Insert the data into the database
            $db->table('data_model')
                ->insert($data);
            
    
            $db->close();
 
            return $this->response->setStatusCode(201)->setJSON(['success' => true, 'error' => "No error create success"]);
        } catch (\Exception $e) {

    
            $db->close();
            return $this->response->setStatusCode($e->getCode())->setJSON(['success' => false, 'error' => $e->getMessage()]);
        }
    }

    public function read($id = null)
    {
        try {

            // Load the database connection
            $db = db_connect();
            
            // Verify if id parameter are exist
            $data = (!empty($id)) ? $db->table('data_model')->where('id', $id)->get() : $db->table('data_model')->get();

            $result = $data->getResultArray();

            $db->close();
            return $this->response->setStatusCode(201)->setJSON($result);
        } catch (\Exception $e) {

            $db->close();
            return $this->response->setStatusCode($e->getCode())->setJSON(['success' => false, 'error' => $e->getMessage()]);
        }
    }

    public function update($id = null)
    {
        try {

            // Load the database connection
            $db = db_connect();
            
            // Get JSON data from the request body
            $requestData = $this->request->getJSON();

            // Update the data into the database
            $db->table('data_model')
                ->set('updated_at',date("Y-m-d H:i:s", time()))
                ->set($requestData)
                ->where('id', $id)
                ->update();

            $db->close();
            return $this->response->setStatusCode(200)->setJSON(['success' => true, 'error' => "No error update success"]);
        } catch (\Exception $e) {

            $db->close();
            return $this->response->setStatusCode($e->getCode())->setJSON(['success' => false, 'error' => $e->getMessage()]);
        }
    }

    public function delete($id = null)
    {
        try {

            // Load the database connection
            $db = db_connect();
        
            // Update the data into the database
            $db->table('data_model')
                ->where('id', $id)
                ->delete();

            $db->close();
            return $this->response->setStatusCode(200)->setJSON(['success' => true, 'error' => "No error delete success "  . $id]);
        } catch (\Exception $e) {

            $db->close();
            return $this->response->setStatusCode($e->getCode())->setJSON(['success' => false, 'error' => $e->getMessage()]);
        }
    }
    
}
