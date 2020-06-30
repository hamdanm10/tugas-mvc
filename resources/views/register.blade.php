<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 1 - HTML</title>
</head>
<body>
    <h1>Buat Account Baru!</h1>
    <h3>Sign Up Form</h3>
    <form action="/welcome" method="POST">
        @csrf
        <p>First Name:</p>
        <input type="text" name="firstName">

        <p>Last Name:</p>
        <input type="text" name="lastName">

        <p>Gender:</p>
        <input type="radio" id="male" name="gender" value="male">
        <label for="male">Male</label><br>
        <input type="radio" id="female" name="gender" value="female">
        <label for="female">Female</label><br>
        <input type="radio" id="other" name="gender" value="other">
        <label for="other">Other</label><br>

        <p>Nationality:</p>
        <select name="nationality" id="nationality">
            <option value="indonesian">Indonesian</option>
            <option value="brunei">Brunei Darussalam</option>
            <option value="philippines">Philippines</option>
        </select>

        <p>Language Spoken:</p>
        <input type="checkbox" id="language1" name="language1" value="indonesia">
        <label for="language1">Bahasa Indonesia</label><br>
        <input type="checkbox" id="language2" name="language2" value="english">
        <label for="language2">English</label><br>
        <input type="checkbox" id="language3" name="language3" value="other">
        <label for="language3">Other</label><br><br>

        <p>Bio:</p>
        <textarea rows="10" cols="40"></textarea><br>

        <input type="submit" value="Sign Up">
    </form>
    
</body>
</html>