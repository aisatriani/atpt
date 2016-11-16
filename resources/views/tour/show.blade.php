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
                            <h4>Paket {{ $tour->nama_tour }}</h4>
                        </div>
                        <div class="pull-right">

                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">

                                <!-- TAB NAVIGATION -->
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="active"><a href="#tab1" role="tab" data-toggle="tab">Deskripsi</a></li>
                                    <li><a href="#tab2" role="tab" data-toggle="tab">Itenerary</a></li>
                                    <li><a href="#tab3" role="tab" data-toggle="tab">Include</a></li>
                                </ul>
                                <!-- TAB CONTENT -->
                                <div class="tab-content">
                                    <div class="active tab-pane fade in" id="tab1"> 
                                        <table class="table table-hover">

                                        	<tbody>
                                        		<tr>
                                        			<td width="200px">Destination</td>
                                                    <td>{{ $tour->nama_tour }}</td>
                                        		</tr>
                                                <tr>
                                                    <td>Deskripsi</td>
                                                    <td>{{ $tour->deskripsi }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Telpon</td>
                                                    <td>{{ $tour->telp }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Latitude</td>
                                                    <td>{{ $tour->latitude }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Longitude</td>
                                                    <td>{{ $tour->longitude }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Harga</td>
                                                    <td>{{ $tour->harga_format }}</td>
                                                </tr>
                                        	</tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane fade" id="tab2">

                                        <ul class="list-group">
                                            @foreach($itenerary as $item)
                                        	<li class="list-group-item {{ str_contains($item,'Day') ? 'selected' : '' }}">{{ $item }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <div class="tab-pane fade" id="tab3">
                                        <ul class="list-group">
                                            @foreach($tour->includes as $item)
                                                <li class="list-group-item {{ str_contains($item,'Day') ? 'selected' : '' }}">{{ $item }}</li>
                                            @endforeach
                                        </ul>
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