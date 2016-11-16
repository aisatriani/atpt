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
                <a class="btn btn-sm btn-primary" href="'.route('clothing.show',['id'=>$kaos->id]).'" ><i class="fa fa-list-alt"></i> Detail</a>
                <a class="btn btn-sm btn-primary" href="'.route('kaos.image',['id'=>$kaos->id]).'" ><i class="fa fa-picture-o"></i> Gambar</a>
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
        $kaos = Kaos::findOrFail($id);
        return view('clothing.view',compact('kaos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kaos = Kaos::findOrFail($id);
        return view('clothing.edit',compact('kaos'));
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
        $input = $request->all();
        $kaos = Kaos::findOrFail($id);
        $kaos->fill($input)->save();

        return redirect(route('clothing.index'));
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

    public function getImages($id)
    {
        $kaos = Kaos::findOrFail($id);
        $media = $kaos->getMedia($kaos->nama_kaos);

        return view('clothing.image',compact('kaos','media'));
    }

    public function storeImage(Request $request, $id)
    {


        //dd(Input::file('gambar'));
        $kaos = Kaos::findOrFail($id);
        $image =  $request->file('gambar');
        $kaos->addMedia($image)->toCollection($kaos->nama_kaos);

        return redirect()->back();
    }

    //===================== API

    public function getAllKaos()
    {
        $kaos = Kaos::all();
        for ($i = 0 ; $i < count($kaos); $i++){
            $media = $kaos[$i]->getMedia($kaos[$i]->nama_kaos);
            $arr_media = [];
            for ($j = 0; $j < count($media); $j++){
                $arr_media[] = $media[$j]->getUrl();
            }
            $kaos[$i]->images = $arr_media;
        }
        return $kaos;
    }
}
