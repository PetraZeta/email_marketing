 <h1 class="text-center my-5 titulo">Mandar Campaña a Destinatario</h1>
 <div class="container mt-5 ">
     <div id="contenido" class="row">
         <div class="col-md-10 m-auto agregar-destinatario card">
             <form action="<?php echo BASE_URL; ?>Campan/enviarCamp" method="post" id="nuevo-destino">
                 <legend class="mb-4">Enviar Campaña</legend>

                 <div class="form-group row mb-3">
                     <label class="col-sm-4 col-lg-4 col-form-label">Selecciona Destinatario:</label>
                     <div class="col-sm-8 col-lg-8">
                         <select name="destino" id="destino" class="form-control">
                             <option selected>Elige Destinatario</option>
                             <?php $cad = "";
                                foreach ($dest as $des) {
                                    $cad .= "<option value='$des[id]'>$des[nombre]</option>";
                                }
                                echo $cad;
                                ?>


                         </select>

                     </div>
                 </div>
                 <div class="form-group row mb-3">
                     <label class="col-sm-4 col-lg-4 col-form-label">Selecciona Campaña:</label>
                     <div class="col-sm-8 col-lg-8">
                         <select name="campan" id="sector" class="form-control">
                             <option selected>Elige Campaña</option>

                             <?php
                                $cadena = "";
                                foreach ($camp as $cam) {
                                    $cadena .= "<option  value='$cam[id_camp]'>$cam[descripcion]</option>";
                                }
                                echo $cadena;
                                ?>


                         </select>

                     </div>
                 </div>
                 <div class="form-group mb-3">
                     <button type="submit" class="btn btn-success w-100 d-block">Enviar Campaña</button>
                 </div>
             </form>
         </div>
     </div>