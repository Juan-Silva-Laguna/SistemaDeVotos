<?php
namespace entidadVotaciones;
class Votaciones{
    private $nombre;
    private $programa;
    private $ficha;
    private $mesa;
    private $id;

    /**
     * Get the value of nombre
     */ 
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @return  self
     */ 
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of ficha
     */ 
    public function getFicha()
    {
        return $this->ficha;
    }

    /**
     * Set the value of ficha
     *
     * @return  self
     */ 
    public function setFicha($ficha)
    {
        $this->ficha = $ficha;

        return $this;
    }

    /**
     * Get the value of programa
     */ 
    public function getPrograma()
    {
        return $this->programa;
    }

    /**
     * Set the value of programa
     *
     * @return  self
     */ 
    public function setPrograma($programa)
    {
        $this->programa = $programa;

        return $this;
    }

    /**
     * Get the value of mesa
     */ 
    public function getMesa()
    {
        return $this->mesa;
    }

    /**
     * Set the value of mesa
     *
     * @return  self
     */ 
    public function setMesa($mesa)
    {
        $this->mesa = $mesa;

        return $this;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
}

?>