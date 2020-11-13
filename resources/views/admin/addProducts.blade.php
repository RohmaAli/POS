<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('store')}}" method="post">
    @csrf
    <label for="">Product title</label>
    <input type="text" name="title">
    <br>
    @foreach($sizes as $size)
    <input type="checkbox" name="size[]" value={{$size->id}}><label for="">{{$size->title}}</label> <br>    
    @endforeach

    <input type="submit" name="addProduct">
    </form>

    

</body>

<script>
    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
</script>
</html>


