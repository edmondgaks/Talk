<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA" content="ie-edge">
    <title>Realtime Chat App | EDMOND</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
</head>
<body>
    <div class="wrapper">
        <section class="form signup">
            <header>Realtime Chat app</header>
            <form action="#" enctype="multipart/form-data" autocomplete="off">
                <div class="error-txt">This is an error message</div>
                <div class="name-details">
                    <div class="field input">
                        <label>First Name</label>
                        <input type="text" name="fname" placeholder="First Name">
                    </div>
                    <div class="field input">
                        <label>Last Name</label>
                        <input type="text" name="lname" placeholder="Last Name">
                    </div>
                </div>
                    <div class="field input">
                        <label>Email Address</label>
                        <input type="email" name="email" placeholder="Enter your email">
                    </div>
                    <div class="field input">
                        <label>Password</label>
                        <input type="password" name="password" placeholder="Enter new Password">
                        <i class="fas fa-eye"></i>
                    </div>
                    <div class="field image">
                        <label>Select image</label>
                        <input type="file" name="image">
                    </div>
                    <div class="field button">
                        <input type="submit" value="Continue to Chat">
                    </div>
            </form>
            <div class="link">Already Signed up? <a href="login.php">Login now</a></div>
        </section>
    </div>
    <script src="js/show-pass.js"></script>
    <script src="js/signup.js"></script>
</body>
</html>