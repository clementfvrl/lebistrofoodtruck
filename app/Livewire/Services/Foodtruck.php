<?php

namespace App\Livewire\Services;

use Livewire\Component;

class Foodtruck extends Component
{
    public $name = '';
    public $email = '';
    public $phone = '';
    public $date = '';
    public $location = '';
    public $guests = '';
    public $message = '';
    public $success = false;

    protected $rules = [
        'name' => 'required|min:2',
        'email' => 'required|email',
        'phone' => 'required',
        'date' => 'required|date',
        'location' => 'required',
        'guests' => 'required|numeric|min:20',
        'message' => 'nullable',
    ];

    public function submit()
    {
        $this->validate();
        
        // In a real application, you would save this to the database
        // and send notifications/emails
        
        // Reset form and show success message
        $this->reset(['name', 'email', 'phone', 'date', 'location', 'guests', 'message']);
        $this->success = true;
    }

    public function render()
    {
        return view('livewire.services.foodtruck')->layout('layouts.app');
    }
}