<!DOCTYPE html>
<html lang="en">

    <?php
        include ('head.php');
        include ('navbar.php');
    ?>
     <style>
        .login-container {
            max-width: 400px;
            margin: 100px auto;
            padding: 50px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            height: 100%;
        }

        .form-control {
            border-radius: 30px;
        }

        .btn-custom {
            border-radius: 30px;
            background-color: #007bff;
            color: white;
            width: 100%;
        }
    </style>

<body>
    <div class="login-container">
        <h3>Login</h3><br>
            <form>
                <div class="mb-4">
                    <input type="text" class="form-control" id="username" placeholder="Username">
                </div>
                <div class="mb-4">
                    <input type="password" class="form-control" id="password" placeholder="Password">
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary btn-custom mb-3">Login</button>
                </div>
            </form>
            <div class="signup-link">
                <p>Don't have an account? <a href="signup.php">Sign up here</a></p>
            </div>
    </div>
</body>
</html>