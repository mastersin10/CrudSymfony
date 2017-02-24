<?php

namespace ExamenBundle\Entity;

/**
 * Usuarios
 */
class Usuarios
{

    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $apePaterno;

    /**
     * @var string
     */
    private $apeMaterno;

    /**
     * @var string
     */
    private $edad;

    /**
     * @var \ExamenBundle\Entity\Direccion
     */
    private $direccion;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Usuarios
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set apePaterno
     *
     * @param string $apePaterno
     *
     * @return Usuarios
     */
    public function setApePaterno($apePaterno)
    {
        $this->apePaterno = $apePaterno;

        return $this;
    }

    /**
     * Get apePaterno
     *
     * @return string
     */
    public function getApePaterno()
    {
        return $this->apePaterno;
    }

    /**
     * Set apeMaterno
     *
     * @param string $apeMaterno
     *
     * @return Usuarios
     */
    public function setApeMaterno($apeMaterno)
    {
        $this->apeMaterno = $apeMaterno;

        return $this;
    }

    /**
     * Get apeMaterno
     *
     * @return string
     */
    public function getApeMaterno()
    {
        return $this->apeMaterno;
    }

    /**
     * Set edad
     *
     * @param string $edad
     *
     * @return Usuarios
     */
    public function setEdad($edad)
    {
        $this->edad = $edad;

        return $this;
    }

    /**
     * Get edad
     *
     * @return string
     */
    public function getEdad()
    {
        return $this->edad;
    }

    /**
     * Set direccion
     *
     * @param \ExamenBundle\Entity\Direccion $direccion
     *
     * @return Usuarios
     */
    public function setDireccion(\ExamenBundle\Entity\Direccion $direccion = null)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get direccion
     *
     * @return \ExamenBundle\Entity\Direccion
     */
    public function getDireccion()
    {
        return $this->direccion;
    }
}
