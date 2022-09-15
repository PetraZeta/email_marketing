   <div class="container-fluid">
       <div class="container mt-3 ">
           <h2 class="text-center my-5 titulo">Todas las Campañas</h2>
           
           <!--  TABLA -->
           <table class="table table-bordered">
               <thead>
                   <tr>
                       <th>Nombre</th>
                       <th>Descripción</th>
                       <th>Fecha</th>
                       <th>Título</th>
                       <th>Cuerpo</th>
                       <th>Documento</th>
                       <th>Ejecutada</th>
                       <th>Acciones</th>
                   </tr>
               </thead>
               <tbody>
                   <?php
                    $cadena = "";
                    foreach ($campa as $cam) {
                        $cadena .= "<tr>
                        <td>$cam[nombre]</td>
                        <td>$cam[descripcion]</td>
                        <td>$cam[fecha]</td>
                        <td>$cam[titulo]</td>
                        <td>$cam[cuerpo]</td>
                        <td>$cam[adjunto]</td>
                        <td>$cam[ejecutada]</td>
                        <td>
                            <a href='' class='btn btn-secondary'><i class='fas fa-marker'></i></a>
                            <a href='' class='btn btn-danger'><i class='far fa-trash-alt'></i></a>
                        </td>
                    </tr>";
                    }
                    echo $cadena;
                    ?>
               </tbody>
           </table>
       </div>
   </div>