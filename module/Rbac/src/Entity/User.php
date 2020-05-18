<?php

namespace Rbac\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user", uniqueConstraints={@ORM\UniqueConstraint(name="username_idx", columns={"username"})})
 * @ORM\Entity
 */
class User
{
    // User status constants.
    const STATUS_ACTIVE       = 1; // Active user.
    const STATUS_RETIRED      = 2; // Retired user.
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=36, nullable=false)
     */
    private $username;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email", type="string", length=128, nullable=true, options={"default"="NULL"})
     */
    private $email = NULL;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=256, nullable=false)
     */
    private $password;

    /**
     * @var int
     *
     * @ORM\Column(name="status", type="integer", nullable=false)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="login_type", type="string", length=10, nullable=true)
     */
    private $loginType = NULL;

    

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_created", type="datetime", nullable=false)
     */
    private $dateCreated;

    /**
     * @var string|null
     *
     * @ORM\Column(name="pwd_reset_token", type="string", length=32, nullable=true, options={"default"="NULL"})
     */
    private $pwdResetToken = NULL;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="pwd_reset_token_creation_date", type="datetime", nullable=true, options={"default"="NULL"})
     */
    private $pwdResetTokenCreationDate = NULL;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getStatus(): ?int
    {
        return $this->status;
    }

    public function setStatus(int $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getDateCreated(): ?\DateTimeInterface
    {
        return $this->dateCreated;
    }

    public function setDateCreated(\DateTimeInterface $dateCreated): self
    {
        $this->dateCreated = $dateCreated;

        return $this;
    }

    public function getPwdResetToken(): ?string
    {
        return $this->pwdResetToken;
    }

    public function setPwdResetToken(?string $pwdResetToken): self
    {
        $this->pwdResetToken = $pwdResetToken;

        return $this;
    }

    public function getPwdResetTokenCreationDate(): ?\DateTimeInterface
    {
        return $this->pwdResetTokenCreationDate;
    }

    public function setPwdResetTokenCreationDate(?\DateTimeInterface $pwdResetTokenCreationDate): self
    {
        $this->pwdResetTokenCreationDate = $pwdResetTokenCreationDate;

        return $this;
    }



    /**
     * Get the value of loginType
     *
     * @return  string
     */ 
    public function getLoginType():string
    {
        return $this->loginType;
    }

    /**
     * Set the value of loginType
     *
     * @param  string  $loginType
     *
     * @return  self
     */ 
    public function setLoginType(?string $loginType)
    {
        $this->loginType = $loginType;

        return $this;
    }
}
