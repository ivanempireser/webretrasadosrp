<?php



function cargarHeader($title){
$links = array('/'=>"Inicio",'/coches.php'=>"Coches", "/propiedades.php"=>"Propiedades");

echo'
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/new.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <link href="style.css" rel="stylesheet"></link>
    <title>' . $title . '</title>
</head>
<body>
    <div class="container-fluid menu">
        <div class="container">
            <div class="row">
                <div class="col-1">
                    <a class="navbar-brand mt-3 mb-3" href="/"><img class="img-fluid" src="assets/img/logo.png"></a>
                </div>
                    ';
                    foreach($links as $url=>$nombre){
                        if($_SERVER['REQUEST_URI'] == $url){$class = " active";}else{$class="";}
                        echo '

                        <div class="col my-auto text-center" href="'.$url.'">
                            <p class="no-p fill-white'.$class.'">'.$nombre.'</p>
                        </div>';
                    }
                    echo'
                    <div class="col-2 my-auto">
                        <img src="assets/img/discord.svg" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
        
';
}
?>