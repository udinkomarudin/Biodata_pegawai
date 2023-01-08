@extends('main')


@section('title','Dashboard')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

@section('breadcrumbs')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Pegawai</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li class="active"><i class="fa fa-dashboard"></i></li>
                </ol>
            </div>
        </div>
    </div>
</div>
    
@endsection

@section('content')
<div class="content mt-3">

    <div class="animated fadeIn">

        @if(session('status'))
        <div class="alert alert-success">
            {{ session('status')}}
        </div>
            
        @endif

        <div class="card">
            <div class="card-header">
                <div class="pull-left">
                    <strong>Data Pegawai </strong>
                </div>
                <div class="pull-right">
                    <a href="{{ route('pegawai.add') }}" class="btn btn-success btn-sm">
                        <i class="fa fa-plus"></i> Add
                    </a>
                </div>
            </div>
            <div class="card-body table-responsive"></div>


            <table class="table table-bordered" id="data_users_reguler">

                <thead>
                    <tr>
                    <th>No</th>
                    <th>NIK</th>
                    <th>Nama Lengkap</th>
                    <th>Jenis Kelamin</th>
                    <th>Tanggal Lahir</th>
                    <th>Alamat</th>
                    <th>Negara</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pegawai as $item)
                    <tr>
                        
                        <td>{{ $loop->iteration}}</td>
                        <td>{{ $item->nik}}</td>
                        <td>{{ $item->nama_lengkap}}</td>
                        <td>{{ $item->jenis_kelamin}}</td>
                        <td>{{ $item->tgl_lahair}}</td>
                        <td>{{ $item->alamat}}</td>
                        <td>{{ $item->negara}}</td>
                       
                        <td class="text-center">
                            <a href="{{ route('pegawai.edit',$item->id) }}" class="btn btn-primary btn-sm">
                                <i class="fa fa-pencil"></i>
                            </a>
                            <form action="{{ url('pegawai/'.$item->id) }}" method="post" class="d-inline" onsubmit="return confirm('yakin hapus?')">
                                @method('delete')
                                @csrf
                                <button class="btn btn-danger btn-sm">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    
                    @endforeach
                </tbody>
            </table>
            
 <script>
    $(document).ready(function() {
    $('#data_users_reguler').DataTable();
} );
</script>
    </div>
</div>
    
    

</div>
</div>    

@endsection