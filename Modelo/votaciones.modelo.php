<?php
namespace modeloVotaciones;
use PDO;

include_once("../entidad/votaciones.entidad.php");
include_once("../entorno/conexion.php");
class Votaciones{
    private $nombre;
    private $programa;
    private $ficha;
    private $mesa;
    private $id;
    private $conexion;
    private $consulta;
    private $resultado;
    private $retorno;
    public function __construct(\entidadVotaciones\Votaciones $VotacionesE)
    {
        $this->conexion = new \Conexion(); 
        $this->nombre=$VotacionesE->getNombre();  
        $this->ficha=$VotacionesE->getFicha();  
        $this->programa=$VotacionesE->getPrograma(); 
        $this->mesa=$VotacionesE->getMesa();  
        $this->id=$VotacionesE->getId();  
    }

    public function registrar()
    {
       $this->consulta="INSERT INTO candidatos VALUES(null, '$this->nombre', $this->ficha, '$this->programa')";
       $this->resultado=$this->conexion->con->prepare($this->consulta);
       $this->resultado->execute();
       if($this->resultado->rowCount()>=1){
        $this->retorno = "Registro exitoso !!";
       }
       else{
        $this->retorno = "Fallo el registro";
       }
       return $this->retorno;
    }

    public function llenarSelectCandidatos()
    {
       $this->consulta="SELECT idCandidato, nombreCandidato FROM candidatos";
       $this->resultado=$this->conexion->con->prepare($this->consulta);
       $this->resultado->execute();
       return $this->resultado->fetchAll(PDO::FETCH_ASSOC);
    }

    public function buscar()
    {
       $this->consulta="SELECT * FROM candidatos INNER JOIN votos ON votos.mesa LIKE '%$this->mesa%' WHERE candidatos.idCandidato=$this->id AND votos.idCandidato=$this->id";
       $this->resultado=$this->conexion->con->prepare($this->consulta);
       $this->resultado->execute();
       return $this->resultado->fetchAll(PDO::FETCH_ASSOC);
    }

    public function mostrar()
    {
       $this->consulta="SELECT * FROM candidatos INNER JOIN votos WHERE candidatos.idCandidato=votos.idCandidato";
       $this->resultado=$this->conexion->con->prepare($this->consulta);
       $this->resultado->execute();
       return $this->resultado->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function votar()
    {
       $this->consulta="INSERT INTO votos VALUES(null, $this->mesa, $this->id)";
       $this->resultado=$this->conexion->con->prepare($this->consulta);
       $this->resultado->execute();
       if($this->resultado->rowCount()>=1){
        $this->retorno = "Voto exitoso !!";
       }
       else{
        $this->retorno = "Fallo a el votar";
       }
       return $this->retorno;
    }

    
    
}

?>