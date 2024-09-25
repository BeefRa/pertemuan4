@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3>Tabel Mahasiswa</h3>
            <div class="panel panel-default">
                <div class="panel-body">

                    @if(Session::has('alert-success'))
                        <div class="alert alert-success">
                            {{ Session::get('alert-success') }}
                        </div>
                    @endif

                    <a href="{{ route('mhs.create') }}" class="btn btn-info pull-right">Tambah Data</a>
                    <br><br>

                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>NRP</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            @foreach($mhs as $m)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $m->nrp }}</td>
                                    <td>{{ $m->nama }}</td>
                                    <td>{{ $m->alamat }}</td>
                                    <td>
                                        <form method="POST" action="{{ route('mhs.destroy', $m->nrp) }}" accept-charset="UTF-8">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{ route('mhs.edit', $m->nrp) }}" class="btn btn-primary">Edit</a>
                                            <input type="submit" class="btn btn-danger" onclick="return confirm('Anda yakin akan menghapus data ?');" value="Delete">
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection