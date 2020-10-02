<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
</head>
<body>
    <a href="/">Back</a> <br> <br>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <br> <br>
    <form action="{{route('store')}}" method="post">
        @csrf
        <table>
            <tr>
                <td>Name</td>
                <td>:</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>Description</td>
                <td>:</td>
                <td>
                    <textarea name="description" id="" cols="30" rows="10"></textarea>
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><button type="submit">Simpan</button></td>
            </tr>
        </table>
        
    </form>
</body>
</html>