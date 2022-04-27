<?php
define('BASE_URL', 'http://localhost/web_news/');  
define('PLUGINS', BASE_URL . 'plugins/');
define('DIST', BASE_URL . 'dist/');

//ruta admin
define('ADMIN', BASE_URL . 'views/admin/');

function getRoute($ruta = null){
        $ruta = explode('/', $ruta);
        $directorio = $ruta[0];
        $archivo = $ruta[1];
        $params = $ruta[2];
    if ($params != '') {
        $url = BASE_URL . 'views/' . $directorio . '/' . $archivo . '.php?' . $directorio . '=' . $params;
    }elseif ($archivo != '') {
        $url = BASE_URL . 'views/' . $directorio . '/' . $archivo . '.php';
    }elseif ($directorio != '') {
        $url = BASE_URL . 'views/' . $directorio . '/';
    }else {
        $url = BASE_URL;
    }

    $url = filter_var($url, FILTER_SANITIZE_URL);
    return $url;
}