<!DOCTYPE html>
<html lang="en">
<head>

  <title>Document</title>
</head>
<body>
    <h1> Accounts</h1>
    @foreach ($accounts as $account )
      <li> {{ $account-> username}}</li>
    @endforeach
</body>
</html>