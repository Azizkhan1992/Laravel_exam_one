

<div class="mb-3">
    <label for="name" class="form-label">Tashkilot nomi</label>
    <input type="text" class="form-control" id="name" name="name" value="{{ old('name') ?? $company->name }}">
    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
  </div>
  <div class="mb-3">
    <label for="address" class="form-label">Tashkilot manzili</label>
    <input type="text" class="form-control" id="address" name="address" value="{{ old('address') ?? $company->address }}">
  </div>
  <div class="mb-3">
      <label for="phone" class="form-label">Telefon raqami</label>
      <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone') ?? $company->phone }}">
    </div>