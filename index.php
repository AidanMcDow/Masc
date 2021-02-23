
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="./css/index.css">
    <title>thePuppers</title>
    <script>
    function alertMe() {
      alert("Please sign in first");

      var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
    }
    </script>
  </head>
  <body>
    <div class="topbox">
<h1 align= center class="logo">thePuppers</h1>
<div class="login">
<button class="cred" onClick= "document.getElementById('id01').style.display='block'">Login</button>
<a href="signup.php"><button class="cred">Sign-up</button></a>
</div>
    </div>
    <div class="secbackground">
          <button class="button1" onclick="alertMe()">Adopt Today!</button>
    </div>
    <div class="topbox">
    </div>
    <div class="greyspace">
    <div class="blackboxl backgroundsushi">
    </div>
    <div class="blackboxr backgroundhusky">
    </div>
    <div class="blackboxl backgroundweiner">
    </div>
    <div class="blackboxr backgroundmutt">
    </div>

    <div id="id01" class="modal">

      <form class="modal-content animate" action="includes/signup.inc.php" method="post">
        <div class="imgcontainer">
          <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close">&times;</span>
          <img class="avatar" src="./pictures/avatar.png">
        </div>

        <div class="container">
          <label for="uname"><b>Username</b></label>
          <input type="text" placeholder="Enter Username" name="uname" required>

          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="psw" required>

          <button type="submit">Login</button>
          <label>
            <input type="checkbox" checked="checked" name="remember"> Remember me
          </label>
        </div>

        <div class="container" style="background-color:#f1f1f1">
          <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
          <span class="psw">Forgot <a href="#">password?</a></span>
        </div>
      </form>
    </div>


    </div>
  </body>
</html>
