<x-common.layouts.layout>

    <div class="mt-4">
        <div>
            <x-common.header.header :buttons="[['name' => 'All Projects', 'url' => '/projects'], ['name' => 'Add Project', 'url' => '/project/create']]">
                Recently added </x-common.header.header>

            <div class="d-flex flex-row flex-wrap">

                @foreach ($projects as $project)

                    <x-project.card :project="$project">

                    </x-project.card>

                @endforeach

                <div class="mx-4 py-3" style="width: 18rem;">

                    <a href="/project/create"
                        class="text-secondary opacity-25 d-flex flex-column align-items-center justify-content-center h-100 p-3  text-decoration-none transition-colors">

                        <div>
                            <h1> + </h1>
                        </div>

                        <div>

                            <h3 class=""> Add Project</h3>
                        </div>
                    </a>

                </div>

            </div>

        </div>
    </div>
</x-common.layouts.layout>