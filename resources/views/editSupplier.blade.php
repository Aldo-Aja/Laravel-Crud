<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Supplier</title>
</head>
<body>
    <table>
        <form action="{{ url('edit/' . $id) }}" method="post">
            @csrf
            @method('put')
            Nama Supplier
            <input type="text" name="namaSupplier" placeholder="Nama Supplier" value="{{ $supplier->namaSupplier }}"><br>
            
            Alamat Supplier
            <input type="text" name="alamatSupplier" placeholder="Alamat Supplier" value="{{ $supplier->alamatSupplier }}"><br>
            
            Telpon Supplier
            <input type="text" name="telpSupplier" placeholder="Telpon Supplier" value="{{ $supplier->telpSupplier }}"><br>

            <input type="submit" value="Simpan">
        </form>
    </table>
</body>
</html>
