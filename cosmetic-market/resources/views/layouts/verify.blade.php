<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<body>
    @if(session()->has("error"))
    <div class="alert alert-success alert-dismissible fade show">
        <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
            <i class="material-icons">close</i>
        </button>
        <span> {{ session("error") }}</span>
    </div>
    @endif
    <div class="container">
        <form method="POST" action="/send-verify">
        @csrf
            <input type="text" class="form-control" name="code" placeholder="Input your code to continue...">
            <button type="submit" class="btn btn-primary">Send</button>
        </form>
    </div>
</body>

</html>
