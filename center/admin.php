<?php
require_once "db.php";
session_start();
if (!empty($_POST["login"]) && !empty($_POST["password"])) {
    $login = trim($_POST["login"]);
    $password = trim($_POST["password"]);

    $sql = "SELECT * FROM admins WHERE login = '$login' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $_SESSION["admin"] = true;
    } else {
        header("Location: admin.php");
    }
}
require_once "head.php" ?>
    <title>Админ панель</title>
    <link rel="stylesheet" href="css/admin.css">
</head>
<body>
    <?php if (!empty($_SESSION["admin"])) {
        $applications = array();

        $sql = "SELECT * FROM applications";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $applications[] = $row;
            }
        }
        for ($i = 0; $i < sizeof($applications); $i++) { ?>
        <div class="applications">
            <span>Имя: <?php echo $applications[$i]["name"] ?></span>
            <span>Электронная почта: <a href="mailto:<?php echo $applications[$i]["email"] ?>"><?php echo $applications[$i]["email"] ?></a></span>
            <span>Выбранный курс: <?php echo $applications[$i]["course"] ?></span>
        </div>
    <?php }} else { ?>
        <form action method="POST">
            <input type="text" name="login" placeholder="Ваш логин" autocomplete="on" required>
            <input type="password" name="password" placeholder="Ваш пароль" required>
            <input type="submit" value="Войти">
        </form>
    <?php } ?>
</body>
</html>