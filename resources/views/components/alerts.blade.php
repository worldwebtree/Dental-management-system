@if (session('created'))

    <div class="alert alert-success" role="alert">
        <strong>{{ session('created') }}</strong>
    </div>

    @elseif (session('updated'))

    <div class="alert alert-info" role="alert">
        <strong>{{ session('updated') }}</strong>
    </div>

    @elseif (session('deleted'))

    <div class="alert alert-primary" role="alert">
        <strong>{{ session('deleted') }}</strong>
    </div>

    @elseif (session('not_authenticated'))

    <div class="alert alert-info" role="alert">
        <strong>{{ session('not_authenticated') }}</strong>
    </div>
@endif
