<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=yes">
    <title>Portfolio Login</title>
    <style>
	/* Resetting default margin and padding */
* {
  margin: 0;
  padding: 0;
}

/* Setting up background color and font styles */
body {
  background-color: #f2f2f2; /* Light grey background */
  font-family: Arial, sans-serif; /* Default font */
}

/* Styling the login container */
.login-container {
  width: 300px; /* Adjust width as needed */
  margin: 100px auto; /* Centering the container */
  padding: 20px;
  border-radius: 10px; /* Rounded corners */
  background-color: #fff; /* White background */
  box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1); /* Adding drop shadow */
  position: relative; /* Required for pseudo-element */
}

/* Styling the header */
.login-container h2 {
  text-align: center;
  margin-bottom: 20px;
  color: #333; /* Dark grey text */
}

/* Styling the form inputs */
.login-container input[type="text"],
.login-container input[type="password"] {
  width: calc(100% - 20px); /* Adjusting input width */
  padding: 10px;
  margin-bottom: 10px;
  border: 1px solid #ccc; /* Light grey border */
  border-radius: 5px; /* Rounded corners */
}

/* Styling the submit button */
.login-container button[type="submit"] {
  width: 100%;
  padding: 10px;
  border: none;
  border-radius: 5px;
  background-color: #4caf50; /* Green button */
  color: #fff; /* White text */
  cursor: pointer;
  transition: background-color 0.3s ease; /* Smooth transition */
}

/* Hover effect for submit button */
.login-container button[type="submit"]:hover {
  background-color: #45a049; /* Darker green on hover */
}

/* Water drop effect */
.login-container::before {
  content: "";
  position: absolute;
  width: 100%;
  height: 100%;
  background-image: radial-gradient(circle, #ffffff 10%, transparent 10.01%);
  background-repeat: no-repeat;
  background-position: 50%;
  border-radius: 50%;
  z-index: -1; /* Behind the container */
  top: 0;
  left: 0;
}
</style>
</head>

<body>
    <div class="login-container">
        <h2>Login</h2>
        <form action="authenticate.php" method="post">
            <input type="text" name="username" placeholder="User Name" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
    </div>
</body>

</html>