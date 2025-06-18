<?php

namespace App\Jobs;

use App\Models\Project;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;

class LogProjectDelete implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    
    protected Project $project;

    public function __construct($project)
    {
        //
        $this->project = $project;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        //
        logger($this->project->user->email . "  deteled project :" . $this->project->id);
    }
}
