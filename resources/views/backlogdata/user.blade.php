<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Pengguna</title>
</head>
<body>
<h1>Data Pengguna</h1>
<table border="1" cellpadding="2" cellspacing="0">
    <a href = "{{ route('/user/tambah') }}">Tambah User</a>
    <tr>
        <th>ID</th>
        <th>Username</th>
        <th>Nama</th>
        <th>ID Level Pengguna</th>
    </tr>
    {{--<tr>
        <th>Jumlah Pengguna</th>
    </tr>
    <tr>
        <th>{{ $data }}</th>
    </tr>--}}
    @foreach($data as $d)
        <tr>
            <td>{{ $d->user_id }}</td>
            <td>{{ $d->username }}</td>
            <td>{{ $d->nama }}</td>
            <td>{{ $d->level_id }}</td>
            <td><a href="{{ route('/user/ubah', $d->user_id) }}">Ubah</a> | <a href="{{ route('/user/hapus', $d->user_id) }}">Hapus</a></td>
        </tr>
    @endforeach
    {{--<tr>
        <td>{{ $data->user_id }}</td>
        <td>{{ $data->username }}</td>
        <td>{{ $data->nama }}</td>
        <td>{{ $data->level_id }}</td>
    </tr>--}}
</table>
</body>
</html>
