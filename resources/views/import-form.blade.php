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
            <div class="card-header">Export & Import Student Tutorial <a href="/all/student" class="btn btn-primary btn-sm float-end mx-2">Home</a></div>
            {{-- card body start here --}}
                    @if(Session::has('success'))
                    <div class="alert alert-success p-2">{{Session::get('success')}}</div>
                    @endif
                    @if(Session::has('fail'))
                    <div class="alert alert-danger p-2">{{Session::get('fail')}}</div>
                    @endif
            <div class="card-body">
              <form action="{{ route('ImportStudent')}}" method="post" enctype="multipart/form-data">
                    @csrf    
                <div class="form-group my-2">
                        <input type="file" name="file" id="" class="form-control">
                        <span class="text-danger">@error('file'){{$message}}@enderror</span>
                    </div>
                    
                    <button type="submit" class="btn btn-primary btn-sm">Import</button>
              </form>
            </div>
        </div>
        
        
    </div>
</body>
</html>