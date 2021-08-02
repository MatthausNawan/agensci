<?php

namespace App\Services;

use App\Models\LocalAdvertisement;

class AdversitmentService
{
    private $localAdversitment;

    public function __construct(LocalAdvertisement $localAdversitment)
    {
        $this->localAdversitment = $localAdversitment;
    }
    
    public function getValuePerStates(int $quantity) : float
    {
        $statesPercent = $this->localAdversitment->states_percent ?? 0;

        return $quantity * $statesPercent;
    }

    public function getValuePerCountries(int $quantity) : float
    {
        $countryPercent = $this->localAdversitment->country_percent ?? 0;

        return $quantity * $countryPercent;
    }

    public function getValueGenres(int $quantity) : float
    {
        $genrePercent = $this->localAdversitment->genre_percent ?? 0;

        return $quantity * $genrePercent;
    }

    public function getValuePerCategories(int $quantity) : float
    {
        $categoryPercent = $this->localAdversitment->category_percent ?? 0;

        return $quantity * $categoryPercent;
    }

    public function getValuePerArea(int $quantity) : float
    {
        $areaPercent = $this->localAdversitment->area_percent ?? 0;

        return $quantity * $areaPercent;
    }

    public function getValuePerDays($start, $end) : float
    {
        $days = $start->diffInDays($end);

        $valuePerDay = $this->localAdversitment->days_percent ?? 0;

        return $days * $valuePerDay;
    }
}
