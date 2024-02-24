<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/welcome" method="POST">
        @csrf
        <label for="">nama</label><br>
        <input type="text" name="nama"><br>
        <label for="">alamat</label><br>
        <textarea name="alamat" id="" cols="30" rows="10"></textarea><br>
        <label for="jenis kelamin">jenis kelamin</label><br>
        <input type="radio" name="jk" value="1"> laki-laki
        <input type="radio" name="jk" value='value'> perempuan <br>
        <input type="submit" value="submit">
    </form>
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
</body>
</html>