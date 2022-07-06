<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Test 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
    <div class="col-lg-8">
        <form method="post" action="/dashboard/posts">
            @csrf
         <div class="mb-3">
             <label for="formGroupExampleInput" class="form-label">Masukkan Angka Berapa Saja lalu Submit</label>
             <input type="text" class="form-control" id="angka" name="angka" placeholder="Input Angka">
           </div>
           
           <div class="mb-3">
            
             <select class="form-select" name="tipe" aria-label="Default select example">
                 <option selected>Pilih Tipe</option>
                 <option value="1">Tipe 1</option>
                 <option value="2">Tipe 2</option>
                 <option value="3">Tipe 3</option>
             </select>
           </div>

           <button type="submit" class="btn btn-primary">post</button>
        </form>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>

