@if ($errors->any())
    <div class="alert alert-danger">
        <ul class="m-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (session()->has('success'))
    <div class="alert alert-success" role="alert">
        {{ session()->get('success') }}
    </div>
@endif

<form action="{{ route('form.request') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="nameInput">Page UID</label>
        <input type="text" class="form-control" id="nameInput" value="{{ $config['page_uid'] }}" name="page_uid" disabled>
        <input type="hidden" value="{{ $config['page_uid'] }}" name="page_uid">
    </div>

    <div class="form-group">
        <label for="nameInput">Name</label>
        <input type="text" class="form-control" id="nameInput" value="{{ $config['fields']['name'] ?? old('fields.name') }}" name="fields[name]" placeholder="Name...">
    </div>

    <div class="form-group">
        <label for="emailInput">Email</label>
        <input type="text" class="form-control" id="emailInput" value="{{ $config['fields']['email'] ?? old('fields.email') }}" name="fields[email]" placeholder="Email...">
    </div>

    <div class="form-group">
        <label for="phoneInput">Phone</label>
        <input type="number" class="form-control" id="phoneInput" value="{{ $config['fields']['phone'] ?? old('fields.phone') }}" name="fields[phone]" placeholder="Phone...">
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary">Send</button>
    </div>
</form>
