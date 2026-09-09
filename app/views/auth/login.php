<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= html_escape($page_title ?? 'Login'); ?></title>
    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'SF Pro Text', 'Helvetica Neue', Arial, sans-serif;
            background: #f7f7f8;
            color: #1a1a1a;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 24px;
        }
        .card {
            background: #ffffff;
            width: 100%;
            max-width: 400px;
            border: 1px solid #e5e5e5;
            border-radius: 12px;
            padding: 36px 32px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.04);
        }
        .header {
            margin-bottom: 28px;
            text-align: center;
        }
        .header h1 {
            font-size: 22px;
            font-weight: 600;
            color: #000000;
            letter-spacing: -0.4px;
        }
        .header p {
            margin-top: 6px;
            font-size: 13px;
            color: #888888;
        }
        .alert {
            padding: 12px 14px;
            border-radius: 6px;
            font-size: 13px;
            margin-bottom: 20px;
            background: #fff1f0;
            color: #d93025;
            border: 1px solid #ffccc7;
        }
        .form-group {
            margin-bottom: 18px;
        }
        label {
            display: block;
            font-size: 12px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            color: #555555;
            margin-bottom: 6px;
        }
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px 12px;
            font-size: 14px;
            border: 1px solid #dcdcdc;
            border-radius: 6px;
            outline: none;
            transition: border-color 0.15s, box-shadow 0.15s;
            font-family: inherit;
        }
        input[type="text"]:focus, input[type="password"]:focus {
            border-color: #000000;
            box-shadow: 0 0 0 1px #000000;
        }
        button {
            width: 100%;
            padding: 11px 16px;
            font-size: 14px;
            font-weight: 500;
            color: #ffffff;
            background: #000000;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            transition: background 0.15s;
            margin-top: 8px;
        }
        button:hover {
            background: #333333;
        }
    </style>
</head>
<body>
    <div class="card">
        <div class="header">
            <h1>Login</h1>
            <p>Enter your credentials to access products</p>
        </div>

        <?php if (!empty($error)): ?>
            <div class="alert">
                <?= html_escape($error); ?>
            </div>
        <?php endif; ?>

        <form method="POST" action="<?= site_url('login'); ?>">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required autofocus autocomplete="username">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required autocomplete="current-password">
            </div>
            <button type="submit">Sign In</button>
        </form>
    </div>
</body>
</html>
