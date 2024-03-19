<html>
<?php

?>
    <head>
        <title>E-VOTING</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body background="joe-woods-4Zaq5xY5M_c-unsplash.jpg">
        <div id="form">
            <form action="main.html">
        <fieldset>
            <legend><h1>VIRTUAL VOTING SYSTEM (VVS)</h1></legend>

            <Label>Name:</Label>&nbsp &nbsp
            <input type="text" name="name" placeholder="Enter your name" required><br><br>

            <Label>PROVINCE:</Label>&nbsp &nbsp
            <input type="text" name="province" placeholder="Enter Province" required><br><br>

            <Label>DOB:</Label>&nbsp &nbsp
            <input type="date" name="dob" placeholder="Date Of Birth" required><br><br>

            <Label>Gender:</Label>&nbsp &nbsp
            <input type="radio" name="gender" class="g" value="male">Male
            <input type="radio" name="gender" class="g" value="female" checked>Female
            <br><br>

            <label>NRC NUMBER:</label>&nbsp &nbsp
            <input type="number" name="nrc number" placeholder="Enter your NRC number" maxlength="11" required><br><br>

            <label>Parties:</label>&nbsp &nbsp
            <select name="Political">
                <option value="null">choose political party</option>
                <option value="UPND">UPND</option>
                <option value="MMD">MMD</option>
                <option value="PF">PF</option>
                <option value="UNIP">UNIP</option>
            </select><br>
        </fieldset>
        <input type="submit" name="submit" value="submit">
        </div>
    </body>

</html>