<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Demo Upload File</title>
    <meta name="author" content="ThanhTai">
</head>
<body>
    <form action="{{ url('file') }}" enctype="multipart/form-data" method="POST">
        {{ csrf_field() }}
        <input type="file" name="filesTest" required="true">
        <input type="submit" value="upload">
    </form>
</body>
</html>