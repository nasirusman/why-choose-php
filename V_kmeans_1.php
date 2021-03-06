<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Google Font :: Roboto -->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> 

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('bootstrap/bootstrap.min.css') }}">

    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Cleave.js -->
    <script src="{{ asset('js/cleave.mins.js') }}"></script>

    <title>K-means</title>

    <style>
        .my-01 {
            font-family: 'Roboto', sans-serif;
            text-align: center;
            margin-top: 30px;
        }

        .my-02 {
            max-width: 900px;
            margin: auto;
            text-align: center;
        }
    </style>
  </head>
  <body>
      <div class="my-01">
        <h1>K-means</h1>
      </div>

      <div class="my-02">                 
          @foreach ($hasil as $key1 => $value1)
          <table class="table table-bordered table-sm table-sm"> 
            <tr class="bg-primary text-white">
              <td>Lintang</td>
              <td>Bujur</td>
              <td>Magnitudo</td>
              <td>Kedalaman</td>
            </tr>
            @foreach ($value1 as $key2 => $value2)
            <tr>
              <td>{{ $hasil[$key1][$key2][0] }}</td>
              <td>{{ $hasil[$key1][$key2][1] }}</td>
              <td>{{ $hasil[$key1][$key2][2] }}</td>
              <td>{{ $hasil[$key1][$key2][3] }}</td>
            </tr>
            @endforeach
          </table>
          @endforeach
      </div>

        {{-- @php
            dd($hasil);
        @endphp --}}

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    {{-- <script src="{{ asset('bootstrap/jquery-3.3.1.slim.min.js') }}"></script>
    <script src="{{ asset('bootstrap/popper.min.js') }}"></script>
    <script src="{{ asset('bootstrap/bootstrap.min.js') }}"></script> --}}
  </body>
</html>
