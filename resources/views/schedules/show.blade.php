<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schedule Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3>Schedule Details</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tr>
                                <th width="200">Schedule ID</th>
                                <td>{{ $schedule->id }}</td>
                            </tr>
                            <tr>
                                <th>Event Title</th>
                                <td>{{ $schedule->event_title }}</td>
                            </tr>
                            <tr>
                                <th>Description</th>
                                <td>{{ $schedule->description }}</td>
                            </tr>
                            <tr>
                                <th>Schedule Date</th>
                                <td>{{ $schedule->schedule_date }}</td>
                            </tr>
                                <th>Created At</th>
                                <td>{{ $schedule->created_at->format('M d, Y h:i A') }}</td>
                            </tr>
                            <tr>
                                <th>Updated At</th>
                                <td>{{ $schedule->updated_at->format('M d, Y h:i A') }}</td>
                            </tr>
                        </table>

                        <div class="d-flex justify-content-between mt-3">
                            <a href="{{ route('schedules.index') }}" class="btn btn-secondary">Back to List</a>
                            <div>
                                <a href="{{ route('schedules.edit', $schedule->id) }}" class="btn btn-warning">Edit</a>
                                <form action="{{ route('schedules.destroy', $schedule->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this schedule?')">Delete</button>
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
