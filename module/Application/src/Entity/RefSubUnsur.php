<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RefSubUnsur
 *
 * @ORM\Table(name="ref_sub_unsur", indexes={@ORM\Index(name="REL_to_ref_unsur", columns={"id_unsur"})})
 * @ORM\Entity(repositoryClass="Application\Repository\RefSubUnsurRepository")
 */
class RefSubUnsur
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="string", length=36, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nama", type="string", length=500, nullable=true, options={"default"="'NULL'"})
     */
    private $nama = '\'NULL\'';

    /**
     * @var string|null
     *
     * @ORM\Column(name="keterangan", type="string", length=100, nullable=true, options={"default"="NULL"})
     */
    private $keterangan = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="kode", type="string", length=10, nullable=true, options={"default"="'NULL'"})
     */
    private $kode = '\'NULL\'';

    /**
     * @var \RefUnsur
     *
     * @ORM\ManyToOne(targetEntity="RefUnsur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_unsur", referencedColumnName="id")
     * })
     */
    private $idUnsur;

    public function getId(): ?string
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

    public function getKeterangan(): ?string
    {
        return $this->keterangan;
    }

    public function setKeterangan(?string $keterangan): self
    {
        $this->keterangan = $keterangan;

        return $this;
    }

    public function getKode(): ?string
    {
        return $this->kode;
    }

    public function setKode(?string $kode): self
    {
        $this->kode = $kode;

        return $this;
    }

    public function getIdUnsur(): ?RefUnsur
    {
        return $this->idUnsur;
    }

    public function setIdUnsur(?RefUnsur $idUnsur): self
    {
        $this->idUnsur = $idUnsur;

        return $this;
    }


}

