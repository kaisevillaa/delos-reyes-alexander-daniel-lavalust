<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= html_escape($page_title); ?></title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; background: linear-gradient(135deg, #0f172a, #1e3a8a); color: #e2e8f0; }
        .card { max-width: 860px; margin: 48px auto; background: rgba(15, 23, 42, 0.9); border: 1px solid #334155; border-radius: 16px; padding: 28px; }
        .nav a { color: #93c5fd; text-decoration: none; margin-right: 16px; font-weight: 700; }
        .tag { display: inline-block; margin-top: 10px; padding: 6px 10px; border-radius: 999px; background: #1d4ed8; }
        .alert { margin: 14px 0; padding: 10px 12px; background: #7f1d1d; border: 1px solid #ef4444; border-radius: 8px; }
        .grid { display: grid; grid-template-columns: repeat(auto-fit,minmax(220px,1fr)); gap: 12px; margin-top: 16px; }
        .item { background: #0b1220; border: 1px solid #334155; border-radius: 10px; padding: 12px; }
        .item strong { color: #93c5fd; }
    </style>
</head>
<body>
    <div class="card">
        <div class="nav">
            <a href="<?= site_url('student'); ?>">Home</a>
            <a href="<?= site_url('student/profile'); ?>">Student Profile</a>
        </div>

        <h1>Xander Student Hub</h1>

        <?php if (!empty($notice)): ?>
            <div class="alert"><?= html_escape($notice); ?></div>
        <?php endif; ?>

        <p>Welcome! This page grants access to the protected profile route.</p>

        <div class="grid">
            <div class="item"><strong>Student ID:</strong> <?= html_escape($student['student_id']); ?></div>
            <div class="item"><strong>Name:</strong> <?= html_escape($student['name']); ?></div>
            <div class="item"><strong>Course:</strong> <?= html_escape($student['course']); ?></div>
            <div class="item"><strong>Year Level:</strong> <?= html_escape($student['year_level']); ?></div>
            <div class="item"><strong>Section:</strong> <?= html_escape($student['section']); ?></div>
            <div class="item"><strong>Email:</strong> <?= html_escape($student['email']); ?></div>
        </div>
    </div>
</body>
</html>
