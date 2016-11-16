<?php

namespace App\Http\Controllers;

use App\Kaos;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Yajra\Datatables\Datatables;

class ClothingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kaos = Kaos::all();
        return view('clothing.index',compact('kaos'));
    }

    public function getAllData()
    {
        $kaos = Kaos::all();
        return Datatables::of($kaos)
            ->addColumn('action',function ($kaos){
                return '
               <a class="btn btn-sm btn-primary" href="'.route('clothing.edit',['id'=>$kaos->id]).'" ><i class="fa fa-pencil-square-o"></i> Edit</a>
                 <a data-confirm="Yakin ingin menghapus data ini?" data-method="delete" class="btn btn-sm btn-danger" href="'.route('clothing.destroy',[$kaos->id]).'" ><i class="fa fa-times"></i> Hapus</a>';
            })
            ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clothing.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $this->validate($request, [
            'nama_kaos' => 'required',
            'ukuran' => 'required',
            'bahan' => 'required',
            'sablon' => 'required',
            'warna' => 'required',
            'harga' => 'required',
            'stok' => 'required',
            'gambar' => 'required'
        ]);

        $input = $request->all();
        $gambar = $request->file('gambar');

        DB::transaction(function () use ($gambar,$input) {

            $kaos = Kaos::create($input);

            //$kaosMedia = Kaos::findOrFail($kaos->id);

            $kaos->addMedia($gambar)->toCollection($kaos->nama_kaos);

        });



        return redirect()->back()->with(['success'=> 'Data Berhasil ditambahkan']);
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
        $kaos = Kaos::findOrFail($id);
        $kaos->delete();

        return redirect()->back();

    }
}
