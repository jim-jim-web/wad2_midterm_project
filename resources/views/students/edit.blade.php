<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3>Edit Student</h3>
                    </div>
                    <div class="card-body">
                        @if($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('students.update', $student->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label for="student_id" class="form-label">Student ID</label>
                                <input type="text" class="form-control @error('student_id') is-invalid @enderror" 
                                       id="student_id" name="student_id" value="{{ old('student_id', $student->student_id) }}" required>
                                @error('student_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" 
                                       id="name" name="name" value="{{ old('name', $student->name) }}" required>
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="course" class="form-label">Course</label>
                                <select class="form-select @error('course') is-invalid @enderror" 
                                        id="course" name="course" required>
                                    <option value="">Select Course</option>
                                    <option value="BSIS" {{ old('course', $student->course) == 'BSIS' ? 'selected' : '' }}>BSIS</option>
                                    <option value="BAB" {{ old('course', $student->course) == 'BAB' ? 'selected' : '' }}>BAB</option>
                                    <option value="BSAIS" {{ old('course', $student->course) == 'BSAIS' ? 'selected' : '' }}>BSAIS</option>
                                    <option value="BSSW" {{ old('course', $student->course) == 'BSSW' ? 'selected' : '' }}>BSSW</option>
                                    <option value="BSA" {{ old('course', $student->course) == 'BSA' ? 'selected' : '' }}>BSA</option>
                                </select>
                                @error('course')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="year" class="form-label">Year</label>
                                <select class="form-select @error('year') is-invalid @enderror" 
                                        id="year" name="year" required>
                                    <option value="">Select Year</option>
                                    <option value="1" {{ old('year', $student->year) == '1' ? 'selected' : '' }}>1</option>
                                    <option value="2" {{ old('year', $student->year) == '2' ? 'selected' : '' }}>2</option>
                                    <option value="3" {{ old('year', $student->year) == '3' ? 'selected' : '' }}>3</option>
                                    <option value="4" {{ old('year', $student->year) == '4' ? 'selected' : '' }}>4</option>
                                </select>
                                @error('year')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="d-flex justify-content-between">
                                <a href="{{ route('students.index') }}" class="btn btn-secondary">Cancel</a>
                                <button type="submit" class="btn btn-primary">Update Student</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
