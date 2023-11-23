@extends('template.main')

@section('konten')
    <div class="container">
        <h1>Edit Barang</h1>
        <form action="{{ url('barang/edit/'.$barang->id) }}" method="POST">
            @csrf
            @method('PUT') {{-- Use PUT method for update --}}
            <div class="form-group">
                <label for="nama_barang">Nama Barang</label>
                <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="{{ $barang->nama_barang }}">

                <label for="jumlah_barang">Jumlah Barang</label>
                <input type="text" class="form-control" id="jumlah_barang" name="jumlah_barang" value="{{ $barang->jumlah_barang }}">

                <label for="kondisi">Kondisi</label>
                <select class="form-control" id="kondisi" name="kondisi">
                    <option value="baru" {{ $barang->kondisi == 'baru' ? 'selected' : '' }}>Baru</option>
                    <option value="bekas" {{ $barang->kondisi == 'bekas' ? 'selected' : '' }}>Bekas</option>
                </select>
            </div>
            <!-- Add other fields as needed -->

            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
