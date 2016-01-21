<?php
// src/OC/PlatformBundle/Entity/AdvertSkill.php

namespace OC\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="OC\PlatformBundle\Entity\AdvertSkillRepository")
 */
class AdvertSkill
{
    /**
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="OC\PlatformBundle\Entity\Advert")
     * @ORM\JoinColumn(nullable=false)
     */
    private $advert;

    /**
     * @ORM\ManyToOne(targetEntity="OC\PlatformBundle\Entity\Skill")
     * @ORM\JoinColumn(nullable=false)
     */
    private $skill;

    /**
     * @ORM\Column(name="level", type="string", length=255)
     */
    private $level;

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param Advert $advert
     * @return AdvertSkill
     */
    public function setAdvert(Advert $advert)
    {
        $this->advert = $advert;
        return $this;
    }

    /**
     * @return Advert
     */
    public function getAdvert()
    {
        return $this->advert;
    }

    /**
     * @param Skill $skill
     * @return AdvertSkill
     */
    public function setSkill(Skill $skill)
    {
        $this->skill = $skill;
        return $this;
    }

    /**
     * @return Skill
     */
    public function getSkill()
    {
        return $this->skill;
    }

    /**
     * @param string $level
     * @return AdvertSkill
     */
    public function setLevel($level)
    {
        $this->level = $level;
        return $this;
    }

    /**
     * @return string
     */
    public function getLevel()
    {
        return $this->level;
    }
}