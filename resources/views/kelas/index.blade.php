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
                        <h2 class="card-title">Data Kelas</h2>

                        <!-- list data kelas -->
                        <div>

                            @if (session()->has('pesan'))
                                <div class="alert alert-success">
                                    {{ session('pesan') }}
                                </div>
                            @endif

                            <table class="table">
                                <tr>
                                    <th>ID</th>
                                    <th>Nama Kelas</th>
                                    <th>Created At</th>
                                    <th>Action</th>
                                </tr>

                                @foreach ($dataKelas as $kelas)
                                <tr>
                                    <td>{{ $kelas->id }}</td>
                                    <td>{{ $kelas->nama }}</td>
                                    <td>{{ $kelas->created_at }}</td>
                                    <td>Edit | Hapus</td>
                                </tr>
                                @endforeach

                            </table>
                        </div>

                    </div>
                    <div class="card-footer">
                        <a href="{{ url('kelas/create') }}" class="btn btn-primary">Tambah Data</a>
                    </div>
                </div>





            </div>
            <!-- /.col-md-4 -->

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

@endsection
