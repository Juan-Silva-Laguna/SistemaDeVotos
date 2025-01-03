<?php
include_once("../entidad/votaciones.entidad.php");
include_once("../modelo/votaciones.modelo.php");

$VotacionesE = new \entidadVotaciones\Votaciones();
switch ($_POST['operacion']) {
    case 'registrar':
        $VotacionesE->setNombre($_POST['nombre']);
        $VotacionesE->setFicha($_POST['ficha']);
        $VotacionesE->setPrograma($_POST['programa']);
        $VotacionesM = new \modeloVotaciones\Votaciones($VotacionesE);
        $mensaje = $VotacionesM->registrar();
        break;
    case 'votar':
        $VotacionesE->setId($_POST['id']);
        $VotacionesE->setMesa($_POST['mesa']);
        $VotacionesM = new \modeloVotaciones\Votaciones($VotacionesE);
        $mensaje = $VotacionesM->votar();
        break;
    case 'llenarSelectCandidatos':
        $VotacionesM = new \modeloVotaciones\Votaciones($VotacionesE);
        $mensaje = $VotacionesM->llenarSelectCandidatos();
        break;
    case 'buscar':
        $VotacionesE->setId($_POST['id']);
        $VotacionesE->setMesa($_POST['mesa']);
        $VotacionesM = new \modeloVotaciones\Votaciones($VotacionesE);
        $mensaje = $VotacionesM->buscar();
        break;
    case 'mostrar':
        $VotacionesM = new \modeloVotaciones\Votaciones($VotacionesE);
        $mensaje = $VotacionesM->mostrar();
        break;
}

unset($VotacionesE);
unset($VotacionesM);

echo json_encode($mensaje);
?>