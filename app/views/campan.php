<h1 class="text-center my-5 titulo">Ingresar Nueva Campaña</h1>
<div class="container mt-5 p-5">
    <div id="contenido" class="row">
        <div class="col-md-12 agregar-camp">
            <form action="<?php echo BASE_URL; ?>Campan/insertarCampa" method="post" id="nueva-camp" enctype="multipart/form-data">
                <legend class="mb-4">Datos de la Campaña</legend>
                <div class="form-group row mb-3">
                    <label class="col-sm-4 col-lg-4 col-form-label">Nombre:</label>
                    <div class="col-sm-8 col-lg-8">
                        <input type="text" id="nombre" name="nombreCamp" class="form-control" placeholder="Nombre de la Campaña ">
                    </div>
                </div>
                <div class="form-group row mb-3">
                    <label class="col-sm-4 col-lg-4 col-form-label">Descripción:</label>
                    <div class="col-sm-8 col-lg-8">
                        <textarea id="descripcion" name="descripcion" class="form-control"></textarea>

                    </div>
                </div>
                <div class="form-group row mb-3">
                    <label class="col-sm-4 col-lg-4 col-form-label">Fecha:</label>
                    <div class="col-sm-8 col-lg-8">
                        <input type="date" id="fecha" name="fecha" class="form-control">
                    </div>
                </div>
                <div class="form-group row mb-3">
                    <label class="col-sm-4 col-lg-4 col-form-label">Título:</label>
                    <div class="col-sm-8 col-lg-8">
                        <input type="text" id="titulo" name="titulo" class="form-control" placeholder="Título de la Campaña">
                    </div>
                </div>

                <div class="form-group row mb-3">
                    <label class="col-sm-4 col-lg-4 col-form-label">Cuerpo del Correo:</label>
                    <div class="col-sm-8 col-lg-8">
                        <textarea id="cuerpo" name="cuerpo" class="form-control"></textarea>
                    </div>
                </div>

                <div class="form-group row mb-3">
                    <label class="col-sm-4 col-lg-4 col-form-label">Adjunto:</label>
                    <div class="col-sm-8 col-lg-8">
                        <input type="hidden" name="MAX_FILE_SIZE" value="307200">
                        <input type="file" id="adjunto" name="adjunto" class="form-control" placeholder="Adjuntar">
                    </div>
                </div>
                <div class="form-group mb-3">
                    <button type="submit" class="btn btn-success w-100 d-block">Crear Nueva Campaña</button>
                </div>

            </form>
        </div>



    </div>