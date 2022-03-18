<?php
//controlador alumno / acción sería index, show...
//controlador es el objeto, entidad, es la clase
//acción es el método
$controllers=array(
    'producto'=>['index','show','register','save', 'delete','showI']
);

if (array_key_exists($controller,$controllers)) {
    # code...
    if (in_array($action,$controllers[$controller])) {
        call($controller,$action);
    }
    else {
        call($controller,'error');
    }
}
else  {
    call($controller,'error');
}

function call($controller,$action){
    require_once('Controllers/'.$controller.'Controller.php');
    switch ($controller) {
        case 'producto':
            # code...
            // echo "<h3>estoy en producto</h3>";
            require_once('Model/Producto.php');
            $controller = new ProductoController();
            break;
        default:
            # code...
            break;
    }
    $controller->{$action}();
}

