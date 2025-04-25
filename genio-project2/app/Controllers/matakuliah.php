<?php

namespace App\Controllers;

use App\Models\matakuliahModel;
class mataKuliah extends BaseController
{
    //Tugas Utama
    public function basisdata(){
        return view('mata-kuliah/basisdata');
    }
    public function metodologi(){
        return view('mata-kuliah/metodologi');
    }
    public function pemweb2(){
        return view('mata-kuliah/pemweb2');
    }
    public function visdat(){
        return view('mata-kuliah/visdat');
    }

    //Tugas Bonus
    public function semua()
    {
        $model = new matakuliahModel();
        $data = [];
        $data['matakuliah'] = $model->getMataKuliah();
        return view('mata-kuliah/semua', $data);
    }
}
