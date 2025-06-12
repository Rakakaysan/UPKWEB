<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pengumpulanController extends Controller
{
     public function pengumpulan_tugas () {
        return view('Admin.pengumpulan_tugas');
    }
     public function CreatePengumpulanTugas () {
        return view('Admin.create.create_PengumpulanTugas');
    }
     public function EditPengumpulanTugasp() {
        return view('Admin.create.Edit_pengumpulanTugas');
    }
}


