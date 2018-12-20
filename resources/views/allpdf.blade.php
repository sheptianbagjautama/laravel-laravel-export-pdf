<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ini adalah pdf untuk semua user detail </title>
</head>
<body>
<table>
    <thead>
        <tr>
            <td>No</td>
            <td>Full Name</td>
            <td>Street Address</td>
            <td>Zip Code</td>
            <td>City</td>
        </tr>
    </thead>
    {{ $no = 1 }}
    @foreach($users as $user)
    <tbody>
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $user->full_name }}</td>
            <td>{{ $user->street_address }}</td>
            <td>{{ $user->zip_code }}</td>
            <td>{{ $user->city }}</td>
        </tr>
    </tbody>
    @endforeach
</table>

</body>
</html>
