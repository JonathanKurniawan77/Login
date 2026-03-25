<?php
    session_start();
    if (isset($_SESSION["login"]) && $_SESSION["login"] === true) {
        header("Location: dashboard.php");
        exit();
    }

    $user_benar = "admin";
    $pass_benar = "admin123";
    $pesan = "";
    
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $username = $_POST["username"];
        $password = $_POST["password"];
        
        if($username == $user_benar && $password == $pass_benar){
            $_SESSION["login"] = true; 
            $_SESSION["username"] = $username; 
            header("Location: dashboard.php");
            exit();
        } else {
            $pesan = "Username atau password salah!";
        }
    }   
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://images.unsplash.com/photo-1557683316-973673baf926?w=1600');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .container {
            width: 100%;
            max-width: 400px;
        }

        .login-card {
            background: white;
            border-radius: 20px;
            padding: 40px 35px;
        }

        .login-card h2 {
            text-align: center;
            color: #333;
            font-size: 28px;
            margin-bottom: 10px;
            font-weight: 600;
        }

        .subtitle {
            text-align: center;
            color: #666;
            font-size: 14px;
            margin-bottom: 30px;
            border-bottom: 2px solid #f0f0f0;
            padding-bottom: 20px;
        }

        .input-group {
            margin-bottom: 25px;
        }

        .input-group label {
            display: block;
            margin-bottom: 8px;
            color: #555;
            font-weight: 500;
            font-size: 14px;
        }

        .input-wrapper {
            position: relative;
            display: flex;
            align-items: center;
        }

        .input-icon {
            position: absolute;
            left: 15px;
            color: #999;
            font-size: 18px;
        }

        .input-wrapper input {
            width: 100%;
            padding: 12px 15px 12px 45px;
            border: 2px solid #e0e0e0;
            border-radius: 12px;
            font-size: 15px;
            font-family: inherit;
        }

        .login-btn {
            width: 100%;
            padding: 12px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border: none;
            border-radius: 12px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            margin-top: 10px;
        }

        .error-message {
            color: #e74c3c;
            font-size: 13px;
            margin-top: 12px;
            text-align: center;
            padding: 8px;
            background: #fee;
            border-radius: 8px;
            display: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="login-card">
            <h2>✨ Selamat Datang ✨</h2>
            <div class="subtitle">Silakan masuk ke akun Anda</div>
            
            <form action="" method="POST">
                <div class="input-group">
                    <label for="username">Username</label>
                    <div class="input-wrapper">
                        <span class="input-icon">👤</span>
                        <input type="text" id="username" name="username" placeholder="Masukkan username Anda" autocomplete="off" required>
                    </div>
                </div>
                
                <div class="input-group">
                    <label for="password">Password</label>
                    <div class="input-wrapper">
                        <span class="input-icon">🔒</span>
                        <input type="password" id="password" name="password" placeholder="Masukkan password Anda" required>
                    </div>
                </div>
                
                <button type="submit" class="login-btn">🚀 Login Sekarang</button>
                
                <?php if($pesan != ""): ?>
                    <div class="error-message" style="display: block;"><?php echo ($pesan); ?></div>
                <?php endif; ?>
                
            </form>
        </div>
    </div>
</body>
</html>