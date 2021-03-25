<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use App\Daftar;

class DaftarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $daftar = Daftar::all();

        return view('frontend.daftar.create', compact('daftar'));
    }

    public function admin(){

        $daftar = Daftar::all();

        return view('admin.daftar.index', compact('daftar'));
    }

    public function success(){

        return view('frontend.daftar.success');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Daftar $daftar)
    {
        Alert::success('Success', 'Data Berhasil Terdaftar');

        $birth = date('Y-m-d', strtotime(request('birth')));
        
        $this->validate(request(), [
            'name' => 'required',
            'address' => 'required',
            'city' => 'required',
            'birth' => 'required',
            'from' => 'required',
            'father' => 'required',
            'number-father' => 'required',
            'mother' => 'required',
            'number-mother' => 'required',
        ]);

        Daftar::create([
            'name' => request('name'),
            'address' => request('address'),
            'city' => request('city'),
            'birth' => $birth,
            'from' => request('from'),
            'father' => request('father'),
            'number-father' => request('number-father'),
            'mother' => request('mother'),
            'number-mother' => request('number-mother')
        ]);

        return redirect()->route('frontend.success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
