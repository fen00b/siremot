<?php

namespace App\Controllers;

// memanggil Model AuthModel
use App\Models\AuthModel;
use App\Models\HasilModel;

class Dashboard extends BaseController
{
    //Membuat AuthModel dapat diakses di semua fungsi controller Auth
    protected $authModel;
    protected $HasilModel;

    public function __construct()
    {
        $this->authModel = new AuthModel();
        $this->HasilModel = new HasilModel();
    }


    public function index()
    {
        $admin = session(AuthModel::SESSION_KEY);

        if ($admin == null) {
            return redirect()->to('auth');
        }
        $data = [
            'title' => 'Siremot Dashboard',
        ];

        return view('dashboard/admin', $data);
    }
    //------------------------------- Kelola Motor --------------------------
    public function motors()
    {
        $admin = session(AuthModel::SESSION_KEY);
        // dd($admin);
        if ($admin == null) {
            return redirect()->to('auth');
        }
        $alert = session()->getFlashdata('alert');


        if ($alert != null) {
            $peringat = json_encode($alert);
            echo "<script type='text/javascript'> alert('$peringat');</script>";


            $data = [
                'title' => 'Admin Login | Siremot'
            ];
        }
        $motor = $this->HasilModel->findAll();
        $data = [
            'title' => 'Siremot Dashboard|Data Sepeda Motor',
            'motor' => $motor

        ];


        return view('dashboard/motors', $data);
    }
    public function detail_motor()
    {
        $admin = session(AuthModel::SESSION_KEY);
        // dd($admin);
        if ($admin == null) {
            return redirect()->to('auth');
        }
        $id = $_GET['value'];
        // dd($id);
        $produk = $this->HasilModel->where(['id' => $id])->first();
        $data = [
            'title' => 'Siremot Dashboard|Detail Data Motor',
            'produk' =>  $produk
        ];
        return view('dashboard/detail_motor', $data);
    }
    public function edit_motor()
    {
        $admin = session(AuthModel::SESSION_KEY);
        // dd($admin);
        if ($admin == null) {
            return redirect()->to('auth');
        }
        $id = $_GET['value'];
        // dd($id);
        $produk = $this->HasilModel->where(['id' => $id])->first();
        $data = [
            'title' => 'Siremot Dashboard|Ubah Data Motor',
            'produk' =>  $produk

        ];
        return view('dashboard/edit_motor', $data);
    }
    public function delete_motor()
    {
        $id = $_GET['value'];
        // $id = $this->request->getVar('id');
        // dd($id);
        $this->HasilModel->where('id', $id)->delete();
        return redirect()->to('/dashboard/motors');
    }


    public function add_motor()
    {
        $admin = session(AuthModel::SESSION_KEY);
        // dd($admin);
        if ($admin == null) {
            return redirect()->to('auth');
        }
        session();
        $data = [
            'title' => 'Siremot Dashboard|Tambah Data Motor',
            'validation' => \Config\Services::validation()
        ];
        return view('dashboard/add_motor', $data);
    }

    public function save_motor()
    {
        // Validasi
        if (!$this->validate(
            [
                'nama' => 'required|is_unique[tb_spek.nama]'
            ]
        )) {
            $validation = \Config\Services::validation();

            return redirect()->to('/dashboard/add_motor')->withInput()->with('validation', $validation);
        }
        //ambil gambar
        $file_gambar = $this->request->getFile('gambar');
        // slug manufaktur
        $slug = url_title($this->request->getVar('manufaktur'), '-', true);
        //ambil gambar
        $file_gambar->move("assets/img/motor/$slug");
        //ambil nama gambar
        $nama_gambar = $file_gambar->getName();

        $data = [
            'id' => $this->request->getVar('id'),
            'nama' => $this->request->getVar('nama'),
            'manufaktur' => $this->request->getVar('manufaktur'),
            'harga' => $this->request->getVar('harga'),
            'jenis' => $this->request->getVar('jenis'),
            'jenis_detail' => $this->request->getVar('jenis_detail'),
            'replacement' => $this->request->getVar('replacement'),
            'transmisi' => $this->request->getVar('transmisi'),
            'tank_size' => $this->request->getVar('tank_size'),
            'bagasi_size' => $this->request->getVar('bagasi_size'),
            'other' => $this->request->getVar('other'),
            'deskripsi' => $this->request->getVar('deskripsi'),
            'image' => "$slug/$nama_gambar"
        ];


        $saved = $this->HasilModel->insert($data);

        if (!$saved) {
            $errors = $this->HasilModel->errors();
            // dd($errors);
            $alert = [
                'error' => $errors, // pesan pop up
            ];
            session()->setFlashdata('alert', $alert); // Simpan array $alert ke dalam session
            return redirect()->to('/dashboard/motors');
        } else {
            return redirect()->to('/dashboard/motors');
        }
    }
    public function update_motor($id)
    {
        // dd($this->request->getVar('nama'));

        $data = [
            'id' => $id,
            'nama' => $this->request->getVar('nama'),
            'manufaktur' => $this->request->getVar('manufaktur'),
            'harga' => $this->request->getVar('harga'),
            'jenis' => $this->request->getVar('jenis'),
            'jenis_detail' => $this->request->getVar('jenis_detail'),
            'replacement' => $this->request->getVar('replacement'),
            'transmisi' => $this->request->getVar('transmisi'),
            'tank_size' => $this->request->getVar('tank_size'),
            'bagasi_size' => $this->request->getVar('bagasi_size'),
            'other' => $this->request->getVar('other'),
            'deskripsi' => $this->request->getVar('deskripsi'),
            'image' => $this->request->getVar('image')
        ];



        $saved = $this->HasilModel->update($data['id'], $data);
        // dd($saved);

        if (!$saved) {
            $errors = $this->HasilModel->errors();
            // dd($errors);
            $alert = [
                'error' => $errors, // pesan pop up
            ];
            session()->setFlashdata('alert', $alert); // Simpan array $alert ke dalam session
            return redirect()->to('/dashboard/motors');
        } else {
            return redirect()->to('/dashboard/motors');
        }
    }

    //------------------------------- Kelola Users --------------------------
    public function users()
    {
        $admin = session(AuthModel::SESSION_KEY);
        // dd($admin);
        if ($admin == null) {
            return redirect()->to('auth');
        }
        $users = $this->authModel->findAll();
        $data = [
            'title' => 'Siremot Dashboard|users',
            'user' => $users
        ];
        return view('dashboard/users', $data);
    }
    public function users_detail()
    {
        $admin = session(AuthModel::SESSION_KEY);
        // dd($admin);
        if ($admin == null) {
            return redirect()->to('auth');
        }
        $id = $_GET['value'];
        // dd($id);
        $id_user = $this->authModel->where(['id' => $id])->first();
        $data = [
            'title' => 'Siremot Dashboard|users',
            'id_user' => $id_user
        ];
        return view('dashboard/users_detail', $data);
    }
    public function users_delete()
    {
        $id = $_GET['value'];
        // dd($id);
        $this->authModel->where('id', $id)->delete();
        return redirect()->to('/dashboard/users');
    }
    public function users_add()
    {
        $admin = session(AuthModel::SESSION_KEY);
        // dd($admin);
        if ($admin == null) {
            return redirect()->to('auth');
        }
        $data = [
            'title' => 'Siremot Dashboard|Tambah User',
        ];
        return view('dashboard/users_add', $data);
    }
    public function users_save()
    {

        $data = [
            'id' => $this->request->getVar('id'),
            'username' => $this->request->getVar('username'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
        ];
        // dd($data);
        // if ($data['password'] != $data['password_val']) {
        //     $errors = "Ulangi password";
        //     $alert = [
        //         'error' => $errors, // pesan pop up
        //     ];
        //     session()->setFlashdata('alert', $alert); // Simpan array $alert ke dalam session
        //     return redirect()->to('dashboard/users_add');
        // }

        $saved = $this->authModel->insert($data);


        if (!$saved) {
            $errors = $this->authModel->errors();
            // dd($data, $errors);

            $alert = [
                'error' => $errors, // pesan pop up
            ];
            session()->setFlashdata('alert', $alert); // Simpan array $alert ke dalam session
            return redirect()->to('/dashboard/users');
        } else {
            return redirect()->to('/dashboard/users');
        }
    }
    public function users_edit()
    {
        $id = $_GET['value'];

        $id_user = $this->authModel->where(['id' => $id])->first();
        // dd($id_user);
        $data = [
            'title' => 'Siremot Dashboard|users',
            'id_user' => $id_user
        ];
        return view('dashboard/users_edit', $data);
    }
    public function users_update($id)
    {
        $data = [
            'id' => $id,
            'username' => $this->request->getVar('username'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
        ];



        $saved = $this->authModel->update($data['id'], $data);
        // dd($saved);

        if (!$saved) {
            $errors = $this->authModel->errors();
            dd($errors);
            $alert = [
                'error' => $errors, // pesan pop up
            ];
            session()->setFlashdata('alert', $alert); // Simpan array $alert ke dalam session
            return redirect()->to('/dashboard/users_edit');
        } else {
            return redirect()->to('/dashboard/users');
        }
    }
    //---------------------------------Guest Record---------------------------------------------
    public function guest_record()
    {
        $admin = session(AuthModel::SESSION_KEY);
        // dd($admin);
        if ($admin == null) {
            return redirect()->to('auth');
        }
        $data = [
            'title' => 'Dashboard|Record Pengunjung',
        ];
        return view('/dashboard/guest_record', $data);
    }
}
