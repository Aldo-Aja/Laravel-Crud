<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Supplier</title>
</head>
<body>
    <table>
        <form action="{{url('save')}}" method="post">
            @csrf
            Nama Supplier
            <input type="text" name="namaSupplier" placeholer="Nama Supplier"><br>
            Alamat Supplier
            <input type="text" name="alamatSupplier" placeholer="Alamat Supplier"><br>
            Telepon Supplier
            <input type="text" name="telpSupplier" placeholer="Telepon Supplier" > <br> <br>
            <input type="submit" name="simpan" value="Simpan">
        </form>
    </table>
</body>
</html>