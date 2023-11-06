<?php
require_once 'database/UserData.php';
?>

<html lang="en">
<head>
    <title>PHP Form</title>
    <link rel="stylesheet" href='./styles/output.css'>
</head>

<body class="flex flex-col items-center justify-center h-[100vh] m-0">
<?php

$db = new UserData();

$data = [
    'name' => $_POST['name'],
    'email' => $_POST['email'],
    'gender' => $_POST['gender'],
    'city' => $_POST['city']
];

$db->add($data);
$users = $db->fetchAll();

echo '<table class="table-auto border-collapse border border-green-800">';
echo '<thead>';
echo '<tr>';
echo '<th class="border border-green-600 px-4 py-2">Name</th>';
echo '<th class="border border-green-600 px-4 py-2">Email</th>';
echo '<th class="border border-green-600 px-4 py-2">Gender</th>';
echo '<th class="border border-green-600 px-4 py-2">City</th>';
echo '</tr>';
echo '</thead>';
echo '<tbody>';
foreach ($users as $user) {
    echo '<tr>';
    echo '<td class="border border-green-600 px-4 py-2">' . $user->name . '</td>';
    echo '<td class="border border-green-600 px-4 py-2">' . $user->email . '</td>';
    echo '<td class="border border-green-600 px-4 py-2 capitalize">' . $user->gender . '</td>';
    echo '<td class="border border-green-600 px-4 py-2 capitalize">' . $user->city . '</td>';
    echo '</tr>';
}
echo '</tbody>';
echo '</table>';
?>

</body>
</html>