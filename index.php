<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up</title>
  <link rel="stylesheet" href="signup.css">
</head>
<body>
  <header>
    <div class="main">
      <div class="heading">
        <h1>Jarif</h1>
      </div>
      <div class="link">
        <a href="#">About Us</a>
      </div>
    </div>
  </header>

  <form action="">
    <!-- File Upload -->
    <div class="file-box">
      <input type="file" id="file" required>
    </div>

    <!-- Floating Label Inputs -->
    <div class="input-box">
      <input type="text" id="name" placeholder=" " required>
      <label for="name">Name</label>
    </div>

    <div class="input-box">
      <input type="email" id="email" placeholder=" " required>
      <label for="email">Email</label>
    </div>

    <div class="input-box">
      <input type="password" id="password" placeholder=" " required>
      <label for="password">Password</label>
    </div>

    <!-- Gender -->
    <div class="gender-box">
      <h3>Gender:</h3>
      <input type="radio" id="male" name="gender" value="Male">
      <label for="male">Male</label><br>
      <input type="radio" id="female" name="gender" value="Female">
      <label for="female">Female</label><br>
      <input type="radio" id="other" name="gender" value="Other">
      <label for="other">Other</label>
    </div>

    <!-- Date of Birth -->
    <div class="date-box">
      <label for="dob">Date of Birth:</label>
      <input type="date" id="dob" required>
    </div>

    <!-- Terms & Conditions -->
    <div class="tc-box">
      <input type="checkbox" id="tc" required>
      <label for="tc">I accept all <a href="#">T&C</a></label>
    </div>

    <!-- Button -->
    <button type="submit">Sign Up</button>
  </form>

  <footer>
    <h2>Jarif</h2>
    <p>Created by MD. Jarif Tamid, Walid Mahmud and Arifin</p>
    <h4>Copyright By Professor Jarif</h4>
  </footer>
</body>
</html>

