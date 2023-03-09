
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Function</title>
</head>
<body>
    <div class="form">
        <form action="insert_function.php" method="post">
            <!-- <input type="text" name="table" placeholder="Enter Table Name"> -->
            <select name="table" >
                <option value="table_one">table_one</option>
            </select>
            <input type="text" name="fname" placeholder="Enter First Name" required>
            <input type="text" name="lname" placeholder="Enter Last Name" required>
            <select name="city" required>
                <option value="kolkata">kolkata</option>
                <option value="delhi">delhi</option>
                <option value="mumbai">mumbai</option>
                <option value="bangalore">bangalore</option>
                <option value="chennai">chennai</option>
            </select>
            <input type="submit" name="submit" placeholder="insert">
        </form>
    </div>
</body>
</html>
