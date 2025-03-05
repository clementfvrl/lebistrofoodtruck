<?php

namespace App\Notifications;

use App\Models\NewsletterSubscriber;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\URL;

class NewsletterWelcome extends Notification
{
    use Queueable;

    protected $subscriber;

    protected $token;

    /**
     * Create a new notification instance.
     */
    public function __construct(NewsletterSubscriber $subscriber, string $token)
    {
        $this->subscriber = $subscriber;
        $this->token = $token;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        $confirmationUrl = URL::temporarySignedRoute(
            'newsletter.confirm',
            now()->addDays(7),
            [
                'email' => $this->subscriber->email,
                'token' => $this->token
            ]
        );

        return (new MailMessage)
            ->subject('Bestätigen Sie Ihre Newsletter-Anmeldung')
            ->greeting('Hallo!')
            ->line('Vielen Dank für Ihre Anmeldung zu unserem Newsletter.')
            ->line('Bitte klicken Sie auf den Button unten, um Ihre E-Mail-Adresse zu bestätigen.')
            ->action('E-Mail bestätigen', $confirmationUrl)
            ->line('Wenn Sie sich nicht für unseren Newsletter angemeldet haben, ist keine weitere Aktion erforderlich.')
            ->salutation('Mit freundlichen Grüßen,')
            ->salutation('Ihr Street Food Team');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
