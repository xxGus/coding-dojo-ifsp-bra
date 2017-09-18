<?php

namespace Matematica;

class AnaliseURL
{
    public function decompoe($url)
    {
       $resultado = explode("://", $url);
       $protocolo = $resultado[0];
       $resultado = explode(".",$resultado[1]);
       $host = $resultado[1];
       $resultado = explode("/",$resultado[2]);
       $dominio = $resultado[2];
       $resultado = explode("/",$resultado[3]);
       $path = $resultado[3];
       $resultado = explode("/", $resultado[4]);
       $parametro = $resultado[4];

        return ["protocolo"=> $protocolo, 
                                "host"=> $protocolo, 
                                "dominio" => $dominio, 
                                "path" => $path, 
                                "parametro" =>$parametro]
        ;
//        return explode("/", $url);
    }
}