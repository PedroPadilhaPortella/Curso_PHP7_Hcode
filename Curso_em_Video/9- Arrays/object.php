<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Array de Objects</h1>
    <pre>
    <pre>
    <table border="1"><tr>
    <?php
    $user = array(
        'name' => 'Pedro',
        'lastName' => 'Cruz',
        'id' => 001,
        'age' => 19,
        'adress' => array(
            'street' => "Rua antonio le voci",
            'city' => 'São Paulo-SP'
        )
    );
    print_r($user);
    foreach($user as $key => $value){
        echo "<td>$key <td> $value<tr>";
    }
    
    ?>
    </table>
    </pre>
</body>
</html>