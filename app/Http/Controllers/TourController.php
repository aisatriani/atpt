<?php

namespace App\Http\Controllers;

use App\Tour;

use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;

class TourController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('tour.index');
    }

    public function getAllData()
    {

        $tour = Tour::all();
        return Datatables::of($tour)
            ->addColumn('nama',function ($tour){
                return '<a href="'.route('tour.show',[$tour->id]).'">'.$tour->nama_tour.'</a>';
            })
            ->addColumn('harga_format',function ($tour){
                return 'Rp '. number_format($tour->harga,0,',','.') .'/pax';
            })
            ->addColumn('action',function ($tour){
                return '
                <a class="btn btn-sm btn-warning" href="'.route('tour.itenerary',['id'=>$tour->id]).'" ><i class="fa fa-list"></i> Itenerary</a>
                <a class="btn btn-sm btn-warning" href="'.route('tour.include',['id'=>$tour->id]).'" ><i class="fa fa-list-alt"></i> Include</a>
                <a class="btn btn-sm btn-info" href="'.route('tour.image',['id'=>$tour->id]).'" ><i class="fa fa-picture-o"></i> Gambar</a>
                <a class="btn btn-sm btn-primary" href="'.route('tour.edit',['id'=>$tour->id]).'" ><i class="fa fa-pencil-square-o"></i> Edit</a>
                 <a data-confirm="Yakin ingin menghapus data ini?" data-method="delete" class="btn btn-sm btn-danger" href="'.route('tour.destroy',[$tour->id]).'" ><i class="fa fa-times"></i> Hapus</a>';
            })
            ->make(true);
    }

    public function getAllTour()
    {
        $tour = Tour::all();
        for ($i = 0 ; $i < count($tour); $i++){
            $media = $tour[$i]->getMedia($tour[$i]->nama_tour);
            $arr_media = [];
            for ($j = 0; $j < count($media); $j++){
                $arr_media[] = $media[$j]->getUrl();
            }

            $tour[$i]->images = $arr_media;
            $tour[$i]->harga_text = $tour[$i]->harga_format;
            $tour[$i]->min_text = 'min '. $tour[$i]->min_require .' org';
        }

        return $tour;
    }

    public function getItenerary($id)
    {
        $tour = Tour::findOrFail($id);
        return view('tour.form-itenerary',compact('tour'));
    }

    public function storeItenerary(Request $request, $id)
    {
        //dd($request->all());
        $input = $request->all();
        $arr_itenerary = $input['itenerary'];
        $str_itenerary = json_encode($arr_itenerary);

        $tour = Tour::findOrFail($id);
        $tour->itenerary = $str_itenerary;
        $tour->save();

        return redirect()->back();
    }

    public function getInclude($id)
    {
        $tour = Tour::findOrFail($id);
        return view('tour.form-include',compact('tour'));
    }

    public function storeInclude(Request $request, $id)
    {
        //dd($request->all());
        $input = $request->all();
        $arr_includes = $input['include'];
        $str_includes = json_encode($arr_includes);

        $tour = Tour::findOrFail($id);
        $tour->includes = $str_includes;
        $tour->save();

        return redirect()->back();
    }

    public function getImages($id)
    {
        $tour = Tour::findOrFail($id);
        $media = $tour->getMedia($tour->nama_tour);
       // return $media[0]->getUrl()
        return view('tour.image',compact('tour','media'));
    }

    public function storeImage(Request $request, $id)
    {


        //dd(Input::file('gambar'));
        $tour = Tour::findOrFail($id);
        $image =  $request->file('gambar');
        $tour->addMedia($image)->toCollection($tour->nama_tour);
        //$tour->addMedia($image)->toCollection("gambar1");

        return redirect()->back();
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tour.form');
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
        $input = $request->all();
        $this->validate($request,[
            'nama_tour'=>'required',
            'deskripsi'=>'required',
            'latitude'=>'required',
            'longitude'=>'required',
            'harga'=>'required',
        ]);

        Tour::create($input);
        return redirect(route('tour.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tour = Tour::findOrFail($id);
        $itenerary = $tour->itenerary;
        return view('tour.show',compact('tour','itenerary'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tour = Tour::findOrFail($id);
        return view('tour.edit',compact('tour'));
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
        //dd($request->all());
        $input = $request->all();
        $this->validate($request,[
            'nama_tour'=>'required',
            'deskripsi'=>'required',
            'latitude'=>'required',
            'longitude'=>'required',
            'harga'=>'required',
        ]);

        $tour = Tour::findOrFail($id);
        $tour->fill($input)->save();

        return redirect(route('tour.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tour = Tour::findOrFail($id);
        $tour->delete();

        return redirect(route('tour.index'));
    }
}
