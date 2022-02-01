@if(Session::has('success'))

<div class="alert alert-success" role="alert">

    {{ Session::get('success') }}

</div>

@endif @if(Session::has('error'))

<div class="alert alert-danger" role="alert">


    {{ Session::get('error') }}

</div>

@endif @if ($errors->any())

<div class="alert alert-danger">

    <ul style="margin: 0px;">

        @foreach ($errors->all() as $error)

        <li>{{ $error }}</li>

        @endforeach

    </ul>

</div>

@endif

