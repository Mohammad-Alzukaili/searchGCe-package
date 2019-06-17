<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
          integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>
    <title>Search</title>


</head>
<body>
<div class="container">
    <div class="row">
        <a class="btn btn-success" href="/search">go to search page</a>
        <table class="table table-primary table-striped table-responsive table-bordered">
            <tr>
                <td></td>
                <td>Title</td>
                <td>Link</td>
                <td>Description</td>
                <td>Comment</td>
                <td>Created at</td>
                <td>Update</td>
                <td>Delete</td>
            </tr>
            </tr>
            @foreach($data as $key=>$rows)
                <tr>
                    <td>{{++$key}}</td>
                    <td>{{$rows->title}}</td>
                    <td><a href="{{$rows->link}}">link</a></td>
                    <td>{{$rows->description}}</td>
                    <td>

                        <form id="form{{$rows->id}}" name="form{{$rows->id}}" method="post" action="/update"/>
                        {{ csrf_field() }}
                            <input name="id" type="hidden" value="{{$rows->id}}" />
                            <textarea name="comment">{{$rows->comment}}</textarea>
                        </form>

                    </td>
                    <td>{{$rows->created_at}}</td>
                    <td><input class="btn btn-warning" form="form{{$rows->id}}" type="submit" name="update" value="Update"/></td>
                    <td><a href="/delete?id={{$rows->id}}">
                            <button class="btn btn-danger">Delete</button></td>
                </tr>
            @endforeach
        </table>
    </div>
</div>
</div>
</body>
</html>