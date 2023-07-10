@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h3>Daftar Mobil</h3>
        <a href="{{ route('mobil.create') }}" class="btn btn-primary">Tambah Data</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Merk Mobil</th>
                        <th>Gambar Mobil</th>
                        <th>Harga Mobil</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($mobil as $mobil)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $mobil->merek }}</td>
                        <td>
                            <img src="{{ Storage::url($mobil->gambar) }}" width="200" alt="">
                        </td>
                        <td>{{ $mobil->harga_sewa }}</td>
                        <td>{{ $mobil->status }}</td>
                        <td>
                            <a href="{{ route('mobil.edit', $mobil->id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form class="d-inline" action="{{ route('mobil.destroy', $mobil->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="text-center">Data Kosong</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection