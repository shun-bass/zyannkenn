<?php
    $hands = $_POST["hands"];
    $enemy = ["グー", "チョキ", "パー"];
    $count = count($enemy);
    $index = rand(0, $count - 1);

    if($hands === $enemy[$index]) {
        $result = "あいこです！";
    } elseif($hands === "グー" && $enemy[$index] === "チョキ") {
        $result = "勝利！";
    } elseif($hands === "チョキ" && $enemy[$index] === "パー") {
        $result = "勝利！";
    } elseif($hands === "パー" && $enemy[$index] === "グー") {
        $result = "勝利！";
    } else {
        $result = "負けです・・";
    }
?>

<html>
    <head>
        <meta charset="UTF-8">
    </head>

    <body>
        <h1>じゃんけんゲーム</h1>
        <p>結果は・・・！？</p>
        <table border = "1">
            <tr><th>You</th><th>vs</th><th>CPU</th></tr>
            <td>   
               <?php echo $hands; ?>
            </td>
            <td>
                <?php echo "vs"; ?>
            </td>
            <td>
                <?php echo $enemy[$index]; ?>
            </td>
        </table>

        <p><?php echo $result; ?></p>
        <a href="janken.php">
            <button>再試合</button>
        </a>
    </body> 
</html>