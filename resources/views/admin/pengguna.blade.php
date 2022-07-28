@extends('layouts.master')

@section('pengguna', 'active')

@section('content')

<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <!-- TABLE STRIPED -->
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Administrasi</h3>
                            <div class="right">
                                <button type="button" class="btn btn-lg" data-toggle="modal" data-target="#modal-0"><i class="lnr lnr-plus-circle"></i></button>
                            </div>
                        </div>
                        {{-- MODAL INPUT --}}

        <div class="modal" tabindex="-1" role="dialog" id="modal-0">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Input Pengguna</h5>
                    </div>
                    <div class="modal-body">
                        <form action="{{url('/pengguna/inputdatapengguna')}}" method="POST">
                            {{csrf_field()}}
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Nama</label>
                                <div class="col-sm-7">
                                    <input type="text" name="nama" class="form-control" id="nama" value="" placeholder="Masukkan Nama ...">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Username</label>
                                <div class="col-sm-7">
                                    <input type="text" name="name" class="form-control" id="name" value="" placeholder="Masukkan Username ...">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Email</label>
                                <div class="col-sm-7">
                                    <input type="email" name="email" class="form-control" id="email" value="" placeholder="Masukkan Email ...">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">No Handphone</label>
                                <div class="col-sm-7">
                                    <input type="text" name="no_hp" class="form-control" id="no_hp" value="" placeholder="Masukkan No Handphone ...">
                                </div>
                            </div>
                            {{-- <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Password</label>
                                <div class="col-sm-7">
                                    <input type="password" name="password" class="form-control" id="password" value="" placeholder="Masukkan Password ...">
                                </div>
                            </div> --}}
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-success">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
         {{-- MODAL EDIT --}}
        
         <div class="modal" tabindex="-1" role="dialog" id="modal-1">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Password</h5>
                </div>
                <div class="modal-body">
                    <form action="{{url('/updatepengguna')}}" method="POST">
                        {{csrf_field()}}
                        <input type="hidden" name="id" id="id">
                        <input type="hidden" name="url_getdata" id="url_getdata" value="{{ url('getdatapengguna/') }}">
                        <div class="form-group row">
                            <label class="col-sm-5 col-form-label">Password Baru</label>
                            <div class="col-sm-7">
                                <input name="password" id="password" class="form-control">
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
                            <table class="table table-striped table-hover" id="myTable">
                                <thead>
                                    {{-- {{ dd($user) }} --}}
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Username</th>
                                        <th>Email</th>
                                        <th>No Handphone</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($pengguna as $pengguna)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $pengguna->nama }}</td>
                                        <td>{{ $pengguna->name }}</td>
                                        <td>{{ $pengguna->email }}</td>
                                        <td>{{ $pengguna->no_hp }}</td>
                                        <td><button  onclick="getdata({{$pengguna->user_id}})" data-toggle="modal" data-target="#modal-1" class="btn btn-success btn-md">Edit Password</button>&nbsp;<button class="btn btn-danger btn-md delete" penggunanama="{{$pengguna->nama}}" penggunaid="{{$pengguna->user_id}}">Hapus</button></td>
                                    @endforeach
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- END TABLE STRIPED -->
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
<script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js"></script>
{{-- Hapus --}}
<script>
    $('.delete').click(function(){
        var id = $(this).attr('penggunaid');
        var nama = $(this).attr('penggunanama');
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
                window.location = "/datapengguna/hapus/"+id+"";
            }
        })
    });
</script>

{{-- Data Table --}}
<script>
    $(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>

<script>

    function getdata(id)
    {
        console.log(id)
        var url = $('#url_getdata').val() + '/' + id
        console.log(url);

        $.ajax({
            url: url,
            cache: false,
            success: function(response){
                console.log(response);

                
                $('#id').val(id);
                $('#password').val(response.user['password']);

            }
        });    
    }

</script>
@stop

@endsection