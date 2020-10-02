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
    <a href="/">Kembali</a> <br><br>
    <table class="table table-bordered table-striped">

            <tr>
                <td>ID</td>
                <td>{{$rest->id}}</td>
            </tr>
            <tr>
                <td>Name</td>
                <td>{{$rest->name}}</td>
            </tr>
            <tr>
                <td>Description</td>
                <td>{{$rest->description}}</td>
            </tr>
        
    </table>
</div>
</body>
</html>