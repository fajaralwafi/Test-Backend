<!DOCTYPE html>
<html>
<head>
    <title>Test 2 - Fajar Alwafi</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
  <div class="container mt-4">
  <div class="card">
    <div class="card-header text-center font-weight-bold">
      Test 2
    </div>
    <div class="card-body">
      <form name="add-angka-post-form" id="add-angka-post-form" method="post" action="{{url('store-form')}}">
       @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Input Angka lalu Submit</label>
          <input type="text" id="angka" name="angka" class="form-control" required="">
        </div>
        
        <button type="submit" class="btn btn-primary mt-4">Submit</button>
      </form>
    </div>
  </div>
</div>  
</body>
</html>