<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= html_escape($page_title ?? 'Products'); ?></title>
    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'SF Pro Text', 'Helvetica Neue', Arial, sans-serif;
            background: #ffffff;
            color: #1a1a1a;
            min-height: 100vh;
        }
        .container {
            max-width: 1000px;
            margin: 0 auto;
            padding: 48px 32px;
        }
        .top-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 32px;
            padding-bottom: 16px;
            border-bottom: 1px solid #f0f0f0;
        }
        .user-info {
            font-size: 13px;
            color: #666666;
        }
        .user-name {
            font-weight: 600;
            color: #111111;
        }
        .logout-link {
            font-size: 13px;
            color: #d93025;
            text-decoration: none;
            margin-left: 16px;
            font-weight: 500;
        }
        .logout-link:hover {
            text-decoration: underline;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
            margin-bottom: 24px;
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
        .btn {
            display: inline-flex;
            align-items: center;
            padding: 9px 16px;
            font-size: 13px;
            font-weight: 500;
            border-radius: 6px;
            text-decoration: none;
            cursor: pointer;
            transition: background 0.15s;
        }
        .btn-primary {
            background: #000000;
            color: #ffffff;
            border: none;
        }
        .btn-primary:hover {
            background: #333333;
        }
        .alert-success {
            padding: 12px 16px;
            background: #f6ffed;
            border: 1px solid #b7eb8f;
            color: #389e0d;
            border-radius: 6px;
            font-size: 13px;
            margin-bottom: 20px;
        }
        .alert-danger {
            padding: 12px 16px;
            background: #fff1f0;
            border: 1px solid #ffccc7;
            color: #cf1322;
            border-radius: 6px;
            font-size: 13px;
            margin-bottom: 20px;
        }
        .table-wrap {
            border: 1px solid #e5e5e5;
            border-radius: 8px;
            overflow: hidden;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 13px;
        }
        thead {
            background: #f9f9f9;
        }
        thead th {
            padding: 12px 16px;
            text-align: left;
            font-size: 11px;
            font-weight: 600;
            letter-spacing: 0.05em;
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
        .id-cell {
            font-size: 12px;
            color: #aaaaaa;
            font-variant-numeric: tabular-nums;
            width: 50px;
        }
        .name-cell {
            font-weight: 500;
            color: #111111;
        }
        .desc-cell {
            color: #666666;
            max-width: 250px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }
        .num-cell {
            font-variant-numeric: tabular-nums;
        }
        .actions-cell {
            text-align: right;
            white-space: nowrap;
        }
        .action-link {
            font-size: 12px;
            text-decoration: none;
            margin-left: 12px;
            font-weight: 500;
        }
        .action-edit {
            color: #1677ff;
        }
        .action-edit:hover {
            text-decoration: underline;
        }
        .action-delete {
            color: #cf1322;
            background: none;
            border: none;
            cursor: pointer;
            font-family: inherit;
            font-size: 12px;
            font-weight: 500;
            padding: 0;
            margin-left: 12px;
        }
        .action-delete:hover {
            text-decoration: underline;
        }
        .empty {
            text-align: center;
            padding: 64px 0;
            color: #888888;
            font-size: 14px;
        }
        .count {
            margin-top: 16px;
            font-size: 12px;
            color: #888888;
            text-align: right;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="top-bar">
            <div class="user-info">
                Signed in as <span class="user-name"><?= html_escape($username ?? 'Admin'); ?></span>
            </div>
            <div>
                <a href="<?= site_url('logout'); ?>" class="logout-link">Sign Out</a>
            </div>
        </div>

        <?php if (!empty($success)): ?>
            <div class="alert-success">
                <?= html_escape($success); ?>
            </div>
        <?php endif; ?>

        <?php if (!empty($error)): ?>
            <div class="alert-danger">
                <?= html_escape($error); ?>
            </div>
        <?php endif; ?>

        <div class="header">
            <div>
                <h1>Products <span class="badge"><?= count($products); ?></span></h1>
                <p>Manage product catalog and inventory</p>
            </div>
            <a href="<?= site_url('products/create'); ?>" class="btn btn-primary">+ Add Product</a>
        </div>

        <div class="table-wrap">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Product Name</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Created At</th>
                        <th style="text-align: right;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($products)): ?>
                        <?php foreach ($products as $p): ?>
                            <tr>
                                <td class="id-cell">#<?= html_escape($p['id']); ?></td>
                                <td class="name-cell"><?= html_escape($p['product_name']); ?></td>
                                <td class="desc-cell" title="<?= html_escape($p['description'] ?? ''); ?>"><?= html_escape($p['description'] ?? '—'); ?></td>
                                <td class="num-cell">$<?= number_format((float)$p['price'], 2); ?></td>
                                <td class="num-cell"><?= html_escape($p['quantity']); ?></td>
                                <td class="num-cell" style="color: #888888; font-size: 12px;"><?= html_escape(date('M d, Y', strtotime($p['created_at']))); ?></td>
                                <td class="actions-cell">
                                    <a href="<?= site_url('products/edit/' . $p['id']); ?>" class="action-link action-edit">Edit</a>
                                    <a href="<?= site_url('products/delete/' . $p['id']); ?>" class="action-link action-delete" onclick="return confirm('Are you sure you want to delete this product?');">Delete</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="7" class="empty">No products found. Click "+ Add Product" to create one.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>

        <?php if (!empty($products)): ?>
            <p class="count"><?= count($products); ?> item<?= count($products) !== 1 ? 's' : ''; ?></p>
        <?php endif; ?>
    </div>
</body>
</html>
