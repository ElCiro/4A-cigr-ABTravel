<?php 
class ControladorBlog{

    static public function ctrMostrarBlog(){
        $tabla="blog";

        $respuesta = ModeloBlog::mdlMostrarBlog($tabla);

        return $respuesta;
    }
}