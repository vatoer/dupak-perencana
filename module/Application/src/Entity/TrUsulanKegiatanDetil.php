<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrUsulanKegiatanDetil
 *
 * @ORM\Table(name="tr_usulan_kegiatan_detil", indexes={@ORM\Index(name="REL_tr_usulan_kegiatan", columns={"id_usulan_kegiatan"})})
 * @ORM\Entity(repositoryClass="Application\Repository\TrUsulanKegiatanDetilRepository")
 */
class TrUsulanKegiatanDetil
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="tanggal_mulai", type="date", nullable=true, options={"default"="NULL"})
     */
    private $tanggalMulai = 'NULL';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="tanggal_akhir", type="date", nullable=true, options={"default"="NULL"})
     */
    private $tanggalAkhir = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="n_usulan", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $nUsulan = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="n_usulan_kualitas", type="decimal", precision=10, scale=0, nullable=true, options={"default"="NULL"})
     */
    private $nUsulanKualitas = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="n_1", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $n1 = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="n_1_kualitas", type="decimal", precision=10, scale=0, nullable=true, options={"default"="NULL"})
     */
    private $n1Kualitas = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="n_2", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $n2 = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="n_2_kualitas", type="decimal", precision=10, scale=0, nullable=true, options={"default"="NULL"})
     */
    private $n2Kualitas = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="n_3", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $n3 = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="n_3_kualitas", type="decimal", precision=10, scale=0, nullable=true, options={"default"="NULL"})
     */
    private $n3Kualitas = 'NULL';

    /**
     * @var \TrUsulanKegiatan
     *
     * @ORM\ManyToOne(targetEntity="TrUsulanKegiatan")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_usulan_kegiatan", referencedColumnName="id")
     * })
     */
    private $idUsulanKegiatan;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTanggalMulai(): ?\DateTimeInterface
    {
        return $this->tanggalMulai;
    }

    public function setTanggalMulai(?\DateTimeInterface $tanggalMulai): self
    {
        $this->tanggalMulai = $tanggalMulai;

        return $this;
    }

    public function getTanggalAkhir(): ?\DateTimeInterface
    {
        return $this->tanggalAkhir;
    }

    public function setTanggalAkhir(?\DateTimeInterface $tanggalAkhir): self
    {
        $this->tanggalAkhir = $tanggalAkhir;

        return $this;
    }

    public function getNUsulan(): ?int
    {
        return $this->nUsulan;
    }

    public function setNUsulan(?int $nUsulan): self
    {
        $this->nUsulan = $nUsulan;

        return $this;
    }

    public function getNUsulanKualitas(): ?string
    {
        return $this->nUsulanKualitas;
    }

    public function setNUsulanKualitas(?string $nUsulanKualitas): self
    {
        $this->nUsulanKualitas = $nUsulanKualitas;

        return $this;
    }

    public function getN1(): ?int
    {
        return $this->n1;
    }

    public function setN1(?int $n1): self
    {
        $this->n1 = $n1;

        return $this;
    }

    public function getN1Kualitas(): ?string
    {
        return $this->n1Kualitas;
    }

    public function setN1Kualitas(?string $n1Kualitas): self
    {
        $this->n1Kualitas = $n1Kualitas;

        return $this;
    }

    public function getN2(): ?int
    {
        return $this->n2;
    }

    public function setN2(?int $n2): self
    {
        $this->n2 = $n2;

        return $this;
    }

    public function getN2Kualitas(): ?string
    {
        return $this->n2Kualitas;
    }

    public function setN2Kualitas(?string $n2Kualitas): self
    {
        $this->n2Kualitas = $n2Kualitas;

        return $this;
    }

    public function getN3(): ?int
    {
        return $this->n3;
    }

    public function setN3(?int $n3): self
    {
        $this->n3 = $n3;

        return $this;
    }

    public function getN3Kualitas(): ?string
    {
        return $this->n3Kualitas;
    }

    public function setN3Kualitas(?string $n3Kualitas): self
    {
        $this->n3Kualitas = $n3Kualitas;

        return $this;
    }

    public function getIdUsulanKegiatan(): ?TrUsulanKegiatan
    {
        return $this->idUsulanKegiatan;
    }

    public function setIdUsulanKegiatan(?TrUsulanKegiatan $idUsulanKegiatan): self
    {
        $this->idUsulanKegiatan = $idUsulanKegiatan;

        return $this;
    }


}
