@extends('template')

@section('disini')

    <!-- Page Content -->
    <div class="container">

        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">
            <div class="col-md-12 mb-12">
                <div class="card h-100">
                    <div class="card-body">
                        <h2 class="card-title">Data Siswa</h2>

                        <!-- list data siswa -->
                        <div>

                            @if (session()->has('pesan'))
                                <div class="alert alert-success">
                                    {{ session('pesan') }}
                                </div>
                            @endif

                            <table class="table">
                                <tr>
                                    <th>ID</th>
                                    <th>NIM</th>
                                    <th>Nama Siswa</th>
                                    <th>Alamat</th>
                                    <th>Kelas</th>
                                    <th>Action</th>
                                </tr>

                                @foreach ($dataSiswa as $siswa)
                                <tr>
                                    <td>{{ $siswa->id }}</td>
                                    <td>{{ $siswa->nim }}</td>
                                    <td>{{ $siswa->nama }}</td>
                                    <td>{{ $siswa->alamat }}</td>
                                    <td>
                                        {{ $siswa->kelas->nama }}
                                    </td>
                                    <td>

                                      {{-- tombol edit --}}
                                      <a href="{{ url('siswa/edit/'.$siswa->id) }}">Edit</a>


                                      {{-- tombol hapus --}}
                                      <form action="{{ url('siswa/' . $siswa->id) }}" method="post">
                                          {{ method_field('DELETE') }}
                                          {!! csrf_field() !!}
                                          <button>Hapus</button>
                                      </form>





                                   </td>
                                </tr>
                                @endforeach

                            </table>
                        </div>

                    </div>
                    <div class="card-footer">
                        <a href="{{ url('siswa/create') }}" class="btn btn-primary">Tambah Data</a>
                    </div>
                </div>





            </div>
            <!-- /.col-md-4 -->

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

@endsection
