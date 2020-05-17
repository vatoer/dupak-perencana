<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RefUnsur
 *
 * @ORM\Table(name="ref_unsur")
 * @ORM\Entity(repositoryClass="App\Repository\RefUnsurRepository")
 */
class RefUnsur
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
     * @ORM\Column(name="id_jabatan_fungsional", type="string", length=36, nullable=true, options={"default"="NULL"})
     */
    private $idJabatanFungsional = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="nama", type="string", length=150, nullable=true, options={"default"="'NULL'"})
     */
    private $nama = '\'NULL\'';

    /**
     * @var string|null
     *
     * @ORM\Column(name="keterangan", type="string", length=200, nullable=true, options={"default"="NULL"})
     */
    private $keterangan = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="kode_romawi", type="string", length=4, nullable=true, options={"default"="'NULL'"})
     */
    private $kodeRomawi = '\'NULL\'';

    /**
     * @var int|null
     *
     * @ORM\Column(name="kode_angka", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $kodeAngka = 'NULL';

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getIdJabatanFungsional(): ?string
    {
        return $this->idJabatanFungsional;
    }

    public function setIdJabatanFungsional(?string $idJabatanFungsional): self
    {
        $this->idJabatanFungsional = $idJabatanFungsional;

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

    public function getKodeRomawi(): ?string
    {
        return $this->kodeRomawi;
    }

    public function setKodeRomawi(?string $kodeRomawi): self
    {
        $this->kodeRomawi = $kodeRomawi;

        return $this;
    }

    public function getKodeAngka(): ?int
    {
        return $this->kodeAngka;
    }

    public function setKodeAngka(?int $kodeAngka): self
    {
        $this->kodeAngka = $kodeAngka;

        return $this;
    }


}
