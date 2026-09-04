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
        .nav a:hover {
            border-color: #000000;
        }
        .nav a.active {
            border-color: #000000;
            font-weight: 500;
        }
        .badge {
            display: inline-block;
            font-size: 11px;
            font-weight: 500;
            padding: 2px 8px;
            border: 1px solid #e5e5e5;
            border-radius: 100px;
            color: #555555;
            margin-left: 8px;
            vertical-align: middle;
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
        thead {
            background: #f7f7f7;
        }
        thead th {
            padding: 12px 16px;
            text-align: left;
            font-size: 11px;
            font-weight: 600;
            letter-spacing: 0.06em;
            text-transform: uppercase;
            color: #888888;
            border-bottom: 1px solid #e5e5e5;
        }
        tbody tr {
            border-bottom: 1px solid #f0f0f0;
            transition: background 0.1s;
        }
        tbody tr:last-child {
            border-bottom: none;
        }
        tbody tr:hover {
            background: #fafafa;
        }
        tbody td {
            padding: 14px 16px;
            color: #1a1a1a;
            vertical-align: middle;
        }
        tbody td.id-cell {
            font-size: 12px;
            color: #aaaaaa;
            font-variant-numeric: tabular-nums;
        }
        tbody td.email-cell {
            color: #555555;
        }
        .empty {
            text-align: center;
            padding: 64px 0;
            color: #aaaaaa;
            font-size: 14px;
        }
        .count {
            margin-top: 16px;
            font-size: 12px;
            color: #aaaaaa;
            text-align: right;
        }
    </style>
</head>
<body>
    <div class="container">
        <nav class="nav">
            <a href="<?= site_url('student'); ?>">Home</a>
            <a href="<?= site_url('student/profile'); ?>">Profile</a>
            <a href="<?= site_url('users'); ?>" class="active">Users</a>
        </nav>

        <div class="header">
            <h1>Users <span class="badge"><?= count($users); ?></span></h1>
            <p>All registered users from the database.</p>
        </div>

        <div class="table-wrap">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Username</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($users)): ?>
                        <?php foreach ($users as $user): ?>
                            <tr>
                                <td class="id-cell"><?= html_escape($user['id']); ?></td>
                                <td><?= html_escape($user['firstname']); ?></td>
                                <td><?= html_escape($user['lastname']); ?></td>
                                <td class="email-cell"><?= html_escape($user['email']); ?></td>
                                <td><?= html_escape($user['username']); ?></td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="5" class="empty">No users found.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>

        <?php if (!empty($users)): ?>
            <p class="count"><?= count($users); ?> record<?= count($users) !== 1 ? 's' : ''; ?></p>
        <?php endif; ?>
    </div>
</body>
</html>
