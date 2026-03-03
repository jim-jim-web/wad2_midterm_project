<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3>Student Details</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tr>
                                <th width="200">Student ID</th>
                                <td>{{ $student->student_id }}</td>
                            </tr>
                            <tr>
                                <th>Name</th>
                                <td>{{ $student->name }}</td>
                            </tr>
                            <tr>
                                <th>Course</th>
                                <td>{{ $student->course }}</td>
                            </tr>
                            <tr>
                                <th>Year</th>
                                <td>{{ $student->year }}</td>
                            </tr>
                            <tr>
                                <th>Created At</th>
                                <td>{{ $student->created_at->format('M d, Y h:i A') }}</td>
                            </tr>
                            <tr>
                                <th>Updated At</th>
                                <td>{{ $student->updated_at->format('M d, Y h:i A') }}</td>
                            </tr>
                        </table>

                        <div class="d-flex justify-content-between mt-3">
                            <a href="{{ route('students.index') }}" class="btn btn-secondary">Back to List</a>
                            <div>
                                <a href="{{ route('students.edit', $student->id) }}" class="btn btn-warning">Edit</a>
                                <form action="{{ route('students.destroy', $student->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this student?')">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
