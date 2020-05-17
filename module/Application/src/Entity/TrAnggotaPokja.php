<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrAnggotaPokja
 *
 * @ORM\Table(name="tr_anggota_pokja", indexes={@ORM\Index(name="REL_p_to_tr_a_pokja", columns={"pegawai_id"}), @ORM\Index(name="REL_ref_k_k_tr_ang_pok", columns={"pokja_id"})})
 * @ORM\Entity(repositoryClass="App\Repository\TrAnggotaPokjaRepository")
 */
class TrAnggotaPokja
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
     * @var bool|null
     *
     * @ORM\Column(name="flag_aktif", type="boolean", nullable=true)
     */
    private $flagAktif = '0';

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
     * @var \Pegawai
     *
     * @ORM\ManyToOne(targetEntity="Pegawai")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pegawai_id", referencedColumnName="id")
     * })
     */
    private $pegawai;

    /**
     * @var \RefKelompokKerja
     *
     * @ORM\ManyToOne(targetEntity="RefKelompokKerja")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pokja_id", referencedColumnName="id")
     * })
     */
    private $pokja;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getFlagAktif(): ?bool
    {
        return $this->flagAktif;
    }

    public function setFlagAktif(?bool $flagAktif): self
    {
        $this->flagAktif = $flagAktif;

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

    public function getPegawai(): ?Pegawai
    {
        return $this->pegawai;
    }

    public function setPegawai(?Pegawai $pegawai): self
    {
        $this->pegawai = $pegawai;

        return $this;
    }

    public function getPokja(): ?RefKelompokKerja
    {
        return $this->pokja;
    }

    public function setPokja(?RefKelompokKerja $pokja): self
    {
        $this->pokja = $pokja;

        return $this;
    }


}
