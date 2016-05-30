<?

error_reporting(E_ALL);//показывать все ошибки

require_once __DIR__ . "/autoload.php";

$ctrl = isset($_GET['ctrl']) ? $_GET['ctrl'] : 'News';
$act = isset($_GET['act']) ? $_GET['act'] : 'All';


$controllerClassName = $ctrl . "Controller";
$controller = new $controllerClassName;
$method = 'action' . $act;
try{
    $controller = new $controllerClassName;
    $method = 'action' . $act;
    $controller->$method();
} catch (Exception $e){
    /*$view = new View();
    $view->error = $e->getMessage();
    $view->display('error.php');*/
    
    die('Что-то пошло не так ' . $e->getMessage());
}


