<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
</head>
<body>
    <a href="{{ route('logout') }}">Logout</a>
    <table border="1">
        <tr>
            <th>Nama game</th>
            <th>Icon</th>
            <th>Kategori</th>
            <th>deskripsi</th>
        </tr>
        @if ($total > 0)
            @foreach ($listgame as $item)
            <tr>
                <td>{{ $item->nama_game }}</td>
                <td>{{ $item->icon_game }}</td>
                <td>{{ $item->kategori }}</td>
                <td>{{ $item->deskripsi }}</td>
            </tr>
            @endforeach
        @else
            <tr>
                <td colspan="4">Tidak ada game</td>
            </tr>
        @endif
        
    </table>
</body>
</html>