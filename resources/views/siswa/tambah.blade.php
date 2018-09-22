@extends('template')

@section('disini')
    <!-- Page Content -->
    <div class="container">

      <h1>Tambah data Siswa</h1>

      <div class="row">
          <div class="col-md-6">
              <form method="post" action="/siswa/store">

                  {{ csrf_field() }}

                  <div class="form-group">
                      <label>Nama Siswa</label>
                      <input class="form-control" name="nama" />
                  </div>

                  <div class="form-group">
                      <label>Alamat</label>
                      <input class="form-control" name="alamat" />
                  </div>

                  <div class="form-group">
                      <label>NIM</label>
                      <input class="form-control" name="nim" />
                  </div>

                  <div class="form-group">
                      <label>Kelas</label>
                      <select name="kelas_id">
                          @foreach($dataKelas as $kelas)
                              <option value="{{$kelas->id}}">{{$kelas->nama}}</option>
                          @endforeach
                      </select>
                  </div>

                  <div class="form-group">
                      <button type="submit" class="btn btn-primary">Simpan</button>
                  </div>
              </form>
          </div>
      </div>


    </div>
@endsection
