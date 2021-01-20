<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Satgas;
use App\SatgasLecturer;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SatgasController extends Controller
{
    public function index()
    {
        $satgas = Satgas::all();

        return view('admin.satgas.index', compact('satgas'));
    }

    public function create()
    {


        return view('admin.satgas.create');
    }

    public function store(Request $request)
    {
        // save satgas
        $satgas = new Satgas();
        $satgas->tugas = $request->tugas;
        $satgas->waktu = $request->waktu;
        
        if( $satgas->save() ) {
            if( $request->name ) {
                foreach ($request->name as $key => $value) {
                    $satgas_lecturer = new SatgasLecturer();
                    $satgas_lecturer->satgas_id = $satgas->id;
                    $satgas_lecturer->name = $request->name[$key];
                    $satgas_lecturer->nik = $request->nik[$key];
                    $satgas_lecturer->comment = $request->comment[$key];
                    $satgas_lecturer->save();
                }
            }
        }

        return redirect()->route('admin.satgas.index');
    }

    // public function edit(User $user)
    // {
    //     abort_if(Gate::denies('user_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

    //     $roles = Role::all()->pluck('title', 'id');

    //     $user->load('roles');

    //     return view('admin.users.edit', compact('roles', 'user'));
    // }

    // public function update(UpdateUserRequest $request, User $user)
    // {
    //     $user->update($request->all());
    //     $user->roles()->sync($request->input('roles', []));

    //     return redirect()->route('admin.users.index');
    // }

    public function show($id)
    {
        $satgas = Satgas::find($id);
        if($satgas == null) {
            abort(404);
        }
    
        return view('admin.satgas.show', compact('satgas'));
    }

    public function destroy($id)
    {
        $satgas_lecturer = SatgasLecturer::where('satgas_id', $id)->get();
        foreach ($satgas_lecturer as $key => $value) {
            $delete_lecturer = SatgasLecturer::find($value->id);
            $delete_lecturer->delete();
        }

        $satgas = Satgas::find($id);
        if($satgas) {
            $satgas->delete();
        }

        return redirect()->route('admin.satgas.index');
    }

    // public function massDestroy(MassDestroyUserRequest $request)
    // {
    //     User::whereIn('id', request('ids'))->delete();

    //     return response(null, Response::HTTP_NO_CONTENT);
    // }
}
