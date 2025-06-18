<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link
  href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
  rel="stylesheet">

<style>
  body {
    font-family: "Inter";
  }
</style>

<title> Lara </title>

<link rel=icon" href="{{ asset("logo.png") }}">

</head>

<body>

  <main>

    <x-common.banner.banner></x-common.banner.banner>

    <div class="container">
      {{ $slot }}
    </div>

    </div>
  </main>
  <script async src="https://cdn.jsdelivr.net/npm/es-module-shims@1/dist/es-module-shims.min.js"
    crossorigin="anonymous"></script>
  <script type="importmap">
    {
      "imports": {
        "@popperjs/core": "https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/esm/popper.min.js",
        "bootstrap": "https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.esm.min.js"
      }
    }
    </script>
  <script type="module">
    import * as bootstrap from 'bootstrap'
  </script>
</body>

</html>