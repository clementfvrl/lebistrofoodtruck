<?php

namespace App\Livewire\Services;

use Livewire\Component;

class Photobooth extends Component
{
    public $name = '';
    public $email = '';
    public $phone = '';
    public $date = '';
    public $location = '';
    public $hours = 3;
    public $message = '';
    public $success = false;

    protected $rules = [
        'name' => 'required|min:2',
        'email' => 'required|email',
        'phone' => 'required',
        'date' => 'required|date',
        'location' => 'required',
        'hours' => 'required|numeric|min:2|max:12',
        'message' => 'nullable',
    ];

    public function submit()
    {
        $this->validate();
        
        // In a real application, you would save this to the database
        // and send notifications/emails
        
        // Reset form and show success message
        $this->reset(['name', 'email', 'phone', 'date', 'location', 'hours', 'message']);
        $this->success = true;
    }

    public function render()
    {
        return view('livewire.services.photobooth')->layout('layouts.app');
    }
}