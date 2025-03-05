<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use App\Mail\CateringInquiry;
use App\Models\Catering as CateringModel;

class Catering extends Component
{
    // Current step of the form
    public $currentStep = 1;
    public $totalSteps = 4;
    
    // Form data
    // Step 1: Personal Information
    public $name = '';
    public $email = '';
    public $phone = '';
    public $company = '';
    
    // Step 2: Event Information
    public $event_type = '';
    public $event_date = '';
    public $start_time = '';
    public $end_time = '';
    public $venue_name = '';
    public $venue_address = '';
    public $guests = '';
    
    // Step 3: Catering Requirements
    public $package = 'basic'; // Default package selection
    public $dietary_requirements = [];
    public $additional_services = [];
    public $budget = '';
    
    // Step 4: Additional Information
    public $message = '';
    public $how_heard = '';
    
    // Form state
    public $success = false;
    
    // Validation rules by step
    protected $rules = [
        // Step 1 rules
        'name' => 'required|min:2',
        'email' => 'required|email',
        'phone' => 'required',
        
        // Step 2 rules
        'event_type' => 'required',
        'event_date' => 'required|date|after_or_equal:today',
        'start_time' => 'required',
        'end_time' => 'required',
        'venue_address' => 'required',
        'guests' => 'required|numeric|min:10',
        
        // Step 3 rules
        'package' => 'required|in:basic,premium,deluxe',
        'budget' => 'nullable|numeric',
        
        // Step 4 rules - all optional
    ];
    
    // Validation messages
    protected $messages = [
        'name.required' => 'Bitte geben Sie Ihren Namen ein.',
        'email.required' => 'Bitte geben Sie Ihre E-Mail Adresse ein.',
        'email.email' => 'Bitte geben Sie eine gültige E-Mail Adresse ein.',
        'phone.required' => 'Bitte geben Sie Ihre Telefonnummer ein.',
        'event_type.required' => 'Bitte wählen Sie die Art der Veranstaltung.',
        'event_date.required' => 'Bitte wählen Sie das Datum der Veranstaltung.',
        'event_date.after_or_equal' => 'Das Datum muss in der Zukunft liegen.',
        'start_time.required' => 'Bitte geben Sie die Startzeit an.',
        'end_time.required' => 'Bitte geben Sie die Endzeit an.',
        'venue_address.required' => 'Bitte geben Sie die Adresse des Veranstaltungsortes an.',
        'guests.required' => 'Bitte geben Sie die Anzahl der Gäste an.',
        'guests.min' => 'Die Mindestanzahl an Gästen beträgt 10.',
    ];
    
    // Available options for dietary requirements
    public $availableDietaryRequirements = [
        'vegetarian' => 'Vegetarisch',
        'vegan' => 'Vegan',
        'gluten_free' => 'Glutenfrei',
        'lactose_free' => 'Laktosefrei',
        'nut_free' => 'Nussfrei',
        'halal' => 'Halal',
        'kosher' => 'Koscher',
    ];
    
    // Available options for additional services
    public $availableAdditionalServices = [
        'drinks' => 'Getränkeservice',
        'waitstaff' => 'Servicepersonal',
        'tableware' => 'Geschirr & Besteck',
        'decoration' => 'Dekoration',
        'setup' => 'Auf- und Abbau',
        'transportation' => 'Transport',
    ];
    
    // Available options for how they heard about us
    public $availableHowHeard = [
        'search' => 'Suchmaschine',
        'social_media' => 'Social Media',
        'recommendation' => 'Empfehlung',
        'advertisement' => 'Werbung',
        'other' => 'Andere',
    ];
    
    // Available event types
    public $availableEventTypes = [
        'corporate' => 'Firmenfeier',
        'wedding' => 'Hochzeit',
        'birthday' => 'Geburtstag',
        'conference' => 'Konferenz',
        'private_party' => 'Private Feier',
        'other' => 'Andere',
    ];
    
    /**
     * Go to the next step of the form
     */
    public function nextStep()
    {
        // Validate the current step
        $this->validateStep($this->currentStep);
        
        // If there are no validation errors, proceed to the next step
        if ($this->currentStep < $this->totalSteps) {
            $this->currentStep++;
        }
    }
    
    /**
     * Go back to the previous step
     */
    public function previousStep()
    {
        if ($this->currentStep > 1) {
            $this->currentStep--;
        }
    }
    
    /**
     * Jump to a specific step (if previous steps are valid)
     */
    public function goToStep($step)
    {
        // Can only go to a completed step or the next step
        if ($step < $this->currentStep || $step === $this->currentStep + 1) {
            // If jumping forward, validate current step first
            if ($step > $this->currentStep) {
                $this->validateStep($this->currentStep);
            }
            $this->currentStep = $step;
        }
    }
    
    /**
     * Validate the current step
     */
    private function validateStep($step)
    {
        switch ($step) {
            case 1:
                $this->validate([
                    'name' => $this->rules['name'],
                    'email' => $this->rules['email'],
                    'phone' => $this->rules['phone'],
                ]);
                break;
            case 2:
                $this->validate([
                    'event_type' => $this->rules['event_type'],
                    'event_date' => $this->rules['event_date'],
                    'start_time' => $this->rules['start_time'],
                    'end_time' => $this->rules['end_time'],
                    'venue_address' => $this->rules['venue_address'],
                    'guests' => $this->rules['guests'],
                ]);
                break;
            case 3:
                $this->validate([
                    'package' => $this->rules['package'],
                ]);
                break;
            // Step 4 doesn't need validation as all fields are optional
        }
    }
    
    /**
     * Submit the form
     */
    public function submit()
    {
        // Validate all steps before submission
        $this->validate();
        
        // Save to the database
        $catering = \App\Models\Catering::create([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'company' => $this->company,
            'event_type' => $this->event_type,
            'event_date' => $this->event_date,
            'start_time' => $this->start_time,
            'end_time' => $this->end_time,
            'venue_name' => $this->venue_name,
            'venue_address' => $this->venue_address,
            'guests' => $this->guests,
            'package' => $this->package,
            'dietary_requirements' => $this->dietary_requirements,
            'additional_services' => $this->additional_services,
            'budget' => $this->budget,
            'message' => $this->message,
            'how_heard' => $this->how_heard,
            'status' => 'pending',
        ]);
        
        // Send email notification
        try {
            Mail::to(config('mail.catering.address', 'catering@streetfood.at'))
                ->send(new CateringInquiry($this->only([
                    'name', 'email', 'phone', 'company', 
                    'event_type', 'event_date', 'start_time', 'end_time', 'venue_name', 'venue_address', 'guests',
                    'package', 'dietary_requirements', 'additional_services', 'budget',
                    'message', 'how_heard'
                ])));
        } catch (\Exception $e) {
            // Log email sending error but don't show to user
            \Log::error('Failed to send catering inquiry email: ' . $e->getMessage());
        }
        
        // Show success message
        $this->success = true;
        $this->resetForm();
    }
    
    /**
     * Reset the form
     */
    private function resetForm()
    {
        $this->reset([
            'name', 'email', 'phone', 'company', 
            'event_type', 'event_date', 'start_time', 'end_time', 'venue_name', 'venue_address', 'guests',
            'package', 'dietary_requirements', 'additional_services', 'budget',
            'message', 'how_heard',
            'currentStep',
        ]);
        $this->currentStep = 1;
    }
    
    /**
     * Show estimated price based on selected package and guest count
     */
    public function getEstimatedPriceProperty()
    {
        if (empty($this->guests) || !is_numeric($this->guests)) {
            return 0;
        }
        
        $pricePerPerson = [
            'basic' => 25,
            'premium' => 35,
            'deluxe' => 45,
        ];
        
        return $pricePerPerson[$this->package] * $this->guests;
    }
    
    public function render()
    {
        return view('livewire.catering')->layout('layouts.app');
    }
}