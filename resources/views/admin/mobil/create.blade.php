@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-header">
        Form Tambah Data
    </div>
    <div class="card-body">
        <form action="{{ route('mobil.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="merek">Merek Mobil</label>
                <input type="text" name="merek" class="form-control" value="{{ old('merek') }}">
            </div>
            <div class="form-group">
                <label for="harga_sewa">Harga sewa</label>
                <input type="text" name="harga_sewa" class="form-control" value="{{ old('harga_sewa') }}">
            </div>
            <div class="form-group">
                <label for="bahan_bakar">Bahan Bakar</label>
                <input type="text" name="bahan_bakar" class="form-control" value="{{ old('bahan_bakar') }}">
            </div>
            <div class="form-group">
                <label for="jumlah_kursi">Jumlah Kursi</label>
                <input type="text" name="jumlah_kursi" class="form-control" value="{{ old('jumlah_kursi') }}">
            </div>
            <div class="form-group">
                <label for="transmisi">Transmisi</label>
                <select name="transmisi" id="transmisi" class="form-control">
                    <option value="manual">Manual</option>
                    <option value="otomatis">Otomatis</option>
                </select>
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <select name="status" id="status" class="form-control">
                    <option value="tersedia">Tersedia</option>
                    <option value="tidak tersedia">Tidak Tersedia</option>
                </select>
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <textarea name="deskripsi" class="form-control" id="deskripsi" cols="30" rows="5">{{ old('deskripsi') }}</textarea>
            </div>
            <div class="form-group">
                <label for="p3k">P3K</label>
                <select name="p3k" id="p3k" class="form-control">
                    <option value="1">Tersedia</option>
                    <option value="0">Tidak Tersedia</option>
                </select>
            </div>
            <div class="form-group">
                <label for="audio">Audio</label>
                <select name="audio" id="audio" class="form-control">
                    <option value="1">Tersedia</option>
                    <option value="0">Tidak Tersedia</option>
                </select>
            </div>
            <div class="form-group">
                <label for="charger">Charger</label>
                <select name="charger" id="charger" class="form-control">
                    <option value="1">Tersedia</option>
                    <option value="0">Tidak Tersedia</option>
                </select>
            </div>
            <div class="form-group">
                <label for="ac">Ac</label>
                <select name="ac" id="ac" class="form-control">
                    <option value="1">Tersedia</option>
                    <option value="0">Tidak Tersedia</option>
                </select>
            </div>
            <div class="form-group">
                <label for="gambar">Gambar</label>
                <input type="file" class="form-control" name="gambar">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
</div>
@endsection