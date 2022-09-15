<h1 class="text-center my-5 titulo">Lista de destinatarios</h1>
<div class="container mt-5 ">
    <div id="contenido" class="row">
        <div class="col-md-10 m-auto lista-destinatario card">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Tipo</th>
                        <th>Sertor</th>
                        <th>Email</th>
                        <th>Localidad</th>
                        <th>CP</th>
                        <th>Ciudad</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $cadena = "";
                    foreach ($destinos as $des) {
                        $cadena .= "<tr>
                        <td>$des[nombre]</td>
                        <td>$des[tipo]</td>
                        <td>$des[sector]</td>
                        <td>$des[email]</td>
                        <td>$des[localidad]</td>
                        <td>$des[cp]</td>
                        <td>$des[provincia]</td>
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
</div>