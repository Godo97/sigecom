<?php

$folders_arr_padre = array();
$folders_arr_hijo = array();
$folders_arr_nieto = array();

// Consulta SQL para obtener los datos de padres, hijos y nietos
$sql = "SELECT p.id AS padre_id, p.codigo_padre, p.nombre AS padre_nombre,
            h.id AS hijo_id, h.id_padre, h.codigo_hijo, h.nombre AS hijo_nombre,
            n.id AS nieto_id, n.id_hijo, n.codigo_nieto, n.nombre AS nieto_nombre
     FROM padres p
     LEFT JOIN hijos h ON p.id = h.id_padre
     LEFT JOIN nietos n ON h.id = n.id_hijo
     WHERE p.activar = 1
     ORDER BY p.id ASC, h.id ASC, n.id ASC";


$resultado = $conexion->prepare($sql);
$resultado->execute();
$rows = $resultado->fetchAll(PDO::FETCH_ASSOC);

// Variables para controlar los cambios de padre y hijo
$last_padre_id = null;
$last_hijo_id = null;

foreach ($rows as $row) {
    $padre_id = $row['padre_id'];
    $hijo_id = $row['hijo_id'];

    // Verificar si es un nuevo padre
    if ($padre_id !== $last_padre_id) {
        $folders_arr_padre[] = array(
            $row['padre_id'],
            $row['codigo_padre'],
            $row['padre_nombre']
        );
        $last_padre_id = $padre_id;
    }

    // Verificar si es un nuevo hijo
    if ($hijo_id !== $last_hijo_id) {
        $folders_arr_hijo[] = array(
            $row['hijo_id'],
            $row['id_padre'],
            $row['codigo_hijo'],
            $row['hijo_nombre']
        );
        $last_hijo_id = $hijo_id;
    }

    // Agregar el nieto
    $folders_arr_nieto[] = array(
        $row['nieto_id'],
        $row['id_hijo'],
        $row['codigo_nieto'],
        $row['nieto_nombre']
    );
}

$combined_array = array();

foreach ($folders_arr_padre as $padre) {
    $padre_id = $padre[0];
    $padre_codigo = $padre[1];
    $padre_nombre = $padre[2];

    $hijos_del_padre = array();

    foreach ($folders_arr_hijo as $hijo) {
        if ($hijo[1] === $padre_id) {
            $hijo_id = $hijo[0];
            $hijo_id_padre = [1];
            $hijo_codigo = $hijo[2];
            $hijo_nombre = $hijo[3];

            $nietos_del_hijo = array();

            foreach ($folders_arr_nieto as $nieto) {
                if ($nieto[1] === $hijo_id) {
                    $nieto_id = $nieto[0];
                    $nieto_id_hijo = [1];
                    $nieto_codigo = $nieto[2];
                    $nieto_nombre = $nieto[3];

                    $nietos_del_hijo[] = array(
                        "id" => $nieto_id,
                        "text" => $nieto_nombre,
                        "hijo_id" => $hijo_id,
                        "nivel" => 2,
                        "icon" => getIconClass(2), // Asignar el icono de Font Awesome para padres
                        // Agrega aquí otras propiedades necesarias para cada nieto
                    );
                }
            }

            $hijos_del_padre[] = array(
                "id" => $hijo_id,
                "text" => $hijo_nombre,
                "padre_id" => $padre_id,
                "nivel" => 1,
                "icon" => getIconClass(1), // Asignar el icono de Font Awesome para padres
                "children" => $nietos_del_hijo,

                // Agrega aquí otras propiedades necesarias para cada hijo
            );
        }
    }

    $combined_array[] = array(
        "id" => $padre_id,
        "text" => $padre_nombre,
        "nivel" => 0,
        "icon" => getIconClass(0), // Asignar el icono de Font Awesome para padres
        "children" => $hijos_del_padre,
        // Agrega aquí otras propiedades necesarias para cada padre
    );
}

// Ordenar el array combinado por la secuencia 0, 1, 2
usort($combined_array, function ($a, $b) {
    return $a['nivel'] <=> $b['nivel'];
});


// Función para obtener el nombre del icono de Font Awesome según el nivel del nodo
function getIconClass($nivel)
{
    if ($nivel === 0) {
        return "fas fa-stop text-danger"; // Icono de Font Awesome para padres
    } elseif ($nivel === 1) {
        return "fas fa-th-large text-success"; // Icono de Font Awesome para hijos
    } elseif ($nivel === 2) {
        return "fas fa-th text-warning"; // Icono de Font Awesome para nietos
    }
}
