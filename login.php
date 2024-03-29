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
        <section class="form login">
            <header>Realtime Chat app</header>
            <form action="#">
                <div class="error-txt">This is an error message</div>
                    <div class="field input">
                        <label>Email Address</label>
                        <input type="email" placeholder="Enter your email" name="email">
                    </div>
                    <div class="field input">
                        <label>Password</label>
                        <input type="password" placeholder="Enter your Password" name="password">
                        <i class="fas fa-eye"></i>
                    </div>
                    
                    <div class="field button">
                        <input type="submit" value="Continue to Chat">
                    </div>
            </form>
            <div class="link">Not yet Signed up? <a href="index.php">Signup now</a></div>
        </section>
    </div>
    <script src="js/show-pass.js"></script>
    <script src="js/login.js"></script>

</body>
</html>