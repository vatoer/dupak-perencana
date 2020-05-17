<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrDetilPenetapanAngkaKredit
 *
 * @ORM\Table(name="tr_detil_penetapan_angka_kredit")
 * @ORM\Entity(repositoryClass="Application\Repository\TrDetilPenetapanAngkaKreditRepository")
 */
class TrDetilPenetapanAngkaKredit
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
     * @var string|null
     *
     * @ORM\Column(name="id_pak", type="string", length=36, nullable=true, options={"default"="NULL"})
     */
    private $idPak = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="grouping_nilai", type="string", length=50, nullable=true, options={"default"="NULL"})
     */
    private $groupingNilai = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="grouping_keterangan", type="string", length=50, nullable=true, options={"default"="NULL"})
     */
    private $groupingKeterangan = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="jumlah_pak", type="decimal", precision=7, scale=3, nullable=true, options={"default"="NULL"})
     */
    private $jumlahPak = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="jumlak_pak_lama", type="decimal", precision=7, scale=3, nullable=true, options={"default"="NULL"})
     */
    private $jumlakPakLama = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="jumlah_pak_baru", type="decimal", precision=7, scale=3, nullable=true, options={"default"="NULL"})
     */
    private $jumlahPakBaru = 'NULL';

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdPak(): ?string
    {
        return $this->idPak;
    }

    public function setIdPak(?string $idPak): self
    {
        $this->idPak = $idPak;

        return $this;
    }

    public function getGroupingNilai(): ?string
    {
        return $this->groupingNilai;
    }

    public function setGroupingNilai(?string $groupingNilai): self
    {
        $this->groupingNilai = $groupingNilai;

        return $this;
    }

    public function getGroupingKeterangan(): ?string
    {
        return $this->groupingKeterangan;
    }

    public function setGroupingKeterangan(?string $groupingKeterangan): self
    {
        $this->groupingKeterangan = $groupingKeterangan;

        return $this;
    }

    public function getJumlahPak(): ?string
    {
        return $this->jumlahPak;
    }

    public function setJumlahPak(?string $jumlahPak): self
    {
        $this->jumlahPak = $jumlahPak;

        return $this;
    }

    public function getJumlakPakLama(): ?string
    {
        return $this->jumlakPakLama;
    }

    public function setJumlakPakLama(?string $jumlakPakLama): self
    {
        $this->jumlakPakLama = $jumlakPakLama;

        return $this;
    }

    public function getJumlahPakBaru(): ?string
    {
        return $this->jumlahPakBaru;
    }

    public function setJumlahPakBaru(?string $jumlahPakBaru): self
    {
        $this->jumlahPakBaru = $jumlahPakBaru;

        return $this;
    }


}
