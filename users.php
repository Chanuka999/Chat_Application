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
      <section class="users">
        <header>
          <div class="content">
            <img src="images/img1.jfif" alt="" />
            <div class="details">
              <span>coding </span>
              <p>Active now</p>
            </div>
          </div>
          <a href="#" class="logout">Logout</a>
        </header>
        <div class="search">
          <span class="text">Select an user to start chat</span>
          <input type="text" placeholder="Ener name to search..." />
          <button><i class="fas fa-search"></i></button>
        </div>
        <div class="users-list">
          <a href="">
            <div class="content">
              <img src="images/img1.jfif" alt="" />
              <div class="details">
                <span>Code</span>
                <p>This is a text message</p>
              </div>
            </div>
            <div class="status-dot"><i class="fas fa-circle"></i></div>
          </a>
          <a href="#">
            <div class="content">
              <img src="images/img1.jfif" alt="" />
              <div class="details">
                <span>Code</span>
                <p>This is a text message</p>
              </div>
            </div>
            <div class="status-dot"><i class="fas fa-circle"></i></div>
          </a>
          <a href="#">
            <div class="content">
              <img src="images/img1.jfif" alt="" />
              <div class="details">
                <span>Code</span>
                <p>This is a text message</p>
              </div>
            </div>
            <div class="status-dot"><i class="fas fa-circle"></i></div>
          </a>
        </div>
      </section>
    </div>
    <script src="javascript/users.js"></script>
  </body>
</html>
