<?php

namespace Artqiyi\Listeners;

use App\Events\SomeEvent;
use Artqiyi\Models\CouponModel;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class ViewListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        $this->tags = config('artqiyi.tag');
    }

    /**
     * Handle the event.
     *
     * @param  SomeEvent  $event
     * @return void
     */
    public function handle($event)
    {
        foreach ($this->tags[$event->tag] as $tagHandler) {
            echo (new $tagHandler)->render();
        }
    }
}
