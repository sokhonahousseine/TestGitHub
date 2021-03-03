<?php
namespace libs\system;
class bootstrap
{
    public function __construct() 
    {
        if ($_GET["url"])
        {
          $url=explode("/",$_GET["url"]);
          $controller_file="src/controller/".$url[0]."Controller.php";
        }else {
            echo "MVC";
        }
            
    }
}


?>