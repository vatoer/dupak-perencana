<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrJabatanAdministrasiPegawai
 *
 * @ORM\Table(name="tr_jabatan_administrasi_pegawai", indexes={@ORM\Index(name="REL_tr_j_adm_p_to_tr_f_j_adm_p", columns={"pegawai_id"}), @ORM\Index(name="REL_to_tr_f_j_adm", columns={"formasi_id"})})
 * @ORM\Entity(repositoryClass="Application\Repository\TrJabatanAdministrasiPegawaiRepository")
 */
class TrJabatanAdministrasiPegawai
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
     * @var \DateTime|null
     *
     * @ORM\Column(name="tgl_awal", type="date", nullable=true, options={"default"="current_timestamp()"})
     */
    private $tglAwal = 'current_timestamp()';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="tgl_akhir", type="date", nullable=true, options={"default"="current_timestamp()"})
     */
    private $tglAkhir = 'current_timestamp()';

    /**
     * @var string|null
     *
     * @ORM\Column(name="flag_aktif", type="string", length=1, nullable=true, options={"default"="NULL"})
     */
    private $flagAktif = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="sk_id", type="string", length=36, nullable=true, options={"default"="NULL"})
     */
    private $skId = 'NULL';

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
     * @var \TrFormasiJabatanAdministrasi
     *
     * @ORM\ManyToOne(targetEntity="TrFormasiJabatanAdministrasi")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="formasi_id", referencedColumnName="id")
     * })
     */
    private $formasi;

    /**
     * @var \Pegawai
     *
     * @ORM\ManyToOne(targetEntity="Pegawai")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pegawai_id", referencedColumnName="id")
     * })
     */
    private $pegawai;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getTglAwal(): ?\DateTimeInterface
    {
        return $this->tglAwal;
    }

    public function setTglAwal(?\DateTimeInterface $tglAwal): self
    {
        $this->tglAwal = $tglAwal;

        return $this;
    }

    public function getTglAkhir(): ?\DateTimeInterface
    {
        return $this->tglAkhir;
    }

    public function setTglAkhir(?\DateTimeInterface $tglAkhir): self
    {
        $this->tglAkhir = $tglAkhir;

        return $this;
    }

    public function getFlagAktif(): ?string
    {
        return $this->flagAktif;
    }

    public function setFlagAktif(?string $flagAktif): self
    {
        $this->flagAktif = $flagAktif;

        return $this;
    }

    public function getSkId(): ?string
    {
        return $this->skId;
    }

    public function setSkId(?string $skId): self
    {
        $this->skId = $skId;

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

    public function getFormasi(): ?TrFormasiJabatanAdministrasi
    {
        return $this->formasi;
    }

    public function setFormasi(?TrFormasiJabatanAdministrasi $formasi): self
    {
        $this->formasi = $formasi;

        return $this;
    }

    public function getPegawai(): ?Pegawai
    {
        return $this->pegawai;
    }

    public function setPegawai(?Pegawai $pegawai): self
    {
        $this->pegawai = $pegawai;

        return $this;
    }


}
