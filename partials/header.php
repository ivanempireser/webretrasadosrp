<?php



function cargarHeader($title){
$links = array('/'=>"Inicio",'/coches.php'=>"Coches", "/propiedades.php"=>"Propiedades");

echo'
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/new.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
    <link href="style.css" rel="stylesheet"></link>
    <title>' . $title . '</title>
</head>
<body>
        <div class="container">
            <div class="row">
                <div class="col">
                    <a class="navbar-brand img-fluid mt-3 mb-3" href="/"><img src="assets/img/logo.svg"></a>
                </div>
                    ';
                    foreach($links as $url=>$nombre){
                        if($_SERVER['REQUEST_URI'] == $url){$class = " active";}else{$class="";}
                        echo '

                        <div class="col my-auto border align-middle" href="'.$url.'">
                            <p class="no-p '.$class.'">'.$nombre.'</p>
                        </div>';
                    }
                    echo'
                    <div class="col">
                        <img src="assets/img/discord.svg" class="img-fluid border">
                    </div>
                </div>
            </div>
        
';
}
?>