<?php include "header.php"; ?>
  <body>
    <div class="wrapper">
      <section class="form login">
        <header>Real Time Chat App</header>
        <form action="#">
          <div class="error-txt">This is an error message</div>

          <div class="field input">
            <label>Email Address</label>
            <input type="email" name="email" placeholder="Email Address" required />
          </div>

          <div class="field input">
            <label>Password</label>
            <input type="password" name="password" placeholder="Password" required />
            <i class="fas fa-eye"></i>
          </div>

          <div class="field button">
            <input type="submit" value="Continue to Chat" />
          </div>
        </form>

        <div class="link">Not yet signed up? <a href="index.php">signup now</a></div>
      </section>
    </div>
    <script src="javascript/pass-show-hide.js"></script>
    <script src="javascript/login.js"></script>
  </body>
</html>
