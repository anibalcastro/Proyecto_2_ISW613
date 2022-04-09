
<!--CONTENT-->
<body>
    <div class="wrapper fadeInDown">
        <div id="formContent">
            <!-- Tabs Titles -->

            <!-- Icon -->
            <div class="fadeIn first">
                <img src="https://static.vecteezy.com/system/resources/previews/002/318/271/non_2x/user-profile-icon-free-vector.jpg"
                    id="icon" alt="User Icon" />
                <h1>User Registration</h1>
                <div class="linea_100"></div>
            </div>

            <!-- Login Form -->
            <form action="lo_registro.php" method="POST">
                <input type="text" id="nameUser" class="fadeIn first" name="nameU" placeholder="First Name"
                    required="true">
                <input type="text" id="lastUser" class="fadeIn first" name="lastU" placeholder="LastName"
                    required="true">
                <input type="text" id="emailUser" class="fadeIn third" name="emailU" placeholder="Email"
                    required="true">
                <input type="password" id="passwordUser" class="fadeIn fourth" name="passwordU" placeholder="Password"
                    required="true">
                <input type="text" id="adress1" class="fadeIn second" name="adress1U" placeholder="Adress"
                    required="true">
                <input type="text" id="adress2" class="fadeIn second" name="adress2U" placeholder="Adress 2">
                <select name="countryU" id="country" class="fadeIn second" required="true">
                    <option disabled selected>Country</option>
                    <option value="Costa Rica">Costa Rica</option>
                    <option value="Estados Unidos">Estados Unidos</option>
                    <option value="Panamá">Panamá</option>
                </select>
                <input type="text" id="city" class="fadeIn second" name="cityU" placeholder="City" required="true">
                <input type="text" id="zip" class="fadeIn second" name="zipU" placeholder="Zip/Postal Code"
                    required="true">
                <input type="text" id="phone" class="fadeIn second" name="phoneU" placeholder="Phone Number"
                    required="true">

                <input type="submit" class="fadeIn fourth" value="Sign up">
            </form>

            <!-- Remind Passowrd -->
            <div id="formFooter">
                <a class="underlineHover" href="http://utnweb.com/web2/Proyecto_1_ISW613/index.php">I have user</a>
            </div>
        </div>
    </div>