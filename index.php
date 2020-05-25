<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Web</title>
</head>
<body>
    <?php require_once 'submit.php'; ?>

    <div class="hero">
        <div class="form-box">
            <div class="socials">
                <img src="img/fb.png" alt="">
                <img src="img/gp.png" alt="">
                <img src="img/tw.png" alt="">
            </div>
            
            <form method="POST">
                <div id="name-surname" class="input-group">
                    <input type="text" class="input-field" name="name" placeholder="Name" required>
                    <input type="text" class="input-field"  name="surname" placeholder="Surname" required>
                </div>

                <div id="user-psw" class="input-group">
                    <input type="text" class="input-field" name="username" placeholder="Username" required>
                    <input type="text" class="input-field" name="password" placeholder="Password" required>
                </div>

                <button type="submit" name="save" class="submit-btn" onclick="next()">Next</button>
            </form>
        </div>
    </div>



    <script src="script.js"></script>
    
</body>
</html>