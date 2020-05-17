<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RefJenjangJabatanFungsional
 *
 * @ORM\Table(name="ref_jenjang_jabatan_fungsional", indexes={@ORM\Index(name="REL_ref_j_fung_to_ref_rum_j_f", columns={"id_jabatan_fungsional"})})
 * @ORM\Entity(repositoryClass="Application\Repository\RefJenjangJabatanFungsionalRepository")
 */
class RefJenjangJabatanFungsional
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
     * @ORM\Column(name="kode", type="string", length=36, nullable=true, options={"default"="NULL"})
     */
    private $kode = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="nama", type="string", length=36, nullable=true, options={"default"="NULL"})
     */
    private $nama = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="keterangan", type="string", length=100, nullable=true, options={"default"="NULL"})
     */
    private $keterangan = 'NULL';

    /**
     * @var bool
     *
     * @ORM\Column(name="tingkat", type="boolean", nullable=false)
     */
    private $tingkat;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="meta_dt_create", type="date", nullable=true, options={"default"="current_timestamp()"})
     */
    private $metaDtCreate = 'current_timestamp()';

    /**
     * @var string|null
     *
     * @ORM\Column(name="meta_create_by", type="string", length=36, nullable=true, options={"default"="NULL"})
     */
    private $metaCreateBy = 'NULL';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="meta_dt_update", type="date", nullable=true, options={"default"="current_timestamp()"})
     */
    private $metaDtUpdate = 'current_timestamp()';

    /**
     * @var string|null
     *
     * @ORM\Column(name="meta_update_by", type="string", length=36, nullable=true, options={"default"="NULL"})
     */
    private $metaUpdateBy = 'NULL';

    /**
     * @var \RefJabatanFungsional
     *
     * @ORM\ManyToOne(targetEntity="RefJabatanFungsional")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_jabatan_fungsional", referencedColumnName="id")
     * })
     */
    private $idJabatanFungsional;

    public function getId(): ?string
    {
        return $this->id;
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

    public function getTingkat(): ?bool
    {
        return $this->tingkat;
    }

    public function setTingkat(bool $tingkat): self
    {
        $this->tingkat = $tingkat;

        return $this;
    }

    public function getMetaDtCreate(): ?\DateTimeInterface
    {
        return $this->metaDtCreate;
    }

    public function setMetaDtCreate(?\DateTimeInterface $metaDtCreate): self
    {
        $this->metaDtCreate = $metaDtCreate;

        return $this;
    }

    public function getMetaCreateBy(): ?string
    {
        return $this->metaCreateBy;
    }

    public function setMetaCreateBy(?string $metaCreateBy): self
    {
        $this->metaCreateBy = $metaCreateBy;

        return $this;
    }

    public function getMetaDtUpdate(): ?\DateTimeInterface
    {
        return $this->metaDtUpdate;
    }

    public function setMetaDtUpdate(?\DateTimeInterface $metaDtUpdate): self
    {
        $this->metaDtUpdate = $metaDtUpdate;

        return $this;
    }

    public function getMetaUpdateBy(): ?string
    {
        return $this->metaUpdateBy;
    }

    public function setMetaUpdateBy(?string $metaUpdateBy): self
    {
        $this->metaUpdateBy = $metaUpdateBy;

        return $this;
    }

    public function getIdJabatanFungsional(): ?RefJabatanFungsional
    {
        return $this->idJabatanFungsional;
    }

    public function setIdJabatanFungsional(?RefJabatanFungsional $idJabatanFungsional): self
    {
        $this->idJabatanFungsional = $idJabatanFungsional;

        return $this;
    }


}


