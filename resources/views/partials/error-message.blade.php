@if($errors->has($fieldName))
<div calss="alert-danger">
    @foreach($errors->get($fieldName) as $error)
        <li>{{ $error }}</li>
    @endforeach
</div>
@endif