<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
    <h1>{{ $mailData['title']}}</h1>
    <p>{{ $mailData['body']}}</p>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Totam natus quaerat quis, consectetur tempora sunt aut? Exercitationem ut pariatur voluptatum, corporis placeat nostrum consectetur consequuntur dolorem eum et excepturi repellat?</p>

    <table id="myTable" class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Salary</th>
                <th>Employee ID</th>
            </tr>
        </thead>
        <tbody>
            @foreach($mailData['records'] as $record)
                <tr>
                    <td>{{ $record->id }}</td>
                    <td>{{ $record->name }}</td>
                    <td>{{ $record->salary }}</td>
                    <td>{{ $record->emp_id }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body> 
</html>
