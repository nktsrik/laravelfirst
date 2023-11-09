@extends('layout.template')
<!-- START FORM -->
@section('konten') 

<form method="post" action="/mahasiswa/{{ $mahasiswa->id }}/update">
        @csrf
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <a href='{{ url('mahasiswa') }}' class="btn btn-secondary"><< kembali</a>
            <div class="mb-3 row">
                <label for="nim" class="col-sm-2 col-form-label">NIM</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name='nim' value="{{ $mahasiswa->nim }}" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='nama' value="{{ $mahasiswa->nama }}" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="jurusan" class="col-sm-2 col-form-label">Jurusan</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='jurusan' value="{{ $mahasiswa->jurusan }}" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="jurusan" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">Update</button></div>
            </div>
        </div>

        <!-- <label for="nama">Nama:</label>
        <input type="text" name="nama" value="{{ $mahasiswa->nama }}" required><br>

        <label for="nim">NIM:</label>
        <input type="text" name="nim" value="{{ $mahasiswa->nim }}" required><br>

        <button type="submit">Update</button> -->
    </form>

@endsection