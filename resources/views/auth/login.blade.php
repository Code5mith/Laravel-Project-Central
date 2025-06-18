<x-common.layouts.auth>

    <div class="w-100 d-flex flex-column justify-content-center align-items-center">
        <div class="my-1">
            <img src="favicon.svg" alt="icon" width="60px" height="60px">
        </div>
        <h1 class="h3 mb-3 fw-normal w-100 text-center fs-2">Log in</h1>
    </div>

    <div class="">

        <form action="/login" method="POST">
            @csrf

            <div class="form-floating my-2">
                <x-common.form.form-input class="border rounded-0" type="email" class="form-control" id="email"
                    aria-describedby="emailHelp" placeholder="name@example.com" name="email"
                    :value="old('email')"></x-common.form.form-input>
                <x-common.form.form-label for="email">Email address or Username</x-common.form.form-label>
            </div>

            <x-common.form.form-error field="email"></x-common.form.form-error>
    </div>

    <div class="form-floating">
        <x-common.form.form-input type="password" class="form-control" id="password" placeholder="Password"
            name="password"></x-common.form.form-input>
        <x-common.form.form-label for="password">Password</x-common.form.form-label>
    </div>

    <x-common.form.form-error field="password"></x-common.form.form-error>


    <div class="my-3 d-flex flex-row justify-content-between">

        <div class="form-check text-start">
            <x-common.form.form-input class="form-check-input" type="checkbox" value="remember-me"
                id="checkDefault"></x-common.form.form-input>

            <x-common.form.form-label class="mx-2 form-check-label" for="checkDefault">
                Remember me
            </x-common.form.form-label>
        </div>

        <div>
            <x-common.link.link class="text-primary text-decoration-underline"> Forget
                password</x-common.link.link>
        </div>
    </div>

    <x-common.button.button type="submit" class="my-2 w-100">Log in</x-common.button.button>
    </form>

    <div class="w-100 text-center my-3">
        <p> Not a member? <x-common.link.link href="/register" class="text-decoration-underline text-primary">
                Register </x-common.link.link> </p>
    </div>

    <div class="w-100 text-center">
        <p class="mt-2 text-body-secondary opacity-50">Copyright © 2025 Lara | All Right Reserved </p>
    </div>

    </div>

    </form>

</x-common.layouts.auth>