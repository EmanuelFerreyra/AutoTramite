<?php
require_once 'model/implementClass/C.Conexion.php';
require_once 'model/implementClass/C.Blog.php';
use Conexion\Conexion;
use Blog\Blog;

/*
Conexion a DB: -------------------------
*/

$conexion = new Conexion();
$conn = $conexion->onConexion();


/*
Blog: -------------------------
*/
$blog = new Blog($conn);
$blog->allIdBlog();






?>