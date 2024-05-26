<html>
    <body>
        <h1>じゃんけんゲーム</h1>
        <p>最初はグー！じゃんけん・・・</p>
        <form action="result.php" method="POST">
            <p>
                <input type="radio" name="hands" value="グー">グー
                <input type="radio" name="hands" value="チョキ">チョキ
                <input type="radio" name="hands" value="パー">パー
            </p>
            <input type="submit" value="勝負！">
        </form>
    </body>
</html>