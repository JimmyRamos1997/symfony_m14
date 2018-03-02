<?php

namespace Vallbona\WebBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Subtasca
 *
 * @ORM\Table(name="subtasca", indexes={@ORM\Index(name="id_tasca", columns={"id_tasca"})})
 * @ORM\Entity
 */
class Subtasca
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=70, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcio", type="string", length=250, nullable=false)
     */
    private $descripcio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_inici", type="date", nullable=false)
     */
    private $dataInici;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_final", type="date", nullable=true)
     */
    private $dataFinal;

    /**
     * @var \Tasca
     *
     * @ORM\ManyToOne(targetEntity="Tasca")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_tasca", referencedColumnName="id")
     * })
     */
    private $idTasca;



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
     * Set nom
     *
     * @param string $nom
     *
     * @return Subtasca
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set descripcio
     *
     * @param string $descripcio
     *
     * @return Subtasca
     */
    public function setDescripcio($descripcio)
    {
        $this->descripcio = $descripcio;

        return $this;
    }

    /**
     * Get descripcio
     *
     * @return string
     */
    public function getDescripcio()
    {
        return $this->descripcio;
    }

    /**
     * Set dataInici
     *
     * @param \DateTime $dataInici
     *
     * @return Subtasca
     */
    public function setDataInici($dataInici)
    {
        $this->dataInici = $dataInici;

        return $this;
    }

    /**
     * Get dataInici
     *
     * @return \DateTime
     */
    public function getDataInici()
    {
        return $this->dataInici;
    }

    /**
     * Set dataFinal
     *
     * @param \DateTime $dataFinal
     *
     * @return Subtasca
     */
    public function setDataFinal($dataFinal)
    {
        $this->dataFinal = $dataFinal;

        return $this;
    }

    /**
     * Get dataFinal
     *
     * @return \DateTime
     */
    public function getDataFinal()
    {
        return $this->dataFinal;
    }

    /**
     * Set idTasca
     *
     * @param \Vallbona\WebBundle\Entity\Tasca $idTasca
     *
     * @return Subtasca
     */
    public function setIdTasca(\Vallbona\WebBundle\Entity\Tasca $idTasca = null)
    {
        $this->idTasca = $idTasca;

        return $this;
    }

    /**
     * Get idTasca
     *
     * @return \Vallbona\WebBundle\Entity\Tasca
     */
    public function getIdTasca()
    {
        return $this->idTasca;
    }
}
