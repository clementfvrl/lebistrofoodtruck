<?php

namespace App\Livewire\Services;

use App\Mail\ServiceRequestNotification;
use App\Models\ServiceRequest;
use Illuminate\Support\Facades\Mail;
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

    protected $messages = [
        'name.required' => 'Bitte geben Sie Ihren Namen ein.',
        'email.required' => 'Bitte geben Sie Ihre E-Mail-Adresse ein.',
        'email.email' => 'Bitte geben Sie eine gültige E-Mail-Adresse ein.',
        'phone.required' => 'Bitte geben Sie Ihre Telefonnummer ein.',
        'date.required' => 'Bitte wählen Sie ein Datum aus.',
        'date.date' => 'Bitte geben Sie ein gültiges Datum ein.',
        'location.required' => 'Bitte geben Sie den Veranstaltungsort an.',
        'guests.required' => 'Bitte geben Sie die Anzahl der Gäste an.',
        'guests.numeric' => 'Die Anzahl der Gäste muss eine Zahl sein.',
        'guests.min' => 'Die Mindestanzahl der Gäste beträgt 20.',
    ];

    public function submit()
    {
        $this->validate();
        
        // Save to database
        $serviceRequest = ServiceRequest::create([
            'service_type' => 'foodtruck', // or 'photobooth'/'music' in respective components
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'date' => $this->date,
            'location' => $this->location,
            'guests' => $this->guests,
            'message' => $this->message,
            // Additional fields as needed for each service
        ]);
        
        // Send email notification with better error handling
        try {
            $adminEmail = config('mail.from.address', 'admin@example.com');
            \Log::info('Attempting to send email to: ' . $adminEmail);
            
            Mail::to($adminEmail)
                ->send(new ServiceRequestNotification($serviceRequest));
                
            \Log::info('Email sent successfully');
        } catch (\Exception $e) {
            // Log the error but don't stop the process
            \Log::error('Failed to send email notification: ' . $e->getMessage());
            // Additional debug info
            \Log::error($e->getTraceAsString());
        }
        
        // Reset form and show success message
        $this->reset(['name', 'email', 'phone', 'date', 'location', 'guests', 'message']);
        $this->success = true;
        
        // Hide success message after 5 seconds
        $this->dispatch('timeout-success', ['delay' => 5000]);
    }

    public function render()
    {
        return view('livewire.services.foodtruck')->layout('layouts.app');
    }
}