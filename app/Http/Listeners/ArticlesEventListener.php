<?php

namespace App\Http\Listeners;

use App\Events\ArticlesEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class ArticlesEventListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  ArticlesEvent  $event
     * @return void
     */
    public function handle(ArticlesEvent $event)
    {
        //
        if($event->action === 'created')
        {
            \Log::info(sprintf('새로운 포럼글이 등록 되었습니다. : %s', $event->article->title));
        }

    }
}
