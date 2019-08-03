@if($errors->has($field))
  <div class="help-block text-danger">
    @foreach($errors->get($field) as $error)
      {{ $error }}
    @endforeach
  </div>
@endif