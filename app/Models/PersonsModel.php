<?php

namespace App\Models;

use CodeIgniter\Model;

class PersonsModel extends Model
{
    public $pager;
    protected $table = "data_penduduk";
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama', 'tempat_lahir', 'tanggal_lahir', 'gender', 'email'];
    protected $useTimestamps = true;

    public function getPersons($id = false)
    {
        if ($id == false) {
            return $this->orderBy('id', 'DESC')->paginate(5, 'bootstrap');
        }
        return $this->where(['id' => $id])->first();
    }

    public function getAllData($limit, $offset, $search)
    {

        if (!empty($search)) {
            $hasil =  $this->like('nama', $search)
                ->orlike('tempat_lahir', $search)
                ->orlike('email', $search)
                ->orderBy('id', 'DESC')
                ->get($limit, $offset)
                ->getResultObject();


            if (!empty($hasil)) {
                $data['code'] = 200;
                $data['status'] = 'success';
                $data['message'] = "Data berhasil ditemukan";
                $data['data'] = $hasil;
            } else {
                $data['code'] = 200;
                $data['status'] = 'failed';
                $data['message'] = "Data tidak ditemukan";
                $data['data'] = $hasil;
            }
        } else {
            $hasil =  $this->orderBy('id', 'DESC')->get($limit, $offset)->getResult();
            if (!empty($hasil)) {
                $data['code'] = 200;
                $data['status'] = 'success';
                $data['message'] = "Data berhasil ditemukan";
                $data['data'] = $hasil;
            } else {
                $data['code'] = 200;
                $data['status'] = 'failed';
                $data['message'] = "Data tidak ditemukan";
                $data['data'] = $hasil;
            }
        }
        return $data;
    }
}
