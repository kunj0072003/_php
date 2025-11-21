<?php
function load_data() {
    if (!file_exists("bank_data.json")) {
        file_put_contents("bank_data.json", "{}");
    }
    return json_decode(file_get_contents("bank_data.json"), true);
}

function save_data($data) {
    file_put_contents("bank_data.json", json_encode($data, JSON_PRETTY_PRINT));
}
?>
