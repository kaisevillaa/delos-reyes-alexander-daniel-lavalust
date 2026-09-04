<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= html_escape($page_title); ?></title>
    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'SF Pro Text', 'Helvetica Neue', Arial, sans-serif;
            background: #ffffff;
            color: #1a1a1a;
            min-height: 100vh;
        }
        .container {
            max-width: 900px;
            margin: 0 auto;
            padding: 64px 32px;
        }
        .nav {
            display: flex;
            gap: 24px;
            margin-bottom: 40px;
        }
        .nav a {
            font-size: 14px;
            color: #000000;
            text-decoration: none;
            border-bottom: 1px solid transparent;
            padding-bottom: 2px;
            transition: border-color 0.15s;
        }
        .nav a:hover { border-color: #000000; }
        .nav a.active { border-color: #000000; font-weight: 500; }
        .header {
            border-bottom: 1px solid #e5e5e5;
            padding-bottom: 24px;
            margin-bottom: 40px;
        }
        .header h1 {
            font-size: 28px;
            font-weight: 600;
            letter-spacing: -0.5px;
            color: #000000;
        }
        .header p {
            margin-top: 6px;
            font-size: 14px;
            color: #888888;
        }
        .alert {
            margin-bottom: 32px;
            padding: 12px 16px;
            border: 1px solid #e5e5e5;
            border-left: 3px solid #000000;
            border-radius: 4px;
            font-size: 14px;
            color: #1a1a1a;
            background: #fafafa;
        }
        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 1px;
            background: #e5e5e5;
            border: 1px solid #e5e5e5;
            border-radius: 8px;
            overflow: hidden;
        }
        .item {
            background: #ffffff;
            padding: 16px 20px;
        }
        .item .label {
            font-size: 11px;
            font-weight: 600;
            letter-spacing: 0.06em;
            text-transform: uppercase;
            color: #888888;
            margin-bottom: 4px;
        }
        .item .value {
            font-size: 14px;
            color: #1a1a1a;
        }
    </style>
</head>
<body>
    <div class="container">
        <nav class="nav">
            <a href="<?= site_url('student'); ?>" class="active">Home</a>
            <a href="<?= site_url('student/profile'); ?>">Profile</a>
            <a href="<?= site_url('users'); ?>">Users</a>
        </nav>

        <div class="header">
            <h1>Student Hub</h1>
            <p>Welcome! Visit your profile using the link above.</p>
        </div>

        <?php if (!empty($notice)): ?>
            <div class="alert"><?= html_escape($notice); ?></div>
        <?php endif; ?>

        <div class="grid">
            <div class="item">
                <div class="label">Student ID</div>
                <div class="value"><?= html_escape($student['student_id']); ?></div>
            </div>
            <div class="item">
                <div class="label">Name</div>
                <div class="value"><?= html_escape($student['name']); ?></div>
            </div>
            <div class="item">
                <div class="label">Course</div>
                <div class="value"><?= html_escape($student['course']); ?></div>
            </div>
            <div class="item">
                <div class="label">Year Level</div>
                <div class="value"><?= html_escape($student['year_level']); ?></div>
            </div>
            <div class="item">
                <div class="label">Section</div>
                <div class="value"><?= html_escape($student['section']); ?></div>
            </div>
            <div class="item">
                <div class="label">Email</div>
                <div class="value"><?= html_escape($student['email']); ?></div>
            </div>
        </div>
    </div>
</body>
</html>
