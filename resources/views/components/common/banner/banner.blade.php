<div class="w-100 bg-dark bg-opacity-75 m-0 border-bottom sticky-top">
    <div class="w-100">
        <nav class="navbar bg-primary navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <x-common.link.link class="navbar-brand fs-4" href="/">Laravel</x-common.link.link>

                <x-common.button.button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </x-common.button.button>

                <div class="collapse navbar-collapse d-flex flex-lg-row d-sm-flex flex-sm-column justify-content-between"
                    id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <x-common.nav.nav-item
                            :nav_lable="[['lable' => 'Project', 'link'=>'projects'], ['lable' => 'Timer', 'link' => 'timer']]"></x-common.nav.nav-item>
                    </div>
                    <div>
                        @guest
                            <div class="d-flex flex-row w-100 align-items-center justify-content-end">

                                <x-common.link.link href="/register" class="me-3 mt-1">
                                    <x-common.button.button class=""> Register </x-common.button.button>
                                </x-common.link.link>

                                <x-common.link.link href="/login" class="me-2">
                                    <x-common.button.button class=""> Login </x-common.button.button>
                                </x-common.link.link>

                            </div>
                        @endguest

                        @auth
                            <div class="d-flex flex-row align-items-center justify-content-end">
                                <div
                                    class=" me-3 d-flex flex-row justify-content-center align-items-center border-primary border border-3 rounded-3 my-1">
                                    <div class="fw-bold px-2 py-1">Hello : {{ Auth::user()->name }}</div>
                                </div>

                                <div class="me-2">
                                    <form method="POST" action="/logout">
                                        @csrf
                                        <x-common.button.button type="submit" class=""> Log Out</x-common.button.button>
                                    </form>
                                </div>
                            </div>
                        @endauth

                    </div>
                </div>
            </div>
        </nav>
    </div>
</div>