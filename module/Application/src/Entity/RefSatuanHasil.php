<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RefSatuanHasil
 *
 * @ORM\Table(name="ref_satuan_hasil")
 * @ORM\Entity(repositoryClass="Application\Repository\RefSatuanHasilRepository")
 */
class RefSatuanHasil
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="UUID")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nama", type="string", length=50, nullable=true, options={"default"="NULL"})
     */
    private $nama = 'NULL';

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNama(): ?string
    {
        return $this->nama;
    }

    public function setNama(?string $nama): self
    {
        $this->nama = $nama;

        return $this;
    }


}
