<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page for student mis</title>
   </head>
<body>
    <div style="margin-left:30%">
        <h2>USER REGISTRATION</h2>
        <form action="process_registration.php" method="POST">

        <label for="fname">First Name</label><br>
        <input type="text" name="fname" required><br>

            <label for="lname">Last Name</label><br>
            <input type="text"  name="lname" required><br>
            
            <label for="email">Email</label><br>
            <input type="email" name="email" required><br>

            <label for="password">Password:</label><br>
            <input type="password" name="password" required><br>

            <button type="submit">Submit</button><br>
        </form>
        <p><a href="index.php">Back to Home</a></p>
    </div>
</body>
</html>
