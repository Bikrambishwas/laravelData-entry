<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DATA</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    {{-- card --}}
    <div class="container my-3">
         <div class="card shadow">
            <div class="card-header">
                <a href="/student/create" class="btn btn-primary">Add student</a>

            </div>
            <div class="card-body">
                <table class="table">
                    <tr>
                        <th>SN</th>
                        <th>Student Name</th>
                        <th>Address</th>
                        <th>Mobile</th>
                        <th>School</th>
                        <th>Refer</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($student as $index=> $student)
                        <tr>
                            <td>{{ ++$index }}</td>
                            <td>{{ $student->fullname}}</td>
                            <td>{{ $student->address}}</td>
                            <td>{{ $student->mobile}}</td>
                            <td>{{ $student->school}}</td>
                            <td>{{ $student->refer}}</td>
                             
                            <td>
                                <a href="/student/{{ $student->id}}/edit" class="badge text-white btn btn-primary">Edit</a>
                                <a href="/student/{{ $student->id}}" class="badge btn btn-secondary">show</a>
                                <form action="/student/{{ $student->id}}" method="post">
                                    @method('DELETE ')
                                   @csrf
                                    <button type="submit" class="btn btn-danger my-1">Delete</button>
                                </form>
                            </td>
                           
                        </tr>
                    @endforeach
                </table>
            </div>
         </div>
    </div>
</body>
</html>