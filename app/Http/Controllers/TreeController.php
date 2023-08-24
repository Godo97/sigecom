<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class TreeController extends Controller
{
    public static function consulta()
    {
        $consulta = DB::table('compenvl3s')
            ->join('compenvl1s', 'compenvl3s.compenvl1_id', '=', 'compenvl1s.id')
            ->join('compenvl2s', 'compenvl3s.compenvl2_id', '=', 'compenvl2s.id')
            ->select(
                'compenvl1s.id as compenvl1_id',
                'compenvl1s.codigo as compenvl1_codigo',
                'compenvl1s.compenvl1 as compenvl1_compenvl1',
                'compenvl2s.id as compenvl2_id',
                'compenvl2s.codigo as compenvl2_codigo',
                'compenvl2s.compenvl2 as compenvl2_compenvl2',
                'compenvl3s.id as compenvl3_id',
                'compenvl3s.codigo as compenvl3_codigo',
                'compenvl3s.compenvl3 as compenvl3_compenvl3'
            )
            ->get();

        return $consulta;
    }

    public static function tree()
    {
        $rows = TreeController::consulta();
        $last_compenvl1_id = null;
        $last_compenvl2_id = null;

        foreach ($rows as $row) {
            $compenvl1_id = $row->compenvl1_id;
            $compenvl2_id = $row->compenvl2_id;

            if ($compenvl1_id !== $last_compenvl1_id) {
                $folders_arr_compenvl1[] = array(
                    $row->compenvl1_id,
                    $row->compenvl1_codigo,
                    $row->compenvl1_compenvl1
                );
                $last_compenvl1_id = $compenvl1_id;
            }

            if ($compenvl2_id !== $last_compenvl2_id) {
                $folders_arr_compenvl2[] = array(
                    $row->compenvl2_id,
                    $row->compenvl1_id,
                    $row->compenvl2_codigo,
                    $row->compenvl2_compenvl2
                );
                $last_compenvl2_id = $compenvl2_id;
            }

            $folders_arr_compenvl3[] = array(
                $row->compenvl3_id,
                $row->compenvl2_id,
                $row->compenvl3_codigo,
                $row->compenvl3_compenvl3
            );
        }

        $combined_array = array();

        foreach ($folders_arr_compenvl1 as $compenvl1) {
            $compenvl1_id = $compenvl1[0];
            $compenvl1_codigo = $compenvl1[1];
            $compenvl1_nombre = $compenvl1[2];

            $hijos_del_padre = array();

            foreach ($folders_arr_compenvl2 as $compenvl2) {
                if ($compenvl2[1] === $compenvl1_id) {
                    $compenvl2_id = $compenvl2[0];
                    $hijo_id_padre = [1];
                    $compenvl2_codigo = $compenvl2[2];
                    $compenvl2_nombre = $compenvl2[3];

                    $nietos_del_hijo = array();

                    foreach ($folders_arr_compenvl3 as $compenvl3) {
                        if ($compenvl3[1] === $compenvl2_id) {
                            $compenvl3_id = $compenvl3[0];
                            $nietos_id_hijo = [1];
                            $compenvl3_codigo = $compenvl3[2];
                            $compenvl3_nombre = $compenvl3[3];

                            $nietos_del_hijo[] = array(
                                "checked" => false,
                                "id" => $compenvl3_id,
                                "cod" => $compenvl3_codigo,
                                "text" => $compenvl3_nombre,
                                "parent" => $compenvl2_id,
                                "nivel" => 2,
                                "flagUrl" => TreeController::getIconClass(2),
                                "children" => null,
                                "value" => null
                            );
                        }
                    }

                    $hijos_del_padre[] = array(
                        "checked" => false,
                        "id" => $compenvl2_id,
                        "cod" => $compenvl2_codigo,
                        "text" => $compenvl2_nombre,
                        "parent" => $compenvl1_id,
                        "nivel" => 1,
                        "flagUrl" => TreeController::getIconClass(1), // Asignar el icono de Font Awesome para padres
                        "children" => $nietos_del_hijo,
                        "value" => null

                        // Agrega aquí otras propiedades necesarias para cada hijo
                    );
                }
            }

            $combined_array[] = array(
                "checked" => false,
                "id" => $compenvl1_id,
                "cod" => $compenvl1_codigo,
                "text" => $compenvl1_nombre,
                "nivel" => 0,
                "flagUrl" => TreeController::getIconClass(0), // Asignar el icono de Font Awesome para padres
                "children" => $hijos_del_padre,
                "value" => null
                // Agrega aquí otras propiedades necesarias para cada padre
            );
        }
        return $combined_array;
    }

    public static function getIconClass($nivel)
    {
        if ($nivel === 0) {
            return "fas fa-stop text-danger"; // Icono de Font Awesome para padres
        } elseif ($nivel === 1) {
            return "fas fa-th-large text-success"; // Icono de Font Awesome para hijos
        } elseif ($nivel === 2) {
            return "fas fa-th text-warning"; // Icono de Font Awesome para nietos
        }
    }
}
