<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <style>

body {
    font-family: Georgia, 'Times New Roman', Times, serif;
    background-color: #84abb4;
}

.container {
    max-width: 800px;
    margin: 20px auto;
    background-color: #91d1ee;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.table th, .table td {
    text-align: left;
}

.btn {
    cursor: pointer;
    margin-right: 10px;
    color: #146965;
}

.btn-primary {
    background-color: #1c708a;
    color: #146965;
    border: none;
}

.btn-warning {
    background-color: #ffc107;
    color: #212529;
    border: none;
}

.btn-danger {
    background-color: #dc3545;
    color: #0e5c5f;
    border: none;
}

.btn-add {
    margin-top: 10px;
}

/* Optional: Customize your form styles */
.form-container {
    max-width: 100%;
    padding: 20px;
}

/* Optional: Customize your modal styles */
.modal-content {
    background-color: #83a1a8;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

/* Optional: Customize your body background color */
body {
    background-color: #97b6d6;
}
</style>
<div class="container mt-4">
    <h2 class="text-center">Daftar Buku</h2>

    <table class="table mt-3" id="bookTable">
        <tr>
            <th>NO</th>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Tahun Terbit</th>
            <th>ISBN</th>
            <th>Aksi</th>
        </tr>
        <tbody>
            <?php $no = $data->firstItem()?>
            @foreach ($data as $item)
            <tr>
                <td>{{$no}}</td>
                <td>{{$item->judul}}</td>
                <td>{{$item->penulis}}</td>
                <td>{{$item->tahun}}</td>
                <td>{{$item->isbn}}</td>
                <td>
                    <a href="{{url('buku/'.$item->id.'/edit')}}" class="btn btn-Warning btn-sm">
                        Edit</a>
                    <form onsubmit="return confirm('yakin akan menghapus data?')" class="d-inline" action="{{url('buku/'.$item->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                    <button><a>Hapus</a></button>
                    </form>
                </td>
            </tr>
            <?php $no++ ?>
            @endforeach
        </tbody>
    </table>
    <button class="btn btn-primary btn-add" data-bs-toggle="modal" data-bs-target="#addModal">
        <a class="text-light" href="{{url('buku/create')}}">Tambahkan</a></button>
</div>


</head>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
