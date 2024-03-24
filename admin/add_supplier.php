<html>
<head>
    <title>Add Supplier</title>
    <script>
        function validateSupplier(){
            let name = document.getElementById('name');
            let phone = document.getElementById('phone');
            let email = document.getElementById('email');
            let location = document.getElementById('location');
            let password = document.getElementById('password');
            let confirm_password = document.getElementById('confirm_password');

            if(password == confirm_password){
                return true;
            }else{
                alert('Passwords do not match');
                return false;
            }
            if(name || phone || email || location|| password || confirm_password == ''){
                alert('Please fill all the fields');
                return false;
        }
    }
    </script>
</head>
<body>
    <h2>Add Supplier</h2>
    <form action="" method="post">
        <label for="name">Name:</label>
        <input type="text" name="name" name="name" required>
        <label> Phone number: </label>
        <input type="tel" name="phone" id="phone" required>
        <label> Email: </label>
        <input type="email" name="email" id="email" required>
        <label for="">?Location</label>
        <input type="text" name="location" id="location" required>
        <label for="">Password: </label>
        <input type="password" name="password" required>
        <label for="">Confirm Password: </label>
        <input type="password" name="<PASSWORD>" required>
        <input type="submit" name="submit" value="Add Supplier">

        <?php
        include "admindb.php";
        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $phone = $_POST['phone'];
            $email = $_POST['email'];
            $location = $_POST['location'];
            $password = $_POST['password'];
        }

                        $sql = "INSERT INTO supplier (name, phone, email, location, password) VALUES ('$name', '$phone', '$email', '$location', '$password')";
                        $result = mysqli_query($connect, $sql);
                        if (!$result) {
                            die(mysqli_error($connect));
                        } else {
                            echo "Supplier added successfully";
                        }
            ?>
    </form>
</body>
</html>
