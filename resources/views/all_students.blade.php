<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Export & Import Tutorial</title>
    {{-- add bootstrap here --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="card">
            {{-- card starts here --}}
            <div class="card-header">Export & Import Student Tutorial <a href="/export/students" class="btn btn-success btn-sm float-end mx-2">Export to Excel</a> <a href="/go/import" class="btn btn-primary btn-sm float-end mx-2">Import Excel</a></div>
            {{-- card body start here --}}
            @if(Session::has('success'))
            <div class="alert alert-success p-2">{{Session::get('success')}}</div>
            @endif
            @if(Session::has('fail'))
            <div class="alert alert-danger p-2">{{Session::get('fail')}}</div>
            @endif
            <div class="card-body">
                <table class="table table-sm table-hovered table-striped">
                    <thead>
                        <tr>
                            <th>S/N</th>
                            <th>ID</th>
                            <th>Student Name</th>
                            <th>Age</th>
                            <th>Gender</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($student_data) > 0)
                            @foreach ($student_data as $item)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->age}}</td>
                                    <td>{{$item->gender}}</td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="5">No Data Found!</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
        
        
    </div>
</body>
</html>