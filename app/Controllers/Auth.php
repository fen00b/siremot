<?php

namespace App\Controllers;

// memanggil Model AuthModel
use App\Models\AuthModel;

class Auth extends BaseController
{
    //Membuat AuthModel dapat diakses di semua fungsi controller Auth
    protected $authModel;

    public function __construct()
    {
        $this->authModel = new AuthModel();
    }

    //login page
    public function index()
    {
        // ambil data alert 
        $alert = session()->getFlashdata('alert');

        if ($alert == null) {
            $data = [
                'title' => 'Admin Login | Siremot',
            ];
            return view('dashboard/login', $data);
        } else {
            // dd($alert);
            $peringat = json_encode($alert);
            echo "<script type='text/javascript'> alert('$peringat');</script>";


            $data = [
                'title' => 'Admin Login | Siremot'
            ];
            return view('dashboard/login', $data);
        };
    }


    //fungsi login
    public function login()
    {

        // ambil data dari form
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');


        // membuat $user untuk identifikasi username di database
        $user = $this->authModel->where(['username' => $username])->first();

        // dd($user);

        // opsi jika isi $password null (mengatasi error di line password_verify)
        if ($password == null) {
            $password = '';
        }

        // Cek jika ada username ada di database
        if (!$user) {
            $alert = [
                'error' => 'Username tidak ditemukan', // pesan pop up
            ];
            session()->setFlashdata('alert', $alert); // Simpan array $alert ke dalam session
            return redirect()->to('auth'); // kembali ke login page
        }

        // Cek password apakah sesuai dengan password username
        if (password_verify($password, $user['password'])) {
            // jika password terverifikasi maka akan membuat session baru untuk user
            session()->set(AuthModel::SESSION_KEY, $user['id']);

            return redirect()->to('/dashboard'); // pindah ke dashboard
        } else {
            //kondisi jika password tidak cocok dengan password username
            $alert = [
                'error' => 'Password Salah!',
            ];

            session()->setFlashdata('alert', $alert); // Simpan array $alert ke dalam session
            return redirect()->to('auth'); // Kembali ke login page
        }
    }

    //fungsi untuk testing/melihat siapa user sekarang (untuk debugging)
    public function current_user()
    {
        $user_id = session(AuthModel::SESSION_KEY);
        // dd($user_id);

        if ($user_id == null) {
            // return null;
            echo 'ga ada';
        } else {
            echo 'ada ', $user_id;
        }

        // return $this->authModel->find($user_id);
    }

    // Fungsi untuk logout/destroy session user yang sedang aktif
    public function logout()
    {


        // Redirect to login page after logout
        date_default_timezone_set("ASIA/JAKARTA");
        $date = date('Y-m-d H:i:s');
        $id = session(AuthModel::SESSION_KEY);
        $data = [
            'last_login' => $date
        ];

        // $this->authModel->update($id, $data);



        session()->remove(AuthModel::SESSION_KEY);

        return redirect()->to('auth');
    }
}
