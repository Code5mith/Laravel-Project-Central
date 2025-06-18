<x-common.layouts.layout>

    <div class="my-3 mx-1 w-100 ">
        <x-common.header.header> Edit : {{ $project->name }} </x-common.header.header>

        <form method="POST" action="/project/{{ $project->id }}">

            @csrf
            @method("PATCH")

            <div class="form-group my-3">
                <x-common.form.form-label for="name">Project name</x-common.form.form-lable>
                <x-common.form.form-input class="my-1" name="name" id="project_name" placeholder="Todo App"
                    :value="$project->name" required></x-common.form.form-input>
            </div>

            <x-common.form.form-error field="name"></x-common.form.form-error>

            <div class="form-group my-4">
                <x-common.form.form-label for="budget"> Budget </x-common.form.form-label>
                    <x-common.form.form-input class="my-1" name="budget" id="name"
                        :value="$project->budget" placeholder="My Time"></x-common.form.form-input>
            </div>


            <div class="form-group mb-4">
                <x-common.form.form-label for="description"> Project description </x-common.form.form-label>
                    <x-common.form.form-textarea class="my-1" row="4" name="description" id="project_desciption"
                        placeholder="App to track my daily tasks ..." required>{{  $project->description  }}
                    </x-common.form.form-textarea>
            </div>

            <x-common.form.form-error field="description"></x-common.form.form-error>

            <div class="d-flex flex-column w-auto">
                <label for="status" class="fs-3 fw-100">Status</label>
                <select name="status" id="status" class="mx-4 border p-1 ps-3 border rounded-2 w-25">
                    <option value="To Do">To Do</option>
                    <option value="In Progress">In Progress</option>
                    <option value="Done">Done</option>
                </select>
            </div>

    </div>

    <div class="button w-100 d-flex justify-content-end">

        <x-common.link.link href="/projects">
            <x-common.button.button class="btn-danger">
                cancle
            </x-common.button.button>
        </x-common.link.link>

        <x-common.button.button class="mx-4" type="submit"> update </x-common.button.button>
    </div>

    </form>

    </div>

</x-common.layouts.layout>