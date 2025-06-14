<?php

namespace App\Controllers;

use App\Models\TanyaModel;
use App\Models\HasilModel;
use App\Models\OpsiModel;
use PhpParser\Node\Stmt\Echo_;

// use CodeIgniter\HTTP\Request;
// use PhpParser\Node\Stmt\Echo_;

class Rekomendasi extends BaseController
{
    protected $tanyaModel;
    protected $opsiModel;
    protected $hasilModel;


    public function __construct()
    {
        $this->tanyaModel = new TanyaModel();
        $this->hasilModel = new HasilModel();
        $this->opsiModel = new OpsiModel();
        // $model = new TanyaModel();
    }

    public function index()
    {
        // Retrieve $id_p from session
        $id_p = session('id');
        $multi_radio = session('multi_radio');
        $dis_ops = session('dis_ops');
        $old_id = session('old_id');
        // dd($dis_ops);


        if (empty($id_p)) {
            $id = [
                'id_p' => 'p9'
            ];
        } else {
            $id = [
                'id_p' => $id_p
            ];
        }
        if ($multi_radio == 1) {
            $multi_opsi = $this->opsiModel->where('id_p', $id_p)->find();
        } else {
            $multi_opsi = null;
        }
        // if($dis_ops == null){
        //     $dis_ops = null;
        // }

        $tanya = $this->tanyaModel->where($id)->first();


        $data = [
            'title' => 'Rekomendasi | Siremot',
            'nav' => 1,
            'tanya' => $tanya,
            'multi_radio' => $multi_radio,
            'multi_opsi' => $multi_opsi,
            'old_id' => $old_id,
            'dis_ops' => $dis_ops
        ];
        // dd($data);

        return view('Rekomendasi/index', $data);
    }

    public function fungsi()
    {

        $id = $this->request->getVar('id');
        $opsi = $this->request->getVar('radio');
        $old_id = $this->request->getVar('old_id');
        // $test = $this->request->getVar();
        // dd($test);

        // ---------------------- Rules ------------------
        // ----------------------- P9 -------------------
        if ($id == 'p9') {
            if ($opsi == 1) {
                $next_id = 'p10';
                $old_id = 'p9';
                $multi_radio = 0;
                $dis_ops = [];
            } else {
                $next_id = null;
                $hasil = 'trail-adv';
            }
        }
        // ----------------------- P10 -------------------
        elseif ($id == 'p10') {
            if ($opsi == 1) {
                $next_id = 'p11';
                $old_id = 'p10';
                $multi_radio = 0;
                $dis_ops = [];
            } elseif ($opsi == 0) {
                $next_id = 'p6';
                $old_id = 'p10';
                $multi_radio = 1;
                $dis_ops = [];
            }
        }
        //---------------------- P6 ---------------------
        elseif ($id == 'p6') {
            if ($old_id == 'p10') {
                if ($opsi == 'j1') {
                    $next_id = null;
                    $hasil = 'skuter';
                } elseif ($opsi == 'j2') {
                    $next_id = null;
                    $hasil = 'skuter';
                } elseif ($opsi == 'j3') {
                    $next_id = null;
                    $hasil = 'bebek';
                }
            }
            //--OID : P11
            elseif ($old_id == 'p11') {
                if ($opsi == 'j1') {
                    $next_id = 'p7';
                    $old_id = $id;
                    $multi_radio = 1;
                    $dis_ops = [];
                } elseif ($opsi == 'j2') {
                    $next_id = 'p8';
                    $old_id = $id;
                    $multi_radio = 1;
                    $dis_ops = ['j8', 'j9'];
                }
            }
            //OID:P8
            elseif ($old_id == 'p8') {
                if ($opsi == 'j1') {
                    $hasil = 'bebek';
                    $next_id = null;
                } elseif ($opsi == 'j2') {
                    $hasil = 'naked';
                    $next_id = null;
                }
            }
            //------------------------------ P11-----------------------------
        } elseif ($id == 'p11') {
            if ($opsi == 0) {
                $next_id = 'p6';
                $old_id = 'p11';
                $multi_radio = 1;
                $dis_ops = ['j3'];
            } elseif ($opsi == 1) {
                $next_id = 'p7';
                $old_id = 'p11';
                $multi_radio = 1;
                $dis_ops = [];
            }
        }
        // --------------------------------- P7 -------------------------
        elseif ($id == 'p7') {
            //--OID:P6
            if ($old_id == 'p6') {
                if ($opsi == 'j4') {
                    $hasil = 'skuter';
                    $next_id = null;
                } elseif ($opsi == 'j5') {
                    $hasil = 'naked';
                    $next_id = null;
                } elseif ($opsi == 'j6') {
                    $hasil = 'skuter';
                    $next_id = null;
                } else {
                    $next_id = null;
                    echo 'error';
                }
            }
            //--OID:P11
            elseif ($old_id == 'p11') {
                if ($opsi == 'j4') {
                    $hasil = 'naked';
                    $next_id = null;
                } elseif ($opsi == 'j5') {
                    $hasil = 'naked';
                    $next_id = null;
                } elseif ($opsi == 'j6') {
                    $next_id = 'p8';
                    $old_id = 'p7';
                    $multi_radio = 1;
                    $dis_ops = ['j7', 'j8'];
                }
            }
        }
        //------------------------------ P8 ---------------------
        elseif ($id == 'p8') {
            //--OID:p6
            if ($old_id == 'p6') {
                if ($opsi == 'j10') {
                    $hasil = 'bebek';
                    $next_id = null;
                } elseif ($opsi == 'j7') {
                    $hasil = 'naked';
                    $next_id = null;
                }
            }
            //OID:P7
            elseif ($old_id == 'p7') {
                if ($opsi == 'j9') {
                    $hasil = 'skuter';
                    $next_id = null;
                } elseif ($opsi == 'j10') {
                    $next_id = 'p6';
                    $old_id = 'p8';
                    $multi_radio = 1;
                    $dis_ops = ['j3'];
                }
            }
        }



        //===============================================
        if ($next_id == null) {
            $end = 1;
            session()->set('id_rekom', $hasil);
            $rekomendasi = [
                'id_rekom' => $hasil

            ];

            // session()->destroy();
            return redirect()->to('Rekomendasi/hasil')->with('rekomendasi', $rekomendasi);
        } else {
            session()->set('id', $next_id);
            session()->set('multi_radio', $multi_radio);
            session()->set('dis_ops', $dis_ops);
            session()->set('old_id', $old_id);
            $fungsi = [
                'id' => $next_id,
                // 'opsi' => $opsi,
                'multi_radio' => $multi_radio,
                'old_id' => $old_id
                // 'tanya' => $tanya,

            ];
            return redirect()->to('Rekomendasi/index')->with('fungsi', $fungsi);
        }
    }
    public function hasil()
    {
        // retrive data filtering
        $filtered = $this->request->getVar();
        $rekomendasi = session('id_rekom');

        // dd($rekomendasi);

        session()->set('id_rekom', $rekomendasi);
        if ($filtered == null) {
            // Retrieve $id_p from session



            $list_mtr = $this->hasilModel->where(['jenis' => $rekomendasi])->findAll();
            // dd($list_mtr, $rekomendasi);
        } else {
            $list_mtr = $this->hasilModel->filter($filtered);
            // dd($list_mtr);
        }


        $data = [
            'title' => 'Hasil Rekomendasi | Siremot',
            'nav' => 1,
            'rekomendasi' => $list_mtr,
            'id_rekom' => $rekomendasi
        ];
        // dd($list_mtr);


        return view('Rekomendasi/hasil', $data);
    }


    public function produk()
    {
        // Retrieve $id_p from session
        $rekomendasi = session('id_rekom');
        $id = $_GET['id'];

        // Mencari list motor yang sesuai
        $produk = $this->hasilModel->where(['id' => $id])->first();
        // dd($produk);


        $data = [
            'title' => 'Detail Produk | Siremot',
            'nav' => 1,
            'rekomendasi' => $rekomendasi,
            'produk' =>  $produk
        ];


        return view('Rekomendasi/produk', $data);
    }

    public function list()
    {
        $filtered = $this->request->getVar();
        $rekomendasi = session('id_rekom');
        session()->set('id_rekom', $rekomendasi);

        if ($filtered == null) {
            // Retrieve $id_p from session

            $list_mtr = $this->hasilModel->findAll();
        } else {
            $list_mtr = $this->hasilModel->filter($filtered);
            // dd($list_mtr);
        }


        $data = [
            'title' => 'Daftar Sepeda Motor | Siremot',
            'nav' => 1,
            'rekomendasi' => $list_mtr
        ];
        // dd($list_mtr);


        return view('Rekomendasi/list', $data);
    }

    public function destroySession()
    {
        // Destroy the session
        session()->destroy();

        // Redirect to a different page or perform other actions if needed
        return redirect()->to('rekomendasi');
    }
}
