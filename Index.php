<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sistema de Consulta del Archivo Historico</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <link rel="stylesheet" href="src/estilos.css">
    </head>

    <body>
        <nav class="navbar navbar-expand-lg" style="background-color: #29284a;">
            <div class="container-fluid">
              <a class="navbar-brand" href="https://www.ags.gob.mx/index.aspx#sec_municipio"><img src="src/assets/logo municipio 3.png" alt="Logo" width="40" height="50" class="d-inline-block align-text-top"></a>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active link-light" aria-current="page" href="#" >Inicio</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active link-light" href="#">Transparencia</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active link-light" aria-current="page" href="#">Mejora Regulatoria</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active link-light" href="#">Sala de Prensa</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active link-light" aria-current="page" href="#">Ver más</a>
                  </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Buscar en el portal" aria-label="Search">
                </form>
              </div>
            </div>
          </nav>
        <div class="catalog">
            <div class="header">
                <h2>Catalogo Histórico</h2>
                <div class="breadcrumb-container">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="#"><i class="bi bi-house-door"></i></a></li>
                          <li class="breadcrumb-item"><a href="https://www.ags.gob.mx/index.aspx#sec_municipio">Tu Municipio</a></li>
                          <li class="breadcrumb-item"><a href="https://www.ags.gob.mx/cont.aspx?p=1182">Historia</a></li>
                          <li class="breadcrumb-item active" aria-current="page" style="color: #ed049b;">Catálogo Histórico</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="table-responsive">
                <div class="title">
                    <h1>Fondo Histórico</h1>
                    <div class="topnav">
                        <h1>Registros del </h1>
                        <div class="topnav-bar">
                            <button type="button" class="btn btn-outline-secondary btn-lg" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: 1.5rem; --bs-btn-font-size: .75rem;">
                                <i class="bi bi-chevron-double-left"></i>
                            </button>
                            <button type="button" class="btn btn-outline-secondary btn-lg" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: 1.5rem; --bs-btn-font-size: .75rem;">
                                <i class="bi bi-chevron-left"></i>
                            </button>
                            <button type="button" class="btn btn-outline-secondary btn-lg" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: 1.5rem; --bs-btn-font-size: .75rem;">
                                <i class="bi bi-chevron-right"></i>
                            </button>
                            <button type="button" class="btn btn-outline-secondary btn-lg" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: 1.5rem; --bs-btn-font-size: .75rem;">
                                <i class="bi bi-chevron-double-right"></i>
                            </button>
                        </div>    
                        <table class="table table-striped table-hover table-bordered table-responsive">
                          <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Caja</th>
                            <th scope="col">Expediente</th>
                            <th scope="col">Fojas</th>
                            <th scope="col">Año</th>
                            <th scope="col">Tema</th>
                            <th scope="col">Asunto</th>
                          </tr>
                    
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </body>
    
</html>