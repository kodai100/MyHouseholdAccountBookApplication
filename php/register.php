<?php 
    $item = htmlspecialchars($_POST['item'], ENT_QUOTES);
    $date = htmlspecialchars($_POST['date'], ENT_QUOTES);
    $person = htmlspecialchars($_POST['person'], ENT_QUOTES);
    $name = htmlspecialchars($_POST['name'], ENT_QUOTES);
    $price = htmlspecialchars($_POST['price'], ENT_QUOTES);


    // ファイルが無ければ自動で作成される.
    // -> 月別にファイルを作成して読み込めばOK
    $arr = explode('-' , $date);

    $filename = $arr[0] . "_" . $arr[1] . ".csv";
    $myfile = fopen("../data/" . $filename, "a+") or die("Unable to open file!");
    
    $line = "{$date}, {$person}, {$item}, {$name}, {$price}\n";

    fwrite($myfile, $line);
    fclose($myfile);

?>

<!DOCTYPE html>
<html lang="ja">

    <head>
        <title>家計簿 : 送信完了</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
        <link rel="icon" href="../img/favicon.ico">
        <link rel="apple-touch-icon" href="../img/icon.png">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/style.css">
    </head>

    <body>
        <h3 class="h3 text-center">以下の内容で書き込まれました</h3>
        <div class = "container">
            <div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>日付</th>
                            <th>名前</th>
                            <th>項目</th>
                            <th>品目</th>
                            <th>金額</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php echo $date; ?></td>
                            <td><?php echo $person; ?></td>
                            <td><?php echo $item; ?></td>
                            <td><?php echo $name; ?></td>
                            <td><?php echo $price . "円"; ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="btn-toolbar">
                <div class="btn-group">
                    <input type="button" class="btn btn-lg btn-primary" value="トップへ戻る" onClick="location.href='../'">
                </div>
            </div>
        </div>

    </body>
</html>