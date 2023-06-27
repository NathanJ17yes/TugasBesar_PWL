@extends('layouts.master')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0 text-dark">Daftar Mata Kuliah</h1>
			</div><!-- /.col -->
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
					<li class="breadcrumb-item active">Daftar Mata Kuliah</li>
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
                <a href="{{route('createMatkul')}}" class="btn btn-primary fa fa-plus" role="button"></a>
            </div>
            <div class="card-body p-0">
                <table class="table table-striped mb-0">
                    <thead>
                    <tr>
                        <th>Kode Mata Kuliah</th>
                        <th>Mata Kuliah</th>
                        <th>SKS</th>
                        <th>Semester</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($matkuls as $matkul)
                            <tr>
                                <td>{{$matkul->kode_matkul}}</td>
                                <td>{{$matkul->nama_matkul}}</td>
                                <td>{{$matkul->sks}}</td>
                                <td>{{$matkul->semester}}</td>
                                <td>
                                    <a href="{{route('deleteMatkul',['kode_matkul'=>$matkul->kode_matkul])}}" class="btn btn-danger fa fa-trash-o"></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

	</div><!-- /.container-fluid -->
</div>
<!-- /.content -->
@endsection
