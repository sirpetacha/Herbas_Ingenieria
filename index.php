<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Herbas Ingenieria</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="css/custom.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>Listado de  <b>Proveedores</b></h2></div>
                    <div class="col-sm-4">
                        <a href="create.php" class="btn btn-info add-new"><i class="fa fa-plus"></i> Agregar Proveedor</a>
                    </div>
                </div>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nombre Fantasia</th>
                        <th>Razon Social</th>
                        <th>Web</th>
			<th>Rut</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
				<?php 
				include ('database.php');
				$clientes = new Database();
				$listado=$clientes->read();
				?>
                <tbody>
				<?php 
				     while ($row=mysqli_fetch_object($listado)){
                                            
						$cod_provedor=$row->COD_PROVEDOR;
						$nombre_fantasia=$row->NOMBRE_FANTASIA;
                                                $razon_social=$row->RAZON_SOCIAL;
						$web=$row->WEB;
						$rut=$row->RUT;
						
						
						
				?>
					<tr>
                       	<tr>
                         
                        <td><?php echo $nombre_fantasia;?></td>
                        <td><?php echo $razon_social;?></td>
                        <td><?php echo $web;?></td>
                        <td><?php echo $rut;?></td>
                        <td>
			    <a href="update.php?id=<?php echo $cod_provedor;?>" class="edit" title="Editar" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                            <a href="delete.php?id=<?php echo $cod_provedor;?>" class="delete" title="Eliminar" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                        </td>
                    </tr>	
				<?php
					}
				?>
                    
                    
                          
                </tbody>
            </table>
        </div>
    </div>     
</body>
</html>       