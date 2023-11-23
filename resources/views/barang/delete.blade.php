@extends('template.main')

@section('konten')
    <div class="container">
        <h1>Hapus Barang</h1>
        <p>Anda yakin ingin menghapus barang dengan nama: {{ $barang->nama_barang }}?</p>

        <form action="{{ url('barang/destroy/'.$barang->id) }}" method="POST">
            @csrf
            @method('DELETE') {{-- Use DELETE method for delete --}}
            
            <button type="submit" class="btn btn-danger">Hapus</button>
            <a href="{{ url('barang') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
@endsection
