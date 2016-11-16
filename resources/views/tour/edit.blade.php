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
                            <h4>Edit Data Tour Atupato</h4>
                        </div>

                        <div class="clearfix"></div>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-8">

                                <form action="{{route('tour.update',[$tour->id])}}" method="post" class="form-horizontal" role="form">
                                    {{ method_field('PUT') }}
                                    {{ csrf_field() }}

                                    <div class="form-group {{ (count($errors) > 0) ? 'has-error' : ''}}">
                                        <label for="nama_tour" class="col-sm-2 control-label">Nama tour</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="nama_tour" class="form-control" id="nama_tour" placeholder="Nama Tour" value="{{ $tour->nama_tour }}">
                                            @if(count($errors) > 0)
                                            <span class="help-block">{{ $errors->first('nama_tour') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group {{ (count($errors) > 0) ? 'has-error' : ''}}">
                                        <label for="deskripsi" class="col-sm-2 control-label">Deskripsi</label>
                                        <div class="col-sm-10">
                                            <textarea name="deskripsi" style="height: 150px" class="form-control" id="deskripsi" placeholder="Deskripsi">{{ $tour->deskripsi }}</textarea>
                                            @if(count($errors) > 0)
                                                <span class="help-block">{{ $errors->first('deskripsi') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="telp" class="col-sm-2 control-label">Telp</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="telp" class="form-control" id="telp" placeholder="Telp" value="{{ $tour->telp }}">
                                        </div>
                                    </div>

                                    <div class="form-group {{ (count($errors) > 0) ? 'has-error' : ''}} ">
                                        <label for="latitude" class="col-sm-2 control-label">Latitude</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="latitude" class="form-control" id="latitude" value="{{ $tour->latitude }}"
                                                   placeholder="Latitude">
                                            @if(count($errors) > 0)
                                                <span class="help-block">{{ $errors->first('latitude') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group {{ (count($errors) > 0) ? 'has-error' : ''}}">
                                        <label for="longitude" class="col-sm-2 control-label">Longitude</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="longitude" class="form-control" id="longitude" value="{{ $tour->longitude }}"
                                                   placeholder="Longitude">
                                            @if(count($errors) > 0)
                                                <span class="help-block">{{ $errors->first('longitude') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group {{ (count($errors) > 0) ? 'has-error' : ''}}">
                                        <label for="harga" class="col-sm-2 control-label">Harga</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="harga" class="form-control" id="harga" placeholder="Harga" value="{{ $tour->harga }}">
                                            @if(count($errors) > 0)
                                                <span class="help-block">{{ $errors->first('harga') }}</span>
                                            @endif
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <div class="col-sm-10 col-sm-offset-2">
                                            <button type="submit" class="btn btn-primary">Submit</button>
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

