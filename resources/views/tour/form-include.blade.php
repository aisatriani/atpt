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
                            <h4>Daftar Includes {{ $tour->nama_tour }}</h4>
                        </div>
                        <div class="pull-right">
                            <a id="add-item" href="#" class="btn btn-primary fa fa-plus"> Tambahkan item</a>
                        </div>

                        <div class="clearfix"></div>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-10">

                                <form action="{{route('tour.include.store',[$tour->id])}}" method="post" class="form-horizontal" role="form">

                                    {{ csrf_field() }}
                                    @if($tour->includes !== null)
                                        @for($i = 0; $i < count($tour->includes); $i++)
                                    {{--@foreach($tour->itenerary as $itenerary)--}}

                                        <div class="form-group">
                                            <label for="include[]" class="col-sm-2 control-label">Item</label>
                                            <div class="col-sm-6">
                                                <input type="text" name="include[]" class="form-control" id="include[]" placeholder="Item Itenerary" value="{{ $tour->includes[$i] }}">
                                            </div>
                                            <div id="button-remove" class="col-sm-2">
                                                <button type="button" id="remove-item" class="btn btn-danger btn-circle btn-xs"><i class="fa fa-times"></i>
                                                </button> Hapus
                                            </div>
                                        </div>

                                    @endfor
                                    @else
                                        <div id="alert-kosong" class="alert alert-info">
                                            <span>Item itenerari masih kosong. tambahkan item dengan mengklik tombol tambahkan item di atas</span>
                                        </div>
                                    @endif

                                    <div id="content-form"></div>

                                    <div class="form-group">
                                        <div class="col-sm-10 col-sm-offset-2">
                                            <button type="submit" class="btn btn-primary">Simpan</button>
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

@push('js')
    <script>
        $(document).ready(function () {
            var no = '{{ count($tour->includes) }}';
            $('#add-item').click(function (e) {
                var content = $('#content-form');
                var html = '<div class="form-group">'+
                            '<label for="include[]" class="col-sm-2 control-label">item</label>'+
                            '<div class="col-sm-6">'+
                            '<input type="text" name="include[]" class="form-control" id="include" placeholder="Item Itenerary">'+
                            '</div>'+
                            '<div id="button-remove" class="col-sm-2">'+
                            '<button type="button" id="remove-item" class="btn btn-danger btn-circle btn-xs"><i class="fa fa-times"></i>'+
                            '</button> Hapus'+
                            '</div>'+
                            '</div>';

                content.append(html);
                $('#alert-kosong').remove();
            });

            $('body').on('click', 'button#remove-item', function() {
                var divbutton = $(this).parent();
                var container = divbutton.parent();
                container.remove();
            });

        });
    </script>
@endpush

