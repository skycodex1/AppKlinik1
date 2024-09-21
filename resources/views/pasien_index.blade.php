<div>
    @extends('layouts.app', ['title' => 'Data Pasien'])
    @section('content')
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">Form Pasien</div>
                        <div class="card-body">
                            <h3>Data pasien</h3>
                            <div class="row mb-3 mt-3">
                                <div class="col-md-6">
                                    <a href="/pasien/create" class="btn btn-primary btn-sm">Tambah Pasien</a>
                                </div>
                            </div>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>NO</th>
                                        <th>No Pasien</th>
                                        <th>Nama</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Umur</th>
                                        <th>Foto</th>
                                        <th>Alamat</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pasien as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->no_pasien }}</td>
                                            <td>
                                                {{ $item->nama }}
                                            </td>
                                            <td>{{ $item->jk }}</td>
                                            <td>{{ $item->umur }}</td>
                                            <td>
                                                <img src="{{ asset('storage/' . $item->foto) }}" alt="pasien"
                                                    width="100">
                                            </td>
                                            <td>{{ $item->alamat }}</td>
                                            <td>
                                                <a href="/pasien/{{ $item->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
                                                <a href="/pasien/{{ $item->id }}/delete" class="btn btn-danger btn-sm">Delete</a>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {!! $pasien->links() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
</div>
