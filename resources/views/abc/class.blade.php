<!doctype html>
<html >
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    table, th, td {
    border: 1px solid black;
        background-color:grey;
        color: white;
    }

    </style>
</head>
<body>

<table style="width:50%">
    <tr>
        <th>Name</th>
        <th>Id</th>
        <th>City</th>
    </tr>
@foreach($employee as $emp)

        <tr>
            <td>{{$emp['name']}} </td>
            <td>{{$emp['id']}} </td>
            <td>{{$emp['city']}}</td>
        </tr>


@endforeach
</table>
</body>
</html>
