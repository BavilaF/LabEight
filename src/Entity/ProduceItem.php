<?php

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/*
*@ORM\Entity
*/
class ProduceItem {

  /**
  *@ORM\id
  *@ORM\GeneratedValue
  *@ORM\Column(type="integer")
  */
  private $id;

  /**
  *@ORM\Column("string", length=50)
  */
  //Properties
  private $name;
  private $expiration_date;

  /**
  *One ProduceItem has one Icon.
  *@OneToOne(targetEntity="Icon")
  *@JoinColumn(name="Icon_id", referencedColumnName="id")
  */
  private $icon; //Property

  function __construct(string $name, $expiration_date, $icon) {
    $this->name = $name;
    $this->$expiration_date = $expiration_date;
    $this->icon = $icon;
  }

  public function getName() : string {
    return $this->name;
  }

  public function setName(string $name) {
    $this->name = $name;
  }

  public function getExpirationDate() : \DateTime {
    return $this->$expiration_date;
  }

  public function setExpirationDate(\DateTime $expiration_date = null) {
    $this->expiration_date = $expiration_date;
  }

  /** @Entity */
  public function getIcon() {
    $this->icon = $icon;
  }

  public function setIcon($icon) {
    $this->icon = $icon;
  }
}
