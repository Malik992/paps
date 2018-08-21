<?php

namespace PAPS\LivraisonBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * papser
 *
 * @ORM\Table(name="papser")
 * @ORM\Entity(repositoryClass="PAPS\LivraisonBundle\Repository\papserRepository")
 */
class papser
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nomComplet", type="string", length=30)
     */
    private $nomComplet;

    /**
     * @var string
     *
     * @ORM\Column(name="tel", type="string", length=30)
     */
    private $tel;

    /**
     * @var string
     *
     * @ORM\Column(name="adress", type="string", length=50)
     */
    private $adress;

    /**
     * @var string
     *
     * @ORM\Column(name="numPermis", type="string", length=8)
     */
    private $numPermis;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nomComplet
     *
     * @param string $nomComplet
     *
     * @return papser
     */
    public function setNomComplet($nomComplet)
    {
        $this->nomComplet = $nomComplet;

        return $this;
    }

    /**
     * Get nomComplet
     *
     * @return string
     */
    public function getNomComplet()
    {
        return $this->nomComplet;
    }

    /**
     * Set tel
     *
     * @param string $tel
     *
     * @return papser
     */
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get tel
     *
     * @return string
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set adress
     *
     * @param string $adress
     *
     * @return papser
     */
    public function setAdress($adress)
    {
        $this->adress = $adress;

        return $this;
    }

    /**
     * Get adress
     *
     * @return string
     */
    public function getAdress()
    {
        return $this->adress;
    }

    /**
     * Set numPermis
     *
     * @param string $numPermis
     *
     * @return papser
     */
    public function setNumPermis($numPermis)
    {
        $this->numPermis = $numPermis;

        return $this;
    }

    /**
     * Get numPermis
     *
     * @return string
     */
    public function getNumPermis()
    {
        return $this->numPermis;
    }
}

