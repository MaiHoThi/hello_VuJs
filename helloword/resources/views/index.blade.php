<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hello</title>
</head>
<body>
  <div><h2>Hello</h2>
  @foreach ($user as $item)
  {{$item->username}}
  {{$item->password}}

  </div>  
</body>
</html>