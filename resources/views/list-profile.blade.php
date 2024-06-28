<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách sản phẩm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</head>

<body>
    <div style="text-align: center; position: relative;" class="container row mt-xxl-5">
        @foreach($data as $da)
        <div>
            <th>MSV : {{$da['msv']}}</td> <br>
            <th>Họ Tên: {{$da['name']}}</td> <br>
            <th>Ngành Học: {{$da['major']}}</td> <br>
            <th>Quê Quán: {{$da['home_town']}}</td> <br>
            <th>Tuổi: {{$da['year_old']}}</td> <br>
        </div>
        <div style="position: absolute; left: 180px;">
            <th><img src="{{$da['avatar']}}" alt="" width="120px"> </td> <br>

        </div>
        @endforeach
    </div>

</body>

</html>