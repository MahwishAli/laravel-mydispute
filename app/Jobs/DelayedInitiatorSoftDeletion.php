<?php

namespace App\Jobs;
use App\Initiator;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class DelayedInitiatorSoftDeletion implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $initiatorId;

    /**
     * Create a new job instance.
     *
     * @return void
     */
   
    public function __construct($initiatorId)
    {
        $this->initiatorId = $initiatorId;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
     public function handle()
    {
        // Retrieve the initiator by ID
        $initiator = Initiator::find($this->initiatorId);

        // Check if the initiator still exists and has not been deleted
        if ($initiator && !$initiator->trashed()) {
            // Perform the soft deletion
            $initiator->delete();
        }
    }
}
