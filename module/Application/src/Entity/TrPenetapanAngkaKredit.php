<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrPenetapanAngkaKredit
 *
 * @ORM\Table(name="tr_penetapan_angka_kredit", indexes={@ORM\Index(name="REL_pak_to_tr_usulan", columns={"id_usulan"})})
 * @ORM\Entity(repositoryClass="Application\Repository\TrPenetapanAngkaKreditRepository")
 */
class TrPenetapanAngkaKredit
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
     * @ORM\Column(name="jenis_pak", type="string", length=50, nullable=true, options={"default"="'HAPAK'"})
     */
    private $jenisPak = '\'HAPAK\'';

    /**
     * @var string|null
     *
     * @ORM\Column(name="nomor_pak", type="string", length=50, nullable=true, options={"default"="NULL"})
     */
    private $nomorPak = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="bulan_awal", type="string", length=2, nullable=true, options={"default"="NULL"})
     */
    private $bulanAwal = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="bulan_akhir", type="string", length=2, nullable=true, options={"default"="NULL"})
     */
    private $bulanAkhir = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="tahun_awal", type="string", length=4, nullable=true, options={"default"="NULL"})
     */
    private $tahunAwal = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="tahun_akhir", type="string", length=4, nullable=true, options={"default"="NULL"})
     */
    private $tahunAkhir = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="tahun", type="string", length=4, nullable=true, options={"default"="NULL"})
     */
    private $tahun = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="nip", type="string", length=100, nullable=true, options={"default"="NULL"})
     */
    private $nip = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="nama", type="string", length=100, nullable=true, options={"default"="NULL"})
     */
    private $nama = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="nomor_karpeg", type="string", length=100, nullable=true, options={"default"="NULL"})
     */
    private $nomorKarpeg = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="pangkat", type="string", length=100, nullable=true, options={"default"="NULL"})
     */
    private $pangkat = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="golongan", type="string", length=100, nullable=true, options={"default"="NULL"})
     */
    private $golongan = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="ruang", type="string", length=100, nullable=true, options={"default"="NULL"})
     */
    private $ruang = 'NULL';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="tmt_pangkat_golongan", type="date", nullable=true, options={"default"="NULL"})
     */
    private $tmtPangkatGolongan = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="masa_kerja_golongan", type="string", length=100, nullable=true, options={"default"="NULL"})
     */
    private $masaKerjaGolongan = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="ttl", type="string", length=200, nullable=true, options={"default"="NULL"})
     */
    private $ttl = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="pendidikan", type="string", length=100, nullable=true, options={"default"="NULL"})
     */
    private $pendidikan = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="jabatan_fungsional", type="string", length=100, nullable=true, options={"default"="NULL"})
     */
    private $jabatanFungsional = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="tmt_jabatan_fungsional", type="string", length=100, nullable=true, options={"default"="NULL"})
     */
    private $tmtJabatanFungsional = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="unker", type="string", length=200, nullable=true, options={"default"="NULL"})
     */
    private $unker = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="unker_kode", type="string", length=25, nullable=true, options={"default"="NULL"})
     */
    private $unkerKode = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="jumlah_pak", type="decimal", precision=7, scale=3, nullable=true, options={"default"="NULL"})
     */
    private $jumlahPak = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="jumlah_pak_lama", type="decimal", precision=7, scale=3, nullable=true, options={"default"="NULL"})
     */
    private $jumlahPakLama = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="jumlah_pak_baru", type="decimal", precision=7, scale=3, nullable=true, options={"default"="NULL"})
     */
    private $jumlahPakBaru = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="pertimbangan_dinaikkan", type="string", length=500, nullable=true, options={"default"="NULL"})
     */
    private $pertimbanganDinaikkan = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="pertimbangan_jf", type="string", length=500, nullable=true, options={"default"="NULL"})
     */
    private $pertimbanganJf = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="pertimbangan_pangkat", type="string", length=500, nullable=true, options={"default"="NULL"})
     */
    private $pertimbanganPangkat = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="pertimbangan_golongan", type="string", length=500, nullable=true, options={"default"="NULL"})
     */
    private $pertimbanganGolongan = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="pertimbangan_ruang", type="string", length=500, nullable=true, options={"default"="NULL"})
     */
    private $pertimbanganRuang = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="ditetapkan_di", type="string", length=100, nullable=true, options={"default"="NULL"})
     */
    private $ditetapkanDi = 'NULL';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="tanggal_ditetapkan", type="date", nullable=true, options={"default"="NULL"})
     */
    private $tanggalDitetapkan = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="penanda_tangan_nip", type="string", length=50, nullable=true, options={"default"="NULL"})
     */
    private $penandaTanganNip = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="penanda_tangan_nama", type="string", length=50, nullable=true, options={"default"="NULL"})
     */
    private $penandaTanganNama = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="penanda_tangan_jabatan", type="string", length=100, nullable=true, options={"default"="NULL"})
     */
    private $penandaTanganJabatan = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="format_tanda_tangan", type="string", length=50, nullable=true, options={"default"="NULL"})
     */
    private $formatTandaTangan = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="a_n", type="string", length=50, nullable=true, options={"default"="NULL"})
     */
    private $aN = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="u_b", type="string", length=50, nullable=true, options={"default"="NULL"})
     */
    private $uB = 'NULL';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="meta_dt_add", type="datetime", nullable=true, options={"default"="NULL"})
     */
    private $metaDtAdd = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="meta_add_by", type="string", length=50, nullable=true, options={"default"="NULL"})
     */
    private $metaAddBy = 'NULL';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="meta_dt_update", type="datetime", nullable=true, options={"default"="NULL"})
     */
    private $metaDtUpdate = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="meta_update_by", type="string", length=50, nullable=true, options={"default"="NULL"})
     */
    private $metaUpdateBy = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="penilai", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $penilai = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="tahun_pendidikan", type="string", length=4, nullable=true, options={"default"="NULL"})
     */
    private $tahunPendidikan = 'NULL';

    /**
     * @var \TrUsulan
     *
     * @ORM\ManyToOne(targetEntity="TrUsulan")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_usulan", referencedColumnName="id")
     * })
     */
    private $idUsulan;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getJenisPak(): ?string
    {
        return $this->jenisPak;
    }

    public function setJenisPak(?string $jenisPak): self
    {
        $this->jenisPak = $jenisPak;

        return $this;
    }

    public function getNomorPak(): ?string
    {
        return $this->nomorPak;
    }

    public function setNomorPak(?string $nomorPak): self
    {
        $this->nomorPak = $nomorPak;

        return $this;
    }

    public function getBulanAwal(): ?string
    {
        return $this->bulanAwal;
    }

    public function setBulanAwal(?string $bulanAwal): self
    {
        $this->bulanAwal = $bulanAwal;

        return $this;
    }

    public function getBulanAkhir(): ?string
    {
        return $this->bulanAkhir;
    }

    public function setBulanAkhir(?string $bulanAkhir): self
    {
        $this->bulanAkhir = $bulanAkhir;

        return $this;
    }

    public function getTahunAwal(): ?string
    {
        return $this->tahunAwal;
    }

    public function setTahunAwal(?string $tahunAwal): self
    {
        $this->tahunAwal = $tahunAwal;

        return $this;
    }

    public function getTahunAkhir(): ?string
    {
        return $this->tahunAkhir;
    }

    public function setTahunAkhir(?string $tahunAkhir): self
    {
        $this->tahunAkhir = $tahunAkhir;

        return $this;
    }

    public function getTahun(): ?string
    {
        return $this->tahun;
    }

    public function setTahun(?string $tahun): self
    {
        $this->tahun = $tahun;

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

    public function getNama(): ?string
    {
        return $this->nama;
    }

    public function setNama(?string $nama): self
    {
        $this->nama = $nama;

        return $this;
    }

    public function getNomorKarpeg(): ?string
    {
        return $this->nomorKarpeg;
    }

    public function setNomorKarpeg(?string $nomorKarpeg): self
    {
        $this->nomorKarpeg = $nomorKarpeg;

        return $this;
    }

    public function getPangkat(): ?string
    {
        return $this->pangkat;
    }

    public function setPangkat(?string $pangkat): self
    {
        $this->pangkat = $pangkat;

        return $this;
    }

    public function getGolongan(): ?string
    {
        return $this->golongan;
    }

    public function setGolongan(?string $golongan): self
    {
        $this->golongan = $golongan;

        return $this;
    }

    public function getRuang(): ?string
    {
        return $this->ruang;
    }

    public function setRuang(?string $ruang): self
    {
        $this->ruang = $ruang;

        return $this;
    }

    public function getTmtPangkatGolongan(): ?\DateTimeInterface
    {
        return $this->tmtPangkatGolongan;
    }

    public function setTmtPangkatGolongan(?\DateTimeInterface $tmtPangkatGolongan): self
    {
        $this->tmtPangkatGolongan = $tmtPangkatGolongan;

        return $this;
    }

    public function getMasaKerjaGolongan(): ?string
    {
        return $this->masaKerjaGolongan;
    }

    public function setMasaKerjaGolongan(?string $masaKerjaGolongan): self
    {
        $this->masaKerjaGolongan = $masaKerjaGolongan;

        return $this;
    }

    public function getTtl(): ?string
    {
        return $this->ttl;
    }

    public function setTtl(?string $ttl): self
    {
        $this->ttl = $ttl;

        return $this;
    }

    public function getPendidikan(): ?string
    {
        return $this->pendidikan;
    }

    public function setPendidikan(?string $pendidikan): self
    {
        $this->pendidikan = $pendidikan;

        return $this;
    }

    public function getJabatanFungsional(): ?string
    {
        return $this->jabatanFungsional;
    }

    public function setJabatanFungsional(?string $jabatanFungsional): self
    {
        $this->jabatanFungsional = $jabatanFungsional;

        return $this;
    }

    public function getTmtJabatanFungsional(): ?string
    {
        return $this->tmtJabatanFungsional;
    }

    public function setTmtJabatanFungsional(?string $tmtJabatanFungsional): self
    {
        $this->tmtJabatanFungsional = $tmtJabatanFungsional;

        return $this;
    }

    public function getUnker(): ?string
    {
        return $this->unker;
    }

    public function setUnker(?string $unker): self
    {
        $this->unker = $unker;

        return $this;
    }

    public function getUnkerKode(): ?string
    {
        return $this->unkerKode;
    }

    public function setUnkerKode(?string $unkerKode): self
    {
        $this->unkerKode = $unkerKode;

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

    public function getJumlahPakLama(): ?string
    {
        return $this->jumlahPakLama;
    }

    public function setJumlahPakLama(?string $jumlahPakLama): self
    {
        $this->jumlahPakLama = $jumlahPakLama;

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

    public function getPertimbanganDinaikkan(): ?string
    {
        return $this->pertimbanganDinaikkan;
    }

    public function setPertimbanganDinaikkan(?string $pertimbanganDinaikkan): self
    {
        $this->pertimbanganDinaikkan = $pertimbanganDinaikkan;

        return $this;
    }

    public function getPertimbanganJf(): ?string
    {
        return $this->pertimbanganJf;
    }

    public function setPertimbanganJf(?string $pertimbanganJf): self
    {
        $this->pertimbanganJf = $pertimbanganJf;

        return $this;
    }

    public function getPertimbanganPangkat(): ?string
    {
        return $this->pertimbanganPangkat;
    }

    public function setPertimbanganPangkat(?string $pertimbanganPangkat): self
    {
        $this->pertimbanganPangkat = $pertimbanganPangkat;

        return $this;
    }

    public function getPertimbanganGolongan(): ?string
    {
        return $this->pertimbanganGolongan;
    }

    public function setPertimbanganGolongan(?string $pertimbanganGolongan): self
    {
        $this->pertimbanganGolongan = $pertimbanganGolongan;

        return $this;
    }

    public function getPertimbanganRuang(): ?string
    {
        return $this->pertimbanganRuang;
    }

    public function setPertimbanganRuang(?string $pertimbanganRuang): self
    {
        $this->pertimbanganRuang = $pertimbanganRuang;

        return $this;
    }

    public function getDitetapkanDi(): ?string
    {
        return $this->ditetapkanDi;
    }

    public function setDitetapkanDi(?string $ditetapkanDi): self
    {
        $this->ditetapkanDi = $ditetapkanDi;

        return $this;
    }

    public function getTanggalDitetapkan(): ?\DateTimeInterface
    {
        return $this->tanggalDitetapkan;
    }

    public function setTanggalDitetapkan(?\DateTimeInterface $tanggalDitetapkan): self
    {
        $this->tanggalDitetapkan = $tanggalDitetapkan;

        return $this;
    }

    public function getPenandaTanganNip(): ?string
    {
        return $this->penandaTanganNip;
    }

    public function setPenandaTanganNip(?string $penandaTanganNip): self
    {
        $this->penandaTanganNip = $penandaTanganNip;

        return $this;
    }

    public function getPenandaTanganNama(): ?string
    {
        return $this->penandaTanganNama;
    }

    public function setPenandaTanganNama(?string $penandaTanganNama): self
    {
        $this->penandaTanganNama = $penandaTanganNama;

        return $this;
    }

    public function getPenandaTanganJabatan(): ?string
    {
        return $this->penandaTanganJabatan;
    }

    public function setPenandaTanganJabatan(?string $penandaTanganJabatan): self
    {
        $this->penandaTanganJabatan = $penandaTanganJabatan;

        return $this;
    }

    public function getFormatTandaTangan(): ?string
    {
        return $this->formatTandaTangan;
    }

    public function setFormatTandaTangan(?string $formatTandaTangan): self
    {
        $this->formatTandaTangan = $formatTandaTangan;

        return $this;
    }

    public function getAN(): ?string
    {
        return $this->aN;
    }

    public function setAN(?string $aN): self
    {
        $this->aN = $aN;

        return $this;
    }

    public function getUB(): ?string
    {
        return $this->uB;
    }

    public function setUB(?string $uB): self
    {
        $this->uB = $uB;

        return $this;
    }

    public function getMetaDtAdd(): ?\DateTimeInterface
    {
        return $this->metaDtAdd;
    }

    public function setMetaDtAdd(?\DateTimeInterface $metaDtAdd): self
    {
        $this->metaDtAdd = $metaDtAdd;

        return $this;
    }

    public function getMetaAddBy(): ?string
    {
        return $this->metaAddBy;
    }

    public function setMetaAddBy(?string $metaAddBy): self
    {
        $this->metaAddBy = $metaAddBy;

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

    public function getPenilai(): ?int
    {
        return $this->penilai;
    }

    public function setPenilai(?int $penilai): self
    {
        $this->penilai = $penilai;

        return $this;
    }

    public function getTahunPendidikan(): ?string
    {
        return $this->tahunPendidikan;
    }

    public function setTahunPendidikan(?string $tahunPendidikan): self
    {
        $this->tahunPendidikan = $tahunPendidikan;

        return $this;
    }

    public function getIdUsulan(): ?TrUsulan
    {
        return $this->idUsulan;
    }

    public function setIdUsulan(?TrUsulan $idUsulan): self
    {
        $this->idUsulan = $idUsulan;

        return $this;
    }


}

