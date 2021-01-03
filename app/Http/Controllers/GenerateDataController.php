<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GenerateDataController extends Controller
{
    public static function generarLista($listType){
        $array=self::generateExampleData($listType);
        $colSize= 2;
        $text="";
        for($i=0;$i<count($array)-1;$i++){
            $text=$text."<div class='row'>";
            for($j=0;$j<count($array[$i]);$j++){
                $text=$text."<div class='col-".$colSize."'>";
                $text=$text."<p>".$array[$i][$j]."</p>";
                $text=$text."</div>";
            }
            $text=$text."</div>";
        }
        echo $text;
    }

    static function generateExampleData($listType){
        $ndatos=20;
        switch ($listType){
            case "ciudades":
                $array = array();
                for($i=0; $i<$ndatos; $i++){
                    $array[$i][0]="ciudad".$i;
                    $array[$i][1]="ciudad".$i;
                    $array[$i][2]="ciudad".$i;
                    $array[$i][3]="ciudad".$i;
                }
                break;
            case "compras":
                for($i=0; $i<$ndatos; $i++){
                    $array[$i][0]="compras".$i;
                    $array[$i][1]="compras".$i;
                    $array[$i][2]="compras".$i;
                    $array[$i][3]="compras".$i;
                }
                break;
            case "usuarios":
                for($i=0; $i<$ndatos; $i++){
                    $array[$i][0]="usuarios".$i;
                    $array[$i][1]="usuarios".$i;
                    $array[$i][2]="usuarios".$i;
                    $array[$i][3]="usuarios".$i;
                    $array[$i][4]="usuarios".$i;
                }
                break;
            case "categorias":
                for($i=0; $i<$ndatos; $i++){
                    $array[$i][0]="categorias".$i;
                    $array[$i][1]="categorias".$i;
                    $array[$i][2]="categorias".$i;
                    $array[$i][3]="categorias".$i;
                    $array[$i][4]="categorias".$i;
                    $array[$i][5]="categorias".$i;
                }
                break;
            case "pedidos":
                for($i=0; $i<$ndatos; $i++){
                    $array[i][0]="pedidos".$i;
                    $array[i][1]="pedidos".$i;
                    $array[i][2]="pedidos".$i;
                    $array[i][3]="pedidos".$i;
                }
                break;
            default:

        }
        return $array;
    }



}
