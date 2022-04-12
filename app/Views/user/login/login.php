<body>
 <!--CONTENT-->
  <div class="wrapper fadeInDown">
    <div id="formContent">

      <!-- Icon -->
      <div class="fadeIn second">
        <img src="https://static.vecteezy.com/system/resources/previews/002/318/271/non_2x/user-profile-icon-free-vector.jpg" id="icon" alt="User Icon" />
        <h1>Log in</h1>
      </div>

      <!-- Login Form -->
      <form action="/User/validateLogin" method="POST">
        <input type="text" id="email" class="fadeIn second" name="emailU" placeholder="Email" required="true">
        <input type="password" id="password" class="fadeIn third" name="passwordU" placeholder="Password" required="true">
        <input type="submit" class="fadeIn fourth" value="Log In">
      </form>

      <!-- Remind Passowrd -->
      <div id="formFooter">
        <a class="underlineHover" href="http://utnweb.com/web2/Proyecto_2_ISW613/public/register">Create user.</a>
      </div>

    </div>
  </div>
