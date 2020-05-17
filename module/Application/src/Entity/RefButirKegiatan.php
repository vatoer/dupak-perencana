<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RefButirKegiatan
 *
 * @ORM\Table(name="ref_butir_kegiatan", indexes={@ORM\Index(name="REL_to_ref_satuan_hasil", columns={"id_satuan_hasil"}), @ORM\Index(name="REL_to_ref_sub_unsur", columns={"id_sub_unsur"}), @ORM\Index(name="REL_to_ref_jenjang_jf", columns={"id_jenjang_jabatan_fungsional"})})
 * @ORM\Entity(repositoryClass="Application\Repository\RefButirKegiatanRepository")
 */
class RefButirKegiatan
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
     * @ORM\Column(name="kode", type="string", length=25, nullable=true, options={"default"="'NULL'"})
     */
    private $kode = '\'NULL\'';

    /**
     * @var string|null
     *
     * @ORM\Column(name="kegiatan", type="string", length=1000, nullable=true, options={"default"="NULL"})
     */
    private $kegiatan = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="angka_kredit", type="decimal", precision=10, scale=3, nullable=true, options={"default"="0.000"})
     */
    private $angkaKredit = '0.000';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="isTitle", type="boolean", nullable=true)
     */
    private $istitle = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="keterangan", type="string", length=1000, nullable=true, options={"default"="'NULL'"})
     */
    private $keterangan = '\'NULL\'';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hasTitle", type="boolean", nullable=true, options={"default"="NULL"})
     */
    private $hastitle = 'NULL';

    /**
     * @var \RefJenjangJabatanFungsional
     *
     * @ORM\ManyToOne(targetEntity="RefJenjangJabatanFungsional")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_jenjang_jabatan_fungsional", referencedColumnName="id")
     * })
     */
    private $idJenjangJabatanFungsional;

    /**
     * @var \RefSatuanHasil
     *
     * @ORM\ManyToOne(targetEntity="RefSatuanHasil")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_satuan_hasil", referencedColumnName="id")
     * })
     */
    private $idSatuanHasil;

    /**
     * @var \RefSubUnsur
     *
     * @ORM\ManyToOne(targetEntity="RefSubUnsur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_sub_unsur", referencedColumnName="id")
     * })
     */
    private $idSubUnsur;

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

    public function getKegiatan(): ?string
    {
        return $this->kegiatan;
    }

    public function setKegiatan(?string $kegiatan): self
    {
        $this->kegiatan = $kegiatan;

        return $this;
    }

    public function getAngkaKredit(): ?string
    {
        return $this->angkaKredit;
    }

    public function setAngkaKredit(?string $angkaKredit): self
    {
        $this->angkaKredit = $angkaKredit;

        return $this;
    }

    public function getIstitle(): ?bool
    {
        return $this->istitle;
    }

    public function setIstitle(?bool $istitle): self
    {
        $this->istitle = $istitle;

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

    public function getHastitle(): ?bool
    {
        return $this->hastitle;
    }

    public function setHastitle(?bool $hastitle): self
    {
        $this->hastitle = $hastitle;

        return $this;
    }

    public function getIdJenjangJabatanFungsional(): ?RefJenjangJabatanFungsional
    {
        return $this->idJenjangJabatanFungsional;
    }

    public function setIdJenjangJabatanFungsional(?RefJenjangJabatanFungsional $idJenjangJabatanFungsional): self
    {
        $this->idJenjangJabatanFungsional = $idJenjangJabatanFungsional;

        return $this;
    }

    public function getIdSatuanHasil(): ?RefSatuanHasil
    {
        return $this->idSatuanHasil;
    }

    public function setIdSatuanHasil(?RefSatuanHasil $idSatuanHasil): self
    {
        $this->idSatuanHasil = $idSatuanHasil;

        return $this;
    }

    public function getIdSubUnsur(): ?RefSubUnsur
    {
        return $this->idSubUnsur;
    }

    public function setIdSubUnsur(?RefSubUnsur $idSubUnsur): self
    {
        $this->idSubUnsur = $idSubUnsur;

        return $this;
    }


}

