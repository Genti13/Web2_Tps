<?php

class Saludar
{
    private $name;
    private $lastname;
    public function __construct($_name, $_lastname)
    {
        $this->name = $_name;
        $this->lastname = $_lastname;
    }

    public function SaludoFormal($horario)
    {
        return 'Buenas/os ' . saludoDependiedoLaHora($horario) . 's' . " " . $this->name . " " . $this->lastname;
    }

    public function SaludoInformal($horario)
    {
        return '¡Hola' . " " . $this->name . '!' . " " . "Que tengas un/a Buen/a" . " " . saludoDependiedoLaHora($horario);
    }
}

function saludoDependiedoLaHora($hora)
{
    if ($hora >= 5 && $hora < 13) {
        $saludo = "Dia";
    } elseif ($hora >= 13 && $hora < 21) {
        $saludo = "Tarde";
    } elseif ($hora >= 21 && $hora <= 23 || $hora >= 00 && $hora < 5) {
        $saludo = "Noche";
    } else {
        $saludo = "Horario Mal Enviado";
    }

    return $saludo;
}

?>