<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="contacto")
 * @ORM\Entity(repositoryClass="AppBundle\Entity\Repository\ContactoRepository")
 */
class Contacto
{
	/**
	 * @ORM\Column(type="integer")
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $id;
	
	/**
	 * @ORM\Column(type="string", length=255, nullable=false)
	 */
	private $nombre;
	
	/**
	 * @ORM\Column(type="string", length=255, nullable=false)
	 */
	private $email;
	
	/**
	 * @ORM\Column(type="string", length=255, nullable=true)
	 */
	private $telefono;
	
	/**
	 * @ORM\Column(type="string", nullable=true)
	 */
	private $mensaje;
	
	/**
	 * @ORM\Column(type="datetime", nullable=true)
	 */
	private $fecha;
	

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
     * @return Contacto
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
     * Set email
     *
     * @param string $email
     *
     * @return Contacto
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     *
     * @return Contacto
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return string
     */
    public function getTelefono()
    {
        return $this->telefono;
    }
    
    /**
     * Set fecha
     *
     * @param string $fecha
     *
     * @return Contacto
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set mensaje
     *
     * @param string $mensaje
     *
     * @return Contacto
     */
    public function setMensaje($mensaje)
    {
        $this->mensaje = $mensaje;

        return $this;
    }

    /**
     * Get mensaje
     *
     * @return string
     */
    public function getMensaje()
    {
        return $this->mensaje;
    }
    
    public function getUploadRootDir()
    {
    	// absolute path to your directory where images must be saved
    	return __DIR__.'/../../../../../web/'.$this->getUploadDir();
    }
    
    public function getUploadDir()
    {
    	return 'uploads/promociones';
    }
    
    public function getAbsolutePath()
    {
    	return null === $this->image ? null : $this->getUploadRootDir().'/'.$this->image;
    }
    
    public function getWebPath()
    {
    	return null === $this->image ? null : '/'.$this->getUploadDir().'/'.$this->image;
    }
}
