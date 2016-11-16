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
                            <h4>Daftar Paket tour atupato</h4>
                        </div>
                        <div class="pull-right">
                            <a class="btn btn-primary" href="{{ route('clothing.create') }}">Tambahkan</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <table class="table table-striped table-bordered table-hover" id="dataTables">
                                    <thead>
                                    <tr>
                                        <th>NO</th>
                                        <th class="col-sm-4">Paket Tour</th>
                                        <th>Ukuran</th>
                                        <th>Harga</th>
                                        <th>Stok</th>
                                        <th>Opsi</th>
                                    </tr>
                                    </thead>
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

@push('css')
<link href="{{asset('siminta')}}/assets/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
@endpush

@push('js')
<script src="{{asset('siminta')}}/assets/plugins/dataTables/jquery.dataTables.js"></script>
<script src="{{asset('siminta')}}/assets/plugins/dataTables/dataTables.bootstrap.js"></script>
<script>
    $(document).ready(function () {
        $('#dataTables').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{!! route('kaos.data') !!}',
            columns: [
                { data: 'id', name: 'id' },
                { data: 'nama_kaos', name: 'nama_kaos' },
                { data: 'ukuran', name: 'ukuran' },
                { data: 'harga', name: 'harga' },
                { data: 'stok', name: 'stok' },
                { data: 'action', name: 'action' }
            ]
        });
    });
</script>


@endpush