<?php include_once 'header.php'; ?>

<?php
session_start();
if(!isset($_SESSION['unique_id'])) {
    header("location: login.php");
}
?>
<body>
    <div class="wrapper">
        <section class="users">
            <header>
                <?php
                include_once "php/config.php";
                $sql = mysqli_query($conn, "Select * from chat where unique_id={$_SESSION['unique_id']}");
                if(mysqli_num_rows($sql) > 0) {
                    $row = mysqli_fetch_assoc($sql);
                } 
                ?>
                <div class="content">
                    <img src="php/img/<?php echo $row['img'] ?>" alt="The user's profile picture">
                    <div class="details">
                        <span><?php echo $row['fname'] ." ". $row['lname']  ?></span>
                        <p><?php echo $row['status'] ?></p>
                    </div>
                </div>
                <a href="#" class="logout">Logout</a>
            </header>
            <div class="search">
                <span class="text">Select an user to start chat</span>
                <input type="text" placeholder="Enter an user to start chat...">
                <button><i class="fas fa-search"></i></button>
            </div>
            <div class="users-list">
                
            </div>
        </section>
    </div>
    <script src="js/users.js"></script>
</body>
</html>