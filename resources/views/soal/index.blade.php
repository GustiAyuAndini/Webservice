@extends('soal.tmp')
@section('judul', 'Data Soal')
@section('isi')
<div class="row">
    <div class="col6">
        <div class="card">
            <div class="card-header">Data Soal <a class="btn btn-primary float-right" href="{{url('soal/tambah')}}">Tambah</a> </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Mata Kuliah</th>
                            <th>Dosen</th>
                            <th>Jumlah Soal</th>
                            <th>Keterangan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($soals as $row)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $row->nama_mk }}</td>
                            <td>{{ $row->dosen }}</td>
                            <td>{{ $row->jumlah_soal }}</td>
                            <td>{{ $row->keterangan }}</td>
                            <td></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection