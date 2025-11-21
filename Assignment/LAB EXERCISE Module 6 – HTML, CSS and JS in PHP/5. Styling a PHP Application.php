<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>User Registration</title>
  <link rel="stylesheet" href="styles.css" />
</head>
<body>
  <header class="header">
    <div class="container">
      <h1 class="logo">MyApp</h1>
      <nav class="nav">
        <a href="#" class="nav-link">Home</a>
        <a href="#" class="nav-link">Login</a>
        <a href="#" class="nav-link active">Register</a>
      </nav>
    </div>
  </header>

 <main class="container">
    <section class="registration-card" aria-label="User registration form">
      <h1 class="page-title">Register</h1>
      <form action="#" method="POST" class="registration-form" novalidate>
        <div class="form-group">
          <label for="username">Username</label>
          <input type="text" id="username" name="username" required autocomplete="username" />
        </div><br>
        <div class="form-group">
          <label for="email">Email address</label>
          <input type="email" id="email" name="email" required autocomplete="email" />
        </div><br>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" id="password" name="password" required autocomplete="new-password" />
        </div><br>
        <button type="submit" class="btn-primary">Register</button>
      </form>
    </section>
  </main>

  <footer class="footer">
    <div class="container">
      <p class="footer-text">&copy; 2024 MyApp. All rights reserved.</p>
    </div>
  </footer>
</body>
</html>

