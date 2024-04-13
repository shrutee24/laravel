<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="row">
        @if (session('success'))
    <div class="alert alert-success col-md-8">
        {{ session('success') }}
    </div>
@endif
        </div>

    </div>



    <h1>hello</h1>
    <form method="POST" enctype="multipart/form-data" action="{{ url('/update/'.$data->id) }}">

    @csrf <!-- CSRF protection -->

    <!-- ID field (hidden since it's auto-incremented) -->
  

    <!-- Name field -->
    <div>
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" value='{{$data->name}}'>
    </div>

    <!-- Salary field -->
    <div>
        <label for="salary">Salary:</label>
        <input type="number" name="salary" id="salary" value='{{$data->salary}}'>
    </div>

    <!-- Employee ID field -->
    <div>
        <label for="emp_id">Employee ID:</label>
        <input type="number" name="emp_id" id="emp_id" value='{{$data->emp_id}}'>
    </div>
    <div>
        <label for="img">Image</label>
        <input type="file" height="240px" width="240px"  name="img" id="image" value="{{ $data->img }}">
      <img src={{ asset('image2/' . $data->img) }}  height="240px" width="240px"   alt="" >
    </div>
    <!-- Submit button -->
    <button type="submit">Submit</button>
</form>

</body>
</html>