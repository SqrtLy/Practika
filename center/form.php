<?php require_once "head.php" ?>
    <title>Запись на курс - Учебный центр по программированию</title>
    <link rel="stylesheet" href="css/form.css">
    <script src="js/form.js" defer></script>
</head>
<body>
    <div class="wrapper">
        <?php require_once "header.php" ?>
        <main>
            <div>
                <h2>Запишись на наши курсы прямо сейчас, и мы свяжемся с вами в ближайшее время</h2>
                <form>
                    <input type="text" name="name" maxlength="64" placeholder="Ваше имя" autocomplete="on" required>
                    <input type="email" name="email" maxlength="255" placeholder="Ваша электронная почта" autocomplete="on" required>
                    <div>
                        <span>Курс:</span>
                        <select name="course">
                            <option value="Python">Python</option>
                            <option value="Java">Java</option>
                            <option value="React">React</option>
                        </select>
                    </div>
                    <button>Записаться</button>
                    <span>Отправлено!</span>
                </form>
            </div>
            <img src="public/form.png" alt="Картинка формы">
        </main>
    </div>
</body>
</html>