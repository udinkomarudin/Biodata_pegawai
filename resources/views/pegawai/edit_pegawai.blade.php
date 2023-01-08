@extends('main')


@section('title','Dashboard')

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

        <div class="card">
            <div class="card-header">
                <div class="pull-left">
                    <strong>Edit Pegawai</strong>
                </div>
                <div class="pull-right">
                    <a href="" class="{{ url('pegawai') }}" class="btn btn-success btn-sm">
                        <i class="fa fa-undo"></i> Back
                    </a>
                </div>
            </div>
            <div class="card-body">

            <div class="row">
                <div class="col-md4 offset-md4">  
                    <form action="{{  route('pegawai.update', $pegawai->id) }}" method="post">
                        @csrf {{ csrf_field() }}
                    
                         <div class="form-group">
                            <label>NIK</label>
                            <input type="text" name="nik" class="form-control" value="{{ $pegawai->nik }}" autofocus required>
                        </div>
                        <div class="form-group">
                            <label>Nama_Lengkap</label>
                            <input type="text" name="nama_lengkap" class="form-control" value="{{ $pegawai->nama_lengkap }}" autofocus required>
                        </div>
                        <div class="form-group">
                            <label>jenis_kelamin</label>
                            <input type="radio" name="jenis_kelamin" value="L" id="jenis_kelamin">Laki-Laki
                            <input type="radio" name="jenis_kelamin" value="P" id="jenis_kelamin">Perempuan
                        </div>
                        <div class="form-group">
                            <label>Tgl_Lahair</label>
                            <input type="date" name="tgl_lahir" class="form-control" value="{{ $pegawai->tgl_lahir }}" autofocus required>
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <input type="text" name="alamat" class="form-control" value="{{ $pegawai->alamat }}" autofocus required>
                        </div>


                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label">Negara</label>

                            <div class="col-md-6">
                            <select name="city" id="city" class="form-control">
                         <option value="">Bangkok</option>
                         <option value="">Indonesia</option>
                        </select>
                      </div>
                        <button type="submit" class="btn btn-success">SAVE</button>
                    </form>
                </div>
        </div>
    </div>
</div>
</div>    
    
@endsection