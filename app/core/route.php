<?php
class Route
{
    static function init()
    {
        $controller_name = 'Main';
        $action_name = 'index';
        $routes = explode('/', $_SERVER['REQUEST_URI']);

        if(!empty($routes[1]))
          $controller_name = $routes[1];

        if(!empty($routes[2]))
          $action_name = $routes[2];

        $model_class = $controller_name.'Model';
        $model_name = $controller_name.'_model';

        $controller_class = $controller_name.'Controller';
        $controller_name .='_controller';

        $action_name = 'action_'.$action_name;

        $model_path = 'app/models/'.strtolower($model_name).'.php';
        if(file_exists($model_path))
          include $model_path;

        $controller_path = 'app/controllers/'.strtolower($controller_name).'.php';
        if(file_exists($controller_path))
          include $controller_path;
        else
          Route::page404();

        $controller = new $controller_class;
        $action = $action_name;

        if(method_exists($controller, $action))
          $controller->$action();
        else
          Route::page404();

    }
    static function page404()
    {
      $host = 'http://'.$_SERVER['HTTP_HOST'].'/';
      header('HTTP/1.1 404 Not Found');
      header('Location:'.$host.'page404');
    }
}
