<!DOCTYPE html>
<html>

<head>
    <title>Server Side</title>
</head>

<body>
    <!-- get | post
    get => <a href=""></a>
    post => <form action=""></form> -->

    <a href="./19_server.php?name=watbuu&age=23">Go to Server page</a>

    <form action="./19_server.php" method="POST" enctype="multipart/form-data">
        <label>First Name</label>
        <input type="text" name="firstName" />

        <label>Second Name</label>
        <input type="text" name="secName" />

        <select name="gender">
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select>

        <input type="file" name="imageFile" />

        <input type="submit" value="Submit" />
    </form>
    
    
    

</body>

</html>