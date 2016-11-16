@extends('layouts')

@section('content')
    <div class="row">
        <!-- Page Header -->
        <div class="col-lg-12">
            <h1 class="page-header">Clothing</h1>
        </div>
        <!--End Page Header -->
        <div class="row">
            <div class="col-lg-12">
                <!-- Form Elements -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="pull-left">
                            <h4>Daftar Gambar {{ $kaos->nama_kaos }}</h4>
                        </div>
                        {{--<div class="pull-right">--}}
                            {{--<a class="btn btn-primary" href="{{ route('tour.create') }}">Tambahkan</a>--}}
                        {{--</div>--}}
                        <div class="clearfix"></div>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                           <div class="col-lg-8">
                               @foreach($media as $m)
                           	    <img style="margin-bottom: 10px" src="{{ $m->getUrl() }}" height="200px" width="200px"/>
                               @endforeach
                           </div>
                            <div class="col-lg-4">
                            	<div class="panel panel-info">
                            		  <div class="panel-heading">
                            				<h3 class="panel-title">Upload Gambar</h3>
                            		  </div>
                            		  <div class="panel-body">
                            				<form action="{{ route('kaos.image.store',[$kaos->id]) }}" enctype="multipart/form-data" method="post" role="form">

                            					<div class="form-group">
                            						<label for=""></label>
                            						<input type="file" class="form-control" name="gambar" id="gambar" placeholder="Input...">

                            					</div>
                            				

                            					<button type="submit" class="btn btn-primary">Upload</button>
                            				</form>
                            		  </div>
                            	</div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- End Form Elements -->
            </div>
        </div>
    </div>
@endsection

@push('css')

@endpush

@push('js')

<script>
    $(document).ready(function () {

    });
</script>


@endpush