<x-common.layouts.auth>

    <div class="w-100 d-flex flex-column justify-content-center align-items-center">
        <div class="my-1">
            <img src="favicon.svg" alt="icon" width="60px" height="60px">
        </div>
        <h1 class="h3 mb-3 fw-normal w-100 text-center fs-2">Create an account</h1>
    </div>

    <div class="d-flex flex-column">

        <form action="/register" method="POST">

            @csrf

            <div class="form-floating mb-2">
                <x-common.form.form-input type="name" class="form-control" id="name" name="name" placeholder="Jhon Doe"
                    required></x-common.form.form-input>
                <x-common.form.form-label for="name">Full name</x-common.form.form-label>
            </div>

            <x-common.form.form-error field="name"></x-common.form.form-error>

            <div class="form-floating mb-2">
                <x-common.form.form-input class="border rounded-0" type="email" name="email" class="form-control"
                    id="email" aria-describedby="emailHelp" placeholder="name@example.com"></x-common.form.form-input>
                <x-common.form.form-label for="email" required>Email address</x-common.form.form-label>
            </div>

            <x-common.form.form-error field="email"></x-common.form.form-error>

            <div class="form-floating mb-2">
                <x-common.form.form-input type="password" class="form-control" id="password" placeholder="Password"
                    name="password" required></x-common.form.form-input>
                <x-common.form.form-label for="password">Password</x-common.form.form-label>
            </div>

            <x-common.form.form-error field="password"></x-common.form.form-error>

            <div class="form-floating">
                <x-common.form.form-input type="password" class="form-control" id="password" placeholder="Password"
                    name="password_confirmation" required></x-common.form.form-input>
                <x-common.form.form-label for="password">Repeat Password</x-common.form.form-label>
            </div>

            <x-common.form.form-error field="password"></x-common.form.form-error>

            <x-common.button.button type="submit" class="mt-4 w-100">Create account</x-common.button.button>

        </form>

        <div class="w-100 text-center my-3">
            <p> Already have an account? <x-common.link.link href="/login"
                    class="text-decoration-underline text-primary"> Log in </x-common.link.link> </p>
        </div>


        <div class="w-100 text-center">
            <p class="mt-2 text-body-secondary opacity-50"> Copyright © 2025 Lara | All Right Reserved </p>
        </div>


    </div>

    </form>

</x-common.layouts.auth>