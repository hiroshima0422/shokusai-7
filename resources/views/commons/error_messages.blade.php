@if (count($errors) > 0)
    @foreach ($errors->all() as $error)
    <br>
        <div class="alert alert-warning">{{ $error }}</div>
    @endforeach
@endif