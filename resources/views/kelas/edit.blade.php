@extends('template')

@section('disini')
    <!-- Page Content -->
    <div class="container">

      <h1>Tambah data kelas</h1>

      <div class="row">
          <div class="col-md-6">
              <form method="post" action="/kelas/update">

                  {{ csrf_field() }}

                  <div class="form-group">
                      <label>Nama kelas</label>
                      <input class="form-control" name="kelas" value="{{ $kelas->nama }}" />
                  </div>
                  <div class="form-group">
                      <button type="submit" class="btn btn-primary">Simpan</button>
                  </div>
              </form>
          </div>
      </div>


    </div>
@endsection
