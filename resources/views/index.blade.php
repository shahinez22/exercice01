<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>قائمة المالحظات</h1> 
 
<form action="/notes" method="POST"> 
    @csrf 
    <input type="text" name="title" placeholder="أدخل المالحظة"> 
    <button type="submit">إضافة</button> 
</form> 
<hr> 
@foreach($notes as $note) 
    <p>{{ $note->title }}</p> 
@endforeach 
</body>
</html>