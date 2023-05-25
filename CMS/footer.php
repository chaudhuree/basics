<!-- Side Area Start -->
<div class="col-sm-4">
  <div class="card mt-4">
    <div class="card-body">
      <img src="images/startblog.png" class="d-block img-fluid mb-3" alt="">
      <div class="text-center">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </div>
    </div>
  </div>
  <br>
  <div class="card">
    <div class="card-header bg-dark text-light">
      <h2 class="lead">Sign Up !</h2>
    </div>
    <div class="card-body">
      <button type="button" class="btn btn-success btn-block text-center text-white mb-4" name="button">Join the Forum</button>
      <button type="button" class="btn btn-danger btn-block text-center text-white mb-4" name="button">Login</button>
      <div class="input-group mb-3">
        <input type="text" class="form-control" name="" placeholder="Enter your email"value="">
        <div class="input-group-append">
          <button type="button" class="btn btn-primary btn-sm text-center text-white" name="button">Subscribe Now</button>
        </div>
      </div>
    </div>
  </div>
  <br>
  <div class="card">
    <div class="card-header bg-primary text-light">
      <h2 class="lead">Categories</h2>
      </div>
      <div class="card-body">
        <?php
        global $ConnectingDB;
        $sql = "SELECT * FROM category ORDER BY id desc";
        $stmt = $ConnectingDB->query($sql);
        while ($DataRows = $stmt->fetch()) {
          $CategoryId = $DataRows["id"];
          $CategoryName=$DataRows["title"];
         ?>
        <a href="Blog.php?category=<?php echo $CategoryName; ?>"> <span class="heading"> <?php echo $CategoryName; ?></span> </a><br>
       <?php } ?>
    </div>
  </div>
  <br>
  <div class="card">
    <div class="card-header bg-info text-white">
      <h2 class="lead"> Recent Posts</h2>
    </div>
    <div class="card-body">
      <?php
      global $ConnectingDB;
      $sql= "SELECT * FROM posts ORDER BY id desc LIMIT 0,5";
      $stmt= $ConnectingDB->query($sql);
      while ($DataRows=$stmt->fetch()) {
        $Id     = $DataRows['id'];
        $Title  = $DataRows['title'];
        $DateTime = $DataRows['datetime'];
        $Image = $DataRows['image'];
      ?>
      <div class="media">
        <img src="Uploads/<?php echo htmlentities($Image); ?>" class="d-block img-fluid align-self-start"  width="90" height="94" alt="">
        <div class="media-body ml-2">
        <a style="text-decoration:none;"href="FullPost.php?id=<?php echo htmlentities($Id) ; ?>" target="_blank">  <h6 class="lead"><?php echo htmlentities($Title); ?></h6> </a>
          <p class="small"><?php echo htmlentities($DateTime); ?></p>
        </div>
      </div>
      <hr>
      <?php } ?>
    </div>
  </div>

</div>
<!-- Side Area End -->


</div>

</div>

<!-- HEADER END -->
<br>
<!-- FOOTER -->
<footer class="bg-dark text-white">
<div class="container">
<div class="row">
  <div class="col">
  <p class="lead text-center">Theme By | Jazeb Akram | <span id="year"></span> &copy; ----All right Reserved.</p>
  <p class="text-center small"><a style="color: white; text-decoration: none; cursor: pointer;" href="http://jazebakram.com/coupons/" target="_blank"> This site is only used for Study purpose jazebakram.com have all the rights. no one is allow to distribute copies other then <br>&trade; jazebakram.com &trade;  Udemy ; &trade; Skillshare ; &trade; StackSkills</a></p>
   </div>
 </div>
</div>
</footer>
<div style="height:10px; background:#27aae1;"></div>
<!-- FOOTER END-->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script>
$('#year').text(new Date().getFullYear());
</script>
</body>
</html>
