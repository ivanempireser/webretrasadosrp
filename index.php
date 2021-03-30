<?php
$handle = opendir(dirname(realpath(__FILE__)).'/assets/img/coches/');
?>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>

<body>
    <div class="container text-center">
        RP

        <div class="row">
            <?php while($uri = readdir($handle)){
                    if($uri !== '.' && $uri !== '..'){
                        $innerHandler = opendir(dirname(realpath(__FILE__)).'/assets/img/coches/'.$uri);
                        while($img = readdir($innerHandler)){
                            if($img !== '.' && $img !== '..'){
                                $title = str_replace('.jpg','',$img);
                                $title = str_replace('.webp','',$title);
                                $title = str_replace('.png','',$title);
                                echo '
                                <div class="col-3">
                                <div class="card">
                                    <img class="card-img-top" src="assets/img/coches/'.$uri.'/' . $img . '" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">'. $uri . ' ' .$title .'</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                                            the
                                            card\'s content.</p>
                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                            </div>';
                            }
                        }
                       
                    }
                }
                ?>
            
        </div>

    </div>
</body>

</html>