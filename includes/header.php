<?php
// includes/header.php
if (!isset($current_page)) {
    $current_page = basename($_SERVER['PHP_SELF']);
    if (empty($current_page) || $current_page == '') {
        $current_page = 'index.php';
    }
}

// Dynamically determine the base URL
if (!isset($base_url)) {
    $doc_root = str_replace('\\', '/', $_SERVER['DOCUMENT_ROOT']);
    $proj_root = str_replace('\\', '/', dirname(__DIR__));
    if (strncasecmp($proj_root, $doc_root, strlen($doc_root)) === 0) {
        $base_url = substr($proj_root, strlen($doc_root));
    } else {
        $base_url = '';
    }
    $base_url = '/' . ltrim($base_url, '/');
    if ($base_url === '/') {
        $base_url = '';
    }
}

// Single Source of Truth for Contact Information & Opening Hours
$clinic_phone = '020 8998 3030';
$clinic_fax = '0208 998 4052';
$clinic_email = 'reception@icondentalwembley.co.uk';
$clinic_address = '267A Ealing Road, Wembley, Middlesex, HA0 1EU';
$clinic_address_short = '267A Ealing Road, Wembley';
$clinic_map_link = 'https://www.google.com/maps/search/?api=1&query=267A+Ealing+Road,+Wembley,+Middlesex,+HA0+1EU';
$clinic_map_embed = 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2480.082098670868!2d-0.2981792!3d51.5398285!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4876118b843105ff%3A0xc3191d8f1e29f3d9!2s267A%20Ealing%20Rd%2C%20Wembley%20HA0%201EU%2C%20UK!5e0!3m2!1sen!2sus!4v1700000000000!5m2!1sen!2sus';
$clinic_google_reviews_url = 'https://search.google.com/local/writereview?placeid=ChIJ0wXzhIsRdkYR2fPpV2uYFwA';

$clinic_hours = [
    'Monday - Thursday' => '9AM - 5PM',
    'Friday' => '9AM - 3PM',
    'Saturday' => 'By Appointment Only',
    'Sunday' => 'Closed'
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($page_title) ? $page_title : "Icon Dental- Wembley | Exceptional Dental Care"; ?></title>
    <meta name="description" content="<?php echo isset($page_description) ? $page_description : "At Icon Dental- Wembley, we combine advanced technology with a gentle, personal touch to create healthy, confident smiles that last a lifetime."; ?>">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;500;600;700&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    <!-- Custom Style -->
    <link rel="stylesheet" href="<?php echo $base_url; ?>/assets/css/style.css?v=12">
</head>
<body>

    <!-- Navbar -->
    <?php include __DIR__ . '/navbar.php'; ?>
