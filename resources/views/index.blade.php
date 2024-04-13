<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <!-- Load jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<!-- Load DataTables -->
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.6/js/jquery.dataTables.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.6/css/jquery.dataTables.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<style>
    .dataTables_wrapper .dataTables_paginate .paginate_button {
        padding: .375rem .75rem;
        margin-left: 2px;
        border-radius: .25rem;
    }

    .dataTables_wrapper .dataTables_paginate .paginate_button.current, 
    .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
        z-index: 3;
        color: #fff;
        background-color: #007bff;
        border-color: #007bff;
    }
</style>
<body>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<script>
    $(document).ready(function() {
        console.log("dt")
        $('#myTable').DataTable();
    });
</script>

@if (session('success'))
    <div class="w-75 alert alert-success">
        {{ session('success') }}
    </div>
@endif

<div class="container">
    <h1>datas</h1>
    <button class="btn btn-primary"><a class="text-light" href="{{ url('/new')}}">Add new</a></button>
    <table id="myTable"     class="table" >
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Salary</th>
                <th>Employee ID</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($records as $record)
                <tr>
                    <td>{{ $record->id }}</td>
                    <td>{{ $record->name }}</td>
                    <td>{{ $record->salary }}</td>
                    <td>{{ $record->emp_id }}</td>
                    <td>
    @if($record->img!=='')
        <img src="{{ asset('image2/' . $record->img) }}" alt="" height="300px" width="400px">
    @else 
        <img src="{{ asset('image2/1712822403.jpg') }}" alt="" height="300px" width="400px">
    @endif
</td>

                    <td>
                        <a href="{{ url('/edit/'.$record->id)}}" class="btn btn-primary">Edit</a>
                        <!-- Assuming you have a form for deletion -->
                        <form action="{{ url('delete/'.$record->id) }}" method="POST" style="display: inline;">
                        
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div class="pagination">{{$records->links() }}</div>


</body> 
</html>
