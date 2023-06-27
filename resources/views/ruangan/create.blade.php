@extends('layouts.master')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0 text-dark">Ruangan</h1>
			</div><!-- /.col -->
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
					<li class="breadcrumb-item active">Ruangan</li>
				</ol>
			</div><!-- /.col -->
		</div><!-- /.row -->
	</div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
	<div class="container-fluid">

        <div class="card">
            <div class="card-body p-0">
                <form action="{{route('storeRuangan')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="kodeRuangan">Kode Ruangan</label>
                        <input type="text" id="kodeRuangan" name="kodeRuangan" required placeholder="Ruang" class="form-control">
                        <label for=""></label>
                    </div>
                    <div class="form-group">
                        <label for="namaRuangan">Nama Ruangan</label>
                        <input type="text" id="namaRuangan" name="namaRuangan" required placeholder="Nama Ruangan" class="form-control">
                        <label for=""></label>
                    </div>
                    <div class="text-right">
                        <a href="{{route('ruanganList')}}" class="btn btn-outline-secondary mr-2" role="button">Cancel</a>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
	</div><!-- /.container-fluid -->
</div>
<!-- /.content -->
@endsection
