@props(["project" => []])

<div {{ $attributes->merge(["class" => "card border-1 rounded-4 mx-2 my-2 text-bg-secondary bg-opacity-25 d-flex flex-column justify-content-between", "style" => "width: 17rem;"]) }}>
    <div class="card-body">
        <h4 class="card-title">{{ $project->name }}</h4>
        <h6 class="card-text mb-1 fw-bolder {{$project->status === "Done" ? "text-success" : "text-primary"}}">
            {{ $project->status }}
        </h6>
        <p class="card-text text-truncate">{{ $project->description }}</p>

        <i>
            <p class="card-text">Budget: {{ $project->budget  }} </p>
        </i>
    </div>

    <div class="px-3 py-3">
        <x-project.buttons :id="$project->id">

        </x-project.buttons>

    </div>
</div>