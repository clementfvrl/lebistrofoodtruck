<?php

namespace App\Livewire\Services;

use Livewire\Component;

class Music extends Component
{
    public $name = '';
    public $email = '';
    public $phone = '';
    public $date = '';
    public $eventType = '';
    public $location = '';
    public $hours = 4;
    public $guests = '';
    public $musicStyle = '';
    public $message = '';
    public $success = false;

    protected $rules = [
        'name' => 'required|min:2',
        'email' => 'required|email',
        'phone' => 'required',
        'date' => 'required|date',
        'eventType' => 'required',
        'location' => 'required',
        'hours' => 'required|numeric|min:3|max:12',
        'guests' => 'required|numeric|min:1',
        'musicStyle' => 'nullable',
        'message' => 'nullable',
    ];

    public function submit()
    {
        $this->validate();
        
        // In a real application, you would save this to the database
        // and send notifications/emails
        
        // Reset form and show success message
        $this->reset(['name', 'email', 'phone', 'date', 'eventType', 'location', 'hours', 'guests', 'musicStyle', 'message']);
        $this->success = true;
    }

    public function render()
    {
        return view('livewire.services.music')->layout('layouts.app');
    }
}