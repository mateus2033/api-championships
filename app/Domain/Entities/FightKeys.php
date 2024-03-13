<?php

namespace App\Domain\Entities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FightKeys extends Model
{
    use HasFactory;

    protected $table = 'fight_keys';

    protected $fillable = [
        'id',
        'range',
        'weight',
        'championship_code_id',
        'athletes_id'
    ];

    private string $id;
    private string $range;
    private string $weight;
    private int $championship_code_id;
    private int $athletes_id;

 
    /**
     * Get the value of id
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Set the value of id
     */
    public function setId(string $id): void
    {
        $this->id = $id;
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
     * Get the value of championship_code_id
     */
    public function getChampionshipCodeId(): int
    {
        return $this->championship_code_id;
    }

    /**
     * Set the value of championship_code_id
     */
    public function setChampionshipCodeId(int $championship_code_id): void
    {
        $this->championship_code_id = $championship_code_id;
    }

    /**
     * Get the value of athletes_id
     */
    public function getAthletesId(): int
    {
        return $this->athletes_id;
    }

    /**
     * Set the value of athletes_id
     */
    public function setAthletesId(int $athletes_id): void
    {
        $this->athletes_id = $athletes_id;
    }
}
