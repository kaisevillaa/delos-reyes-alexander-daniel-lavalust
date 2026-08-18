<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= html_escape($page_title); ?></title>
    <style>
        body { font-family: Verdana, sans-serif; margin: 0; background: #0b1020; color: #dbeafe; }
        .wrap { max-width: 920px; margin: 44px auto; padding: 28px; background: #111827; border: 1px solid #374151; border-radius: 14px; }
        .nav a { color: #60a5fa; margin-right: 16px; text-decoration: none; font-weight: bold; }
        h1 { margin-bottom: 6px; }
        .desc { color: #93c5fd; margin-bottom: 18px; }
        table { width: 100%; border-collapse: collapse; }
        td { border: 1px solid #334155; padding: 10px; }
        td:first-child { width: 220px; font-weight: 700; color: #bfdbfe; background: #0f172a; }
    </style>
</head>
<body>
    <div class="wrap">
        <div class="nav">
            <a href="<?= site_url('student'); ?>">Home</a>
            <a href="<?= site_url('student/profile'); ?>">Student Profile</a>
        </div>

        <h1>Student Information</h1>
        <p class="desc">Xander Student Profile Card</p>

        <table>
            <tr><td>Student ID</td><td><?= html_escape($student['student_id']); ?></td></tr>
            <tr><td>Name</td><td><?= html_escape($student['name']); ?></td></tr>
            <tr><td>Course</td><td><?= html_escape($student['course']); ?></td></tr>
            <tr><td>Year Level</td><td><?= html_escape($student['year_level']); ?></td></tr>
            <tr><td>Section</td><td><?= html_escape($student['section']); ?></td></tr>
            <tr><td>Email</td><td><?= html_escape($student['email']); ?></td></tr>
            <tr><td>Address</td><td><?= html_escape($student['address']); ?></td></tr>
            <tr><td>Contact Number</td><td><?= html_escape($student['contact_number']); ?></td></tr>
            <tr><td>Skills</td><td><?= html_escape($student['skills']); ?></td></tr>
            <tr><td>Hobbies</td><td><?= html_escape($student['hobbies']); ?></td></tr>
            <tr><td>Profile Description</td><td><?= html_escape($student['profile_description']); ?></td></tr>
            <tr><td>Instagram</td><td><?= html_escape($student['instagram']); ?></td></tr>
            <tr><td>Facebook</td><td><?= html_escape($student['facebook']); ?></td></tr>
        </table>
    </div>
</body>
</html>
