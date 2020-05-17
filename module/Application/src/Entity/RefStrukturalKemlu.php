<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RefStrukturalKemlu
 *
 * @ORM\Table(name="ref_struktural_kemlu")
 * @ORM\Entity
 */
class RefStrukturalKemlu
{
    /**
     * @var string
     *
     * @ORM\Column(name="kd_jabatan", type="string", length=25, nullable=false, options={"default"="'NULL'"})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $kdJabatan = '\'NULL\'';

    /**
     * @var string|null
     *
     * @ORM\Column(name="ket_jabatan", type="text", length=65535, nullable=true, options={"default"="NULL"})
     */
    private $ketJabatan = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="jml_formasi", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $jmlFormasi = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="eselon", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $eselon = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="kd_eselon", type="text", length=65535, nullable=true, options={"default"="NULL"})
     */
    private $kdEselon = 'NULL';

    public function getKdJabatan(): ?string
    {
        return $this->kdJabatan;
    }

    public function getKetJabatan(): ?string
    {
        return $this->ketJabatan;
    }

    public function setKetJabatan(?string $ketJabatan): self
    {
        $this->ketJabatan = $ketJabatan;

        return $this;
    }

    public function getJmlFormasi(): ?int
    {
        return $this->jmlFormasi;
    }

    public function setJmlFormasi(?int $jmlFormasi): self
    {
        $this->jmlFormasi = $jmlFormasi;

        return $this;
    }

    public function getEselon(): ?int
    {
        return $this->eselon;
    }

    public function setEselon(?int $eselon): self
    {
        $this->eselon = $eselon;

        return $this;
    }

    public function getKdEselon(): ?string
    {
        return $this->kdEselon;
    }

    public function setKdEselon(?string $kdEselon): self
    {
        $this->kdEselon = $kdEselon;

        return $this;
    }


}
