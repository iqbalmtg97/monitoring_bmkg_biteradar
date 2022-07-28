@extends('layouts.master')

@section('profile', 'active')
	
@section('content')
<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<div class="panel">
				<div class="panel-body">
					<div class="panel panel-profile">
						<div class="clearfix">
							<!-- LEFT COLUMN -->
							<div class="profile-left">
								<!-- PROFILE HEADER -->
								<div class="profile-header">
									<div class="overlay"></div>
									<div class="profile-main">
										<img width="100" src="{{asset('bmkg/images/profil.png')}}" class="img-circle" alt="Avatar">
										<h3 class="name">{{Auth::user()->name}}</h3>
										<span class="online-status status-available">Available</span>
									</div>
								</div>
								<!-- END PROFILE HEADER -->
								<!-- PROFILE DETAIL -->
								<div class="profile-detail">
									<div class="profile-info">
										<h4 class="heading">Data Diri</h4>
										<ul class="list-unstyled list-justify">
											<li>Username <span>{{Auth::user()->name}}</span></li>
											<li>Nama Lengkap <span>{{Auth::user()->nama}}</span></li>
											<li>Email <span>{{Auth::user()->email}}</span></li>
											<li>No Hp <span>{{Auth::user()->no_hp}}</span></li>
										</ul>
									</div>
								<div class="text-center"><a class="btn btn-primary" data-toggle="modal" data-target="#modal-1" onclick="getdata({{Auth::user()->id}})">Edit Profile</a></div>
								</div>
								<!-- END PROFILE DETAIL -->
							</div>
							<!-- END LEFT COLUMN -->
							<!-- RIGHT COLUMN -->
							<div class="profile-right">
								<h4 class="heading">Ubah Password</h4>
								<div class="custom-tabs-line tabs-line-bottom left-aligned">
									<ul class="nav" role="tablist">
										<li class="active"><a href="#tab-bottom-left1" role="tab" data-toggle="tab"></a>
										</li>
									</ul>
								</div>
								<div class="tab-content">
									<div class="tab-pane fade in active" id="tab-bottom-left1">
										<form action="{{ route('changePassword') }}" method="post">
                                    		{{ csrf_field() }}
                                    		<div class="form-group row">
                                    			<label class="col-sm-4 col-form-label">Password Lama</label>
                                    			<div class="col-sm-6">
                                    				<input placeholder="********" id="current-password" type="password" class="form-control" name="current-password" required>
                                    			</div>
                                    		</div>
                                    		<div class="form-group row">
                                    			<label for="password" class="col-sm-4 col-form-label">Password Baru</label>
                                    			<div class="col-sm-6">
													<input placeholder="********" id="new-password" type="password" class="form-control  @error('password') is-invalid @enderror" name="new-password" required autocomplete="new-password">
													@error('password')
                                    					<span class="invalid-feedback" role="alert">
                                        					<strong>{{ $message }}</strong>
                                    					</span>
                                					@enderror
                                    			</div>
                                    		</div>
                                    		<div class="form-group row">
                                    			<label for="password-confirm" class="col-sm-4 col-form-label">Konfirmasi Password</label>
                                    			<div class="col-sm-6">
                                    				<input placeholder="********" id="password-confirmation" type="password" class="form-control" name="password-confirmation" required autocomplete="new-password">
                                    			</div>
                                    		</div>
                                    		<div class="form-group row" style="margin-left: 20px;">
                                    			<button type="submit" class="btn btn-primary">Ubah</button>&nbsp;&nbsp;&nbsp;
                                    			<button type="Reset" class="btn btn-success">Reset</button>
                                    		</div>
                                    	</form>
									</div><br><br><br><br><br>
								</div>
							</div>
							<!-- END RIGHT COLUMN -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

{{-- MODAL Edit --}}

<div class="modal" tabindex="-1" role="dialog" id="modal-1">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Edit Data</h5>
			</div>
			<div class="modal-body">
				<form action="{{url('/updateprofile')}}" method="POST">
					{{csrf_field()}}

					<input type="hidden" name="id" id="id">
					<input type="hidden" name="url_getdata" id="url_getdata" value="{{ url('getdata/') }}">

					<div class="form-group row">
							<label class="col-sm-5 col-form-label">Username</label>
							<div class="col-sm-7">
							<input type="text" name="name" class="form-control" id="namee" value="" placeholder="Masukkan Username ...">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-5 col-form-label">Nama Lengkap</label>
							<div class="col-sm-7">
								<input type="text" name="nama" class="form-control" id="namaa" value="" placeholder="Masukkan Nama Lengkap ...">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-5 col-form-label">Email</label>
							<div class="col-sm-7">
								<input type="text" name="email" class="form-control" id="emaill" value="" placeholder="Masukkan Email ...">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-5 col-form-label">No Hp</label>
							<div class="col-sm-7">
								<input type="text" name="no_hp" class="form-control" id="no_hp" value="" placeholder="Masukkan No Hp ...">
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
				$('#namee').val(response.name);
				$('#namaa').val(response.nama);
				$('#emaill').val(response.email);
				$('#no_hp').val(response.no_hp);
			}
		});    
	}

</script>

@endsection
