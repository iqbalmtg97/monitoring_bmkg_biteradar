@extends('layouts.master')

@section('header')
<link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/>
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

{{-- @section('laporan', 'active') --}}
@section('lap_pemeliharaan_adm', 'active')

@section('content')

<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Laporan Pemeliharaan Alat</h3>
                        </div>
                        <div style="margin-left: 30px">
                            {{-- <button data-toggle="modal" data-target="#modal-0" class="btn btn-md btn-primary">Edit</button> --}}
                            <a href="/lapem/export" class="btn btn-md btn-success">Excel</a>
                        </div>

                        {{-- MODAL EDIT --}}
        
                <div class="modal" tabindex="-1" role="dialog" id="modal-0">
                <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Laporan Pemeliharaan</h5>
                    </div>
                    <div class="modal-body">
                        <form action="{{url('/lap_pemeliharaan/update')}}" method="POST">
                            {{csrf_field()}}
                            <input type="hidden" name="id" id="id">
                            <input type="hidden" name="url_getdata" id="url_getdata" value="{{ url('getdatalapem/') }}">
                            {{-- <input type="hidden" name="url_getdata_az" id="url_getdata_az" value="{{ url('getdatalapem_az/') }}"> --}}
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Hasil Check</label>
                                <div class="col-sm-7">
                                    <select name="hasil_check" id="hasil_check" class="form-control">
                                        <option value="1">Good</option>
                                        <option value="0">Fail</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Note</label>
                                <div class="col-sm-7">
                                    <input name="note" id="note" class="form-control" cols="35" rows="5">
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

        <div class="modal" tabindex="-1" role="dialog" id="modal-1">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Laporan Pemeliharaan</h5>
                    </div>
                    <div class="modal-body">
                        <form action="{{url('/lap_pemeliharaan/update1')}}" method="POST">
                            {{csrf_field()}}
                            <input type="hidden" name="id" id="id_rt">
                            <input type="hidden" name="url_getdataa" id="url_getdataa" value="{{ url('getdatalapem/') }}">
                            {{-- <input type="hidden" name="url_getdata_az" id="url_getdata_az" value="{{ url('getdatalapem_az/') }}"> --}}
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Hasil Check</label>
                                <div class="col-sm-7">
                                    <select name="hasil_radiate_time" id="hasil_radiate_time" class="form-control">
                                    <option value="1">Good</option>
                                        <option value="0">Fail</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Note</label>
                                <div class="col-sm-7">
                                    <input name="note_radiate_time" value="" id="note_radiate_time" class="form-control" cols="35" rows="5">
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
        <div class="modal" tabindex="-1" role="dialog" id="modal-2">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Laporan Pemeliharaan</h5>
                    </div>
                    <div class="modal-body">
                        <form action="{{url('/lap_pemeliharaan/update2')}}" method="POST">
                            {{csrf_field()}}
                            <input type="hidden" name="id" id="id_mf">
                            <input type="hidden" name="url_getdata_mf" id="url_getdata_mf" value="{{ url('getdatalapem/') }}">
                            {{-- <input type="hidden" name="url_getdata_az" id="url_getdata_az" value="{{ url('getdatalapem_az/') }}"> --}}
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Hasil Check</label>
                                <div class="col-sm-7">
                                    <select name="hasil_mmi_fault" id="hasil_mmi_fault" class="form-control">
                                    <option value="1">Good</option>
                                        <option value="0">Fail</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Note</label>
                                <div class="col-sm-7">
                                    <input name="note_mmi_fault" value="" id="note_mmi_fault" class="form-control" cols="35" rows="5">
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
        <div class="modal" tabindex="-1" role="dialog" id="modal-3">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Laporan Pemeliharaan</h5>
                    </div>
                    <div class="modal-body">
                        <form action="{{url('/lap_pemeliharaan/update3')}}" method="POST">
                            {{csrf_field()}}
                            <input type="hidden" name="id" id="id_hvps_v">
                            <input type="hidden" name="url_getdata_hvps_v" id="url_getdata_hvps_v" value="{{ url('getdatalapem/') }}">
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Hasil Check</label>
                                <div class="col-sm-7">
                                    <select name="hasil_hvps_v" id="hasil_hvps_v" class="form-control">
                                    <option value="1">Good</option>
                                        <option value="0">Fail</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Note</label>
                                <div class="col-sm-7">
                                    <input name="note_hvps_v" value="" id="note_hvps_v" class="form-control" cols="35" rows="5">
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
        <div class="modal" tabindex="-1" role="dialog" id="modal-4">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Laporan Pemeliharaan</h5>
                    </div>
                    <div class="modal-body">
                        <form action="{{url('/lap_pemeliharaan/update4')}}" method="POST">
                            {{csrf_field()}}
                            <input type="hidden" name="id" id="id_hvps_i">
                            <input type="hidden" name="url_getdata_hvps_i" id="url_getdata_hvps_i" value="{{ url('getdatalapem/') }}">
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Hasil Check</label>
                                <div class="col-sm-7">
                                    <select name="hasil_hvps_i" id="hasil_hvps_i" class="form-control">
                                    <option value="1">Good</option>
                                        <option value="0">Fail</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Note</label>
                                <div class="col-sm-7">
                                    <input name="note_hvps_i" value="" id="note_hvps_i" class="form-control" cols="35" rows="5">
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
        <div class="modal" tabindex="-1" role="dialog" id="modal-5">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Laporan Pemeliharaan</h5>
                    </div>
                    <div class="modal-body">
                        <form action="{{url('/lap_pemeliharaan/update5')}}" method="POST">
                            {{csrf_field()}}
                            <input type="hidden" name="id" id="id_mag_i">
                            <input type="hidden" name="url_getdata_mag_i" id="url_getdata_mag_i" value="{{ url('getdatalapem/') }}">
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Hasil Check</label>
                                <div class="col-sm-7">
                                    <select name="hasil_mag_i" id="hasil_mag_i" class="form-control">
                                    <option value="1">Good</option>
                                        <option value="0">Fail</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Note</label>
                                <div class="col-sm-7">
                                    <input name="note_mag_i" value="" id="note_mag_i" class="form-control" cols="35" rows="5">
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
        <div class="modal" tabindex="-1" role="dialog" id="modal-6">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Laporan Pemeliharaan</h5>
                    </div>
                    <div class="modal-body">
                        <form action="{{url('/lap_pemeliharaan/update6')}}" method="POST">
                            {{csrf_field()}}
                            <input type="hidden" name="id" id="id_az">
                            <input type="hidden" name="url_getdata_az" id="url_getdata_az" value="{{ url('getdatalapem/') }}">
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Hasil Check</label>
                                <div class="col-sm-7">
                                    <select name="hasil_az" id="hasil_az" class="form-control">
                                    <option value="1">Good</option>
                                        <option value="0">Fail</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Note</label>
                                <div class="col-sm-7">
                                    <input name="note_az" value="" id="note_az" class="form-control" cols="35" rows="5">
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
        <div class="modal" tabindex="-1" role="dialog" id="modal-7">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Laporan Pemeliharaan</h5>
                    </div>
                    <div class="modal-body">
                        <form action="{{url('/lap_pemeliharaan/update7')}}" method="POST">
                            {{csrf_field()}}
                            <input type="hidden" name="id" id="id_el">
                            <input type="hidden" name="url_getdata_el" id="url_getdata_el" value="{{ url('getdatalapem/') }}">
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Hasil Check</label>
                                <div class="col-sm-7">
                                    <select name="hasil_el" id="hasil_el" class="form-control">
                                    <option value="1">Good</option>
                                        <option value="0">Fail</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Note</label>
                                <div class="col-sm-7">
                                    <input name="note_el" value="" id="note_el" class="form-control" cols="35" rows="5">
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
        <div class="modal" tabindex="-1" role="dialog" id="modal-8">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Laporan Pemeliharaan</h5>
                    </div>
                    <div class="modal-body">
                        <form action="{{url('/lap_pemeliharaan/update8')}}" method="POST">
                            {{csrf_field()}}
                            <input type="hidden" name="id" id="id_tx_cab">
                            <input type="hidden" name="url_getdata_tx_cab" id="url_getdata_tx_cab" value="{{ url('getdatalapem/') }}">
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Hasil Check</label>
                                <div class="col-sm-7">
                                    <select name="hasil_tx_cab" id="hasil_tx_cab" class="form-control">
                                    <option value="1">Good</option>
                                        <option value="0">Fail</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Note</label>
                                <div class="col-sm-7">
                                    <input name="note_tx_cab" value="" id="note_tx_cab" class="form-control" cols="35" rows="5">
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
        <div class="modal" tabindex="-1" role="dialog" id="modal-9">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Laporan Pemeliharaan</h5>
                    </div>
                    <div class="modal-body">
                        <form action="{{url('/lap_pemeliharaan/update9')}}" method="POST">
                            {{csrf_field()}}
                            <input type="hidden" name="id" id="id_hot_box">
                            <input type="hidden" name="url_getdata_hot_box" id="url_getdata_hot_box" value="{{ url('getdatalapem/') }}">
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Hasil Check</label>
                                <div class="col-sm-7">
                                    <select name="hasil_hot_box" id="hasil_hot_box" class="form-control">
                                    <option value="1">Good</option>
                                        <option value="0">Fail</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Note</label>
                                <div class="col-sm-7">
                                    <input name="note_hot_box" value="" id="note_hot_box" class="form-control" cols="35" rows="5">
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
        <div class="modal" tabindex="-1" role="dialog" id="modal-10">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Laporan Pemeliharaan</h5>
                    </div>
                    <div class="modal-body">
                        <form action="{{url('/lap_pemeliharaan/update10')}}" method="POST">
                            {{csrf_field()}}
                            <input type="hidden" name="id" id="id_fwd_power">
                            <input type="hidden" name="url_getdata_fwd_power" id="url_getdata_fwd_power" value="{{ url('getdatalapem/') }}">
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Hasil Check</label>
                                <div class="col-sm-7">
                                    <select name="hasil_fwd_power" id="hasil_fwd_power" class="form-control">
                                    <option value="1">Good</option>
                                        <option value="0">Fail</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Note</label>
                                <div class="col-sm-7">
                                    <input name="note_fwd_power" value="" id="note_fwd_power" class="form-control" cols="35" rows="5">
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
        <div class="modal" tabindex="-1" role="dialog" id="modal-11">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Laporan Pemeliharaan</h5>
                    </div>
                    <div class="modal-body">
                        <form action="{{url('/lap_pemeliharaan/update11')}}" method="POST">
                            {{csrf_field()}}
                            <input type="hidden" name="id" id="id_rev_power">
                            <input type="hidden" name="url_getdata_rev_power" id="url_getdata_rev_power" value="{{ url('getdatalapem/') }}">
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Hasil Check</label>
                                <div class="col-sm-7">
                                    <select name="hasil_rev_power" id="hasil_rev_power" class="form-control">
                                    <option value="1">Good</option>
                                        <option value="0">Fail</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Note</label>
                                <div class="col-sm-7">
                                    <input name="note_rev_power" value="" id="note_rev_power" class="form-control" cols="35" rows="5">
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
        <div class="modal" tabindex="-1" role="dialog" id="modal-12">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Laporan Pemeliharaan</h5>
                    </div>
                    <div class="modal-body">
                        <form action="{{url('/lap_pemeliharaan/update12')}}" method="POST">
                            {{csrf_field()}}
                            <input type="hidden" name="id" id="id_vswr">
                            <input type="hidden" name="url_getdata_vswr" id="url_getdata_vswr" value="{{ url('getdatalapem/') }}">
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Hasil Check</label>
                                <div class="col-sm-7">
                                    <select name="hasil_vswr" id="hasil_vswr" class="form-control">
                                    <option value="1">Good</option>
                                        <option value="0">Fail</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Note</label>
                                <div class="col-sm-7">
                                    <input name="note_vswr" value="" id="note_vswr" class="form-control" cols="35" rows="5">
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
        <div class="modal" tabindex="-1" role="dialog" id="modal-13">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Laporan Pemeliharaan</h5>
                    </div>
                    <div class="modal-body">
                        <form action="{{url('/lap_pemeliharaan/update13')}}" method="POST">
                            {{csrf_field()}}
                            <input type="hidden" name="id" id="id_prf">
                            <input type="hidden" name="url_getdata_prf" id="url_getdata_prf" value="{{ url('getdatalapem/') }}">
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Hasil Check</label>
                                <div class="col-sm-7">
                                    <select name="hasil_prf" id="hasil_prf" class="form-control">
                                    <option value="1">Good</option>
                                        <option value="0">Fail</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Note</label>
                                <div class="col-sm-7">
                                    <input name="note_prf" value="" id="note_prf" class="form-control" cols="35" rows="5">
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
        <div class="modal" tabindex="-1" role="dialog" id="modal-14">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Laporan Pemeliharaan</h5>
                    </div>
                    <div class="modal-body">
                        <form action="{{url('/lap_pemeliharaan/update14')}}" method="POST">
                            {{csrf_field()}}
                            <input type="hidden" name="id" id="id_rx_plus15v">
                            <input type="hidden" name="url_getdata_rx_plus15v" id="url_getdata_rx_plus15v" value="{{ url('getdatalapem/') }}">
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Hasil Check</label>
                                <div class="col-sm-7">
                                    <select name="hasil_rx_plus15v" id="hasil_rx_plus15v" class="form-control">
                                    <option value="1">Good</option>
                                        <option value="0">Fail</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Note</label>
                                <div class="col-sm-7">
                                    <input name="note_rx_plus15v" value="" id="note_rx_plus15v" class="form-control" cols="35" rows="5">
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
        <div class="modal" tabindex="-1" role="dialog" id="modal-15">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Laporan Pemeliharaan</h5>
                    </div>
                    <div class="modal-body">
                        <form action="{{url('/lap_pemeliharaan/update15')}}" method="POST">
                            {{csrf_field()}}
                            <input type="hidden" name="id" id="id_rx_min15v">
                            <input type="hidden" name="url_getdata_rx_min15v" id="url_getdata_rx_min15v" value="{{ url('getdatalapem/') }}">
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Hasil Check</label>
                                <div class="col-sm-7">
                                    <select name="hasil_rx_min15v" id="hasil_rx_min15v" class="form-control">
                                    <option value="1">Good</option>
                                        <option value="0">Fail</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Note</label>
                                <div class="col-sm-7">
                                    <input name="note_rx_min15v" value="" id="note_rx_min15v" class="form-control" cols="35" rows="5">
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
        <div class="modal" tabindex="-1" role="dialog" id="modal-16">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Laporan Pemeliharaan</h5>
                    </div>
                    <div class="modal-body">
                        <form action="{{url('/lap_pemeliharaan/update16')}}" method="POST">
                            {{csrf_field()}}
                            <input type="hidden" name="id" id="id_rx_plus24v">
                            <input type="hidden" name="url_getdata_rx_plus24v" id="url_getdata_rx_plus24v" value="{{ url('getdatalapem/') }}">
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Hasil Check</label>
                                <div class="col-sm-7">
                                    <select name="hasil_rx_plus24v" id="hasil_rx_plus24v" class="form-control">
                                    <option value="1">Good</option>
                                        <option value="0">Fail</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Note</label>
                                <div class="col-sm-7">
                                    <input name="note_note_plus24v" value="" id="note_note_plus24v" class="form-control" cols="35" rows="5">
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
        <div class="modal" tabindex="-1" role="dialog" id="modal-17">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Laporan Pemeliharaan</h5>
                    </div>
                    <div class="modal-body">
                        <form action="{{url('/lap_pemeliharaan/update17')}}" method="POST">
                            {{csrf_field()}}
                            <input type="hidden" name="id" id="id_io_temp">
                            <input type="hidden" name="url_getdata_io_temp" id="url_getdata_io_temp" value="{{ url('getdatalapem/') }}">
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Hasil Check</label>
                                <div class="col-sm-7">
                                    <select name="hasil_io_temp" id="hasil_io_temp" class="form-control">
                                    <option value="1">Good</option>
                                        <option value="0">Fail</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Note</label>
                                <div class="col-sm-7">
                                    <input name="note_io_temp" value="" id="note_io_temp" class="form-control" cols="35" rows="5">
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
        <div class="modal" tabindex="-1" role="dialog" id="modal-18">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Laporan Pemeliharaan</h5>
                    </div>
                    <div class="modal-body">
                        <form action="{{url('/lap_pemeliharaan/update18')}}" method="POST">
                            {{csrf_field()}}
                            <input type="hidden" name="id" id="id_comp_temp">
                            <input type="hidden" name="url_getdata_comp_temp" id="url_getdata_comp_temp" value="{{ url('getdatalapem/') }}">
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Hasil Check</label>
                                <div class="col-sm-7">
                                    <select name="hasil_comp_temp" id="hasil_comp_temp" class="form-control">
                                    <option value="1">Good</option>
                                        <option value="0">Fail</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Note</label>
                                <div class="col-sm-7">
                                    <input name="note_comp_temp" value="" id="note_comp_temp" class="form-control" cols="35" rows="5">
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
        <div class="modal" tabindex="-1" role="dialog" id="modal-19">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Laporan Pemeliharaan</h5>
                    </div>
                    <div class="modal-body">
                        <form action="{{url('/lap_pemeliharaan/update19')}}" method="POST">
                            {{csrf_field()}}
                            <input type="hidden" name="id" id="id_afc">
                            <input type="hidden" name="url_getdata_afc" id="url_getdata_afc" value="{{ url('getdatalapem/') }}">
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Hasil Check</label>
                                <div class="col-sm-7">
                                    <select name="hasil_afc" id="hasil_afc" class="form-control">
                                    <option value="1">Good</option>
                                        <option value="0">Fail</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Note</label>
                                <div class="col-sm-7">
                                    <input name="note_afc" value="" id="note_afc" class="form-control" cols="35" rows="5">
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
        <div class="modal" tabindex="-1" role="dialog" id="modal-20">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Laporan Pemeliharaan</h5>
                    </div>
                    <div class="modal-body">
                        <form action="{{url('/lap_pemeliharaan/update20')}}" method="POST">
                            {{csrf_field()}}
                            <input type="hidden" name="id" id="id_edrp9_rx_plus15v">
                            <input type="hidden" name="url_getdata_edrp9_rx_plus15v" id="url_getdata_edrp9_rx_plus15v" value="{{ url('getdatalapem/') }}">
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Hasil Check</label>
                                <div class="col-sm-7">
                                    <select name="hasil_edrp9_rx_plus15v" id="hasil_edrp9_rx_plus15v" class="form-control">
                                    <option value="1">Good</option>
                                        <option value="0">Fail</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Note</label>
                                <div class="col-sm-7">
                                    <input name="note_edrp9_rx_plus15v" value="" id="note_edrp9_rx_plus15v" class="form-control" cols="35" rows="5">
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
        <div class="modal" tabindex="-1" role="dialog" id="modal-21">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Laporan Pemeliharaan</h5>
                    </div>
                    <div class="modal-body">
                        <form action="{{url('/lap_pemeliharaan/update21')}}" method="POST">
                            {{csrf_field()}}
                            <input type="hidden" name="id" id="id_edrp9_rx_min15v">
                            <input type="hidden" name="url_getdata_edrp9_rx_min15v" id="url_getdata_edrp9_rx_min15v" value="{{ url('getdatalapem/') }}">
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Hasil Check</label>
                                <div class="col-sm-7">
                                    <select name="hasil_edrp9_rx_min15v" id="hasil_edrp9_rx_min15v" class="form-control">
                                    <option value="1">Good</option>
                                        <option value="0">Fail</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Note</label>
                                <div class="col-sm-7">
                                    <input name="note_edrp9_rx_min15v" value="" id="note_edrp9_rx_min15v" class="form-control" cols="35" rows="5">
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
        <div class="modal" tabindex="-1" role="dialog" id="modal-22">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Laporan Pemeliharaan</h5>
                    </div>
                    <div class="modal-body">
                        <form action="{{url('/lap_pemeliharaan/update22')}}" method="POST">
                            {{csrf_field()}}
                            <input type="hidden" name="id" id="id_edrp9_rx_plus24v">
                            <input type="hidden" name="url_getdata_edrp9_rx_plus24v" id="url_getdata_edrp9_rx_plus24v" value="{{ url('getdatalapem/') }}">
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Hasil Check</label>
                                <div class="col-sm-7">
                                    <select name="hasil_edrp9_rx_plus24v" id="hasil_edrp9_rx_plus24v" class="form-control">
                                    <option value="1">Good</option>
                                        <option value="0">Fail</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Note</label>
                                <div class="col-sm-7">
                                    <input name="note_edrp9_rx_plus24v" value="" id="note_edrp9_rx_plus24v" class="form-control" cols="35" rows="5">
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
        <div class="modal" tabindex="-1" role="dialog" id="modal-23">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Laporan Pemeliharaan</h5>
                    </div>
                    <div class="modal-body">
                        <form action="{{url('/lap_pemeliharaan/update23')}}" method="POST">
                            {{csrf_field()}}
                            <input type="hidden" name="id" id="id_hvps_alarm">
                            <input type="hidden" name="url_getdata_hvps_alarm" id="url_getdata_hvps_alarm" value="{{ url('getdatalapem/') }}">
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Hasil Check</label>
                                <div class="col-sm-7">
                                    <select name="hasil_hvps_alarm" id="hasil_hvps_alarm" class="form-control">
                                    <option value="1">Good</option>
                                        <option value="0">Fail</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Note</label>
                                <div class="col-sm-7">
                                    <input name="note_hvps_alarm" value="" id="note_hvps_alarm" class="form-control" cols="35" rows="5">
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
        <div class="modal" tabindex="-1" role="dialog" id="modal-24">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Laporan Pemeliharaan</h5>
                    </div>
                    <div class="modal-body">
                        <form action="{{url('/lap_pemeliharaan/update24')}}" method="POST">
                            {{csrf_field()}}
                            <input type="hidden" name="id" id="id_power_supply24v">
                            <input type="hidden" name="url_getdata_power_supply24v" id="url_getdata_power_supply24v" value="{{ url('getdatalapem/') }}">
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Hasil Check</label>
                                <div class="col-sm-7">
                                    <select name="hasil_power_supply24v" id="hasil_power_supply24v" class="form-control">
                                    <option value="1">Good</option>
                                        <option value="0">Fail</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Note</label>
                                <div class="col-sm-7">
                                    <input name="note_power_supply24v" value="" id="note_power_supply24v" class="form-control" cols="35" rows="5">
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
        <div class="modal" tabindex="-1" role="dialog" id="modal-25">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Laporan Pemeliharaan</h5>
                    </div>
                    <div class="modal-body">
                        <form action="{{url('/lap_pemeliharaan/update25')}}" method="POST">
                            {{csrf_field()}}
                            <input type="hidden" name="id" id="id_fan">
                            <input type="hidden" name="url_getdata_fan" id="url_getdata_fan" value="{{ url('getdatalapem/') }}">
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Hasil Check</label>
                                <div class="col-sm-7">
                                    <select name="hasil_fan" id="hasil_fan" class="form-control">
                                    <option value="1">Good</option>
                                        <option value="0">Fail</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Note</label>
                                <div class="col-sm-7">
                                    <input name="note_fan" value="" id="note_fan" class="form-control" cols="35" rows="5">
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
        <div class="modal" tabindex="-1" role="dialog" id="modal-26">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Laporan Pemeliharaan</h5>
                    </div>
                    <div class="modal-body">
                        <form action="{{url('/lap_pemeliharaan/update26')}}" method="POST">
                            {{csrf_field()}}
                            <input type="hidden" name="id" id="id_mag_blower">
                            <input type="hidden" name="url_getdata_mag_blower" id="url_getdata_mag_blower" value="{{ url('getdatalapem/') }}">
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Hasil Check</label>
                                <div class="col-sm-7">
                                    <select name="hasil_mag_blower" id="hasil_mag_blower" class="form-control">
                                    <option value="1">Good</option>
                                        <option value="0">Fail</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Note</label>
                                <div class="col-sm-7">
                                    <input name="note_mag_blower" value="" id="note_mag_blower" class="form-control" cols="35" rows="5">
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
        <div class="modal" tabindex="-1" role="dialog" id="modal-27">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Laporan Pemeliharaan</h5>
                    </div>
                    <div class="modal-body">
                        <form action="{{url('/lap_pemeliharaan/update27')}}" method="POST">
                            {{csrf_field()}}
                            <input type="hidden" name="id" id="id_ac_rstatus">
                            <input type="hidden" name="url_getdata_ac_rstatus" id="url_getdata_ac_rstatus" value="{{ url('getdatalapem/') }}">
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Hasil Check</label>
                                <div class="col-sm-7">
                                    <select name="hasil_ac_rstatus" id="hasil_ac_rstatus" class="form-control">
                                    <option value="1">Good</option>
                                        <option value="0">Fail</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Note</label>
                                <div class="col-sm-7">
                                    <input name="note_ac_rstatus" value="" id="note_ac_rstatus" class="form-control" cols="35" rows="5">
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
        <div class="modal" tabindex="-1" role="dialog" id="modal-28">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Laporan Pemeliharaan</h5>
                    </div>
                    <div class="modal-body">
                        <form action="{{url('/lap_pemeliharaan/update28')}}" method="POST">
                            {{csrf_field()}}
                            <input type="hidden" name="id" id="id_ac_rups">
                            <input type="hidden" name="url_getdata_ac_rups" id="url_getdata_ac_rups" value="{{ url('getdatalapem/') }}">
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Hasil Check</label>
                                <div class="col-sm-7">
                                    <select name="hasil_ac_rups" id="hasil_ac_rups" class="form-control">
                                    <option value="1">Good</option>
                                        <option value="0">Fail</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Note</label>
                                <div class="col-sm-7">
                                    <input name="note_ac_rups" value="" id="note_ac_rups" class="form-control" cols="35" rows="5">
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
        <div class="modal" tabindex="-1" role="dialog" id="modal-29">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Laporan Pemeliharaan</h5>
                    </div>
                    <div class="modal-body">
                        <form action="{{url('/lap_pemeliharaan/update29')}}" method="POST">
                            {{csrf_field()}}
                            <input type="hidden" name="id" id="id_bite_display_warning">
                            <input type="hidden" name="url_getdata_bite_display_warning" id="url_getdata_bite_display_warning" value="{{ url('getdatalapem/') }}">
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Hasil Check</label>
                                <div class="col-sm-7">
                                    <select name="hasil_bite_display_warning" id="hasil_bite_display_warning" class="form-control">
                                    <option value="1">Good</option>
                                        <option value="0">Fail</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Note</label>
                                <div class="col-sm-7">
                                    <input name="note_bite_display_warning" value="" id="note_bite_display_warning" class="form-control" cols="35" rows="5">
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
        <div class="modal" tabindex="-1" role="dialog" id="modal-30">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Laporan Pemeliharaan</h5>
                    </div>
                    <div class="modal-body">
                        <form action="{{url('/lap_pemeliharaan/update30')}}" method="POST">
                            {{csrf_field()}}
                            <input type="hidden" name="id" id="id_volume_browser">
                            <input type="hidden" name="url_getdata_volume_browser" id="url_getdata_volume_browser" value="{{ url('getdatalapem/') }}">
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Hasil Check</label>
                                <div class="col-sm-7">
                                    <select name="hasil_volume_browser" id="hasil_volume_browser" class="form-control">
                                    <option value="1">Good</option>
                                        <option value="0">Fail</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Note</label>
                                <div class="col-sm-7">
                                    <input name="note_volume_browser" value="" id="note_volume_browser" class="form-control" cols="35" rows="5">
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
        <div class="modal" tabindex="-1" role="dialog" id="modal-31">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Laporan Pemeliharaan</h5>
                    </div>
                    <div class="modal-body">
                        <form action="{{url('/lap_pemeliharaan/update31')}}" method="POST">
                            {{csrf_field()}}
                            <input type="hidden" name="id" id="id_radio_link">
                            <input type="hidden" name="url_getdata_radio_link" id="url_getdata_radio_link" value="{{ url('getdatalapem/') }}">
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Hasil Check</label>
                                <div class="col-sm-7">
                                    <select name="hasil_radio_link" id="hasil_radio_link" class="form-control">
                                    <option value="1">Good</option>
                                        <option value="0">Fail</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Note</label>
                                <div class="col-sm-7">
                                    <input name="note_radio_link" value="" id="note_radio_link" class="form-control" cols="35" rows="5">
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
        <div class="modal" tabindex="-1" role="dialog" id="modal-32">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Laporan Pemeliharaan</h5>
                    </div>
                    <div class="modal-body">
                        <form action="{{url('/lap_pemeliharaan/update32')}}" method="POST">
                            {{csrf_field()}}
                            <input type="hidden" name="id" id="id_client_pingtest">
                            <input type="hidden" name="url_getdata_client_pingtest" id="url_getdata_client_pingtest" value="{{ url('getdatalapem/') }}">
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Hasil Check</label>
                                <div class="col-sm-7">
                                    <select name="hasil_client_pingtest" id="hasil_client_pingtest" class="form-control">
                                    <option value="1">Good</option>
                                        <option value="0">Fail</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Note</label>
                                <div class="col-sm-7">
                                    <input name="note_client_pingtest" value="" id="note_client_pingtest" class="form-control" cols="35" rows="5">
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
        <div class="modal" tabindex="-1" role="dialog" id="modal-33">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Laporan Pemeliharaan</h5>
                    </div>
                    <div class="modal-body">
                        <form action="{{url('/lap_pemeliharaan/update33')}}" method="POST">
                            {{csrf_field()}}
                            <input type="hidden" name="id" id="id_pc_integrasi_pingtest1">
                            <input type="hidden" name="url_getdata_pc_integrasi_pingtest1" id="url_getdata_pc_integrasi_pingtest1" value="{{ url('getdatalapem/') }}">
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Hasil Check</label>
                                <div class="col-sm-7">
                                    <select name="hasil_pc_integrasi_pingtest1" id="hasil_pc_integrasi_pingtest1" class="form-control">
                                    <option value="1">Good</option>
                                        <option value="0">Fail</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Note</label>
                                <div class="col-sm-7">
                                    <input name="note_pc_integrasi_pingtest1" value="" id="note_pc_integrasi_pingtest1" class="form-control" cols="35" rows="5">
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
        <div class="modal" tabindex="-1" role="dialog" id="modal-34">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Laporan Pemeliharaan</h5>
                    </div>
                    <div class="modal-body">
                        <form action="{{url('/lap_pemeliharaan/update34')}}" method="POST">
                            {{csrf_field()}}
                            <input type="hidden" name="id" id="id_pc_integrasi_pingtest2">
                            <input type="hidden" name="url_getdata_pc_integrasi_pingtest2" id="url_getdata_pc_integrasi_pingtest2" value="{{ url('getdatalapem/') }}">
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Hasil Check</label>
                                <div class="col-sm-7">
                                    <select name="hasil_pc_integrasi_pingtest2" id="hasil_pc_integrasi_pingtest2" class="form-control">
                                    <option value="1">Good</option>
                                        <option value="0">Fail</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Note</label>
                                <div class="col-sm-7">
                                    <input name="note_pc_integrasi_pingtest2" value="" id="note_pc_integrasi_pingtest2" class="form-control" cols="35" rows="5">
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
        <div class="modal" tabindex="-1" role="dialog" id="modal-35">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Laporan Pemeliharaan</h5>
                    </div>
                    <div class="modal-body">
                        <form action="{{url('/lap_pemeliharaan/update35')}}" method="POST">
                            {{csrf_field()}}
                            <input type="hidden" name="id" id="id_wg_check">
                            <input type="hidden" name="url_getdata_wg_check" id="url_getdata_wg_check" value="{{ url('getdatalapem/') }}">
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Hasil Check</label>
                                <div class="col-sm-7">
                                    <select name="hasil_wg_check" id="hasil_wg_check" class="form-control">
                                    <option value="1">Good</option>
                                        <option value="0">Fail</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Note</label>
                                <div class="col-sm-7">
                                    <input name="note_wg_check" value="" id="note_wg_check" class="form-control" cols="35" rows="5">
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
        <div class="modal" tabindex="-1" role="dialog" id="modal-36">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Laporan Pemeliharaan</h5>
                    </div>
                    <div class="modal-body">
                        <form action="{{url('/lap_pemeliharaan/update36')}}" method="POST">
                            {{csrf_field()}}
                            <input type="hidden" name="id" id="id_wg_press">
                            <input type="hidden" name="url_getdata_wg_press" id="url_getdata_wg_press" value="{{ url('getdatalapem/') }}">
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Hasil Check</label>
                                <div class="col-sm-7">
                                    <select name="hasil_wg_press" id="hasil_wg_press" class="form-control">
                                    <option value="1">Good</option>
                                        <option value="0">Fail</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Note</label>
                                <div class="col-sm-7">
                                    <input name="note_wg_press" value="" id="note_wg_press" class="form-control" cols="35" rows="5">
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
        <div class="modal" tabindex="-1" role="dialog" id="modal-37">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Laporan Pemeliharaan</h5>
                    </div>
                    <div class="modal-body">
                        <form action="{{url('/lap_pemeliharaan/update37')}}" method="POST">
                            {{csrf_field()}}
                            <input type="hidden" name="id" id="id_dehydrator_alarm">
                            <input type="hidden" name="url_getdata_dehydrator_alarm" id="url_getdata_dehydrator_alarm" value="{{ url('getdatalapem/') }}">
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Hasil Check</label>
                                <div class="col-sm-7">
                                    <select name="hasil_dehydrator_alarm" id="hasil_dehydrator_alarm" class="form-control">
                                    <option value="1">Good</option>
                                        <option value="0">Fail</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Note</label>
                                <div class="col-sm-7">
                                    <input name="note_dehydrator_alarm" value="" id="note_dehydrator_alarm" class="form-control" cols="35" rows="5">
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
        <div class="modal" tabindex="-1" role="dialog" id="modal-38">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Laporan Pemeliharaan</h5>
                    </div>
                    <div class="modal-body">
                        <form action="{{url('/lap_pemeliharaan/update38')}}" method="POST">
                            {{csrf_field()}}
                            <input type="hidden" name="id" id="id_modem">
                            <input type="hidden" name="url_getdata_modem" id="url_getdata_modem" value="{{ url('getdatalapem/') }}">
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Hasil Check</label>
                                <div class="col-sm-7">
                                    <select name="hasil_modem" id="hasil_modem" class="form-control">
                                    <option value="1">Good</option>
                                        <option value="0">Fail</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Note</label>
                                <div class="col-sm-7">
                                    <input name="note_modem" value="" id="note_modem" class="form-control" cols="35" rows="5">
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
        <div class="modal" tabindex="-1" role="dialog" id="modal-39">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Laporan Pemeliharaan</h5>
                    </div>
                    <div class="modal-body">
                        <form action="{{url('/lap_pemeliharaan/update39')}}" method="POST">
                            {{csrf_field()}}
                            <input type="hidden" name="id" id="id_router">
                            <input type="hidden" name="url_getdata_router" id="url_getdata_router" value="{{ url('getdatalapem/') }}">
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Hasil Check</label>
                                <div class="col-sm-7">
                                    <select name="hasil_router" id="hasil_router" class="form-control">
                                    <option value="1">Good</option>
                                        <option value="0">Fail</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Note</label>
                                <div class="col-sm-7">
                                    <input name="note_router" value="" id="note_router" class="form-control" cols="35" rows="5">
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
        <div class="modal" tabindex="-1" role="dialog" id="modal-40">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Laporan Pemeliharaan</h5>
                    </div>
                    <div class="modal-body">
                        <form action="{{url('/lap_pemeliharaan/update40')}}" method="POST">
                            {{csrf_field()}}
                            <input type="hidden" name="id" id="id_hdds_pingtest">
                            <input type="hidden" name="url_getdata_hdds_pingtest" id="url_getdata_hdds_pingtest" value="{{ url('getdatalapem/') }}">
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Hasil Check</label>
                                <div class="col-sm-7">
                                    <select name="hasil_hdds_pingtest" id="hasil_hdds_pingtest" class="form-control">
                                    <option value="1">Good</option>
                                        <option value="0">Fail</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Note</label>
                                <div class="col-sm-7">
                                    <input name="note_hdds_pingtest" value="" id="note_hdds_pingtest" class="form-control" cols="35" rows="5">
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
        <div class="modal" tabindex="-1" role="dialog" id="modal-41">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Laporan Pemeliharaan</h5>
                    </div>
                    <div class="modal-body">
                        <form action="{{url('/lap_pemeliharaan/update41')}}" method="POST">
                            {{csrf_field()}}
                            <input type="hidden" name="id" id="id_master_ems_server">
                            <input type="hidden" name="url_getdata_master_ems_server" id="url_getdata_master_ems_server" value="{{ url('getdatalapem/') }}">
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Hasil Check</label>
                                <div class="col-sm-7">
                                    <select name="hasil_master_ems_server" id="hasil_master_ems_server" class="form-control">
                                    <option value="1">Good</option>
                                        <option value="0">Fail</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Note</label>
                                <div class="col-sm-7">
                                    <input name="note_master_ems_server" value="" id="note_master_ems_server" class="form-control" cols="35" rows="5">
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
        <div class="modal" tabindex="-1" role="dialog" id="modal-42">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Laporan Pemeliharaan</h5>
                    </div>
                    <div class="modal-body">
                        <form action="{{url('/lap_pemeliharaan/update42')}}" method="POST">
                            {{csrf_field()}}
                            <input type="hidden" name="id" id="id_client_ems_radome">
                            <input type="hidden" name="url_getdata_client_ems_radome" id="url_getdata_client_ems_radome" value="{{ url('getdatalapem/') }}">
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Hasil Check</label>
                                <div class="col-sm-7">
                                    <select name="hasil_client_ems_radome" id="hasil_client_ems_radome" class="form-control">
                                    <option value="1">Good</option>
                                        <option value="0">Fail</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Note</label>
                                <div class="col-sm-7">
                                    <input name="note_client_ems_radome" value="" id="note_client_ems_radome" class="form-control" cols="35" rows="5">
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
        <div class="modal" tabindex="-1" role="dialog" id="modal-43">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Laporan Pemeliharaan</h5>
                    </div>
                    <div class="modal-body">
                        <form action="{{url('/lap_pemeliharaan/update43')}}" method="POST">
                            {{csrf_field()}}
                            <input type="hidden" name="id" id="id_web_ems">
                            <input type="hidden" name="url_getdata_web_ems" id="url_getdata_web_ems" value="{{ url('getdatalapem/') }}">
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Hasil Check</label>
                                <div class="col-sm-7">
                                    <select name="hasil_web_ems" id="hasil_web_ems" class="form-control">
                                    <option value="1">Good</option>
                                        <option value="0">Fail</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Note</label>
                                <div class="col-sm-7">
                                    <input name="note_web_ems" value="" id="note_web_ems" class="form-control" cols="35" rows="5">
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
        <div class="modal" tabindex="-1" role="dialog" id="modal-44">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Laporan Pemeliharaan</h5>
                    </div>
                    <div class="modal-body">
                        <form action="{{url('/lap_pemeliharaan/update44')}}" method="POST">
                            {{csrf_field()}}
                            <input type="hidden" name="id" id="id_ups_status">
                            <input type="hidden" name="url_getdata_ups_status" id="url_getdata_ups_status" value="{{ url('getdatalapem/') }}">
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Hasil Check</label>
                                <div class="col-sm-7">
                                    <select name="hasil_ups_status" id="hasil_ups_status" class="form-control">
                                    <option value="1">Good</option>
                                        <option value="0">Fail</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Note</label>
                                <div class="col-sm-7">
                                    <input name="note_ups_status" value="" id="note_ups_status" class="form-control" cols="35" rows="5">
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
        <div class="modal" tabindex="-1" role="dialog" id="modal-45">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Laporan Pemeliharaan</h5>
                    </div>
                    <div class="modal-body">
                        <form action="{{url('/lap_pemeliharaan/update45')}}" method="POST">
                            {{csrf_field()}}
                            <input type="hidden" name="id" id="id_line_input">
                            <input type="hidden" name="url_getdata_line_input" id="url_getdata_line_input" value="{{ url('getdatalapem/') }}">
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Hasil Check</label>
                                <div class="col-sm-7">
                                    <select name="hasil_line_input" id="hasil_line_input" class="form-control">
                                    <option value="1">Good</option>
                                        <option value="0">Fail</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Note</label>
                                <div class="col-sm-7">
                                    <input name="note_line_input" value="" id="note_line_input" class="form-control" cols="35" rows="5">
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
        <div class="modal" tabindex="-1" role="dialog" id="modal-46">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Laporan Pemeliharaan</h5>
                    </div>
                    <div class="modal-body">
                        <form action="{{url('/lap_pemeliharaan/update46')}}" method="POST">
                            {{csrf_field()}}
                            <input type="hidden" name="id" id="id_line_output">
                            <input type="hidden" name="url_getdata_line_output" id="url_getdata_line_output" value="{{ url('getdatalapem/') }}">
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Hasil Check</label>
                                <div class="col-sm-7">
                                    <select name="hasil_line_output" id="hasil_line_output" class="form-control">
                                    <option value="1">Good</option>
                                        <option value="0">Fail</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Note</label>
                                <div class="col-sm-7">
                                    <input name="note_line_output" value="" id="note_line_output" class="form-control" cols="35" rows="5">
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
        <div class="modal" tabindex="-1" role="dialog" id="modal-47">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Laporan Pemeliharaan</h5>
                    </div>
                    <div class="modal-body">
                        <form action="{{url('/lap_pemeliharaan/update47')}}" method="POST">
                            {{csrf_field()}}
                            <input type="hidden" name="id" id="id_battery">
                            <input type="hidden" name="url_getdata_battery" id="url_getdata_battery" value="{{ url('getdatalapem/') }}">
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Hasil Check</label>
                                <div class="col-sm-7">
                                    <select name="hasil_battery" id="hasil_battery" class="form-control">
                                    <option value="1">Good</option>
                                        <option value="0">Fail</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Note</label>
                                <div class="col-sm-7">
                                    <input name="note_battery" value="" id="note_battery" class="form-control" cols="35" rows="5">
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
        <div class="modal" tabindex="-1" role="dialog" id="modal-48">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Laporan Pemeliharaan</h5>
                    </div>
                    <div class="modal-body">
                        <form action="{{url('/lap_pemeliharaan/update48')}}" method="POST">
                            {{csrf_field()}}
                            <input type="hidden" name="id" id="id_grounding">
                            <input type="hidden" name="url_getdata_grounding" id="url_getdata_grounding" value="{{ url('getdatalapem/') }}">
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Hasil Check</label>
                                <div class="col-sm-7">
                                    <select name="hasil_grounding" id="hasil_grounding" class="form-control">
                                    <option value="1">Good</option>
                                        <option value="0">Fail</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Note</label>
                                <div class="col-sm-7">
                                    <input name="note_grounding" value="" id="note_grounding" class="form-control" cols="35" rows="5">
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
        <div class="modal" tabindex="-1" role="dialog" id="modal-49">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Laporan Pemeliharaan</h5>
                    </div>
                    <div class="modal-body">
                        <form action="{{url('/lap_pemeliharaan/update49')}}" method="POST">
                            {{csrf_field()}}
                            <input type="hidden" name="id" id="id_kebersihan">
                            <input type="hidden" name="url_getdata_kebersihan" id="url_getdata_kebersihan" value="{{ url('getdatalapem/') }}">
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Hasil Check</label>
                                <div class="col-sm-7">
                                    <select name="hasil_kebersihan" id="hasil_kebersihan" class="form-control">
                                    <option value="1">Good</option>
                                        <option value="0">Fail</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Note</label>
                                <div class="col-sm-7">
                                    <input name="note_kebersihan" value="" id="note_kebersihan" class="form-control" cols="35" rows="5">
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
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Alat</th>
                                        <th>Hasil Cek</th>
                                        <th>Note</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($lap_pem as $lapem)
                                    <tr>
                                        <td>1</td>
                                        <td><a href="" onclick="getdata({{$lapem->id}})" data-toggle="modal" data-target="#modal-0">Operate Time</a></td>
                                        <td>@if ($lapem->hasil_operate_time == 1)
                                                Good
                                            @else
                                                Fail
                                            @endif
                                        </td>
                                    <td>{{ $lapem->note_operate_time }}</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td><a href="" onclick="getdata({{$lapem->id}})" data-toggle="modal" data-target="#modal-1">Radiate Time</a></td>
                                        <td>@if ($lapem->hasil_radiate_time == 1)
                                            Good
                                        @else
                                            Fail
                                        @endif
                                        </td>
                                        <td>{{ $lapem->note_radiate_time }}</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td><a href="" onclick="getdata({{$lapem->id}})" data-toggle="modal" data-target="#modal-2">Mmi Fault</a></td>
                                        <td>@if ($lapem->hasil_mmi_fault == 1)
                                            Good
                                        @else
                                            Fail
                                        @endif
                                        </td>
                                        <td>{{ $lapem->note_mmi_fault }}</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td><a href="" onclick="getdata({{$lapem->id}})" data-toggle="modal" data-target="#modal-3">Hvps V</a></td>
                                        <td>@if ($lapem->hasil_hvps_v == 1)
                                            Good
                                        @else
                                            Fail
                                        @endif
                                        </td>
                                        <td>{{ $lapem->note_hvps_v }}</td>
                                    </tr><tr>
                                        <td>5</td>
                                        <td><a href="" onclick="getdata({{$lapem->id}})" data-toggle="modal" data-target="#modal-4">Hvps I</a></td>
                                        <td>@if ($lapem->hasil_hvps_i == 1)
                                            Good
                                        @else
                                            Fail
                                        @endif
                                        </td>
                                        <td>{{ $lapem->note_hvps_i }}</td>
                                    </tr><tr>
                                        <td>6</td>
                                        <td><a href="" onclick="getdata({{$lapem->id}})" data-toggle="modal" data-target="#modal-5">Mag I</a></td>
                                        <td>@if ($lapem->hasil_mag_i == 1)
                                            Good
                                        @else
                                            Fail
                                        @endif
                                        </td>
                                        <td>{{ $lapem->note_mag_i }}</td>
                                    </tr><tr>
                                        <td>7</td>
                                        <td><a href="" onclick="getdata({{$lapem->id}})" data-toggle="modal" data-target="#modal-6">Az</a></td>
                                        <td>@if ($lapem->hasil_az == 1)
                                            Good
                                        @else
                                            Fail
                                        @endif
                                        </td>
                                        <td>{{ $lapem->note_az }}</td>
                                    </tr><tr>
                                        <td>8</td>
                                        <td><a href="" onclick="getdata({{$lapem->id}})" data-toggle="modal" data-target="#modal-7">El</a></td>
                                        <td>@if ($lapem->hasil_el == 1)
                                            Good
                                        @else
                                            Fail
                                        @endif
                                        </td>
                                        <td>{{ $lapem->note_el }}</td>
                                    </tr><tr>
                                        <td>9</td>
                                        <td><a href="" onclick="getdata({{$lapem->id}})" data-toggle="modal" data-target="#modal-8">Tx Cab</a></td>
                                        <td>@if ($lapem->hasil_tx_cab == 1)
                                            Good
                                        @else
                                            Fail
                                        @endif
                                        </td>
                                        <td>{{ $lapem->note_tx_cab }}</td>
                                    </tr><tr>
                                        <td>10</td>
                                        <td><a href="" onclick="getdata({{$lapem->id}})" data-toggle="modal" data-target="#modal-9">Hot Box</a></td>
                                        <td>@if ($lapem->hasil_hot_box == 1)
                                            Good
                                        @else
                                            Fail
                                        @endif
                                        </td>
                                        <td>{{ $lapem->note_hot_box }}</td>
                                    </tr><tr>
                                        <td>11</td>
                                        <td><a href="" onclick="getdata({{$lapem->id}})" data-toggle="modal" data-target="#modal-10">Fwd Power</a></td>
                                        <td>@if ($lapem->hasil_fwd_power == 1)
                                            Good
                                        @else
                                            Fail
                                        @endif
                                        </td>
                                        <td>{{ $lapem->note_fwd_power }}</td>
                                    </tr><tr>
                                        <td>12</td>
                                        <td><a href="" onclick="getdata({{$lapem->id}})" data-toggle="modal" data-target="#modal-11">Rev Power</a></td>
                                        <td>@if ($lapem->hasil_rev_power == 1)
                                            Good
                                        @else
                                            Fail
                                        @endif
                                        </td>
                                        <td>{{ $lapem->note_rev_power }}</td>
                                    </tr><tr>
                                        <td>13</td>
                                        <td><a href="" onclick="getdata({{$lapem->id}})" data-toggle="modal" data-target="#modal-12">Vswr</a></td>
                                        <td>@if ($lapem->hasil_vswr == 1)
                                            Good
                                        @else
                                            Fail
                                        @endif
                                        </td>
                                        <td>{{ $lapem->note_vswr }}</td>
                                    </tr><tr>
                                        <td>14</td>
                                        <td><a href="" onclick="getdata({{$lapem->id}})" data-toggle="modal" data-target="#modal-13">Prf</a></td>
                                        <td>@if ($lapem->hasil_prf == 1)
                                            Good
                                        @else
                                            Fail
                                        @endif
                                        </td>
                                        <td>{{ $lapem->note_prf }}</td>
                                    </tr><tr>
                                        <td>15</td>
                                        <td><a href="" onclick="getdata({{$lapem->id}})" data-toggle="modal" data-target="#modal-14">Rx Plus15v</a></td>
                                        <td>@if ($lapem->hasil_rx_plus15v == 1)
                                            Good
                                        @else
                                            Fail
                                        @endif
                                        </td>
                                        <td>{{ $lapem->note_rx_plus15v }}</td>
                                    </tr><tr>
                                        <td>16</td>
                                        <td><a href="" onclick="getdata({{$lapem->id}})" data-toggle="modal" data-target="#modal-15">Rx Min15v</a></td>
                                        <td>@if ($lapem->hasil_rx_min15v == 1)
                                            Good
                                        @else
                                            Fail
                                        @endif
                                        </td>
                                        <td>{{ $lapem->note_rx_min15v }}</td>
                                    </tr><tr>
                                        <td>17</td>
                                        <td><a href="" onclick="getdata({{$lapem->id}})" data-toggle="modal" data-target="#modal-16">Rx Plus24v</a></td>
                                        <td>@if ($lapem->hasil_rx_plus24v == 1)
                                            Good
                                        @else
                                            Fail
                                        @endif
                                        </td>
                                        <td>{{ $lapem->note_note_plus24v }}</td>
                                    </tr><tr>
                                        <td>18</td>
                                        <td><a href="" onclick="getdata({{$lapem->id}})" data-toggle="modal" data-target="#modal-17">Io Temp</a></td>
                                        <td>@if ($lapem->hasil_io_temp == 1)
                                            Good
                                        @else
                                            Fail
                                        @endif
                                        </td>
                                        <td>{{ $lapem->note_io_temp }}</td>
                                    </tr><tr>
                                        <td>19</td>
                                        <td><a href="" onclick="getdata({{$lapem->id}})" data-toggle="modal" data-target="#modal-18">Comp Temp</a></td>
                                        <td>@if ($lapem->hasil_comp_temp == 1)
                                            Good
                                        @else
                                            Fail
                                        @endif
                                        </td>
                                        <td>{{ $lapem->note_comp_temp }}</td>
                                    </tr><tr>
                                        <td>20</td>
                                        <td><a href="" onclick="getdata({{$lapem->id}})" data-toggle="modal" data-target="#modal-19">Afc</a></td>
                                        <td>@if ($lapem->hasil_afc == 1)
                                            Good
                                        @else
                                            Fail
                                        @endif
                                        </td>
                                        <td>{{ $lapem->note_afc }}</td>
                                    </tr><tr>
                                        <td>21</td>
                                        <td><a href="" onclick="getdata({{$lapem->id}})" data-toggle="modal" data-target="#modal-20">Edrp Rx Plus15v</a></td>
                                        <td>@if ($lapem->hasil_edrp9_rx_plus15v == 1)
                                            Good
                                        @else
                                            Fail
                                        @endif
                                        </td>
                                        <td>{{ $lapem->note_edrp9_rx_plus15v }}</td>
                                    </tr><tr>
                                        <td>22</td>
                                        <td><a href="" onclick="getdata({{$lapem->id}})" data-toggle="modal" data-target="#modal-21">Edrp9 Rx Min15v</a></td>
                                        <td>@if ($lapem->hasil_edrp9_rx_min15v == 1)
                                            Good
                                        @else
                                            Fail
                                        @endif
                                        </td>
                                        <td>{{ $lapem->note_edrp9_rx_min15v }}</td>
                                    </tr><tr>
                                        <td>23</td>
                                        <td><a href="" onclick="getdata({{$lapem->id}})" data-toggle="modal" data-target="#modal-22">Edrp Rx Plus24v</a></td>
                                        <td>@if ($lapem->hasil_edrp9_rx_plus24v == 1)
                                            Good
                                        @else
                                            Fail
                                        @endif
                                        </td>
                                        <td>{{ $lapem->note_edrp9_rx_plus24v }}</td>
                                    </tr><tr>
                                        <td>24</td>
                                        <td><a href="" onclick="getdata({{$lapem->id}})" data-toggle="modal" data-target="#modal-23">Hvps alarm</a></td>
                                        <td>@if ($lapem->hasil_hvps_alarm == 1)
                                            Good
                                        @else
                                            Fail
                                        @endif
                                        </td>
                                        <td>{{ $lapem->note_hvps_alarm }}</td>
                                    </tr><tr>
                                        <td>25</td>
                                        <td><a href="" onclick="getdata({{$lapem->id}})" data-toggle="modal" data-target="#modal-24">Power Supply24v</a></td>
                                        <td>@if ($lapem->hasil_power_supply24v == 1)
                                            Good
                                        @else
                                            Fail
                                        @endif
                                        </td>
                                        <td>{{ $lapem->note_power_supply24v }}</td>
                                    </tr><tr>
                                        <td>26</td>
                                        <td><a href="" onclick="getdata({{$lapem->id}})" data-toggle="modal" data-target="#modal-25">Fan</a></td>
                                        <td>@if ($lapem->hasil_fan == 1)
                                            Good
                                        @else
                                            Fail
                                        @endif
                                        </td>
                                        <td>{{ $lapem->note_fan }}</td>
                                    </tr><tr>
                                        <td>27</td>
                                        <td><a href="" onclick="getdata({{$lapem->id}})" data-toggle="modal" data-target="#modal-26">Mag Blower</a></td>
                                        <td>@if ($lapem->hasil_mag_blower == 1)
                                            Good
                                        @else
                                            Fail
                                        @endif
                                        </td>
                                        <td>{{ $lapem->note_mag_blower }}</td>
                                    </tr><tr>
                                        <td>28</td>
                                        <td><a href="" onclick="getdata({{$lapem->id}})" data-toggle="modal" data-target="#modal-27">Ac Rstatus</a></td>
                                        <td>@if ($lapem->hasil_ac_rstatus == 1)
                                            Good
                                        @else
                                            Fail
                                        @endif
                                        </td>
                                        <td>{{ $lapem->note_ac_rstatus }}</td>
                                    </tr><tr>
                                        <td>29</td>
                                        <td><a href="" onclick="getdata({{$lapem->id}})" data-toggle="modal" data-target="#modal-28">Ac Rups</a></td>
                                        <td>@if ($lapem->hasil_ac_rups == 1)
                                            Good
                                        @else
                                            Fail
                                        @endif
                                        </td>
                                        <td>{{ $lapem->note_ac_rups }}</td>
                                    </tr><tr>
                                        <td>30</td>
                                        <td><a href="" onclick="getdata({{$lapem->id}})" data-toggle="modal" data-target="#modal-29">Bite Disply Warning</a></td>
                                        <td>@if ($lapem->hasil_bite_display_warning == 1)
                                            Good
                                        @else
                                            Fail
                                        @endif
                                        </td>
                                        <td>{{ $lapem->note_bite_display_warning }}</td>
                                    </tr><tr>
                                        <td>31</td>
                                        <td><a href="" onclick="getdata({{$lapem->id}})" data-toggle="modal" data-target="#modal-30">Volume Browser</a></td>
                                        <td>@if ($lapem->hasil_volume_browser == 1)
                                            Good
                                        @else
                                            Fail
                                        @endif
                                        </td>
                                        <td>{{ $lapem->note_volume_browser }}</td>
                                    </tr><tr>
                                        <td>32</td>
                                        <td><a href="" onclick="getdata({{$lapem->id}})" data-toggle="modal" data-target="#modal-31">Radio Link</a></td>
                                        <td>@if ($lapem->hasil_radio_link == 1)
                                            Good
                                        @else
                                            Fail
                                        @endif
                                        </td>
                                        <td>{{ $lapem->note_radio_link }}</td>
                                    </tr><tr>
                                        <td>33</td>
                                        <td><a href="" onclick="getdata({{$lapem->id}})" data-toggle="modal" data-target="#modal-32">Client Pingtest</a></td>
                                        <td>@if ($lapem->hasil_client_pingtest == 1)
                                            Good
                                        @else
                                            Fail
                                        @endif
                                        </td>
                                        <td>{{ $lapem->note_client_pingtest }}</td>
                                    </tr><tr>
                                        <td>34</td>
                                        <td><a href="" onclick="getdata({{$lapem->id}})" data-toggle="modal" data-target="#modal-33">Pc Integrasi Pingtest1</a></td>
                                        <td>@if ($lapem->hasil_pc_integrasi_pingtest1 == 1)
                                            Good
                                        @else
                                            Fail
                                        @endif
                                        </td>
                                        <td>{{ $lapem->note_pc_integrasi_pingtest1 }}</td>
                                    </tr><tr>
                                        <td>35</td>
                                        <td><a href="" onclick="getdata({{$lapem->id}})" data-toggle="modal" data-target="#modal-34">Pc Integrasi Pingtest2</a></td>
                                        <td>@if ($lapem->hasil_pc_integrasi_pingtest2 == 1)
                                            Good
                                        @else
                                            Fail
                                        @endif
                                        </td>
                                        <td>{{ $lapem->note_pc_integrasi_pingtest2 }}</td>
                                    </tr><tr>
                                        <td>36</td>
                                        <td><a href="" onclick="getdata({{$lapem->id}})" data-toggle="modal" data-target="#modal-35">Wg Check</a></td>
                                        <td>@if ($lapem->hasil_wg_check == 1)
                                            Good
                                        @else
                                            Fail
                                        @endif
                                        </td>
                                        <td>{{ $lapem->note_wg_check }}</td>
                                    </tr><tr>
                                        <td>37</td>
                                        <td><a href="" onclick="getdata({{$lapem->id}})" data-toggle="modal" data-target="#modal-36">Wg Press</a></td>
                                        <td>@if ($lapem->hasil_wg_press == 1)
                                            Good
                                        @else
                                            Fail
                                        @endif
                                        </td>
                                        <td>{{ $lapem->note_wg_press }}</td>
                                    </tr><tr>
                                        <td>38</td>
                                        <td><a href="" onclick="getdata({{$lapem->id}})" data-toggle="modal" data-target="#modal-37">Dehydrator Alarm</a></td>
                                        <td>@if ($lapem->hasil_dehydrator_alarm == 1)
                                            Good
                                        @else
                                            Fail
                                        @endif
                                        </td>
                                        <td>{{ $lapem->note_dehydrator_alarm }}</td>
                                    </tr><tr>
                                        <td>39</td>
                                        <td><a href="" onclick="getdata({{$lapem->id}})" data-toggle="modal" data-target="#modal-38">Modem</a></td>
                                        <td>@if ($lapem->hasil_modem == 1)
                                            Good
                                        @else
                                            Fail
                                        @endif
                                        </td>
                                        <td>{{ $lapem->note_modem }}</td>
                                    </tr><tr>
                                        <td>40</td>
                                        <td><a href="" onclick="getdata({{$lapem->id}})" data-toggle="modal" data-target="#modal-39">Router</a></td>
                                        <td>@if ($lapem->hasil_router == 1)
                                            Good
                                        @else
                                            Fail
                                        @endif
                                        </td>
                                        <td>{{ $lapem->note_router }}</td>
                                    </tr><tr>
                                        <td>41</td>
                                        <td><a href="" onclick="getdata({{$lapem->id}})" data-toggle="modal" data-target="#modal-40">Hdds Pingtest</a></td>
                                        <td>@if ($lapem->hasil_hdds_pingtest == 1)
                                            Good
                                        @else
                                            Fail
                                        @endif
                                        </td>
                                        <td>{{ $lapem->note_hdds_pingtest }}</td>
                                    </tr><tr>
                                        <td>42</td>
                                        <td><a href="" onclick="getdata({{$lapem->id}})" data-toggle="modal" data-target="#modal-41">Master Ems Server</a></td>
                                        <td>@if ($lapem->hasil_master_ems_server == 1)
                                            Good
                                        @else
                                            Fail
                                        @endif
                                        </td>
                                        <td>{{ $lapem->note_master_ems_server }}</td>
                                    </tr><tr>
                                        <td>43</td>
                                        <td><a href="" onclick="getdata({{$lapem->id}})" data-toggle="modal" data-target="#modal-42">Client Ems Radome</a></td>
                                        <td>@if ($lapem->hasil_client_ems_radome == 1)
                                            Good
                                        @else
                                            Fail
                                        @endif
                                        </td>
                                        <td>{{ $lapem->note_client_ems_radome }}</td>
                                    </tr><tr>
                                        <td>44</td>
                                        <td><a href="" onclick="getdata({{$lapem->id}})" data-toggle="modal" data-target="#modal-43">Web Ems</a></td>
                                        <td>@if ($lapem->hasil_web_ems == 1)
                                            Good
                                        @else
                                            Fail
                                        @endif
                                        </td>
                                        <td>{{ $lapem->note_web_ems }}</td>
                                    </tr><tr>
                                        <td>45</td>
                                        <td><a href="" onclick="getdata({{$lapem->id}})" data-toggle="modal" data-target="#modal-44">Ups Status</a></td>
                                        <td>@if ($lapem->hasil_ups_status == 1)
                                            Good
                                        @else
                                            Fail
                                        @endif
                                        </td>
                                        <td>{{ $lapem->note_ups_status }}</td>
                                    </tr><tr>
                                        <td>46</td>
                                        <td><a href="" onclick="getdata({{$lapem->id}})" data-toggle="modal" data-target="#modal-45">Line Input</a></td>
                                        <td>@if ($lapem->hasil_line_input == 1)
                                            Good
                                        @else
                                            Fail
                                        @endif
                                        </td>
                                        <td>{{ $lapem->note_line_input }}</td>
                                    </tr><tr>
                                        <td>47</td>
                                        <td><a href="" onclick="getdata({{$lapem->id}})" data-toggle="modal" data-target="#modal-46">Line Output</a></td>
                                        <td>@if ($lapem->hasil_line_output == 1)
                                            Good
                                        @else
                                            Fail
                                        @endif
                                        </td>
                                        <td>{{ $lapem->note_line_output }}</td>
                                    </tr><tr>
                                        <td>48</td>
                                        <td><a href="" onclick="getdata({{$lapem->id}})" data-toggle="modal" data-target="#modal-47">Battery</a></td>
                                        <td>@if ($lapem->hasil_battery == 1)
                                            Good
                                        @else
                                            Fail
                                        @endif
                                        </td>
                                        <td>{{ $lapem->note_battery }}</td>
                                    </tr><tr>
                                        <td>49</td>
                                        <td><a href="" onclick="getdata({{$lapem->id}})" data-toggle="modal" data-target="#modal-48">Grounding</a></td>
                                        <td>@if ($lapem->hasil_grounding == 1)
                                            Good
                                        @else
                                            Fail
                                        @endif
                                        </td>
                                        <td>{{ $lapem->note_grounding }}</td>
                                    </tr><tr>
                                        <td>50</td>
                                        <td><a href="" onclick="getdata({{$lapem->id}})" data-toggle="modal" data-target="#modal-49">Kebersihan</a></td>
                                        <td>@if ($lapem->hasil_kebersihan == 1)
                                            Good
                                        @else
                                            Fail
                                        @endif
                                        </td>
                                        <td>{{ $lapem->note_kebersihan }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>   

</script>
@section('footer')
    <script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js"></script>
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
{{-- <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script> --}}

<script>
    $(document).ready( function () {
        $('#myTable').DataTable();
        $('.pilih').editable();
    });

</script>

<script>

    function getdata(id)
    {
        console.log(id)
        var url = $('#url_getdata').val() + '/' + id
        var url = $('#url_getdataa').val() + '/' + id
        var url = $('#url_getdata_hvps_v').val() + '/' + id
        console.log(url);

        $.ajax({
            url: url,
            cache: false,
            success: function(response){
                console.log(response);

                $('#id').val(id);
                $('#id_rt').val(id);
                $('#id_mf').val(id);
                $('#id_hvps_v').val(id);
                $('#id_hvps_i').val(id);
                $('#id_mag_i').val(id);
                $('#id_az').val(id);
                $('#id_el').val(id);
                $('#id_tx_cab').val(id);
                $('#id_hot_box').val(id);
                $('#id_fwd_power').val(id);
                $('#id_rev_power').val(id);
                $('#id_vswr').val(id);
                $('#id_prf').val(id);
                $('#id_rx_plus15v').val(id);
                $('#id_rx_min15v').val(id);
                $('#id_rx_plus24v').val(id);
                $('#id_io_temp').val(id);
                $('#id_comp_temp').val(id);
                $('#id_afc').val(id);
                $('#id_edrp9_rx_plus15v').val(id);
                $('#id_edrp9_rx_min15v').val(id);
                $('#id_edrp9_rx_plus24v').val(id);
                $('#id_hvps_alarm').val(id);
                $('#id_power_supply24v').val(id);
                $('#id_fan').val(id);
                $('#id_mag_blower').val(id);
                $('#id_ac_rstatus').val(id);
                $('#id_ac_rups').val(id);
                $('#id_bite_display_warning').val(id);
                $('#id_volume_browser').val(id);
                $('#id_radio_link').val(id);
                $('#id_client_pingtest').val(id);
                $('#id_pc_integrasi_pingtest1').val(id);
                $('#id_pc_integrasi_pingtest2').val(id);
                $('#id_wg_check').val(id);
                $('#id_wg_press').val(id);
                $('#id_dehydrator_alarm').val(id);
                $('#id_modem').val(id);
                $('#id_router').val(id);
                $('#id_hdds_pingtest').val(id);
                $('#id_master_ems_server').val(id);
                $('#id_client_ems_radome').val(id);
                $('#id_web_ems').val(id);
                $('#id_ups_status').val(id);
                $('#id_line_input').val(id);
                $('#id_line_output').val(id);
                $('#id_battery').val(id);
                $('#id_grounding').val(id);
                $('#id_kebersihan').val(id);
                $('#note').val(response.note_operate_time);
                $('#hasil_check').val(response.hasil_operate_time);
                $('#note_radiate_time').val(response.note_radiate_time);
                $('#hasil_radiate_time').val(response.hasil_radiate_time);
                $('#note_mmi_fault').val(response.note_mmi_fault);
                $('#hasil_mmi_fault').val(response.hasil_mmi_fault);
                $('#note_hvps_v').val(response.note_hvps_v);
                $('#hasil_hvps_v').val(response.hasil_hvps_v);
                $('#note_hvps_i').val(response.note_hvps_i);
                $('#hasil_hvps_i').val(response.hasil_hvps_i);
                $('#note_mag_i').val(response.note_mag_i);
                $('#hasil_mag_i').val(response.hasil_mag_i);
                $('#note_az').val(response.note_az);
                $('#hasil_az').val(response.hasil_az);
                $('#note_el').val(response.note_el);
                $('#hasil_el').val(response.hasil_el);
                $('#note_tx_cab').val(response.note_tx_cab);
                $('#hasil_tx_cab').val(response.hasil_tx_cab);
                $('#note_hot_box').val(response.note_hot_box);
                $('#hasil_hot_box').val(response.hasil_hot_box);
                $('#note_fwd_power').val(response.note_fwd_power);
                $('#hasil_fwd_power').val(response.hasil_fwd_power);
                $('#note_rev_power').val(response.note_rev_power);
                $('#hasil_rev_power').val(response.hasil_rev_power);
                $('#note_vswr').val(response.note_vswr);
                $('#hasil_vswr').val(response.hasil_vswr);
                $('#note_prf').val(response.note_prf);
                $('#hasil_prf').val(response.hasil_prf);
                $('#note_rx_plus15v').val(response.note_rx_plus15v);
                $('#hasil_rx_plus15v').val(response.hasil_rx_plus15v);
                $('#note_rx_min15v').val(response.note_rx_min15v);
                $('#hasil_rx_min15v').val(response.hasil_rx_min15v);
                $('#note_note_plus24v').val(response.note_note_plus24v);
                $('#hasil_rx_plus24v').val(response.hasil_rx_plus24v);
                $('#note_io_temp').val(response.note_io_temp);
                $('#hasil_io_temp').val(response.hasil_io_temp);
                $('#note_comp_temp').val(response.note_comp_temp);
                $('#hasil_comp_temp').val(response.hasil_comp_temp);
                $('#note_afc').val(response.note_afc);
                $('#hasil_afc').val(response.hasil_afc);
                $('#note_edrp9_rx_plus15v').val(response.note_edrp9_rx_plus15v);
                $('#hasil_edrp9_rx_plus15v').val(response.hasil_edrp9_rx_plus15v);
                $('#note_edrp9_rx_min15v').val(response.note_edrp9_rx_min15v);
                $('#hasil_edrp9_rx_min15v').val(response.hasil_edrp9_rx_min15v);
                $('#note_edrp9_rx_plus24v').val(response.note_edrp9_rx_plus24v);
                $('#hasil_edrp9_rx_plus24v').val(response.hasil_edrp9_rx_plus24v);
                $('#note_hvps_alarm').val(response.note_hvps_alarm);
                $('#hasil_hvps_alarm').val(response.hasil_hvps_alarm);
                $('#note_power_supply24v').val(response.note_power_supply24v);
                $('#hasil_power_supply24v').val(response.hasil_power_supply24v);
                $('#note_fan').val(response.note_fan);
                $('#hasil_fan').val(response.hasil_fan);
                $('#note_mag_blower').val(response.note_mag_blower);
                $('#hasil_mag_blower').val(response.hasil_mag_blower);
                $('#note_ac_rstatus').val(response.note_ac_rstatus);
                $('#hasil_ac_rstatus').val(response.hasil_ac_rstatus);
                $('#note_ac_rups').val(response.note_ac_rups);
                $('#hasil_ac_rups').val(response.hasil_ac_rups);
                $('#note_bite_display_warning').val(response.note_bite_display_warning);
                $('#hasil_bite_display_warning').val(response.hasil_bite_display_warning);
                $('#note_volume_browser').val(response.note_volume_browser);
                $('#hasil_volume_browser').val(response.hasil_volume_browser);
                $('#note_radio_link').val(response.note_radio_link);
                $('#hasil_radio_link').val(response.hasil_radio_link);
                $('#note_client_pingtest').val(response.note_client_pingtest);
                $('#hasil_client_pingtest').val(response.hasil_client_pingtest);
                $('#note_pc_integrasi_pingtest1').val(response.note_pc_integrasi_pingtest1);
                $('#hasil_pc_integrasi_pingtest1').val(response.hasil_pc_integrasi_pingtest1);
                $('#note_pc_integrasi_pingtest2').val(response.note_pc_integrasi_pingtest2);
                $('#hasil_pc_integrasi_pingtest2').val(response.hasil_pc_integrasi_pingtest2);
                $('#note_wg_check').val(response.note_wg_check);
                $('#hasil_wg_check').val(response.hasil_wg_check);
                $('#note_wg_press').val(response.note_wg_press);
                $('#hasil_wg_press').val(response.hasil_wg_press);
                $('#note_dehydrator_alarm').val(response.note_dehydrator_alarm);
                $('#hasil_dehydrator_alarm').val(response.hasil_dehydrator_alarm);
                $('#note_modem').val(response.note_modem);
                $('#hasil_modem').val(response.hasil_modem);
                $('#note_router').val(response.note_router);
                $('#hasil_router').val(response.hasil_router);
                $('#note_hdds_pingtest').val(response.note_hdds_pingtest);
                $('#hasil_hdds_pingtest').val(response.hasil_hdds_pingtest);
                $('#note_master_ems_server').val(response.note_master_ems_server);
                $('#hasil_master_ems_server').val(response.hasil_master_ems_server);
                $('#note_client_ems_radome').val(response.note_client_ems_radome);
                $('#hasil_client_ems_radome').val(response.hasil_client_ems_radome);
                $('#note_web_ems').val(response.note_web_ems);
                $('#hasil_web_ems').val(response.hasil_web_ems);
                $('#note_ups_status').val(response.note_ups_status);
                $('#hasil_ups_status').val(response.hasil_ups_status);
                $('#note_line_input').val(response.note_line_input);
                $('#hasil_line_input').val(response.hasil_line_input);
                $('#note_line_output').val(response.note_line_output);
                $('#hasil_line_output').val(response.hasil_line_output);
                $('#note_battery').val(response.note_battery);
                $('#hasil_battery').val(response.hasil_battery);
                $('#note_grounding').val(response.note_grounding);
                $('#hasil_grounding').val(response.hasil_grounding);
                $('#note_kebersihan').val(response.note_kebersihan);
                $('#hasil_kebersihan').val(response.hasil_kebersihan);
            }
        });    
    }

</script>

@stop
@endsection