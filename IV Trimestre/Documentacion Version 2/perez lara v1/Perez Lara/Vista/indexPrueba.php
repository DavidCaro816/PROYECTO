
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Busqueda Real Estilo Datatable</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body style="background-color: #f2f2f2;">
    <div class="container mt-3">
        <div class="row text-center text-white bg-info">
            <div class="col-md-12">
                <h2>Busqueda Real Estilo Datatable</h2>
            </div>
        </div>
    </div>
    <div class="container mt-5 bg-white shadow border">
        <div class="row mt-3">
            <div class="col-md-1">
                <select class="custom-select my-3" id="inlineFormCustomSelectPref">
                  <option value="1">10</option>
                  <option value="2">20</option>
                  <option value="3">30</option>
                  <option value="4">Todos</option>
                </select>
            </div>
            <div class="col-md-3 my-3">
                <span class="btn btn-danger">PDF</span>
                <span class="btn btn-info">XSV</span>
                <span class="btn btn-success">DOCS</span>
            </div>
            <div class="col-md-8 my-3">
                <form class="form-inline justify-content-end">
                    <label class="mr-3" for="">Buscar:</label><input class="form-control mr-sm-2" type="search" id="busqueda" name="busqueda" aria-label="Search">
                  </form>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div id="datos">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <nav aria-label="...">
                    <ul class="pagination justify-content-end">
                      <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Anterior</a>
                      </li>
                      <li class="page-item"><a class="page-link" href="#">1</a></li>
                      <li class="page-item" aria-current="page">
                        <a class="page-link" href="#">2</a>
                      </li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item">
                        <a class="page-link" href="#">Siguiente</a>
                      </li>
                    </ul>
                  </nav>
            </div>
        </div>
    </div>
    <script src="../js/buscar.js"></script>
</body>
</html>

