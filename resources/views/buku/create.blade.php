<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <style>
        .container {
    max-width: 800px;
    margin: 20px auto;
    background-color: #91d1ee;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}
body {
    background-color: #97b6d6;
}
input {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .btn {
            cursor: pointer;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            color: #1c708a;
        }
        form-container {
            display: grid;
            gap: 15px;
        }
        h2 {
            font-family: Georgia, 'Times New Roman', Times, serif;
            color: black;
            text-align: center
        
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
            font-family: Georgia, 'Times New Roman', Times, serif;
            color: black;
        }

        .btn {
            background-color: #1c708a;
            color: white;
            font-family: Georgia, 'Times New Roman', Times, serif;
        }

        .btn.cancel {
            background-color: #1c708a;
            color: white;
            font-family: Georgia, 'Times New Roman', Times, serif;
        }

        .alert {
            margin-top: 20px;
            background-color: white;
            
        }
</style>

<div class="form-popup" id="bookForm">
    <div class="container mt-4 pt-3">
        <h2 id="formTitle" class="text-center">Tambah Buku</h2>
        <div class="alert alert-danger">
        <form action="{{url('buku')}}" method="POST" class="form-container">
            @csrf
            <input type="hidden" id="bookId" name="bookId">
            <label for="judul"><b>Kode Buku</b></label>
            <input type="text" placeholder="Masukkan Judul" name="id" required>

            <label for="judul"><b>Judul</b></label>
            <input type="text" placeholder="Masukkan Judul" name="judul" required>

            <label for="penulis"><b>Penulis</b></label>
            <input type="text" placeholder="Masukkan Penulis" name="penulis" required>

            <label for="tahun_terbit"><b>Tahun Terbit</b></label>
            <input type="text" placeholder="Masukkan Tahun Terbit" name="tahun" required>

            <label for="isbn"><b>ISBN</b></label>
            <input type="text" placeholder="Masukkan ISBN" name="isbn" required>
            <br>
            <br>
            <button type="submit" class="btn">Simpan</button>
            <button type="button" class="btn cancel" onclick="closeForm()">Batal</button>
        </form>
    </div>
</div>
</div>
    <script src="script.js"></script>
</body>
</html>