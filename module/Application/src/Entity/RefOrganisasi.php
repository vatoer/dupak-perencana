<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RefOrganisasi
 *
 * @ORM\Table(name="ref_organisasi")
 * @ORM\Entity(repositoryClass="Application\Repository\RefOrganisasiRepository")
 */
class RefOrganisasi
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
     * @ORM\Column(name="parent_organisasi_id", type="string", length=36, nullable=true, options={"default"="NULL"})
     */
    private $parentOrganisasiId = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="kode", type="string", length=36, nullable=true, options={"default"="NULL"})
     */
    private $kode = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="parent_kode", type="string", length=36, nullable=true, options={"default"="NULL"})
     */
    private $parentKode = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="nama", type="string", length=150, nullable=true, options={"default"="NULL"})
     */
    private $nama = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="akronim", type="string", length=36, nullable=true, options={"default"="NULL"})
     */
    private $akronim = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="jabatan_kepala", type="string", length=36, nullable=true, options={"default"="NULL"})
     */
    private $jabatanKepala = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="pimpinan_definitif", type="string", length=36, nullable=true, options={"default"="NULL"})
     */
    private $pimpinanDefinitif = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="pimpinan_plt", type="string", length=36, nullable=true, options={"default"="NULL"})
     */
    private $pimpinanPlt = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="pimpinan_plh", type="string", length=36, nullable=true, options={"default"="NULL"})
     */
    private $pimpinanPlh = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="eselon", type="string", length=36, nullable=true, options={"default"="NULL"})
     */
    private $eselon = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="jenis_eselon", type="string", length=36, nullable=true, options={"default"="NULL"})
     */
    private $jenisEselon = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="tingkatan", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $tingkatan = 'NULL';

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

    public function getParentOrganisasiId(): ?string
    {
        return $this->parentOrganisasiId;
    }

    public function setParentOrganisasiId(?string $parentOrganisasiId): self
    {
        $this->parentOrganisasiId = $parentOrganisasiId;

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

    public function getParentKode(): ?string
    {
        return $this->parentKode;
    }

    public function setParentKode(?string $parentKode): self
    {
        $this->parentKode = $parentKode;

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

    public function getAkronim(): ?string
    {
        return $this->akronim;
    }

    public function setAkronim(?string $akronim): self
    {
        $this->akronim = $akronim;

        return $this;
    }

    public function getJabatanKepala(): ?string
    {
        return $this->jabatanKepala;
    }

    public function setJabatanKepala(?string $jabatanKepala): self
    {
        $this->jabatanKepala = $jabatanKepala;

        return $this;
    }

    public function getPimpinanDefinitif(): ?string
    {
        return $this->pimpinanDefinitif;
    }

    public function setPimpinanDefinitif(?string $pimpinanDefinitif): self
    {
        $this->pimpinanDefinitif = $pimpinanDefinitif;

        return $this;
    }

    public function getPimpinanPlt(): ?string
    {
        return $this->pimpinanPlt;
    }

    public function setPimpinanPlt(?string $pimpinanPlt): self
    {
        $this->pimpinanPlt = $pimpinanPlt;

        return $this;
    }

    public function getPimpinanPlh(): ?string
    {
        return $this->pimpinanPlh;
    }

    public function setPimpinanPlh(?string $pimpinanPlh): self
    {
        $this->pimpinanPlh = $pimpinanPlh;

        return $this;
    }

    public function getEselon(): ?string
    {
        return $this->eselon;
    }

    public function setEselon(?string $eselon): self
    {
        $this->eselon = $eselon;

        return $this;
    }

    public function getJenisEselon(): ?string
    {
        return $this->jenisEselon;
    }

    public function setJenisEselon(?string $jenisEselon): self
    {
        $this->jenisEselon = $jenisEselon;

        return $this;
    }

    public function getTingkatan(): ?int
    {
        return $this->tingkatan;
    }

    public function setTingkatan(?int $tingkatan): self
    {
        $this->tingkatan = $tingkatan;

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
