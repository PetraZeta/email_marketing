 <h1 class="text-center my-5 titulo">Ingresar nuevo destinatario</h1>
 <div class="container mt-5 ">
     <div id="contenido" class="row">
         <div class="col-md-10 m-auto agregar-destinatario card">
             <form action="<?php echo BASE_URL; ?>Destino/insertarDestino" method="post" id="nuevo-destino">
                 <legend class="mb-4">Datos del Destinatario</legend>
                 <div class="form-group row mb-3">
                     <label class="col-sm-4 col-lg-4 col-form-label ">Nombre:</label>
                     <div class="col-sm-8 col-lg-8">
                         <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre/Razón Social ">
                     </div>
                 </div>
                 <div class="form-group row mb-3">
                     <label class="col-sm-4 col-lg-4 col-form-label ">Tipo:</label>
                     <div class="col-sm-8 col-lg-8">
                         <input type="text" id="tipo" name="tipo" class="form-control" placeholder="Tipo de empresa/actividad ">
                     </div>
                 </div>
                 <div class="form-group row mb-3">
                     <label class="col-sm-4 col-lg-4 col-form-label">Sector:</label>
                     <div class="col-sm-8 col-lg-8">
                         <select name="sector" id="sector" class="form-control">
                             <option selected>Elige...</option>
                             <option value="E">Empresa Privada</option>
                             <option value="A">Administración Pública</option>
                             <option value="P">Persona Física</option>

                         </select>

                     </div>
                 </div>
                 <div class="form-group row mb-3">
                     <label class="col-sm-4 col-lg-4 col-form-label">Email:</label>
                     <div class="col-sm-8 col-lg-8">
                         <input type="email" id="email" name="email" class="form-control" placeholder="Correo Electrónico">
                     </div>
                 </div>
                 <div class="form-group row mb-3">
                     <label class="col-sm-4 col-lg-4 col-form-label">Localidad:</label>
                     <div class="col-sm-8 col-lg-8">
                         <input type="text" id="localidad" name="localidad" class="form-control" placeholder="Localidad">
                     </div>
                 </div>

                 <div class="form-group row mb-3">
                     <label class="col-sm-4 col-lg-4 col-form-label">C.P.:</label>
                     <div class="col-sm-8 col-lg-8">
                         <input type="text" id="cp" name="cp" class="form-control" placeholder="Código Postal">
                     </div>
                 </div>

                 <div class="form-group row mb-3">
                     <label class="col-sm-4 col-lg-4 col-form-label">Provincia:</label>
                     <div class="col-sm-8 col-lg-8">
                         <input type="text" id="provincia" name="provincia" class="form-control" placeholder="Provincia">
                     
                     </div>
                 </div>
                 <div class="form-group mb-3">
                     <button type="submit" class="btn btn-success w-100 d-block">Crear Nuevo Destinatario</button>
                 </div>
             </form>
         </div>
     </div>