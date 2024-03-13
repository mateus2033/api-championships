<?php

namespace App\Domain\Entities;

use DateTime;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Championships extends Model
{
    use HasFactory;

    protected $table = 'championships';
    
    protected $fillable= [
        'id',
        'code',
        'tittle_championship',
        'city',
        'state',
        'date_of_Realization',
        'about_event',
        'gymnasium',
        'general_information',
        'public_entrance',
        'type',
        'phase'
    ];

    private int $id;
    private string $code;
    private string $tittle_championship;
    private string $city;
    private string $state;
    private string $about_event;
    private string $gymnasium;
    private string $general_information;
    private string $public_entrance;
    private string $type;
    private string $phase;
    private string $date_of_Realization;


    /**
     * Get the value of id
     * @return int
     */ 
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Set the value of id
     */ 
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * Get the value of code
     * @return string
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
     * Get the value of phase
     * @return string
     */ 
    public function getPhase(): string
    {
        return $this->phase;
    }

    /**
     * Set the value of phase
     */ 
    public function setPhase(string $phase): void
    {
        $this->phase = $phase;
    }

    /**
     * Get the value of type
     * @return string
     */ 
    public function getType(): string 
    {
        return $this->type;
    }

    /**
     * Set the value of type
     */ 
    public function setType(string $type): void
    {
        $this->type = $type;
    }

    /**
     * Get the value of public_entrance
     * @return string
     */ 
    public function getPublic_entrance(): string
    {
        return $this->public_entrance;
    }

    /**
     * Set the value of public_entrance
     */ 
    public function setPublic_entrance(string $public_entrance): void
    {
        $this->public_entrance = $public_entrance;
    }

    /**
     * Get the value of general_information
     * @return string
     */ 
    public function getGeneral_information(): string
    {
        return $this->general_information;
    }

    /**
     * Set the value of general_information
     */ 
    public function setGeneral_information(string $general_information): void
    {
        $this->general_information = $general_information;
    }

    /**
     * Get the value of gymnasium
     * @return string
     */ 
    public function getGymnasium(): string
    {
        return $this->gymnasium;
    }

    /**
     * Set the value of gymnasium
     */ 
    public function setGymnasium(string $gymnasium): void
    {
        $this->gymnasium = $gymnasium;
    }

    /**
     * Get the value of about_event
     * @return string
     */ 
    public function getAbout_event(): string
    {
        return $this->about_event;
    }

    /**
     * Set the value of about_event
     */ 
    public function setAbout_event(string $about_event): void
    {
        $this->about_event = $about_event;
    }

    /**
     * Get the value of state
     * @return string
     */ 
    public function getState(): string
    {
        return $this->state;
    }

    /**
     * Set the value of state
     */ 
    public function setState(string $state): void
    {
        $this->state = $state;
    }

    /**
     * Get the value of city
     * @return string
     */ 
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * Set the value of city
     */ 
    public function setCity(string $city): void
    {
        $this->city = $city;
    }

    /**
     * Get the value of tittle_championship
     * @return string
     */ 
    public function getTittle_championship(): string
    {
        return $this->tittle_championship;
    }

    /**
     * Set the value of tittle_championship
     */ 
    public function setTittle_championship(string $tittle_championship): void
    {
        $this->tittle_championship = $tittle_championship;
    }

    /**
     * Get the value of date_of_Realization
     * @return string
     */ 
    public function getDate_of_Realization(): string
    {
        return $this->date_of_Realization;
    }

    /**
     * Set the value of date_of_Realization
     */ 
    public function setDate_of_Realization(string $date_of_Realization): void
    {
        $this->date_of_Realization = $date_of_Realization;
    }
}
