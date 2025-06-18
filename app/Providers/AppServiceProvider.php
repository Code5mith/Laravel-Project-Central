<?php

namespace App\Providers;

use App\Models\Project;
use App\Models\User;
use Illuminate\Support\ServiceProvider;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Schema;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // add app config 

        Gate::define("project-owner", function (User $user, Project $project): bool{
            return $project->user->is($user);
        });
        
        // SQLite foreign key enforcement
        if (DB::connection()->getDatabaseName() === database_path('database.sqlite')) { // If DB is sqlite 
            Schema::enableForeignKeyConstraints(); // Run DB::statement('PRAGMA foreign_keys = ON;'); 
    }
}
}
