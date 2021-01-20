<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Satgas;
use PDF;

class HomeController extends Controller
{
    public function index()
    {
        $satgas = Satgas::all();

        return view('user.home', compact('satgas'));
    }

    public function pdf($id)
    {
        if ($id == NULL) {
            abort(404);
        }

        $data['satgas'] = Satgas::find($id);

        $pdf = PDF::loadView('user.pdf', $data);
        $pdf->setPaper('a4', 'potrait');
        
        return $pdf->stream();
    }
}
