<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha512-MoRNloxbStBcD8z3M/2BmnT+rg4IsMxPkXaGh2zD6LGNNFE80W3onsAhRcMAMrSoyWL9xD7Ert0men7vR8LUZg==" crossorigin="anonymous" />
    <title>Index</title>
</head>
<body>
<div class="container">
    <br>
    <a href="/create">Tambah Data</a> <br><br>
    <form action="/" >
        
        <input type="text" name="search">
        <button type="submit" class="btn btn-primary">Search</button>
    </form>
    <br>
    <table class="table table-bordered table-striped">
        <tr>
            <th>No</th>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Action</th>
        </tr>
        @foreach($rest as $r)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$r->id}}</td>
                <td>{{$r->name}}</td>
                <td>{{$r->description}}</td>
                <td>
                    <div class="btn-group">
                    <a href="{{route('data.show', $r->id)}}" class="btn btn-primary">Detail</a>
                    <a href="{{route('data.edit', $r->id)}}" class="btn btn-success">Edit</a>
                    <form action="{{route('data.delete', $r->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Yakin Ingin Menghapus?')" class="btn btn-danger" style="display:inline"> Delete</button>
                    </form>
                    </div>
                </td>
            </tr>
        @endforeach
    </table>
</div>
</body>
</html>