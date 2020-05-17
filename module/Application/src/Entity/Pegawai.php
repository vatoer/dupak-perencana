<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pegawai
 *
 * @ORM\Table(name="pegawai", indexes={@ORM\Index(name="REL_p_to_ref_org", columns={"organisasi_id"}), @ORM\Index(name="REL_to_jenjang", columns={"jabatan_fungsional_id"})})
 * @ORM\Entity(repositoryClass="Application\Repository\PegawaiRepository")
 */
class Pegawai
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="string", length=36, nullable=false, options={"default"="'uuid()'"})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id = '\'uuid()\'';

    /**
     * @var string|null
     *
     * @ORM\Column(name="no_ktp", type="string", length=36, nullable=true, options={"default"="NULL"})
     */
    private $noKtp = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="nip", type="string", length=36, nullable=true, options={"default"="NULL"})
     */
    private $nip = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="nama_depan", type="string", length=50, nullable=true, options={"default"="NULL"})
     */
    private $namaDepan = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="nama_tengah", type="string", length=50, nullable=true, options={"default"="NULL"})
     */
    private $namaTengah = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="nama_belakang", type="string", length=50, nullable=true, options={"default"="NULL"})
     */
    private $namaBelakang = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="gelar_depan", type="string", length=36, nullable=true, options={"default"="NULL"})
     */
    private $gelarDepan = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="gelar_belakang", type="string", length=36, nullable=true, options={"default"="NULL"})
     */
    private $gelarBelakang = 'NULL';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_jabatan_fungsional", type="boolean", nullable=true)
     */
    private $isJabatanFungsional = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_jabatan_admistrasi", type="boolean", nullable=true)
     */
    private $isJabatanAdmistrasi = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="jabatan_administrasi_id", type="string", length=36, nullable=true, options={"default"="NULL"})
     */
    private $jabatanAdministrasiId = 'NULL';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_jabatan_pimpinan", type="boolean", nullable=true)
     */
    private $isJabatanPimpinan = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="jabatan_pimpinan_id", type="string", length=36, nullable=true, options={"default"="NULL"})
     */
    private $jabatanPimpinanId = 'NULL';

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
     * @ORM\Column(name="meta_dt_update", type="date", nullable=true, options={"default"="NULL"})
     */
    private $metaDtUpdate = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="meta_update_by", type="string", length=36, nullable=true, options={"default"="NULL"})
     */
    private $metaUpdateBy = 'NULL';

    /**
     * @var \RefOrganisasi
     *
     * @ORM\ManyToOne(targetEntity="RefOrganisasi")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="organisasi_id", referencedColumnName="id")
     * })
     */
    private $organisasi;

    /**
     * @var \RefJenjangJabatanFungsional
     *
     * @ORM\ManyToOne(targetEntity="RefJenjangJabatanFungsional")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="jabatan_fungsional_id", referencedColumnName="id")
     * })
     */
    private $jabatanFungsional;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getNoKtp(): ?string
    {
        return $this->noKtp;
    }

    public function setNoKtp(?string $noKtp): self
    {
        $this->noKtp = $noKtp;

        return $this;
    }

    public function getNip(): ?string
    {
        return $this->nip;
    }

    public function setNip(?string $nip): self
    {
        $this->nip = $nip;

        return $this;
    }

    public function getNamaDepan(): ?string
    {
        return $this->namaDepan;
    }

    public function setNamaDepan(?string $namaDepan): self
    {
        $this->namaDepan = $namaDepan;

        return $this;
    }

    public function getNamaTengah(): ?string
    {
        return $this->namaTengah;
    }

    public function setNamaTengah(?string $namaTengah): self
    {
        $this->namaTengah = $namaTengah;

        return $this;
    }

    public function getNamaBelakang(): ?string
    {
        return $this->namaBelakang;
    }

    public function setNamaBelakang(?string $namaBelakang): self
    {
        $this->namaBelakang = $namaBelakang;

        return $this;
    }

    public function getGelarDepan(): ?string
    {
        return $this->gelarDepan;
    }

    public function setGelarDepan(?string $gelarDepan): self
    {
        $this->gelarDepan = $gelarDepan;

        return $this;
    }

    public function getGelarBelakang(): ?string
    {
        return $this->gelarBelakang;
    }

    public function setGelarBelakang(?string $gelarBelakang): self
    {
        $this->gelarBelakang = $gelarBelakang;

        return $this;
    }

    public function getIsJabatanFungsional(): ?bool
    {
        return $this->isJabatanFungsional;
    }

    public function setIsJabatanFungsional(?bool $isJabatanFungsional): self
    {
        $this->isJabatanFungsional = $isJabatanFungsional;

        return $this;
    }

    public function getIsJabatanAdmistrasi(): ?bool
    {
        return $this->isJabatanAdmistrasi;
    }

    public function setIsJabatanAdmistrasi(?bool $isJabatanAdmistrasi): self
    {
        $this->isJabatanAdmistrasi = $isJabatanAdmistrasi;

        return $this;
    }

    public function getJabatanAdministrasiId(): ?string
    {
        return $this->jabatanAdministrasiId;
    }

    public function setJabatanAdministrasiId(?string $jabatanAdministrasiId): self
    {
        $this->jabatanAdministrasiId = $jabatanAdministrasiId;

        return $this;
    }

    public function getIsJabatanPimpinan(): ?bool
    {
        return $this->isJabatanPimpinan;
    }

    public function setIsJabatanPimpinan(?bool $isJabatanPimpinan): self
    {
        $this->isJabatanPimpinan = $isJabatanPimpinan;

        return $this;
    }

    public function getJabatanPimpinanId(): ?string
    {
        return $this->jabatanPimpinanId;
    }

    public function setJabatanPimpinanId(?string $jabatanPimpinanId): self
    {
        $this->jabatanPimpinanId = $jabatanPimpinanId;

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

    public function getOrganisasi(): ?RefOrganisasi
    {
        return $this->organisasi;
    }

    public function setOrganisasi(?RefOrganisasi $organisasi): self
    {
        $this->organisasi = $organisasi;

        return $this;
    }

    public function getJabatanFungsional(): ?RefJenjangJabatanFungsional
    {
        return $this->jabatanFungsional;
    }

    public function setJabatanFungsional(?RefJenjangJabatanFungsional $jabatanFungsional): self
    {
        $this->jabatanFungsional = $jabatanFungsional;

        return $this;
    }


}

