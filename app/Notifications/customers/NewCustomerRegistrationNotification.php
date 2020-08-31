<?php

namespace App\Notifications\customers;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewCustomerRegistrationNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    protected $user;
    public function __construct($user)
    {
        //
        $this->user = $user;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->greeting('Welcome ' . $this->user->user_fname)
            ->line('Welcome to AtoC, we are happy to have you part of our growing customers.')
            ->line('In AtoC you will be able to put all your demands and get multiple companies at your 
            disposal. Post your need using the web application, or download our AtoC mobile appication
            form the playstore and appstore')
            ->line('For more information please get contact us at info@drongo.vip')
            ->line('Thank you for being part of AtoC')
            ->line('')
            ->subject('Welcome to AtoC');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
