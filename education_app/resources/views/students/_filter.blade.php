<form method="GET" action="{{ route('students.index') }}" class="mb-3">
  <div class="input-group">
    <select class="form-select" name="college_id" onchange="this.form.submit()">
      <option value="">All Colleges</option>
      @foreach($colleges as $college)
        <option value="{{ $college->id }}" {{ request('college_id') == $college->id ? 'selected' : '' }}>
          {{ $college->name }}
        </option>
      @endforeach
    </select>
    <button type="submit" class="btn btn-outline-secondary">Filter</button>
  </div>
</form>