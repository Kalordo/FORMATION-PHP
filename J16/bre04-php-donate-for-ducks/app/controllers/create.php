<?php

require_once __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../../config');
$dotenv->load();

$stripeSecretKey = $_ENV['STRIPE_SECRET_KEY'];
$stripe = new StripeClient($stripeSecretKey);

function calculateOrderAmount(int $amount): int {

    if ($amount < 100) {
        return 0;
    }
    return $amount;
}

header('Content-Type: application/json');

try {
    // retrieve JSON from POST body
    $jsonStr = file_get_contents('php://input');
    $jsonObj = json_decode($jsonStr);

    // TODO : Create a PaymentIntent with amount and currency in '$paymentIntent'

    $output = [
        'clientSecret' => $paymentIntent->client_secret,
    ];

    echo json_encode($output);
} catch (Error $e) {
    http_response_code(500);
    echo json_encode(['error' => $e->getMessage()]);
}