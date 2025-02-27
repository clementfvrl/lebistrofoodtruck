<?php

namespace App\Livewire;

use Livewire\Component;

class Catering extends Component
{
    public $name = '';
    public $email = '';
    public $phone = '';
    public $date = '';
    public $guests = '';
    public $message = '';
    public $success = false;

    protected $rules = [
        'name' => 'required|min:2',
        'email' => 'required|email',
        'phone' => 'required',
        'date' => 'required|date',
        'guests' => 'required|numeric|min:10',
        'message' => 'nullable',
    ];

    public function submit()
    {
        $this->validate();

        // In a real application, you would save this to the database
        // and send notifications/emails
        
        // Reset form and show success message
        $this->reset(['name', 'email', 'phone', 'date', 'guests', 'message']);
        $this->success = true;
    }

    public function render()
    {
        return view('livewire.catering')->layout('layouts.app');
    }
}