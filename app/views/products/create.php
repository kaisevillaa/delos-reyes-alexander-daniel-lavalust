<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= html_escape($page_title ?? 'Add Product'); ?></title>
    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'SF Pro Text', 'Helvetica Neue', Arial, sans-serif;
            background: #f7f7f8;
            color: #1a1a1a;
            min-height: 100vh;
            padding: 48px 24px;
        }
        .card {
            background: #ffffff;
            width: 100%;
            max-width: 560px;
            margin: 0 auto;
            border: 1px solid #e5e5e5;
            border-radius: 12px;
            padding: 36px 32px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.04);
        }
        .header {
            margin-bottom: 24px;
            padding-bottom: 16px;
            border-bottom: 1px solid #f0f0f0;
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
            color: #cf1322;
            border: 1px solid #ffccc7;
        }
        .form-group {
            margin-bottom: 18px;
        }
        .row {
            display: flex;
            gap: 16px;
        }
        .col {
            flex: 1;
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
        input[type="text"], input[type="number"], textarea {
            width: 100%;
            padding: 10px 12px;
            font-size: 14px;
            border: 1px solid #dcdcdc;
            border-radius: 6px;
            outline: none;
            transition: border-color 0.15s, box-shadow 0.15s;
            font-family: inherit;
        }
        textarea {
            min-height: 80px;
            resize: vertical;
        }
        input:focus, textarea:focus {
            border-color: #000000;
            box-shadow: 0 0 0 1px #000000;
        }
        .actions {
            display: flex;
            justify-content: flex-end;
            align-items: center;
            gap: 12px;
            margin-top: 24px;
            padding-top: 16px;
            border-top: 1px solid #f0f0f0;
        }
        .btn {
            padding: 10px 18px;
            font-size: 13px;
            font-weight: 500;
            border-radius: 6px;
            cursor: pointer;
            text-decoration: none;
            transition: background 0.15s;
        }
        .btn-secondary {
            background: #f0f0f0;
            color: #333333;
            border: 1px solid #e0e0e0;
        }
        .btn-secondary:hover {
            background: #e5e5e5;
        }
        .btn-primary {
            background: #000000;
            color: #ffffff;
            border: none;
        }
        .btn-primary:hover {
            background: #333333;
        }
    </style>
</head>
<body>
    <div class="card">
        <div class="header">
            <h1>Add Product</h1>
            <p>Create a new item in the product catalog</p>
        </div>

        <?php if (!empty($error)): ?>
            <div class="alert">
                <?= html_escape($error); ?>
            </div>
        <?php endif; ?>

        <form method="POST" action="<?= site_url('products/create'); ?>">
            <div class="form-group">
                <label for="product_name">Product Name</label>
                <input type="text" id="product_name" name="product_name" value="<?= html_escape($old['product_name'] ?? ''); ?>" required autofocus>
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea id="description" name="description" placeholder="Product details..."><?= html_escape($old['description'] ?? ''); ?></textarea>
            </div>

            <div class="row">
                <div class="col form-group">
                    <label for="price">Price (₱)</label>
                    <input type="number" id="price" name="price" step="0.01" min="0" value="<?= html_escape($old['price'] ?? ''); ?>" required>
                </div>
                <div class="col form-group">
                    <label for="quantity">Quantity</label>
                    <input type="number" id="quantity" name="quantity" step="1" min="0" value="<?= html_escape($old['quantity'] ?? ''); ?>" required>
                </div>
            </div>

            <div class="actions">
                <a href="<?= site_url('products'); ?>" class="btn btn-secondary">Cancel</a>
                <button type="submit" class="btn btn-primary">Save Product</button>
            </div>
        </form>
    </div>
</body>
</html>
