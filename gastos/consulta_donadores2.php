<?php   
  require('../conexion.php');  
  session_start();
?>
   
    <h3 class="text-center">REGISTRO DE DONANTES</h3>

    <div class="table-responsive">
    <table id="example" class="display" style="width:100%">
    <thead>
        <tr>
            <th class="text-center">#</th>
            <th class="text-center">NOMBRE</th>
            <th class="text-center">CORREO</th>
            <th class="text-center">CEDULA</th>
            <th class="text-center">CANTIDAD</th>
            <th class="text-center">FECHA</th>                      
            <th class="text-center">ACIONES</th>
        </tr>
    </thead>
    <tbody>
        <?php 
       
        
            $resultados = mysqli_query($conexion,"select  *from donadores");
        
        while($consul = mysqli_fetch_array($resultados))
        {
             $datos=$consul[0]."||".
                    $consul[1]."||".
                    $consul[2]."||".
                    $consul[3]."||".    
                    $consul[5]."||".                   
                    $consul[5];
        ?>
        <tr>  
            <td class="text-center"><?php echo $consul['id']?></td>     
            <td class="text-center"><?php echo $consul['nombre']?></td>
            <td class="text-center"><?php echo $consul['correo']?> </td>
            <td class="text-center"><?php echo $consul['cedula']?> </td>
            <td class="text-center"><?php echo $consul['cantidad']?></td>
            <td class="text-center"><?php echo $consul['fecha']?></td>
            <td class="text-center"> <a class="editar" data-bs-toggle="modal" data-bs-target="#modificar">  <i class="bi bi-pencil-square" style="font-size: 30px; color: rgb(19, 232, 15);"></i> </a>  <a id="eliminar" value="eliminar" onclick="eliminar(<?php echo $consul['id']?>);"> <i class="bi bi-trash" style="font-size: 30px; color: rgb(242, 34, 11);"></i></a></td>
    
        </tr>
        <?php  } ?>
    </tbody>
    <tfoot>
          <tr>
          <th class="text-center">#</th>
            <th class="text-center">NOMBRE</th>
            <th class="text-center">CORREO</th>
            <th class="text-center">CEDULA</th>
            <th class="text-center">CANTIDAD</th>
            <th class="text-center">FECHA</th>                      
            <th class="text-center">ACIONES</th>                    
          </tr>
    </tfoot>
    </table>
    </div>
     <!-- Javascript -->
<script>
    $(document).ready(function () {
    $('#example').DataTable();
    });
</script>
    <!-- Modal -->
    <div class="modal fade" id="modificar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel" style="margin-left: 150px">MODIFICAR REGISTRO</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
            <div class="modal-body">
                  <div class="container-fluid">   
                    <form class="f6">
                            <input type="hidden" class="form-control f3 text-center" id="id" name="id" readonly> 
                            <div class="form-group row">                                 
                                                                 
                                    <div class="col-sm-auto">
                                        <label><b>NOMBRE</b></label> 
                                        <input type="text" class="form-control f3 text-center" id="nombre" name="nombre"  require>
                                    </div>

                                    <div class="col-sm-auto">
                                        <label ><b>CORREO</b></label> 
                                        <input type="email" class="form-control f3 text-center" id="correo" name="correo"  require>
                                    </div>                                   
                               
                            </div><br>
                            
                            <div class="form-group row">  
                              <div class="col-sm-auto">
                                <label ><b>CEDULA</b></label> 
                                <input type="text" class="form-control f3 text-center" id="cedula" name="cedula">
                              </div>
                             
                              <div class="col">
                                <label><b class="f11"> CANTIDAD</b></label> 
                                <input type="number" class="form-control f3 text-center" id="cantidad" name="cantidad">
                              </div>
                            </div><br>                                                                      
    
                             <div class="form-group row">
                              <div class="offset-lg-3 col-lg-auto">                          
                                <button type="submit" class="btn btn-success "onclick="modificar();">Guardar</button>
                                <button type="button" class="btn btn-primary" data-bs-dismiss="modal" >Cerrar</button>
                              </div> 
                           </div>
                    </form> 
                  </div>
        </div>
      </div>
    </div> 
 