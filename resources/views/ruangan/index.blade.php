@extends('layouts.master')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0 text-dark">Starter</h1>
			</div><!-- /.col -->
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
					<li class="breadcrumb-item active">Starter</li>
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
            <div class="card-header text-right">
                <a href="{{route('createMatkul')}}" class="btn btn-primary" role="button">Add Mata Kuliah</a>
            </div>
            <div class="card-body p-0">
                <table class="table table-striped mb-0">
                    <thead>
                    <tr>
                        <th>Kode Ruang</th>
                        <th>Nama Ruangan</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($ruangs as $ruang)
                        <tr>
                            <td>{{$ruang->kode_ruangan}}</td>
                            <td>{{$ruang->nama_ruangan}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

		{{-- main content here --}}

	</div><!-- /.container-fluid -->
</div>
<!-- /.content -->
@endsection
