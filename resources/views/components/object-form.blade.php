<form class="object-form" action="{{ $action }}" method="POST">
    @csrf
    @if($method != 'POST')
        @method($method)
    @endif
    <div class="form-field">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="{{ isset($object) ? $object->name : '' }}" required>
    </div>
    <div class="form-field">
        <label for="desc">Description</label>
        <textarea name="description" id="desc" rows="5" required>{{ isset($object) ? $object->description : '' }}</textarea>
    </div>
    <button type="submit" class="button secondary">
        <x-icons.check/>
        {{ $actionLabel }}
    </button>
</form>