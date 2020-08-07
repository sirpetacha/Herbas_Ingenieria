<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Herbas Ingenieria CREAR</title>
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
                    <div class="col-sm-8"><h2>Agregar <b>proveedores</b></h2></div>
                    <div class="col-sm-4">
                        <a href="index.php" class="btn btn-info add-new"><i class="fa fa-arrow-left"></i> Regresar</a>
                    </div>
                </div>
            </div>
            <?php
				include ("database.php");
				$clientes= new Database();
				if(isset($_POST) && !empty($_POST)){
					$nombre_fantasia = $clientes->sanitize($_POST['nombre_fantasia']);
					$razon_social = $clientes->sanitize($_POST['razon_social']);
					$web = $clientes->sanitize($_POST['web']);
					$rut = $clientes->sanitize($_POST['rut']);
					
					
					$res = $clientes->create($nombre_fantasia, $razon_social, $web, $rut);
					if($res){
						$message= "Datos insertados con éxito";
						$class="alert alert-success";
					}else{
						$message="No se pudieron insertar los datos";
						$class="alert alert-danger";
					}
					
					?>
				<div class="<?php echo $class?>">
				  <?php echo $message;?>
				</div>	
					<?php
				}
	hfghfghfghfgh
			?>
			<div class="row">
				<form method="post">
				<div class="col-md-6">
					<label>Nombre de Fantasia:</label>
					<input type="text" name="nombre_fantasia" id="nombre_fantasia" class='form-control' maxlength="100" required >
				</div>
				<div class="col-md-6">
					<label>Razon Social:</label>
					<input type="text" name="razon_social" id="razon_social" class='form-control' maxlength="100" required>
				</div>
				<div class="col-md-12">
					<label>Sitio Web:</label>
					<textarea  name="web" id="web" class='form-control' maxlength="255" required></textarea>
				</div>
				<div class="col-md-6">
					<label>Rut: (ejemplo 77037463-4)</label>
					<input type="text" name="rut" id="rut" class='form-control' maxlength="15" required >
				</div>
					<div class="col-md-12 pull-right">
				<hr>
					<button type="submit" class="btn btn-success">Guardar datos</button>
				</div>
				</form>
			</div>
        </div>
    </div>     
</body>
</html>                            
