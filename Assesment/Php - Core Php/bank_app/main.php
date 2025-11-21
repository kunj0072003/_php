<?php
require_once ('banker.php');
require_once ('customer.php');

$msg = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $action = $_POST['action'];

    switch ($action) {
        case 'add':
            $msg = add_customer($_POST['acc'], $_POST['name'], $_POST['balance']);
            break;
        case 'search':
            $msg = search_customer($_POST['acc']);
            break;
        case 'all':
            $msg = view_all_customers();
            break;
        case 'total':
            $msg = total_balance();
            break;
        case 'deposit':
            $msg = deposit_amount($_POST['acc'], $_POST['amt']);
            break;
        case 'withdraw':
            $msg = withdraw_amount($_POST['acc'], $_POST['amt']);
            break;
        case 'balance':
            $msg = view_balance($_POST['acc']);
            break;
        default:
            $msg = "❌ Invalid action.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Bank Management - XAMPP Version</title>
</head>
<body style="font-family: Arial, sans-serif;">
    <h2>🏦 PHP Bank Management System</h2>

    <h3>Banker: Add Customer</h3>
    <form method="POST">
        <input type="hidden" name="action" value="add">
        Account No: <input type="text" name="acc" required><br>
		<br>
        Name: <input type="text" name="name" required><br>
		<br>
        Opening Balance: <input type="number" name="balance" step="0.01" required><br>
		<br>
        <button type="submit">Add</button>
    </form>

    <h3>Banker: Search Customer</h3>
    <form method="POST">
        <input type="hidden" name="action" value="search">
        Account No: <input type="text" name="acc" required><br>
		<br>
        <button type="submit">Search</button>
    </form>

    <h3>Banker: View All Customers</h3>
    <form method="POST">
        <input type="hidden" name="action" value="all">
        <button type="submit">View All</button>
    </form>

    <h3>Banker: View Total Balance</h3>
    <form method="POST">
        <input type="hidden" name="action" value="total">
        <button type="submit">Total Balance</button>
    </form>

    <h3>Customer: Deposit Amount</h3>
    <form method="POST">
        <input type="hidden" name="action" value="deposit">
        Account No: <input type="text" name="acc" required><br>
		<br>
        Amount: <input type="number" name="amt" step="0.01" required><br>
        <br>
		<button type="submit">Deposit</button>
    </form>

    <h3>Customer: Withdraw Amount</h3>
    <form method="POST">
        <input type="hidden" name="action" value="withdraw">
        Account No: <input type="text" name="acc" required><br>
        <br>
		Amount: <input type="number" name="amt" step="0.01" required><br>
        <br>
		<button type="submit">Withdraw</button>
    </form>

    <h3>Customer: View Balance</h3>
    <form method="POST">
        <input type="hidden" name="action" value="balance">
        Account No: <input type="text" name="acc" required><br>
        <br>
		<button type="submit">View Balance</button>
    </form>

    <?php if ($msg): ?>
        <h3>📢 Result:</h3>
        <div style="background:AntiqueWhite;padding:10px;"><?php echo $msg; ?></div>
    <?php endif; ?>
</body>
</html>
