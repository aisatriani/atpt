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
                            <h4>{{ $kaos->nama_kaos }}</h4>
                        </div>

                        <div class="clearfix"></div>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">

                                <table class="table table-hover">

                                	<tbody>
                                		<tr>
                                			<td>Nama Kaos</td>
                                			<td>{{$kaos->nama_kaos}}</td>
                                		</tr>
                                        <tr>
                                            <td>Ukuran</td>
                                            <td>{{$kaos->ukuran}}</td>
                                        </tr>
                                        <tr>
                                            <td>Bahan</td>
                                            <td>{{$kaos->bahan}}</td>
                                        </tr>
                                        <tr>
                                            <td>Sablon</td>
                                            <td>{{$kaos->sablon}}</td>
                                        </tr>
                                        <tr>
                                            <td>Warna</td>
                                            <td>{{$kaos->warna}}</td>
                                        </tr>
                                        <tr>
                                            <td>Harga</td>
                                            <td>{{$kaos->harga}}</td>
                                        </tr>
                                        <tr>
                                            <td>Stok</td>
                                            <td>{{$kaos->stok}}</td>
                                        </tr>
                                	</tbody>
                                </table>


                            </div>

                        </div>
                    </div>
                </div>
                <!-- End Form Elements -->
            </div>
        </div>
    </div>
@endsection

