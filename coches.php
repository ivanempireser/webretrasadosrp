<?php
require_once('includes/loader.php');
$handle = opendir(dirname(realpath(__FILE__)).'/assets/img/coches/');
$premium = "";
cargarHeader("Concesionario");
?>
<html>
<body style="background-color: #262425;">
    <div class="container text-center">
        <h1>Coches</h1>
            <?php while($uri = readdir($handle)){
                    if($uri !== '.' && $uri !== '..'){
                        echo '<h1>'. $uri .'</h1>
                        <div class="row justify-content-center"> 
                        ';
                        $innerHandler = opendir(dirname(realpath(__FILE__)).'/assets/img/coches/'.$uri);
                        while($img = readdir($innerHandler)){
                            if($img !== '.' && $img !== '..'){
                                $titleOriginal = $img;
                                $title = str_replace('.jpg','',$img);
                                $title = str_replace('.webp','',$title);
                                $title = str_replace('.png','',$title);
                                $pos = strpos($title,"--");
                                $pos ++;
                                $pos ++;
                                $price = substr($title,$pos);
                                $pos--;
                                $pos--;
                                $title = substr($title,0,$pos);
                                if (str_contains($titleOriginal, 'premium')) {
                                    $premium = '<span style="font-size:0.7rem; font-weight:500;" class="badge bg-warning text-dark align-text-top">PREMIUM</span>';
                                    $price = str_replace('premium','',$price);
                                }
                                //echo $price;
                                echo '
                                <div class="col-3 mb-5">
                                    <div class="card">
                                        <div class="divimg" style="background-image:url(assets/img/coches/'.$uri.'/' . $img . ')"></div>
                                        <!--<img class="card-img-top img-fluid" src="assets/img/coches/'.$uri.'/' . $img . '" alt="Card image cap">-->
                                        <div class="card-body">
                                            <p class="card-text"></p>
                                            <p style="font-size:2rem;">'. $price . '€<br>' . $premium . '</p>
                                            <h5 class="card-title">' .$title .'</h5>
                                        </div>
                                    </div>
                                </div>';
                            $premium = "";
                            }
                        }
                        //final del while
                        echo '</div>'; 
                    }
                }
                ?>
        </div>
    </div>
</body>
</html>