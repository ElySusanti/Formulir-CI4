<?php


namespace App\Controllers\Api;

use App\Models\biodata_model;
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\RESTful\ResourceController;

class DataBiodata extends ResourceController
{
    use ResponseTrait;
    public function show($NO_REGISTRATION = null)
    {
        $biodata_model = new biodata_model();
        $data = $biodata_model->find($NO_REGISTRATION);

        return $this->respond($data);
    }
}
