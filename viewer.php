<?php 
    date_default_timezone_set('Asia/Tokyo');
    $arr = explode('-' , date("Y-m-d"));
    $filename = $arr[0] . "_" . $arr[1] . ".csv";

    $lines = file("data/" . $filename);

    $sum_takao = 0;
    $sum_hasegawa = 0;

    foreach ($lines as $line_num => $line) {
        $data = explode(", ", $line);

        if(strpos($data[1],"長谷川まい") !== false){
            $sum_hasegawa += $data[4];
        } else{
            $sum_takao += $data[4];
        }
    }
?>

<!DOCTYPE html>
<html lang="ja">

    <head>
        <title><?php echo "{$arr[0]}年{$arr[1]}月分の家計簿"; ?></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
        <link rel="icon" href="img/favicon.ico">
        <link rel="apple-touch-icon" href="img/icon.png">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>
        <h3 class="h3 text-center"><?php echo "{$arr[0]}年{$arr[1]}月分の家計簿"; ?></h3>
        
        <div class = "container">
            <div>
                <h5>合計額</h5>
                <p>
                    高尾 : <?php echo $sum_takao . "円" ?>, 長谷川 : <?php echo $sum_hasegawa . "円" ?>
                </p>
            </div>
            <div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>日付</th>
                            <th>名前</th>
                            <th>項目</th>
                            <th>品目</th>
                            <th>金額</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach (array_reverse($lines) as $line_num => $line) {
                                $data = explode(", ", $line);

                                echo "<tr>";
                                echo "<th>{$line_num}</th>";
                                echo "<td>{$data[0]}</td>";
                                echo "<td>{$data[1]}</td>";
                                echo "<td>{$data[2]}</td>";
                                echo "<td>{$data[3]}</td>";
                                echo "<td>{$data[4]}円</td>";
                                echo "</tr>";
                            }
                        ?>
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





