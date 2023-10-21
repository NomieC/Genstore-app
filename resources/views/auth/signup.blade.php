<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
</head>
<body>
    <h1>Signup</h1>
    <form action="/signup" method="post">
        @csrf
        <label for="first_name">First Name:</label>
        <input type="text" id="first_name" name="first_name" >
        <br>
        <label for="last_name">Last Name:</label>
        <input type="text" id="last_name" name="last_name" >
        <br>
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" >
        <br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" >
        <br>
        <label for="birthdate">Birthdate:</label>
        <input type="date" id="birthdate" name="birthdate" >
        <br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" >
        <br>
        <label for="password_confirmation">Confirm Password:</label>
        <input type="password" id="password_confirmation" name="password_confirmation" >
        <br>
        <button type="submit">Signup</button>
    </form>
    
    <p>Already have an account? <a href="/login">Log in here</a></p>
</body>
</html>
