<!DOCTYPE html>
<html>
<head>
    <title>Test 1 - Fajar Alwafi</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
  <div class="container mt-4">
  <div class="card">
    <div class="card-header text-center font-weight-bold">
      Test 1
    </div>
    <div class="card-body">
      <form name="add-tipe-post-form" id="add-tipe-post-form" method="post" action="{{url('store-form')}}">
       @csrf
        <div class="form-group mt-3">
          <label for="exampleInputEmail1">Tipe</label>
          <select class="form-select" name="tipe" aria-label="Default select example">
            <option selected>Pilih Tipe</option>
            <option value="1">Tipe 1</option>
            <option value="2">Tipe 2</option>
            <option value="3">Tipe 3</option>
        </select>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Masukan Dalam Bentuk Angka lalu Submit</label>
          <input type="text" id="angka" name="angka" class="form-control" required="">
        </div>
        <button type="submit" class="btn btn-primary mt-3">Submit</button>
      </form>
    </div>
  </div>
</div>  
</body>
</html>