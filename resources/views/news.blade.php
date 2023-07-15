<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h2>News</h2>
        <p>This is our news page</p>
        <p>News id is: {{ $my_news }}</p>
        <p>Name is: {{ $name }}</p>
        <p>Email is: {{ $email }}</p>
        <ul>
            @foreach($departments as $d)
                <li>{{ $d['name'] }} , {{ $d['code']}}</li>
            @endforeach            
        </ul>
        <table>
            <thead>
                <th>Name</th>
                <th>Code</th>
            </thead>
            <tbody>
                @foreach($departments as $d)
                <tr>
                    <td>{{ $d['name'] }}</td>
                    <td>{{ $d['code'] }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>