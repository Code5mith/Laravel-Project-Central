<x-common.layouts.layout>

    <x-common.header.header :buttons='[["name" => "All Projects", "url" => "/projects"]]'>{{ $project->name }}</x-common.header.header>

    <div class="mt-4 container">
        <div class="d-flex">
            <div class="w-50 d-flex flex-column justify-content-center">
                <div class="my-2 p-0 d-flex flex-row">
                    <h3 class="me-2">Status : </h3>
                    <p
                        class="w-auto p-1 border rounded rounded-3 {{ $project->status === "Done" ? "text-success border-success" : "text-warning border-warning" }}">
                        {{  $project->status }}
                    </p>
                </div>
            </div>

            <div class="w-50 d-flex flex-row justify-content-end align-items-center">
                <div>

                    <x-common.link.link href="/project/{{$project->id}}/edit">
                        <x-common.button.button type="submit" class="mx-1"> Edit </x-common.button.button>
                    </x-common.link.link>

                    <div class="d-inline">
                        <form class="d-inline" method="POST" action="/project/{{ $project->id }}">
                            @csrf
                            @method("DELETE")
                            <x-common.button.button type="submit" class="btn-danger mx-1"> Delete
                            </x-common.button.button>
                        </form>
                    </div>
                </div>
            </div>

        </div>

        <div class="my-2 p-0 d-flex flex-row">
            <h3 class="me-2 text-nowrap">description :</h3>
            <div
                class="d-flex flex-row flex-wrap align-items-center border border-2 rounded rounded-3 p-1 bg-secondary bg-opacity-25">
                <p class="h-auto my-auto fs-6 text-wrap">
                    {{ $project->description }}
                </p>
            </div>
        </div>

        <div class="my-3 p-0 d-flex flex-row ">
            <h3 class="me-2">Budget : </h3>
            <div class="d-flex flex-row align-items-center">
                <p class="h-auto my-auto fs-5"><i>
                        {{ $project->budget != "My Time" ? "$" : "" }}{{  $project->budget }}</i></p>
            </div>

        </div>

        <div>
            <p>End-Date: <i class="pb-1 border-bottom border-2">
                    <small>{{$project->end_date !== null ? $project->end_date : "not available"}}<small></i></p>
        </div>

    </div>

</x-common.layouts.layout>