<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Carga de Permisos</title>
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
    <div class="form-floating rounded-3 border border-dark-subtle px-5" style="height: 225px; background: #383d3e">
        <form class="mt-3">
            <div class="row g-3">
                <div class="input-group mb-3 col">
                    <label class="input-group-text" for="inputGroupFile01">Colaborador</label>
                    <select name="empleado" type="file" class="form-control form-select" id="inputGroupFile01" required>
                        <option value=""></option>
                        <option value="co1">Personal 1</option>
                        <option value="co2">Personal 2</option>
                        <option value="co3">Personal 3</option>
                    </select>
                </div>
                <div class="input-group mb-3 col">
                    <label class="input-group-text" for="inputGroupFile01">Motivo</label>
                    <select name="motivo" class="form-control form-select" id="inputGroupFile01" required>
                        <option value=""></option>
                        <option value="falta">Falta</option>
                        <option value="permiso">Permiso</option>
                    </select>
                </div>
            </div>

            <div class="row g-3">
                <div class="input-group mb-3 col">
                    <label class="input-group-text" for="inputGroupFile01">Autoriza</label>
                    <select name="autoriza"type="file" class="form-control form-select" id="inputGroupFile01" required>
                        <option value=""></option>
                        <option value="mp1">Mp1</option>
                        <option value="mp2">Mp2</option>
                    </select>
                </div>
                <div class="input-group mb-3 col">
                    <div class="input-group">
                        <label class="input-group-text" for="inputGroupFile01">Justificantes</label>
                        <input type="file" class="form-control" name="archivos" id="inputGroupFile04"
                               aria-describedby="inputGroupFileAddon04"
                               aria-label="Upload" accept="image/png, image/jpeg, .pdf"
                               multiple="true" required
                        >
                    </div>
                </div>
            </div>
            <div class="row g-3 mx-auto ">
                <div class="input-group mb-3">
                    <label class="input-group-text" for="inputGroupFile01">Periodo</label>
                    <input type="date" name="periodo" id="periodo" required>
                </div>
            </div>
            <button type="submit"
                    class="position-absolute bottom-0 start-50 translate-middle-x btn btn-secondary mb-3">Subir
            </button>
        </form>
    </div>
</div>
</body>
</html>
