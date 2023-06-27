@extends('layouts.master')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0 text-dark">Tambah Mata Kuliah</h1>
			</div><!-- /.col -->
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
					<li class="breadcrumb-item active">Tambah Mata Kuliah</li>
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
                <form action="{{route('storeMatkul')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="txtName">Kode Mata Kuliah</label>
                        <input type="text" id="kodeMatkul" name="kodeMatkul" required placeholder="Nama Matkul" class="form-control">
                        <label for=""></label>
                    </div>
                    <div class="form-group">
                        <label for="txtName">Mata Kuliah</label>
                        <input type="text" id="mataKuliah" name="mataKuliah" required placeholder="Mata kuliah" class="form-control">
                        <label for=""></label>
                    </div>
                    <div class="form-group">
                        <label for="txtName">SKS</label>
                        <input type="text" id="sks" name="sks" required placeholder="Jumlah SKS" class="form-control">
                        <label for=""></label>
                    </div>
                    <div class="form-group">
                        <label for="txtName">Semester</label>
                        <input type="text" id="semester" name="semester" required placeholder="Semester" class="form-control">
                        <label for=""></label>
                    </div>
                    <div class="text-right">
                        <a href="{{route('matkulList')}}" class="btn btn-outline-secondary mr-2" role="button">Cancel</a>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
		{{-- main content here --}}

	</div><!-- /.container-fluid -->
</div>
<!-- /.content -->
@endsection
