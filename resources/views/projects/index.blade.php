<x-common.layouts.layout>

    <x-common.header.header :buttons='[["name" => "Add Project", "url" => "/project/create"]]'> Projects </x-common.header.header>

    <div class="d-flex flex-row flex-wrap container">

        @foreach ($projects as $project)

            <x-project.card :project="$project"> 

            </x-project.card>

        @endforeach

    </div>
</x-common.layouts.layout>