<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

use App\Mail\ItemCreatedMail;
use App\Models\Item;

class ItemCreatedNotification implements ShouldQueue
{

    public Item $item;

    /**
     * Create the event listener.
     */
    public function __construct(Item $item)
    {
        $this->item = $item;
    }

    /**
     * Handle the event.
     */
    public function handle(object $event): void
    {
        Mail::to('medu2013@gmail.com') -> send(new ItemCreatedMail($event->item));
    }
}
