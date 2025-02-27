<?php

namespace App\Livewire;

use Livewire\Component;

class Contact extends Component
{
    public $name = '';
    public $email = '';
    public $subject = '';
    public $message = '';
    public $success = false;

    protected $rules = [
        'name' => 'required|min:2',
        'email' => 'required|email',
        'subject' => 'required|min:3',
        'message' => 'required|min:10',
    ];

    public function submit()
    {
        $this->validate();
        
        // In a real application, you would send an email or save to the database
        
        // Reset form and show success message
        $this->reset(['name', 'email', 'subject', 'message']);
        $this->success = true;
    }

    public function render()
    {
        return view('livewire.contact')->layout('layouts.app');
    }
}