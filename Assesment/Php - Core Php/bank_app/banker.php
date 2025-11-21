<?php
require_once ('functions.php');

function add_customer($acc, $name, $balance) {
    $data = load_data();
    if (isset($data[$acc])) {
        return "❌ Account already exists!";
    }

    $data[$acc] = [
        "name" => $name,
        "balance" => floatval($balance),
        "Opening Date" => date("Y-m-d H:i:s")
    ];

    save_data($data);
    return "✅ Customer added successfully!";
}

function search_customer($acc) {
    $data = load_data();
    if (isset($data[$acc])) {
        return "<pre>" . print_r($data[$acc], true) . "</pre>";
    }
    return "❌ Account not found.";
}

function view_all_customers() {
    $data = load_data();
    if (empty($data)) {
        return "No customer data available.";
    }
    return "<pre>" . print_r($data, true) . "</pre>";
}

function total_balance() {
    $data = load_data();
    $total = 0;
    foreach ($data as $cust) {
        $total += $cust['balance'];
    }
    return "💰 Total Bank Balance: ₹" . $total;
}
?>
