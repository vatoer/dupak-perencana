<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrFormasiJabatanFungsional
 *
 * @ORM\Table(name="tr_formasi_jabatan_fungsional", indexes={@ORM\Index(name="REL_tr_formasi_j_f_to_ref_org", columns={"organisasi_id"})})
 * @ORM\Entity(repositoryClass="Application\Repository\TrFormasiJabatanFungsionalRepository")
 */
class TrFormasiJabatanFungsional
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="string", length=36, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="UUID")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="jabatan_id", type="string", length=36, nullable=true, options={"default"="NULL"})
     */
    private $jabatanId = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="organisasi_id", type="string", length=36, nullable=true, options={"default"="NULL"})
     */
    private $organisasiId = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="formasi", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $formasi = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="bezetting", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $bezetting = 'NULL';

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

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getJabatanId(): ?string
    {
        return $this->jabatanId;
    }

    public function setJabatanId(?string $jabatanId): self
    {
        $this->jabatanId = $jabatanId;

        return $this;
    }

    public function getOrganisasiId(): ?string
    {
        return $this->organisasiId;
    }

    public function setOrganisasiId(?string $organisasiId): self
    {
        $this->organisasiId = $organisasiId;

        return $this;
    }

    public function getFormasi(): ?int
    {
        return $this->formasi;
    }

    public function setFormasi(?int $formasi): self
    {
        $this->formasi = $formasi;

        return $this;
    }

    public function getBezetting(): ?int
    {
        return $this->bezetting;
    }

    public function setBezetting(?int $bezetting): self
    {
        $this->bezetting = $bezetting;

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


}
