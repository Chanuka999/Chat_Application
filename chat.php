<?php
 session_start();
 if(!isset($_SESSION['unique_id'])){
  header("location:login.php");
 }
?>

<?php include "header.php"; ?>
  <body>
    <div class="wrapper">
      <section class="chat-area">
        <header>
        <?php
             include "php/config.php";
             $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
             if(mysqli_num_rows($sql) >0){
              $row = mysqli_fetch_assoc($sql);
             }
          ?>
          <a href="users.php" class="back-icon"><i class="fas fa-arrow-left"></i></a>
          <img src="images/img1.jfif" alt="" />
          <div class="details">
            <span>coding </span>
            <p>Active now</p>
          </div>
        </header>
        <div class="chat-box">
          <div class="chat outgoing">
            <div class="details">
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
          </div>
          <div class="chat incoming">
            <img src="images/img1.jfif" alt="" />
            <div class="details">
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
          </div>
          <div class="chat outgoing">
            <div class="details">
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
          </div>
          <div class="chat incoming">
            <img src="images/img1.jfif" alt="" />
            <div class="details">
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
          </div>
          <div class="chat outgoing">
            <div class="details">
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
          </div>
          <div class="chat incoming">
            <img src="images/img1.jfif" alt="" />
            <div class="details">
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
          </div>
        </div>
        <form action="#" class="typing-area">
          <input type="text" placeholder="Type a massege here...." />
          <button><i class="fab fa-telegram-plane"></i></button>
        </form>
      </section>
    </div>
  </body>
</html>
