@extends('layouts')

@section('content')
    <div class="row">
        <!-- Page Header -->
        <div class="col-lg-12">
            <h1 class="page-header">Tour</h1>
        </div>
        <!--End Page Header -->
        <div class="row">
            <div class="col-lg-12">
                <!-- Form Elements -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="pull-left">
                            <h4>Tour Atupato</h4>
                        </div>

                        <div class="clearfix"></div>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">

                                @if (count($errors) > 0)
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif


                                <form action="{{route('clothing.store')}}" method="post" enctype="multipart/form-data" class="form-horizontal" role="form">
                                    {{ csrf_field() }}

                                <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">

                                    <div class="form-group {{ (count($errors) > 0) ? 'has-error' : ''}}">
                                        <label for="nama_tour" class="col-sm-2 control-label">Nama Kaos</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="nama_kaos" class="form-control" id="nama_kaos" placeholder="Nama Kaos">
                                            @if(count($errors) > 0)
                                                <span class="help-block">{{ $errors->first('nama_kaos') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group {{ (count($errors) > 0) ? 'has-error' : ''}}">
                                        <label for="deskripsi" class="col-sm-2 control-label">Ukuran</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="ukuran" class="form-control" id="ukuran" placeholder="Ukuran">
                                            @if(count($errors) > 0)
                                                <span class="help-block">{{ $errors->first('ukuran') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group {{ (count($errors) > 0) ? 'has-error' : ''}}">
                                        <label for="deskripsi" class="col-sm-2 control-label">Bahan</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="bahan" class="form-control" id="bahan" placeholder="Bahan">
                                            @if(count($errors) > 0)
                                                <span class="help-block">{{ $errors->first('bahan') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group {{ (count($errors) > 0) ? 'has-error' : ''}}">
                                        <label for="deskripsi" class="col-sm-2 control-label">Sablon</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="sablon" class="form-control" id="sablon" placeholder="Sablom">
                                            @if(count($errors) > 0)
                                                <span class="help-block">{{ $errors->first('bahan') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group {{ (count($errors) > 0) ? 'has-error' : ''}}">
                                        <label for="latitude" class="col-sm-2 control-label">Warna</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="warna" class="form-control" id="warna"
                                                   placeholder="Warna">
                                            @if(count($errors) > 0)
                                                <span class="help-block">{{ $errors->first('warna') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group {{ (count($errors) > 0) ? 'has-error' : ''}}">
                                        <label for="longitude" class="col-sm-2 control-label">Harga</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="harga" class="form-control" id="harga"
                                                   placeholder="Harga">
                                            @if(count($errors) > 0)
                                                <span class="help-block">{{ $errors->first('harga') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group {{ (count($errors) > 0) ? 'has-error' : ''}}">
                                        <label for="harga" class="col-sm-2 control-label">Stok</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="stok" class="form-control" id="stok" placeholder="Stok">
                                            @if(count($errors) > 0)
                                                <span class="help-block">{{ $errors->first('stok') }}</span>
                                            @endif
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <div class="col-sm-10 col-sm-offset-2">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                    <div class="panel panel-info">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">Gambar Baju</h3>
                                        </div>
                                        <div class="panel-body form-inline">
                                                <div class="form-group {{ (count($errors) > 0) ? 'has-error' : ''}}">
                                                    <label for=""></label>
                                                    <input type="file" class="form-control" name="gambar" id="gambar" placeholder="Input...">
                                                    @if(count($errors) > 0)
                                                        <span class="help-block">{{ $errors->first('gambar') }}</span>
                                                    @endif
                                                </div>
                                        </div>
                                    </div>
                                </div>






                                </form>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- End Form Elements -->
            </div>
        </div>
    </div>
@endsection

