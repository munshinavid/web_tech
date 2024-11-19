<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Sign-Up</title>
</head>
<body>
<h2>Customer Sign-Up</h2>
<form action="form_submit.php" method="POST">
    <!-- Personal Information -->
    <fieldset>
        <legend>Personal Information</legend>
        <label for="first_name">First Name:</label>
        <input type="text" id="first_name" name="first_name">
        <label for="last_name">Last Name:</label>
        <input type="text" id="last_name" name="last_name">
        <label for="dob">Date of Birth:</label>
        <input type="date" id="dob" name="dob">
        <label for="gender">Gender:</label>
        <select id="gender" name="gender">
            <option value="">Select</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
            <option value="prefer_not_to_say">Prefer not to say</option>
        </select>
    </fieldset>

    <!-- Contact Information -->
    <fieldset>
        <legend>Contact Information</legend>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email">
        <label for="phone">Phone Number:</label>
        <input type="tel" id="phone" name="phone" pattern="[0-9]{10}" placeholder="1234567890">
        <label for="address">Address:</label>
        <textarea id="address" name="address" rows="3"></textarea>
        <label for="city">City:</label>
        <input type="text" id="city" name="city">
        <label for="state">State:</label>
        <input type="text" id="state" name="state">
        <label for="zip">ZIP Code:</label>
        <input type="text" id="zip" name="zip">
    </fieldset>

    <!-- Login Credentials -->
    <fieldset>
        <legend>Login Credentials</legend>
        <label for="username">Username:</label>
        <input type="text" id="username" name="username">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
        <label for="confirm_password">Confirm Password:</label>
        <input type="password" id="confirm_password" name="confirm_password">
    </fieldset>

    <!-- Submit Button -->
    <button type="submit">Sign Up</button>
</form>


</body>
</html>
