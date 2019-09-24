<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Product Discount Calculator</h1>
<form action="/calculator" method="post">
    @csrf
    <p>Product Description:
        <input type="text" name="Description">
    </p>
    <p>List Price:
        <input type="text" name="Price">
    </p>
    <p>Discount Percent:
        <input type="text" name="Discount">
    </p>
    <p>
        <input type="submit" value="Calculate Discount">
    </p>
</form>
</body>
</html>
