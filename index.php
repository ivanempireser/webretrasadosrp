<?php
$handle = opendir(dirname(realpath(__FILE__)).'/assets/img/coches/');
$premium = "";
?>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>

<body>
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
                                    $premium = '<span style="font-size:0.8rem;" class="badge bg-warning text-dark">PREMIUM</span>';
                                    $price = str_replace('premium','',$price);
                                }
                                //echo $price;
                                


                                echo '
                                <div class="col-3">
                                <div class="card">
                                    <img class="card-img-top img-fluid" src="assets/img/coches/'.$uri.'/' . $img . '" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">'. $uri . ' ' .$title .'</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                                            the
                                            card\'s content.</p>
                                        <p style="font-size:2rem;">'. $price . $premium . '</p>
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