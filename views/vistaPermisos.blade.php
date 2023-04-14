<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Permisos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
            integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"
            integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ"
            crossorigin="anonymous"></script>
</head>
<body style="background: #CDCDCD">
<div class="container-fluid " style="background: #383d3e">
    @include('parcial.prinNav')

</div>
<div class="container-fluid mt-1" style="background: #383d3e">
    @include('parcial.nav')
</div>

<div class="container-md mt-3">
    <div class="form-floating rounded-3 border border-dark-subtle px-5" style="height: 600px; background: #383d3e">
        <table class="table table-responsive mt-3 text-light">
            <thead>
            <tr class="fs-5">
                <th>#</th>
                <th>Colaborador</th>
                <th>Motivo Ausencia</th>
                <th>Autorizacion</th>
                <th>Periodo</th>
                <th>Descargar</th>
            </tr>

            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td>Alonso</td>
                <td>Falta</td>
                <td>Pendiente</td>
                <td>24/05/23</td>
                <th>@include('parcial.descargaModal')</th>

            </tr>
            <tr>
                <td>2</td>
                <td>Maria</td>
                <td>Permiso</td>
                <td>Pendiente</td>
                <td>04/06/23</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Javier</td>
                <td>Falta</td>
                <td>Pendiente</td>
                <td>25/12/23</td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
</body>
<footer >
    <div class="container-fluid mt-1" style="background: #383d3e">
        @include('parcial.nav')
    </div>
</footer>
</html>
