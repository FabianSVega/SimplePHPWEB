
<?php  include("cabecer.php"); ?>

<?php include("conexion.php");   ?>

<?php 

if($_POST){

    print_r($_POST);
    $namep  = $_POST['name']; 
    
    $descp  = $_POST['description'];
    $sql="INSERT INTO `proyectos` (`id`, `nombre`, `imagen`, `descripcion`) VALUES (NULL,'.$namep.', 'img.jpg', '.$descp.');";
    $objdatab =new conectdb();
    $objdatab->run($sql);
}

if($_GET){

    $objdatab =new conectdb();
    $sql="DELETE FROM proyectos WHERE `proyectos`.`id` =". $_GET["borrar"];
    $objdatab->run($sql);

    
}
//consult and public

$objdatab = new conectdb();
$result = $objdatab->query("SELECT * FROM `proyectos`");
?>


<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="row align-items-md-stretch">
                    <div class="col-md-6">
                        <div
                            class="h-100 p-5 text-white bg-primary border rounded-3">
                            <h2>this a gallery</h2>
                            <p>Here you will find :.</p>
                            <button class="btn btn-outline-primary" type="button">Example button</button>
                        </div>
                    </div>
                    
                </div>

            <div class="card">
                <div class="card-header">
                    Header
                </div>
                <div class="card-body">
                    <form action="galeria.php" method="post" enctype="multipart/form-data">
                        nameproyect: <input  class="form-control" type="text" name="name" id="">
                        <br>
                        imgproyect: <input class="form-control" type="file" name="image" id="">
                        <br>
                        description:<textarea class="form-control" name="description" id="" rows="3"></textarea>
                    
                        <input class="btn btn-success " type="submit" value="Enviar">

                    </form>
                </div>
        
            </div>

        </div>
        <div class="col-md-6">

        
            <div class="table">
                    <table class="table table-primary">
                        <thead>
                            <tr>
                                <th >ID</th>
                                <th >Nombre</th>
                                <th >Img</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($result as $proyect){ ?>
                            <tr class="">
                                <td ><?php echo $proyect["id"];  ?></td>
                                <td><?php echo $proyect["nombre"];  ?></td>
                                <td><?php echo $proyect["imagen"];  ?></td>
                                <td><a name="" id="" class="btn btn-danger" href="?borrar=<?php echo $proyect["id"];?>">Eliminar</a></td>



                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
        </div>
        <div class="col-md-6"></div>
        <div class="col-md-6"></div>
        <div class="col-md-6"></div>
        <div class="col-md-6"></div>
    </div>

                    
        
</div>
<?php include("pie.php");   ?>   




