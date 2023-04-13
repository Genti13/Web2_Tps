<?php
// Ejercicio 1 a
function semaforo_a($color)
{
    if (strtolower($color) == 'rojo') {
        $msg = "Frene";
    } elseif (strtolower($color) == 'amarillo') {
        $msg = "Precaucion";
    } elseif (strtolower($color) == 'verde') {
        $msg = "Avance";
    } else {
        $msg = "Estado Desconocido";
    }

    return $msg;
}

function semaforo_b($color)
{
    $color = strtolower($color);
    return $color == 'rojo' ? "Frene" : ($color == 'amarillo' ? "Precaucion" : ($color = 'verde' ? "Avance" : "Estado Desconocido"));
}

function semaforo_c($color)
{
    switch (strtolower($color)) {
        case 'rojo':
            $msg = "Frene";
            break;
        case 'amarillo':
            $msg = "Precaucion";
            break;

        case 'verde':
            $msg = "Avance";
            break;

        default:
            $msg = "Estado Desconocido";
            break;
    }

    return $msg;
}
?>