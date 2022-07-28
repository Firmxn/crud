<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="/valid/input">Input</a>
    <table border="1">
        <tr>
            <th>Nama</th>
            <th>Umur</th>
        </tr>
        @foreach($inputs as $i)
        <tr>
            <td>{{ $i -> nama }}</td>
            <td>{{ $i -> umur }}</td>
        </tr>
        @endforeach
    </table>
    
</body>
</html>