<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $pageTitle }}</title>

    @vite('resources/sass/app.scss')
</head>
<body>

<nav class="navbar navbar-dark bg-primary">
    <div class="container">
        <a href="{{ route('employees.index') }}" class="navbar-brand">
            Data Master
        </a>
    </div>
</nav>

<div class="container-sm my-5">
    <div class="row justify-content-center">
        <div class="col-xl-6 p-5 bg-light rounded-3 border">

            <h4 class="text-center mb-4">Edit Employee</h4>

            <form action="{{ route('employees.update', ['employee' => $employee->id]) }}"
                method="POST">

                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label">First Name</label>
                    <input type="text" name="firstName" class="form-control"
                        value="{{ old('firstName', $employee->firstname) }}">
                    @error('firstName')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Last Name</label>
                    <input type="text" name="lastName" class="form-control"
                        value="{{ old('lastName', $employee->lastname) }}">
                    @error('lastName')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control"
                        value="{{ old('email', $employee->email) }}">
                    @error('email')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Age</label>
                    <input type="number" name="age" class="form-control"
                        value="{{ old('age', $employee->age) }}">
                    @error('age')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Position</label>
                    <select name="position" class="form-select">
                        @foreach ($positions as $position)
                            <option value="{{ $position->id }}"
                                {{ old('position', $employee->position_id) == $position->id ? 'selected' : '' }}>
                                {{ $position->code }} - {{ $position->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('position')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">
                    Update Employee
                </button>

                <a href="{{ route('employees.index') }}"
                    class="btn btn-secondary">
                    Cancel
                </a>

            </form>

        </div>
    </div>
</div>

@vite('resources/js/app.js')

</body>
</html>
