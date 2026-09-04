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
        .table-wrap {
            border: 1px solid #e5e5e5;
            border-radius: 8px;
            overflow: hidden;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 14px;
        }
        tbody tr {
            border-bottom: 1px solid #f0f0f0;
        }
        tbody tr:last-child { border-bottom: none; }
        tbody tr:hover { background: #fafafa; }
        tbody td {
            padding: 14px 20px;
            vertical-align: top;
        }
        tbody td:first-child {
            width: 200px;
            font-size: 11px;
            font-weight: 600;
            letter-spacing: 0.06em;
            text-transform: uppercase;
            color: #888888;
            background: #f7f7f7;
            border-right: 1px solid #e5e5e5;
        }
        tbody td:last-child {
            color: #1a1a1a;
        }
    </style>
</head>
<body>
    <div class="container">
        <nav class="nav">
            <a href="<?= site_url('student'); ?>">Home</a>
            <a href="<?= site_url('student/profile'); ?>" class="active">Profile</a>
            <a href="<?= site_url('users'); ?>">Users</a>
        </nav>

        <div class="header">
            <h1>Student Profile</h1>
            <p>Xander Student Profile Card</p>
        </div>

        <div class="table-wrap">
            <table>
                <tbody>
                    <tr>
                        <td>Student ID</td>
                        <td><?= html_escape($student['student_id']); ?></td>
                    </tr>
                    <tr>
                        <td>Name</td>
                        <td><?= html_escape($student['name']); ?></td>
                    </tr>
                    <tr>
                        <td>Course</td>
                        <td><?= html_escape($student['course']); ?></td>
                    </tr>
                    <tr>
                        <td>Year Level</td>
                        <td><?= html_escape($student['year_level']); ?></td>
                    </tr>
                    <tr>
                        <td>Section</td>
                        <td><?= html_escape($student['section']); ?></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><?= html_escape($student['email']); ?></td>
                    </tr>
                    <tr>
                        <td>Address</td>
                        <td><?= html_escape($student['address']); ?></td>
                    </tr>
                    <tr>
                        <td>Contact Number</td>
                        <td><?= html_escape($student['contact_number']); ?></td>
                    </tr>
                    <tr>
                        <td>Skills</td>
                        <td><?= html_escape($student['skills']); ?></td>
                    </tr>
                    <tr>
                        <td>Hobbies</td>
                        <td><?= html_escape($student['hobbies']); ?></td>
                    </tr>
                    <tr>
                        <td>Description</td>
                        <td><?= html_escape($student['profile_description']); ?></td>
                    </tr>
                    <tr>
                        <td>Instagram</td>
                        <td><?= html_escape($student['instagram']); ?></td>
                    </tr>
                    <tr>
                        <td>Facebook</td>
                        <td><?= html_escape($student['facebook']); ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
