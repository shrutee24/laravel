<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="custom.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <h1>hello</h1>
    <form method="POST" id="createForm" action="{{ url('/create') }}" enctype='multipart/form-data'>
    @csrf <!-- CSRF protection -->

    <!-- ID field (hidden since it's auto-incremented) -->
  

    <!-- Name field -->
    <div>
        <label for="name">Name:</label>
        <input type="text" name="name" id="name">
    </div>

    <!-- Salary field -->
    <div>
        <label for="salary">Salary:</label>
        <input type="number" name="salary" id="salary">
    </div>

    <!-- Employee ID field -->
    <div>
        <label for="emp_id">Employee ID:</label>
        <input type="number" name="emp_id" id="emp_id">
    </div>

    <div>
        <label for="img">Image</label>
        <input type="file" name="img" id="image">
    </div>

    <!-- Submit button -->
    <button type="submit">Submit</button>
</form>

</body>
</html>