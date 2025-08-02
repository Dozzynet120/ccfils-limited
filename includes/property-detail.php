<?php
$properties = [
  1 => [
    'title' => 'Modern 5-Bedroom Duplex',
    'location' => 'Graceland Estate Owerri',
    'image' => 'assets/images/p9.jpeg',
    'description' => '7 BEDROOM DUPLEX AT GRACELAND ESTATE OWERRI.',
  ],
  2 => [
    'title' => 'Luxury 4-5/Bedroom Mansion',
    'location' => 'Mbaise, Imo state',
    'image' => 'assets/images/p6.jpg',
    'description' => '5 AND 4 BEDROOM DUPLEX AT MBAISE IMO STATE..',
  ],
  3 => [
    'title' => '3-Bedroom Terrace',
    'location' => 'Pearl Garden Estate, Sangotedo',
    'image' => 'assets/images/p5.jpg',
    'description' => '7 BEDROOM DUPLEX AT PEARL GARDEN ESTATE, SANGODETO.',
  ]
];

// Get ID from URL
$id = $_GET['id'] ?? null;

// Fallback if ID is invalid
if (!isset($properties[$id])) {
  echo "<h2>Property not found.</h2>";
  exit;
}

$property = $properties[$id];
?>

<!-- Example Output in property-detail.php -->
<h1><?= $property['title'] ?></h1>
<p><strong>Location:</strong> <?= $property['location'] ?></p>
<img src="<?= $property['image'] ?>" alt="<?= $property['title'] ?>" style="max-width:100%;">
<p><?= $property['description'] ?></p>
