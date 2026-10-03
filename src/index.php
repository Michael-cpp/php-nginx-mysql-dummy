<?php
$test = 2342423234;

try {
    $pdo = new PDO(
        sprintf('mysql:host=%s;dbname=%s;charset=utf8mb4', getenv('DB_HOST'), getenv('DB_NAME')),
        getenv('DB_USER'),
        getenv('DB_PASSWORD'),
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );
    $dbStatus = 'MySQL ' . $pdo->query('SELECT VERSION()')->fetchColumn();
} catch (PDOException $e) {
    $dbStatus = 'DB connection failed: ' . $e->getMessage();
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>php-nginx-mysql-dummy</title>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
            integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="
            crossorigin="anonymous"></script>
</head>
<body>
    <p><?= $test ?></p>
    <p id="db-status"><?= htmlspecialchars($dbStatus) ?></p>

    <input type="text" value="123" class="test"/>
    <input type="button" value="dsdlkfjsd" onclick="$('.test').focus();"/>
</body>
</html>
