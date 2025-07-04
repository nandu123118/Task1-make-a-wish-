<?php
$wishes = [
    "Have a fantastic day!😊",
    "Wishing you success and happiness!🤗",
    "Keep smiling and stay positive!😁",
    "Believe in yourself!👌",
    "Good luck with your journey!👍",
    "Hard work pays back keep going!👩‍🎤"
];

$wish = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $wish = $wishes[array_rand($wishes)];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
    <style>
        body {
            font-family: Arial;
            text-align: center;
            padding-top: 100px;
        }
        button {
            padding: 10px 20px;
            font-size: 16px;
        }
        .wish {
            margin-top: 20px;
            font-size: 20px;
            color: #2b8a3e;
        }
    </style>
</head>
<body>
    <h1>Welcome!</h1>
    <form method="post">
        <button type="submit">Get a Wish</button>
    </form>
    <?php if ($wish): ?>
        <div class="wish"><?= htmlspecialchars($wish) ?></div>
    <?php endif; ?>
</body>
</html>
