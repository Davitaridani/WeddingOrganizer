<?php
// This is just for very basic implementation reference, in production, you should validate the incoming requests and implement your backend more securely.
// Please refer to this docs for snap-redirect:
// https://docs.midtrans.com/en/snap/integration-guide?id=alternative-way-to-display-snap-payment-page-via-redirect

namespace Midtrans;

require_once dirname(__FILE__) . '/../Midtrans.php';
// Set Your server key
Config::$serverKey = 'SB-Mid-server-W9ACGKVYaFECGxg3dhngIpFj';

$data = (object) $_POST;

// non-relevant function only used for demo/example purpose
printExampleWarningMessage();

// Uncomment for production environment
// Config::$isProduction = true;

// Uncomment to enable sanitization
// Config::$isSanitized = true;

// Uncomment to enable 3D-Secure
// Config::$is3ds = true;

// Required
$transaction_details = array(
    'order_id' => rand(),
    'gross_amount' => $data->gross_amount, // no decimal allowed for creditcard
);

// Optional
$item1_details = array(
    'id' => $data->prd_id,
    'price' => $data->price,
    'quantity' => $data->quantity,
    'name' => $data->prd_name
);


// Optional
$item_details = array ($item1_details);

// Optional
$billing_address = array(
    'first_name'    => $data->first_name,
    'last_name'     => $data->last_name,
    'address'       => $data->address,
    'city'          => $data->city,
    'postal_code'   => $data->postal_code,
    'phone'         => $data->phone,
    'country_code'  => 'IDN'
);

// Optional
$shipping_address = array(
    'first_name'    => $data->first_name,
    'last_name'     => $data->last_name,
    'address'       => $data->address,
    'city'          => $data->city,
    'postal_code'   => $data->postal_code,
    'phone'         => $data->phone,
    'country_code'  => 'IDN'
);

// Optional
$customer_details = array(
    'first_name'    => $data->first_name,
    'last_name'     => $data->last_name,
    'email'         => $data->email,
    'phone'         => $data->phone,
    'billing_address'  => $billing_address,
    'shipping_address' => $shipping_address
);

// Fill SNAP API parameter
$params = array(
    'transaction_details' => $transaction_details,
    'customer_details' => $customer_details,
    'item_details' => $item_details,
);

try {
    // Get Snap Payment Page URL
    $paymentUrl = Snap::createTransaction($params)->redirect_url;
  
    // Redirect to Snap Payment Page
    header('Location: ' . $paymentUrl);
}
catch (\Exception $e) {
    echo $e->getMessage();
}

function printExampleWarningMessage() {
    if (strpos(Config::$serverKey, 'your ') != false ) {
        echo "<code>";
        echo "<h4>Please set your server key from sandbox</h4>";
        echo "In file: " . __FILE__;
        echo "<br>";
        echo "<br>";
        echo htmlspecialchars('Config::$serverKey = \'<your server key>\';');
        die();
    } 
}
