<?php

namespace App\Listeners;

use App\Mail\WelcomeMail;
use App\Models\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendWelcomeEmail implements ShouldQueue
{
    /**
     * Create the event listener.
     */
    public function __construct(public User $user)
    {
    }

    /**
     * Handle the event.
     */
    public function handle(object $event): void
    {
        $user = $event->user;

        Mail::to($user->email)->send(new WelcomeMail($user));
    }
}
