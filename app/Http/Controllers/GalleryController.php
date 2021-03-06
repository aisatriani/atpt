<?php

namespace App\Http\Controllers;

use App\Gallery;
use Illuminate\Http\Request;

use App\Http\Requests;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $gallery = Gallery::findOrFail(1);
        $media = $gallery->getMedia('gallery');

        return view('gallery.image',compact('gallery','media'));
        //return view('gallery.image');
    }

    public function getGallery()
    {
        $result = [];

        $gallery = Gallery::findOrFail(1);
        $media = $gallery->getMedia('gallery');

        $arr_media = [];
        for ($j = 0; $j < count($media); $j++){
            $arr_media[] = $media[$j]->getUrl();
        }

        $result['gallery'] = $arr_media;
        $result['count'] = count($arr_media);

        return $result;

    }

    public function getImages()
    {
        $gallery = Gallery::findOrFail(1);
        $media = $gallery->getMedia('gallery');

        return view('clothing.image',compact('gallery','media'));
    }

    public function storeImage(Request $request, $id)
    {


        //dd(Input::file('gambar'));
        $gallery = Gallery::findOrFail($id);
        $image =  $request->file('gambar');
        $gallery->addMedia($image)->toCollection('gallery');

        return redirect()->back();
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
    public function store(Request $request)
    {
        //
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
