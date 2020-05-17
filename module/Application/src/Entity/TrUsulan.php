<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrUsulan
 *
 * @ORM\Table(name="tr_usulan")
 * @ORM\Entity(repositoryClass="App\Repository\TrUsulanRepository")
 */
class TrUsulan
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
     * @ORM\Column(name="id_pegawai", type="string", length=36, nullable=true, options={"default"="NULL"})
     */
    private $idPegawai = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="id_atasan", type="string", length=36, nullable=true, options={"default"="NULL"})
     */
    private $idAtasan = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="id_pengusul", type="string", length=36, nullable=true, options={"default"="NULL"})
     */
    private $idPengusul = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="panggol_atasan", type="string", length=50, nullable=true, options={"default"="NULL"})
     */
    private $panggolAtasan = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="panggol_pengusul", type="string", length=50, nullable=true, options={"default"="NULL"})
     */
    private $panggolPengusul = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="id_organisasi_atasan", type="string", length=36, nullable=true, options={"default"="NULL"})
     */
    private $idOrganisasiAtasan = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="id_organisasi_pengusul", type="string", length=36, nullable=true, options={"default"="NULL"})
     */
    private $idOrganisasiPengusul = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="flag_status", type="string", length=10, nullable=true, options={"default"="NULL"})
     */
    private $flagStatus = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="id_flow_path", type="string", length=36, nullable=true, options={"default"="NULL"})
     */
    private $idFlowPath = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="flow_status", type="string", length=36, nullable=true, options={"default"="NULL"})
     */
    private $flowStatus = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="penilai_1_id", type="string", length=36, nullable=true, options={"default"="NULL"})
     */
    private $penilai1Id = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="penilai_1_nip", type="string", length=25, nullable=true, options={"default"="NULL"})
     */
    private $penilai1Nip = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="penilai_1_panggol", type="string", length=50, nullable=true, options={"default"="NULL"})
     */
    private $penilai1Panggol = 'NULL';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="penilai_1_dt_start", type="datetime", nullable=true, options={"default"="NULL"})
     */
    private $penilai1DtStart = 'NULL';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="penilai_1_dt_end", type="datetime", nullable=true, options={"default"="NULL"})
     */
    private $penilai1DtEnd = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="penilai_1_status", type="string", length=10, nullable=true, options={"default"="NULL"})
     */
    private $penilai1Status = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="penilai_2_id", type="string", length=36, nullable=true, options={"default"="NULL"})
     */
    private $penilai2Id = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="penilai_2_nip", type="string", length=25, nullable=true, options={"default"="NULL"})
     */
    private $penilai2Nip = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="penilai_2_panggol", type="string", length=50, nullable=true, options={"default"="NULL"})
     */
    private $penilai2Panggol = 'NULL';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="penilai_2_dt_start", type="datetime", nullable=true, options={"default"="NULL"})
     */
    private $penilai2DtStart = 'NULL';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="penilai_2_dt_end", type="datetime", nullable=true, options={"default"="NULL"})
     */
    private $penilai2DtEnd = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="penilai_2_status", type="string", length=10, nullable=true, options={"default"="NULL"})
     */
    private $penilai2Status = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="penilai_3_id", type="string", length=36, nullable=true, options={"default"="NULL"})
     */
    private $penilai3Id = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="penilai_3_nip", type="string", length=25, nullable=true, options={"default"="NULL"})
     */
    private $penilai3Nip = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="penilai_3_panggol", type="string", length=50, nullable=true, options={"default"="NULL"})
     */
    private $penilai3Panggol = 'NULL';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="penilai_3_dt_start", type="datetime", nullable=true, options={"default"="NULL"})
     */
    private $penilai3DtStart = 'NULL';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="penilai_3_dt_end", type="datetime", nullable=true, options={"default"="NULL"})
     */
    private $penilai3DtEnd = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="penilai_3_status", type="string", length=10, nullable=true, options={"default"="NULL"})
     */
    private $penilai3Status = 'NULL';

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getIdPegawai(): ?string
    {
        return $this->idPegawai;
    }

    public function setIdPegawai(?string $idPegawai): self
    {
        $this->idPegawai = $idPegawai;

        return $this;
    }

    public function getIdAtasan(): ?string
    {
        return $this->idAtasan;
    }

    public function setIdAtasan(?string $idAtasan): self
    {
        $this->idAtasan = $idAtasan;

        return $this;
    }

    public function getIdPengusul(): ?string
    {
        return $this->idPengusul;
    }

    public function setIdPengusul(?string $idPengusul): self
    {
        $this->idPengusul = $idPengusul;

        return $this;
    }

    public function getPanggolAtasan(): ?string
    {
        return $this->panggolAtasan;
    }

    public function setPanggolAtasan(?string $panggolAtasan): self
    {
        $this->panggolAtasan = $panggolAtasan;

        return $this;
    }

    public function getPanggolPengusul(): ?string
    {
        return $this->panggolPengusul;
    }

    public function setPanggolPengusul(?string $panggolPengusul): self
    {
        $this->panggolPengusul = $panggolPengusul;

        return $this;
    }

    public function getIdOrganisasiAtasan(): ?string
    {
        return $this->idOrganisasiAtasan;
    }

    public function setIdOrganisasiAtasan(?string $idOrganisasiAtasan): self
    {
        $this->idOrganisasiAtasan = $idOrganisasiAtasan;

        return $this;
    }

    public function getIdOrganisasiPengusul(): ?string
    {
        return $this->idOrganisasiPengusul;
    }

    public function setIdOrganisasiPengusul(?string $idOrganisasiPengusul): self
    {
        $this->idOrganisasiPengusul = $idOrganisasiPengusul;

        return $this;
    }

    public function getFlagStatus(): ?string
    {
        return $this->flagStatus;
    }

    public function setFlagStatus(?string $flagStatus): self
    {
        $this->flagStatus = $flagStatus;

        return $this;
    }

    public function getIdFlowPath(): ?string
    {
        return $this->idFlowPath;
    }

    public function setIdFlowPath(?string $idFlowPath): self
    {
        $this->idFlowPath = $idFlowPath;

        return $this;
    }

    public function getFlowStatus(): ?string
    {
        return $this->flowStatus;
    }

    public function setFlowStatus(?string $flowStatus): self
    {
        $this->flowStatus = $flowStatus;

        return $this;
    }

    public function getPenilai1Id(): ?string
    {
        return $this->penilai1Id;
    }

    public function setPenilai1Id(?string $penilai1Id): self
    {
        $this->penilai1Id = $penilai1Id;

        return $this;
    }

    public function getPenilai1Nip(): ?string
    {
        return $this->penilai1Nip;
    }

    public function setPenilai1Nip(?string $penilai1Nip): self
    {
        $this->penilai1Nip = $penilai1Nip;

        return $this;
    }

    public function getPenilai1Panggol(): ?string
    {
        return $this->penilai1Panggol;
    }

    public function setPenilai1Panggol(?string $penilai1Panggol): self
    {
        $this->penilai1Panggol = $penilai1Panggol;

        return $this;
    }

    public function getPenilai1DtStart(): ?\DateTimeInterface
    {
        return $this->penilai1DtStart;
    }

    public function setPenilai1DtStart(?\DateTimeInterface $penilai1DtStart): self
    {
        $this->penilai1DtStart = $penilai1DtStart;

        return $this;
    }

    public function getPenilai1DtEnd(): ?\DateTimeInterface
    {
        return $this->penilai1DtEnd;
    }

    public function setPenilai1DtEnd(?\DateTimeInterface $penilai1DtEnd): self
    {
        $this->penilai1DtEnd = $penilai1DtEnd;

        return $this;
    }

    public function getPenilai1Status(): ?string
    {
        return $this->penilai1Status;
    }

    public function setPenilai1Status(?string $penilai1Status): self
    {
        $this->penilai1Status = $penilai1Status;

        return $this;
    }

    public function getPenilai2Id(): ?string
    {
        return $this->penilai2Id;
    }

    public function setPenilai2Id(?string $penilai2Id): self
    {
        $this->penilai2Id = $penilai2Id;

        return $this;
    }

    public function getPenilai2Nip(): ?string
    {
        return $this->penilai2Nip;
    }

    public function setPenilai2Nip(?string $penilai2Nip): self
    {
        $this->penilai2Nip = $penilai2Nip;

        return $this;
    }

    public function getPenilai2Panggol(): ?string
    {
        return $this->penilai2Panggol;
    }

    public function setPenilai2Panggol(?string $penilai2Panggol): self
    {
        $this->penilai2Panggol = $penilai2Panggol;

        return $this;
    }

    public function getPenilai2DtStart(): ?\DateTimeInterface
    {
        return $this->penilai2DtStart;
    }

    public function setPenilai2DtStart(?\DateTimeInterface $penilai2DtStart): self
    {
        $this->penilai2DtStart = $penilai2DtStart;

        return $this;
    }

    public function getPenilai2DtEnd(): ?\DateTimeInterface
    {
        return $this->penilai2DtEnd;
    }

    public function setPenilai2DtEnd(?\DateTimeInterface $penilai2DtEnd): self
    {
        $this->penilai2DtEnd = $penilai2DtEnd;

        return $this;
    }

    public function getPenilai2Status(): ?string
    {
        return $this->penilai2Status;
    }

    public function setPenilai2Status(?string $penilai2Status): self
    {
        $this->penilai2Status = $penilai2Status;

        return $this;
    }

    public function getPenilai3Id(): ?string
    {
        return $this->penilai3Id;
    }

    public function setPenilai3Id(?string $penilai3Id): self
    {
        $this->penilai3Id = $penilai3Id;

        return $this;
    }

    public function getPenilai3Nip(): ?string
    {
        return $this->penilai3Nip;
    }

    public function setPenilai3Nip(?string $penilai3Nip): self
    {
        $this->penilai3Nip = $penilai3Nip;

        return $this;
    }

    public function getPenilai3Panggol(): ?string
    {
        return $this->penilai3Panggol;
    }

    public function setPenilai3Panggol(?string $penilai3Panggol): self
    {
        $this->penilai3Panggol = $penilai3Panggol;

        return $this;
    }

    public function getPenilai3DtStart(): ?\DateTimeInterface
    {
        return $this->penilai3DtStart;
    }

    public function setPenilai3DtStart(?\DateTimeInterface $penilai3DtStart): self
    {
        $this->penilai3DtStart = $penilai3DtStart;

        return $this;
    }

    public function getPenilai3DtEnd(): ?\DateTimeInterface
    {
        return $this->penilai3DtEnd;
    }

    public function setPenilai3DtEnd(?\DateTimeInterface $penilai3DtEnd): self
    {
        $this->penilai3DtEnd = $penilai3DtEnd;

        return $this;
    }

    public function getPenilai3Status(): ?string
    {
        return $this->penilai3Status;
    }

    public function setPenilai3Status(?string $penilai3Status): self
    {
        $this->penilai3Status = $penilai3Status;

        return $this;
    }


}
