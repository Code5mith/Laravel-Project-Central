<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\RegisteredUserController;
use App\Jobs\LogProjectCreate;

Route::redirect("/", "/projects");

// Route::resource("Project", ProjectsController::class);

Route::controller(ProjectsController::class)->middleware('auth')->group(function () {

    // Route::get("/dashboard", "getProject");
    Route::get("/projects", "index");
    Route::get("/project/create", "create");
    Route::post("/projects", "store");

});


Route::get("project/{id}/edit", [ProjectsController::class, "edit"])
    ->middleware('auth');
    // ->can("project-owner", Project::class); ** Controller-Level Authorization


Route::get("/project/{project}", [ProjectsController::class, "show"]) // route-model binding used auto resolve
    ->middleware('auth')
    ->can("project-owner", "project");

Route::patch("/project/{project}", [ProjectsController::class, "update"])
    ->middleware('auth')
    ->can("project-owner", "project");

Route::delete("/project/{project}", [ProjectsController::class, "destroy"])
    ->middleware('auth')
    ->can("project-owner", "project");


Route::get("/register", [RegisteredUserController::class, "create"]);
Route::post("/register", [RegisteredUserController::class, "store"]);

Route::get("/login", [SessionController::class, "create"])->name("login");
Route::post("/login", [SessionController::class, "login"]);
Route::post("/logout", [SessionController::class, "destroy"]);

Route::view("/timer", "timer");
