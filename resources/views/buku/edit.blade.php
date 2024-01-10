<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  
  <body>
    <style>
        body {
    font-family: Georgia, 'Times New Roman', Times, serif;
    background-color: #719eca;
    margin: 0;
}

.container {
    max-width: 600px;
    margin: 50px auto;
    background-color: #91d1ee;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.btn {
    cursor: pointer;
}

.btn-secondary {
    background-color: #1c708a;
    color: #fff;
}

.btn-primary {
    background-color: #1c708a;
}

.alert {
    margin-top: 20px;
}

/* Optional: Customize your body background color */
body {
    background-color: #97b6d6;
}
</style>
    <div class="container mt-4">
        <a href="{{url('buku')}}"></a>
        <h1 class="text-center">Edit Daftar Buku</h1>

        @if ($errors->any())
        <div class="pt-3">
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $item)
                    <li>{{$item}}</li>  
                    @endforeach
            </ul>
            </div>
        </div>
            
        @endif
        <form action='{{url('buku/'.$data->id)}}' method='POST'>
            @csrf 
            @method('PUT')
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Judul Buku</label>
                <input type="text" name="judul" class="form-control" value="{{$data->judul}}">
            </div>
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Penulis</label>
                <input type="text" name="penulis" class="form-control" value="{{$data->penulis}}">
            </div>
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Tahun Terbit</label>
                <input type="number" name="tahun" class="form-control" value="{{$data->tahun}}">
            </div>
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">ISBN</label>
                <input type="text" name="isbn" class="form-control" value="{{$data->isbn}}">
            </div>
            <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
            <button type="submit" name="kembali" class="btn btn-secondary">Kembali</button>
        </form>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>