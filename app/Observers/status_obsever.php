<?php

namespace App\Observers;

use App\status;

class status_obsever
{
    /**
     * Handle the status "created" event.
     *
     * @param  \App\status  $status
     * @return void
     */
    public function created(status $status)
    {
        //
    }

    /**
     * Handle the status "updated" event.
     *
     * @param  \App\status  $status
     * @return void
     */
    public function updated(status $status)
    {
        //
    }

    /**
     * Handle the status "deleted" event.
     *
     * @param  \App\status  $status
     * @return void
     */
    public function deleted(status $status)
    {
        //
    }

    /**
     * Handle the status "restored" event.
     *
     * @param  \App\status  $status
     * @return void
     */
    public function restored(status $status)
    {
        //
    }

    /**
     * Handle the status "force deleted" event.
     *
     * @param  \App\status  $status
     * @return void
     */
    public function forceDeleted(status $status)
    {
        //
    }
}
