<?php
require_once ('functions.php');

function deposit_amount($acc, $amt) {
    $data = load_data();

    if (!isset($data[$acc])) {
        return "❌ Account not found.";
    }

    $data[$acc]['balance'] += floatval($amt);
    save_data($data);

    return "✅ Deposit successful. New Balance: ₹" . $data[$acc]['balance'];
}

function withdraw_amount($acc, $amt) {
    $data = load_data();

    if (!isset($data[$acc])) {
        return "❌ Account not found.";
    }

    if ($data[$acc]['balance'] < $amt) {
        return "❌ Insufficient balance.";
    }

    $data[$acc]['balance'] -= floatval($amt);
    save_data($data);

    return "✅ Withdrawal successful. Remaining Balance: ₹" . $data[$acc]['balance'];
}

function view_balance($acc) {
    $data = load_data();

    if (!isset($data[$acc])) {
        return "❌ Account not found.";
    }

    return "📄 Current Balance: ₹" . $data[$acc]['balance'];
}
?>
