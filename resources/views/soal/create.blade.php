@extends('soal.tmp')
@section('judul', 'Data Soal')
@section('isi')
<div class="row">
    <div class="col6">
        <div class="card">
            <div class="card-header">Data Soal <a class="btn btn-info float-right" href="{{url('soal')}}">Kembali</a> </div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="form-grup">
                        <label>Mata Kuliah</label>
                        <input type="text" name="nama_mk" class="form-control">
                    </div>

                    <div class="form-grup">
                        <label>Dosen</label>
                        <input type="text" name="dosen" class="form-control">
                    </div>

                    <div class="form-grup">
                        <label>Jumlah Soal</label>
                        <input type="text" name="jumlah_soal" class="form-control">
                    </div>

                    <div class="form-grup">
                        <label>Keterangan</label>
                        <input type="text" name=keterangan" class="form-control">
                    </div>

                    <input type="submit" class="btn btn-info" name="submit" value="Save">
                    <a class="btn btn-warning float-right" href="{{url('soal')}}"><i class="fa fa-backward"></i>Cencel</a>
</div>
</div>
</div>
</div>
@endsection