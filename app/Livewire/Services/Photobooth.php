<?php

namespace App\Livewire\Services;

use App\Mail\ServiceRequestNotification;
use App\Models\ServiceRequest;
use Illuminate\Support\Facades\Mail;
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

    protected $messages = [
        'name.required' => 'Bitte geben Sie Ihren Namen ein.',
        'email.required' => 'Bitte geben Sie Ihre E-Mail-Adresse ein.',
        'email.email' => 'Bitte geben Sie eine gültige E-Mail-Adresse ein.',
        'phone.required' => 'Bitte geben Sie Ihre Telefonnummer ein.',
        'date.required' => 'Bitte wählen Sie ein Datum aus.',
        'date.date' => 'Bitte geben Sie ein gültiges Datum ein.',
        'location.required' => 'Bitte geben Sie den Veranstaltungsort an.',
        'hours.required' => 'Bitte geben Sie die Mietdauer an.',
        'hours.numeric' => 'Die Mietdauer muss eine Zahl sein.',
        'hours.min' => 'Die Mindestmietdauer beträgt 2 Stunden.',
        'hours.max' => 'Die maximale Mietdauer beträgt 12 Stunden.',
    ];

    public function submit()
    {
        $this->validate();
        
        // Save to database
        $serviceRequest = ServiceRequest::create([
            'service_type' => 'photobooth',
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'date' => $this->date,
            'location' => $this->location,
            'hours' => $this->hours,
            'message' => $this->message,
        ]);
        
        // Send email notification
        try {
            Mail::to(config('mail.from.address', 'admin@example.com'))
                ->send(new ServiceRequestNotification($serviceRequest));
        } catch (\Exception $e) {
            // Log the error but don't stop the process
            \Log::error('Failed to send email notification: ' . $e->getMessage());
        }
        
        // Reset form and show success message
        $this->reset(['name', 'email', 'phone', 'date', 'location', 'hours', 'message']);
        $this->success = true;
        
        // Hide success message after 5 seconds
        $this->dispatch('timeout-success', ['delay' => 5000]);
    }

    public function render()
    {
        return view('livewire.services.photobooth')->layout('layouts.app');
    }
}