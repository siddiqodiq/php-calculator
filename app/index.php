<!DOCTYPE html>
<html>
<head>
    <title>Calculator</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container" style="margin-top: 50px">
        <h1 class="text-center mb-4">Calculator</h1>

        <?php require_once "./calcController.php"; ?>

        <!-- Calculator form -->
        <form method="post">
            <div class="input-group mb-3">
                <input name="number1" type="text" class="form-control inputField" placeholder="Number 1" />
                <select name="operation" class="form-select">
                    <option value="plus">+</option>
                    <option value="minus">-</option>
                    <option value="times">*</option>
                    <option value="divided by">/</option>
                </select>
                <input name="number2" type="text" class="form-control inputField" placeholder="Number 2" />
                <button name="submit" type="submit" class="btn btn-primary">Calculate</button>
            </div>
        </form>

        <!-- Result display -->
        <?php if (isset($total)): ?>
            <?php if (is_numeric($total)): ?>
                <div class="alert alert-success mt-3" role="alert">
                    <h3><?= htmlspecialchars($_POST['number1']) ?> <?= htmlspecialchars($_POST['operation']) ?> <?= htmlspecialchars($_POST['number2']) ?> = <?= htmlspecialchars($total) ?></h3>
                </div>
            <?php else: ?>
                <div class="alert alert-danger mt-3" role="alert">
                    <h3><?= htmlspecialchars($total) ?></h3>
                </div>
            <?php endif; ?>
        <?php endif; ?>
    </div>
</body>
</html>