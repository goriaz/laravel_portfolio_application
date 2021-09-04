@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

@if (session('error'))
<div class="alert alert_success alert_dissmissible">
    <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close">&times;</button>
    <strong>Success</strong>
    {{session('error')}}
</div>
@endif

@if (session('success'))
<div class="alert alert_success alert_dissmissible">
    <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close">&times;</button>
    <strong>Success</strong>
    {{session('success')}}
</div>
@endif

