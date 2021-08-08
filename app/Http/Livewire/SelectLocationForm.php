<?php

namespace App\Http\Livewire;

use GuzzleHttp\Client;
use Livewire\Component;

class SelectLocationForm extends Component
{
    public $provinces;
    public $selectedProvince;
    public $cities;
    public $selectedCity;
    public $isCovid;

    public function render()
    {
        $client = new Client();

        $provinces_response = json_decode($client->get('https://rs-bed-covid-api.vercel.app/api/get-provinces')->getBody());
        $this->provinces = $provinces_response->provinces;

        if (!empty($this->selectedProvince)) {
            $city_response = $client->get('https://rs-bed-covid-api.vercel.app/api/get-cities?provinceid=' . $this->selectedProvince);
            if ($city_response->getStatusCode() == 200) {
                $cities = json_decode($city_response->getBody());
                $this->cities = $cities->cities;
            }
        }

        return view('livewire.select-location-form', [
            'provinces' => $this->provinces,
            'cities' => $this->cities,
        ]);
    }

    public function prosesCari()
    {
        $client = new Client();
        $beds_response = json_decode($client->get('https://rs-bed-covid-api.vercel.app/api/get-hospitals?provinceid=' . $this->selectedProvince . '&cityid=' . $this->selectedCity . '&type=' . $this->isCovid)->getBody());
        $this->emit('bedAdded', $beds_response->hospitals);
    }
}
