<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>@yield('title')</title>
  </head>
  
  <div class="p-3 mb-2 bg-warning text-dark">
      <h1 align="center">ToeTje</h1>
        <h5 align="center">Jamu Seger</h5> 
  <body>
  @foreach($jamu as $jamu)
   <table class="table table-striped">
  <div class="card" style="width: 18rem;">
  <tr>
      <td><img class="card-img-top" src=" {{ asset('image/' . $jamu->gambar) }}" width="200" height="200" alt="Card image cap"> </td>
  <td> <div class="card-body">
    <h5 class="card-title">{{ $jamu['nama'] }} </h5> </td>
    <td> <p class="card-text"> {{ $jamu['komposisi'] }} </p> </td>
    <td> <p class="card-text"> {{ $jamu['khasiat'] }} </p> </td>
    <td><a href="#" class="btn btn-primary">Pesan</a> </td>
  </div>
</div>
  

</span>
</div>
</table>
@endforeach


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>