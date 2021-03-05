<form id="triggered-form" action="{{ ($model) ? route("$route.update",$model) : route("$route.store") }}" method="post">
    <div class="row">
        <div class="col-md-6 col-centered">
            @csrf
            @if($model)
                @method('PUT')
            @endif
            @include("content.$route.__field")
        </div>
    </div>
</form>
