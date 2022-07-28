@extends('layouts.master')

@section('header')
	{{-- datatable --}}
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
	@if(auth()->user()->role == 'pengguna')
	<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">
	@endif
    {{-- <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script> --}}
	<link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
	@if(auth()->user()->role == 'pengguna')
	<link href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css" rel="stylesheet">
	@endif
@stop
@section('lap_perbaikan_adm', 'active')

@section('content')

<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Laporan Perbaikan Alat</h3>
                            @if (auth()->user()->role == 'pengguna')
                            <div class="right">
                                <button type="button" class="btn btn-lg" data-toggle="modal" data-target="#modal-0"><i class="lnr lnr-plus-circle"></i></button>
                            </div> 
                            @endif
                        </div>

                        {{-- MODAL INPUT --}}

        <div class="modal" tabindex="-1" role="dialog" id="modal-0">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Input Laporan Perbaikan</h5>
                    </div>
                    <div class="modal-body">
                        <form action="{{url('/lap_perbaikan_adm/inputdata')}}" method="POST">
                            {{csrf_field()}}
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Tanggal Kerusakan</label>
                                <div class="col-sm-7">
                                    <input type="date" name="tgl_kerusakan" class="form-control" id="tgl_kerusakan" value="" placeholder="Masukkan Tanggal Kerusakan ...">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Waktu Kerusakan</label>
                                <div class="col-sm-7">
                                    <input type="time" name="waktu_kerusakan" class="form-control" id="waktu_kerusakan" value="" placeholder="Masukkan Username ...">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Unit</label>
                                <div class="col-sm-7">
                                    <input type="number" name="unit" class="form-control" id="unit" value="" placeholder="Masukkan Jumlah Unit ...">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Nama Alat</label>
                                <div class="col-sm-7">
                                    <input type="text" name="nama_alat" class="form-control" id="nama_alat" value="" placeholder="Masukkan Nama Alat ...">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Merk</label>
                                <div class="col-sm-7">
                                    <input type="text" name="merk_type" class="form-control" id="merk_type" value="" placeholder="Masukkan Merk ...">
                                </div>
                            </div><div class="form-group row">
                                <label class="col-sm-5 col-form-label">Nomor Seri</label>
                                <div class="col-sm-7">
                                    <input type="text" name="no_seri" class="form-control" id="no_seri" value="" placeholder="Masukkan Nomor Seri ...">
                                </div>
                            </div><div class="form-group row">
                                <label class="col-sm-5 col-form-label">Tanggal Perbaikan</label>
                                <div class="col-sm-7">
                                    <input type="date" name="tgl_perbaikan" class="form-control" id="tgl_perbaikan" value="" placeholder="Masukkan Tanggal Perbaikan ...">
                                </div>
                            </div><div class="form-group row">
                                <label class="col-sm-5 col-form-label">Waktu Perbaikan</label>
                                <div class="col-sm-7">
                                    <input type="time" name="waktu_perbaikan" class="form-control" id="waktu_perbaikan" value="" placeholder="Masukkan Waktu Perbaikan ...">
                                </div>
                            </div><div class="form-group row">
                                <label class="col-sm-5 col-form-label">Jenis Kerusakan</label>
                                <div class="col-sm-7">
                                    <input type="text" name="jenis_kerusakan" class="form-control" id="jenis_kerusakan" value="" placeholder="Masukkan Jenis Kerusakan ...">
                                </div>
                            </div><div class="form-group row">
                                <label class="col-sm-5 col-form-label">Usaha Perbaikan</label>
                                <div class="col-sm-7">
                                    <input type="text" name="usaha_perbaikan" class="form-control" id="usaha_perbaikan" value="" placeholder="Masukkan Usaha Perbaikan ...">
                                </div>
                            </div><div class="form-group row">
                                <label class="col-sm-5 col-form-label">Nama Teknisi</label>
                                <div class="col-sm-7">
                                    <input type="text" name="teknisi" class="form-control" id="teknisi" value="" placeholder="Masukkan Nama Teknisi ...">
                                </div>
                            </div><div class="form-group row">
                                <label class="col-sm-5 col-form-label">Rekomendasi</label>
                                <div class="col-sm-7">
                                    <input type="text" name="rekomendasi" class="form-control" id="rekomendasi" value="" placeholder="Masukkan Rekomendasi ...">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-success">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

                        <div class="panel-body">
                            <table class="table table-striped" id="myTable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Tanggal Kerusakan</th>
                                        <th>Waktu Kerusakan</th>
                                        <th>Unit</th>
                                        <th>Nama Alat</th>
                                        <th>Merk</th>
                                        <th>No Seri</th>
                                        <th>Tanggal Perbaikan</th>
                                        <th>Waktu Perbaikan</th>
                                        <th>Jenis Kerusakan</th>
                                        <th>Usaha Perbaikan</th>
                                        <th>Nama Teknisi</th>
                                        <th>Rekomendasi</th>
                                        @if (auth()->user()->role == 'admin')
                                        <th>Aksi</th>
                                        @endif
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($lap_per as $lap_per)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $lap_per->tgl_kerusakan }}</td>
                                        <td>{{ $lap_per->waktu_kerusakan }}</td>
                                        <td>{{ $lap_per->unit }}</td>
                                        <td>{{ $lap_per->nama_alat }}</td>
                                        <td>{{ $lap_per->merk_type }}</td>
                                        <td>{{ $lap_per->no_seri }}</td>
                                        <td>{{ $lap_per->tgl_perbaikan }}</td>
                                        <td>{{ $lap_per->waktu_perbaikan }}</td>
                                        <td>{{ $lap_per->jenis_kerusakan }}</td>
                                        <td>{{ $lap_per->usaha_perbaikan }}</td>
                                        <td>{{ $lap_per->teknisi }}</td>
                                        <td>{{ $lap_per->rekomendasi }}</td>
                                        @if (auth()->user()->role == 'admin')
                                        <td><button lap_per="{{$lap_per->nama_alat}}" lap_per_id="{{$lap_per->id}}" class="btn btn-md btn-danger delete">Hapus</button></td>
                                        @endif
                                        @endforeach
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@section('footer')
	{{-- Data table --}}
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
	@if(auth()->user()->role == 'pengguna')
	<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>
	@endif
    @if(auth::user()->role == 'pengguna')   
    <script>
        $(document).ready( function(){
            $('#myTable').DataTable({
                dom: 'Bfrtip',
                buttons: [ 'excel', ]
            });
        });
    </script>  
    @else
    <script>
        $(document).ready( function () {
        $('#myTable').DataTable();
    } );
    </script>

    {{-- Hapus --}}
<script>
    $('.delete').click(function(){
        var id = $(this).attr('lap_per_id');
        var nama = $(this).attr('lap_per');
        swal({
            title: "Yakin?",
            text: "Mau Hapus Data "+nama+"?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            console.log(willDelete);
            if (willDelete) {
                window.location = "/lapper/hapus/"+id+"";
            }
        })
    });
</script>
    @endif
@stop
@endsection