<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="{{action('AuthController@welcome')}}" method="POST">
        @csrf
        <h1>Buat Account Baru!</h1>
        <h3>Sign Up Form</h3>
        <p>First name:</p>
            <input type="text" name="first_name"/>
        <p>Last name:</p>
            <input type="text" name="last_name"/>
        <p>Gender:</p>
            <input type="radio" name="Gender" value="Male"/>Male <br>
            <input type="radio" name="Gender" value="Female"/>Female<br>
            <input type="radio" name="Gender" value="Other"/>Other<br>
        <p>Nationality:</p>
            <select name="Nationality">
                <option value="Indonesia">Indonesia</option>
                <option value="Singapore">Singapore</option>
                <option value="Malaysia">Malaysia</option>
                <option value="Australia">Australia</option>
            </select>
        <p>Language Spoken:</p>
            <input type="checkbox" name="Indonesia"/>Indonesia<br>
            <input type="checkbox" name="English"/>English<br>
            <input type="checkbox" name="Other"/>Other<br>
        <p>Bio:</p>
        <textarea name="bio" id="bio" cols="30" rows="10"></textarea><br>
        <input type="submit" value="Sign Up">
    </form>
</body>
</html>