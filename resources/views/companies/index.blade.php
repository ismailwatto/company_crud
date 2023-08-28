<!DOCTYPE html>
<html>
<head>
    <title>Table Example</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>Password</th>
                <th>Created at</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($companies as $company)
            <tr>
                <td>{{$company->id}}</td>
                <td>{{$company->name}}</td>
                <td>{{$company->email}}</td>
                <td>{{$company->address}}</td>
                <td>{{$company->password}}</td>
                <td>{{$company->created_at}}</td>
                <td>
                    <a href="{{ route('edit', ['id' => $company->id]) }}" class="btn btn-primary">Edit</a>
                    <a href="{{ route('destroy', ['id' => $company->id]) }}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
     </table>
    </div>
</div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
