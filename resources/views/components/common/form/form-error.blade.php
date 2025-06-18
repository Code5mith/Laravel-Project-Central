@props(["field" => ""])

@error($field)
    <p class="text-danger fw-300 ms-3"> <small>{{  $message }}</small></p>
@enderror