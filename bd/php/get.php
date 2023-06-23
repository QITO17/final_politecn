<?php
           $host = "sql209.infinityfree.com";
           $user = "if0_34488165";
           $pass = "RldVWUF4issTC";
           $db = "if0_34488165_productos_offcorss";
            $conn=mysqli_connect($host,$user,$pass,$db);
            if (!$conn) {
                die("Error al conectar".mysqli_connect_error());
            }else{
            }

            
            $conextion = mysqli_connect($host, $user, $pass, $db);

            $query = mysqli_query($conextion, "SELECT * FROM producto");
             

            while($row = mysqli_fetch_array($query)){
                ?>
                 <div class="col-md-4">
                    <div class="card" style="width:18rem;">
                        <img class="card-img-top" src="../../../trabajo final/bd/<?php echo $row['Imagen']; ?>" alt="">
                    </div>

                    
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row['Nombre']; ?></h5>
                        <p class="card-text"><?php echo $row['Descripcion']; ?></p>
                        <p>$<?php echo $row['Precio']; ?></p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            <?php  

            }
?>