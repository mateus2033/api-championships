<?php

namespace App\Domain\Entities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Athletes extends Model
{
    use HasFactory;

    protected $table = 'athletes';

    protected $fillable = [
        'id',
        'code',
        'name',
        'date_of_birth',
        'cpf',
        'sex',
        'email',
        'password',
        'team',
        'range',
        'weight',
        'registration_date'
    ];

    private int $id;
    private string $code;
    private string $name;
    private string $date_of_birth;
    private string $cpf;
    private string $sex;
    private string $email;
    private string $password;
    private string $team;
    private string $range;
    private string $weight;
    private string $registration_date;


    /**
     * Get the value of id
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Set the value of id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * Get the value of code
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * Set the value of code
     */
    public function setCode(string $code): void
    {
        $this->code = $code;
    }

    /**
     * Get the value of name
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set the value of name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * Get the value of date_of_birth
     */
    public function getDateOfBirth(): string
    {
        return $this->date_of_birth;
    }

    /**
     * Set the value of date_of_birth
     */
    public function setDateOfBirth(string $date_of_birth): void
    {
        $this->date_of_birth = $date_of_birth;
    }

    /**
     * Get the value of cpf
     */
    public function getCpf(): string
    {
        return $this->cpf;
    }

    /**
     * Set the value of cpf
     */
    public function setCpf(string $cpf): void
    {
        $this->cpf = $cpf;
    }

    /**
     * Get the value of sex
     */
    public function getSex(): string
    {
        return $this->sex;
    }

    /**
     * Set the value of sex
     */
    public function setSex(string $sex): void
    {
        $this->sex = $sex;
    }

    /**
     * Get the value of email
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * Set the value of email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * Get the value of password
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * Set the value of password
     */
    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    /**
     * Get the value of team
     */
    public function getTeam(): string
    {
        return $this->team;
    }

    /**
     * Set the value of team
     */
    public function setTeam(string $team): void
    {
        $this->team = $team;
    }

    /**
     * Get the value of range
     */
    public function getRange(): string
    {
        return $this->range;
    }

    /**
     * Set the value of range
     */
    public function setRange(string $range): void
    {
        $this->range = $range;
    }

    /**
     * Get the value of weight
     */
    public function getWeight(): string
    {
        return $this->weight;
    }

    /**
     * Set the value of weight
     */
    public function setWeight(string $weight): void
    {
        $this->weight = $weight;
    }

    /**
     * Get the value of registration_date
     */
    public function getRegistrationDate(): string
    {
        return $this->registration_date;
    }

    /**
     * Set the value of registration_date
     */
    public function setRegistrationDate(string $registration_date): void
    {
        $this->registration_date = $registration_date;
    }
}
