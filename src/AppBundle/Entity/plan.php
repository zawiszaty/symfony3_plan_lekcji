<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * plan
 *
 * @ORM\Table(name="plan")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\planRepository")
 */
class plan
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
     * @ORM\Column(name="poniedzialek", type="string", length=255)
     */
    private $poniedzialek;

    /**
     * @var string
     *
     * @ORM\Column(name="salap", type="string", length=255)
     */
    private $salap;

    /**
     * @var string
     *
     * @ORM\Column(name="wtorek", type="string", length=255)
     */
    private $wtorek;

    /**
     * @var string
     *
     * @ORM\Column(name="salaw", type="string", length=255)
     */
    private $salaw;

    /**
     * @var string
     *
     * @ORM\Column(name="sroda", type="string", length=255)
     */
    private $sroda;

    /**
     * @var string
     *
     * @ORM\Column(name="salas", type="string", length=255)
     */
    private $salas;

    /**
     * @var string
     *
     * @ORM\Column(name="czwartek", type="string", length=255)
     */
    private $czwartek;

    /**
     * @var string
     *
     * @ORM\Column(name="salac", type="string", length=255)
     */
    private $salac;

    /**
     * @var string
     *
     * @ORM\Column(name="piatek", type="string", length=255)
     */
    private $piatek;

    /**
     * @var string
     *
     * @ORM\Column(name="salapi", type="string", length=255)
     */
    private $salapi;


    /**
     * @var string
     *
     * @ORM\Column(name="class", type="string", length=255)
     */
    private $class;


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
     * Set poniedzialek
     *
     * @param string $poniedzialek
     *
     * @return plan
     */
    public function setPoniedzialek($poniedzialek)
    {
        $this->poniedzialek = $poniedzialek;

        return $this;
    }

    /**
     * Get poniedzialek
     *
     * @return string
     */
    public function getPoniedzialek()
    {
        return $this->poniedzialek;
    }

    /**
     * Set salap
     *
     * @param string $salap
     *
     * @return plan
     */
    public function setSalap($salap)
    {
        $this->salap = $salap;

        return $this;
    }

    /**
     * Get salap
     *
     * @return string
     */
    public function getSalap()
    {
        return $this->salap;
    }

    /**
     * Set wtorek
     *
     * @param string $wtorek
     *
     * @return plan
     */
    public function setWtorek($wtorek)
    {
        $this->wtorek = $wtorek;

        return $this;
    }

    /**
     * Get wtorek
     *
     * @return string
     */
    public function getWtorek()
    {
        return $this->wtorek;
    }

    /**
     * Set salaw
     *
     * @param string $salaw
     *
     * @return plan
     */
    public function setSalaw($salaw)
    {
        $this->salaw = $salaw;

        return $this;
    }

    /**
     * Get salaw
     *
     * @return string
     */
    public function getSalaw()
    {
        return $this->salaw;
    }

    /**
     * Set sroda
     *
     * @param string $sroda
     *
     * @return plan
     */
    public function setSroda($sroda)
    {
        $this->sroda = $sroda;

        return $this;
    }

    /**
     * Get sroda
     *
     * @return string
     */
    public function getSroda()
    {
        return $this->sroda;
    }

    /**
     * Set salas
     *
     * @param string $salas
     *
     * @return plan
     */
    public function setSalas($salas)
    {
        $this->salas = $salas;

        return $this;
    }

    /**
     * Get salas
     *
     * @return string
     */
    public function getSalas()
    {
        return $this->salas;
    }

    /**
     * Set czwartek
     *
     * @param string $czwartek
     *
     * @return plan
     */
    public function setCzwartek($czwartek)
    {
        $this->czwartek = $czwartek;

        return $this;
    }

    /**
     * Get czwartek
     *
     * @return string
     */
    public function getCzwartek()
    {
        return $this->czwartek;
    }

    /**
     * Set salac
     *
     * @param string $salac
     *
     * @return plan
     */
    public function setSalac($salac)
    {
        $this->salac = $salac;

        return $this;
    }

    /**
     * Get salac
     *
     * @return string
     */
    public function getSalac()
    {
        return $this->salac;
    }

    /**
     * Set piatek
     *
     * @param string $piatek
     *
     * @return plan
     */
    public function setPiatek($piatek)
    {
        $this->piatek = $piatek;

        return $this;
    }

    /**
     * Get piatek
     *
     * @return string
     */
    public function getPiatek()
    {
        return $this->piatek;
    }

    /**
     * Set salapi
     *
     * @param string $salapi
     *
     * @return plan
     */
    public function setSalapi($salapi)
    {
        $this->salapi = $salapi;

        return $this;
    }

    /**
     * Get salapi
     *
     * @return string
     */
    public function getSalapi()
    {
        return $this->salapi;
    }

    /**
     * @return mixed
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * @param mixed $class
     */
    public function setClass($class)
    {
        $this->class = $class;
    }

}

