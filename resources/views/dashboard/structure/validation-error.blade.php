@if ($errors->any())
    @foreach ($errors->all() as $item)
        <div class="alert alert-warning">
            {{ $item }}
        </div>
    @endforeach
@endif