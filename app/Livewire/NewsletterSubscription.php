<?php

namespace App\Livewire;

use App\Models\NewsletterSubscriber;
use Livewire\Component;
use Illuminate\Support\Facades\Notification;
use App\Notifications\NewsletterWelcome;

class NewsletterSubscription extends Component
{
    public string $email = '';
    public bool $success = false;
    public bool $error = false;
    public string $message = '';

    /**
     * Validation rules
     */
    protected function rules()
    {
        return [
            'email' => 'required|email|max:255'
        ];
    }

    /**
     * Subscribe to the newsletter
     */
    public function submit()
    {
        $this->validate();

        // Check if email already exists
        $existingSubscriber = NewsletterSubscriber::where('email', $this->email)->first();
        
        if ($existingSubscriber) {
            if ($existingSubscriber->isConfirmed()) {
                $this->error = true;
                $this->message = 'Diese E-Mail-Adresse ist bereits für unseren Newsletter angemeldet.';
                return;
            }
            
            // Resend confirmation email
            $token = $existingSubscriber->generateConfirmationToken();
            $this->sendWelcomeEmail($existingSubscriber, $token);
            
            $this->success = true;
            $this->message = 'Wir haben Ihnen einen Bestätigungslink gesendet. Bitte prüfen Sie Ihre E-Mail.';
            $this->reset('email');
            return;
        }

        // Create new subscriber
        $subscriber = NewsletterSubscriber::create([
            'email' => $this->email,
            'confirmation_token' => null,
        ]);

        $token = $subscriber->generateConfirmationToken();
        
        // Send confirmation email
        $this->sendWelcomeEmail($subscriber, $token);
        
        $this->success = true;
        $this->message = 'Vielen Dank für Ihre Anmeldung! Bitte bestätigen Sie Ihre E-Mail-Adresse.';
        $this->reset('email');
    }

    /**
     * Send welcome email with confirmation link
     */
    private function sendWelcomeEmail(NewsletterSubscriber $subscriber, string $token)
    {
        // For testing, you can use your own email address
        try {
            Notification::route('mail', $subscriber->email)
                ->notify(new NewsletterWelcome($subscriber, $token));
        } catch (\Exception $e) {
            // Log the error
            \Log::error('Failed to send welcome email: ' . $e->getMessage());
        }
    }

    /**
     * Render the component
     */
    public function render()
    {
        return view('livewire.newsletter-subscription');
    }
}
