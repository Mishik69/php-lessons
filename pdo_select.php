
<?php
#подключаемся к базе

$pdo = new PDO("mysql:host=localhost;dbname=test;", "root", "");
$statement = $pdo->prepare("SELECT * FROM users");
$statement->execute();
$users = $statement->fetchAll(PDO::FETCH_ASSOC);

# создаем массив данных
$users = [
    [
        "id"=> 1,
        "name" => "Jane Doe",
        "email" => "jane@example.com"
    ],
    [
        "id"=> 2,
        "name" => "John",
        "email" => "john@example.com"
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
<h1>Users</h1>
<a href="#" class="btn btn-success">Create</a>
<div class="row">
    <div class="col-md-8">
        <table class="table">
            <thead>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Acyions</th>
            </thead>
            <tbody>
            <?php foreach($users as $user):?>
                <tr>
                    <td><?php echo $user['id']; ?></td>
                    <td><?php echo $user['name']; ?></td>
                    <td><?php echo $user['email']; ?></td>
                    <td>
                        <a href="#" class="btn btn-info">Show</a>
                        <a href="#" class="btn btn-warning">Edit</a>
                        <a href="#" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            <?php endforeach;?>
            </tbody>
        </table>
    </div>
</body>
</html>
