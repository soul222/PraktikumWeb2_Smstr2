<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForminputController extends Controller
{
    //Funsgi mengarahkan atau  memanggil Route dan Menampilkan View
    public function ShowInput()
    {
        return view('Form');
    }

    public function ShowOutput(Request $request)
    {
    return view('Form', 
        [
        'nama' => $request->input('nama'),
        'email' => $request->input('email'),
        'lokasi' => $request->input('lokasi'),
        'jeniskelamin' => $request->input('jeniskelamin'),
        'skill' => $request->input('skill'),
        ]);
    }
}
