<?php

namespace App\Livewire;

use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class Contact extends Component
{
    public $name = '';
    public $email = '';
    public $subject = '';
    public $message = '';
    public $success = false;
    public $error = false;

    protected $rules = [
        'name' => 'required|min:2',
        'email' => 'required|email',
        'subject' => 'required|min:3',
        'message' => 'required|min:10',
    ];

    public function submit()
    {
        $this->validate();
        
        // Reset error state
        $this->error = false;
        
        try {
            // Send email
            Mail::to(config('mail.from.address'))->send(
                new ContactFormMail(
                    $this->name,
                    $this->email,
                    $this->subject,
                    $this->message
                )
            );
            
            // Reset form and show success message
            $this->reset(['name', 'email', 'subject', 'message']);
            $this->success = true;
        } catch (\Exception $e) {
            // Log the error
            logger()->error('Contact form email failed to send', [
                'error' => $e->getMessage(),
                'form_data' => [
                    'name' => $this->name,
                    'email' => $this->email,
                    'subject' => $this->subject,
                ]
            ]);
            
            // Set error state
            $this->error = true;
        }
    }

    public function render()
    {
        return view('livewire.contact')->layout('layouts.app');
    }
}