<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Real Time Chat App</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="wrapper">
      <section class="form signup">
        <header>Real Time Chat App</header>
        <form action="#" method="POST" enctype="multipart/form-data">
          <div class="error-txt"></div>

          <div class="name-details">
            <div class="field input">
              <label>First Name</label>
              <input type="text" name="fname" placeholder="First Name" required />
            </div>
            <div class="field input">
              <label>Last Name</label>
              <input type="text" name="lname" placeholder="Last Name" required />
            </div>
          </div>

          <div class="field input">
            <label>Email Address</label>
            <input type="email" name="email" placeholder="Email Address" required />
          </div>

          <div class="field input">
            <label>Password</label>
            <input type="password" name="password" placeholder="password" required />
          </div>

          <div class="field image">
            <label>Select Image</label>
            <input type="file" name="image" required />
          </div>

          <div class="field button">
            <input type="submit" value="Continue to Chat" />
          </div>
        </form>

        <div class="link">Already signed up? <a href="#">Login now</a></div>
      </section>
    </div>
    <script src="javascript/pass-show-hide.js"></script>
    <script src="javascript/signup.js"></script>
  </body>
</html>
