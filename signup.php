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
        <h3>Signup</h3><br>
            <form>
                <div class="mb-4">
                    <input type="text" class="form-control" id="fullname" placeholder="Fullname" required>
                </div>
                <div class="mb-4">
                    <input type="text" class="form-control" id="contact_number" placeholder="Contact Number" required>
                </div>
                <div class="mb-2">
                    <input type="text" class="form-control" id="address" placeholder="Address" required>
                </div>
                <div class="mb-2">
                    <span style="font-size: 12px; color: #999;">(this is needed to login)</span>
                    <input type="text" class="form-control" id="username" placeholder="Username" required>
                </div>
                <div class="mb-4">
                    <span style="font-size: 12px; color: #999;">(this is needed to login)</span>
                    <input type="password" class="form-control" id="password" placeholder="Password" required>
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary btn-custom mb-3">Create Account</button>
                </div>
            </form>
            <div class="signup-link">
                <p>Already have an account? <a href="login.php">Login</a</p>
            </div>
    </div>
</body>
</html>