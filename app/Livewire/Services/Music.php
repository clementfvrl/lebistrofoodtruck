<?php

namespace App\Livewire\Services;

use App\Mail\ServiceRequestNotification;
use App\Models\ServiceRequest;
use Illuminate\Support\Facades\Mail;
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

    protected $messages = [
        'name.required' => 'Bitte geben Sie Ihren Namen ein.',
        'email.required' => 'Bitte geben Sie Ihre E-Mail-Adresse ein.',
        'email.email' => 'Bitte geben Sie eine gültige E-Mail-Adresse ein.',
        'phone.required' => 'Bitte geben Sie Ihre Telefonnummer ein.',
        'date.required' => 'Bitte wählen Sie ein Datum aus.',
        'date.date' => 'Bitte geben Sie ein gültiges Datum ein.',
        'eventType.required' => 'Bitte wählen Sie die Art der Veranstaltung.',
        'location.required' => 'Bitte geben Sie den Veranstaltungsort an.',
        'hours.required' => 'Bitte geben Sie die Servicedauer an.',
        'hours.numeric' => 'Die Dauer muss eine Zahl sein.',
        'hours.min' => 'Die Mindestdauer beträgt 3 Stunden.',
        'hours.max' => 'Die maximale Dauer beträgt 12 Stunden.',
        'guests.required' => 'Bitte geben Sie die Anzahl der Gäste an.',
        'guests.numeric' => 'Die Anzahl der Gäste muss eine Zahl sein.',
        'guests.min' => 'Die Mindestanzahl der Gäste beträgt 1.',
    ];

    public function submit()
    {
        $this->validate();
        
        // Save to database
        $serviceRequest = ServiceRequest::create([
            'service_type' => 'music',
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'date' => $this->date,
            'event_type' => $this->eventType,
            'location' => $this->location,
            'hours' => $this->hours,
            'guests' => $this->guests,
            'music_style' => $this->musicStyle,
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
        $this->reset(['name', 'email', 'phone', 'date', 'eventType', 'location', 'hours', 'guests', 'musicStyle', 'message']);
        $this->success = true;
        
        // Hide success message after 5 seconds
        $this->dispatch('timeout-success', ['delay' => 5000]);
    }

    public function render()
    {
        return view('livewire.services.music')->layout('layouts.app');
    }
}