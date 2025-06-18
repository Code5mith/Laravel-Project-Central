<?php

namespace App\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use App\Models\Project;
class LogProjectUpdate implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */

    public function __construct(public Project $project)
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        //
        logger("project :" . $this->project->id . "  updated by user :" . $this->project->user->email);
    }
}
