<?php

namespace App\Controllers;

use App\Models\PersonsModel;

class Persons extends BaseController
{
    protected $persons;
    public function __construct()
    {
        $this->persons = new PersonsModel();
    }

    public function index()
    {
        // $pager = \Config\Services::pager();
        $data = [
            'title' => 'Persons Pages',
            'listpersons' => $this->persons->getPersons(),
            // 'pager' => $this->persons->pager
        ];
        // var_dump($data['listpersons']);
        // exit;
        return view('Persons/index', $data);
    }

    public function detail($id)
    {
        $data = [
            'title' => 'Detail Persons',
            'person' => $this->persons->getPersons($id)
        ];
        return view('Persons/detail', $data);
    }

    public function create()
    {
        session();
        $data = [
            'title' => 'Form tambah data',
            'validation' => \Config\Services::validation()
        ];
        return view('Persons/create', $data);
    }

    public function save()
    {
        // dd($this->request->getVar());
        if (!$this->validate([
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong',
                ]
            ],
            'tempat_lahir' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong'
                ]
            ],
            'tanggal_lahir' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong'
                ]
            ],
            'gender' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong'
                ]
            ],
            'email' => [
                'rules' => 'required|is_unique[data_penduduk.email]',
                'errors' => [
                    'required' => '{field} tidak boleh kosong',
                    'is_unique' => '{field} sudah terdaftar',
                ]
            ],
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/Persons/create')->withInput()->with('validation', $validation);
        }
        $this->persons->save([
            'nama' => $this->request->getVar('nama'),
            'tempat_lahir' => $this->request->getVar('tempat_lahir'),
            'tanggal_lahir' => $this->request->getVar('tanggal_lahir'),
            'gender' => $this->request->getVar('gender'),
            'email' => $this->request->getVar('email'),
        ]);
        session()->setFlashdata('message', 'Menyimpan Data !!');
        return redirect()->to('/Persons');
    }

    public function delete($id)
    {
        print_r('okokok');
        dd($this->request->getVar());
        $this->persons->delete(['id' => $id]);
        session()->setFlashdata('message', 'Menghapus data');
        return redirect()->to('/Persons');
    }

    public function loaddatatablepersons()
    {
        $draw = $this->request->getVar('draw');
        $post_search = strtolower($this->request->getVar("search")['value']);
        $offset = $this->request->getVar('start');
        $limit = $this->request->getVar('length');
        $datapenduduk = $this->persons->getAllData($limit, $offset, $post_search);
        // print_r($datapenduduk['data'][0]);
        // exit;
        if ($datapenduduk['status'] == 'success' && $datapenduduk['code'] = 200) {
            $i = 1;
            $j = $offset + 1;
            foreach ($datapenduduk['data'] as $index => $value) {
                $data['draw'] = $draw;
                $data['recordsTotal'] = 20;
                $data['recordsFiltered'] = 12;
                $data['start'] = $offset;
                $data['limit'] = $limit;
                $data['data'][$index][] = $j;
                $data['data'][$index][] = $value->nama;
                $data['data'][$index][] = $value->tempat_lahir;
                $data['data'][$index][] = $value->tanggal_lahir;
                $data['data'][$index][] = $value->gender;
                $data['data'][$index][] = $value->email;
                $data['data'][$index][] = "<button class='btn btn-sm btn-info'>Detail</button>";
                $i++;
                $j++;
            }
        } else {
            $data['draw'] = $draw;
            $data['recordsTotal'] = 20;
            $data['recordsFiltered'] = 12;
            $data['start'] = $offset;
            $data['limit'] = $limit;
            $data['data'] = [];
        }
        return $data;
    }
}
