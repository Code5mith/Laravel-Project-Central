@props(["id" => ""])

<div class="d-flex">

    <!-- edit -->
    <x-common.link.link href="/project/{{ $id }}/edit" class="card-link text-decoration-none rounded-3" title="Edit Project">

        <x-common.button.button type="button" class="btn btn-warning d-flex align-items-center justify-content-center" data-bs-toogle="tooltip">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-pen-fill" viewBox="0 0 16 16">
                    <path
                        d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001" />
                </svg>
            </div>
        </x-common.button.button>

    </x-common.link.link>

    <x-common.link.link href="/project/{{ $id }}" class="card-link text-decoration-none rounded-3" title="View Project">
        <x-common.button.button class="btn btn-warning d-flex align-items-center justify-content-center" data-bs-toogle="tooltip">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-arrows-angle-expand" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M5.828 10.172a.5.5 0 0 0-.707 0l-4.096 4.096V11.5a.5.5 0 0 0-1 0v3.975a.5.5 0 0 0 .5.5H4.5a.5.5 0 0 0 0-1H1.732l4.096-4.096a.5.5 0 0 0 0-.707m4.344-4.344a.5.5 0 0 0 .707 0l4.096-4.096V4.5a.5.5 0 1 0 1 0V.525a.5.5 0 0 0-.5-.5H11.5a.5.5 0 0 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 0 .707" />
                </svg>
            </div>
        </x-common.button.button>
    </x-common.link.link>

</div>