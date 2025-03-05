<?php

namespace App\Http\Controllers;

use App\Models\NewsletterSubscriber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class NewsletterController extends Controller
{
    /**
     * Confirm a newsletter subscription
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function confirm(Request $request)
    {
        if (!$request->hasValidSignature()) {
            abort(401, 'Dieser Link ist ungültig oder abgelaufen.');
        }

        $subscriber = NewsletterSubscriber::where([
            'email' => $request->email,
            'confirmation_token' => $request->token,
        ])->firstOrFail();

        $subscriber->confirm();

        return Redirect::route('newsletter.confirmed')
            ->with('success', 'Vielen Dank für die Bestätigung Ihrer E-Mail-Adresse!');
    }

    /**
     * Show confirmation success page
     *
     * @return \Illuminate\View\View
     */
    public function confirmed()
    {
        return view('newsletter.confirmed');
    }
}
