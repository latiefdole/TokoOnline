<!DOCTYPE html>
<html>
<head>
    <title>Form Data Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h1 {
            color: #333;
        }
        form {
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
        }
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }
        input[type="text"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h1>Form Data Mahasiswa</h1>
    <form action="/proses-form" method="POST">
        @csrf
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required>

        <label for="nim">NIM:</label>
        <input type="text" id="nim" name="nim" required>

        <label for="jurusan">Jurusan:</label>
        <input type="text" id="jurusan" name="jurusan" required>

        <label for="angkatan">Angkatan: </label>
        <input type="text" id="jurusan" name="jurusan" required>
    </form>
</body>
</html>