<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class CrudAdmin extends BaseController
{

    public $db;
    public function __construct()
    {
        $this->db = \Config\Database::connect();
    }

    public function index()
    {
       return view('admin/crud');
    }

    public function tentang_admin()
    {
       return view('admin/tentang');
    }

    public function github_admin()
    {
       return view('admin/github');
    }

    public function ajaxLoadData()
    {
        $params['draw'] = $_REQUEST['draw'];
        $start = $_REQUEST['start'];
        $length = $_REQUEST['length'];
        $search_value = $_REQUEST['search']['value'];

        if(!empty($search_value)){
            $total_count = $this->db->query("SELECT * from user WHERE id like '%".$search_value."%' OR username like '%".$search_value."%' OR email like '%".$search_value."%' OR level_user like '%".$search_value."%'")->getResult();

            $data = $this->db->query("SELECT * from user WHERE id like '%".$search_value."%' OR username like '%".$search_value."%' OR email like '%".$search_value."%' OR level_user like '%".$search_value."%' limit $start, $length")->getResult();
        }else{
            $total_count = $this->db->query("SELECT * from user")->getResult();
            $data = $this->db->query("SELECT * from user limit $start, $length")->getResult();
        }
        $json_data = array(
            "draw" => intval($params['draw']),
            "recordsTotal" => count($total_count),
            "recordsFiltered" => count($total_count),
            "data" => $data   // total data array
        );
        echo json_encode($json_data);
    }


}
