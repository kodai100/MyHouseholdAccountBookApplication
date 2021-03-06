<?php date_default_timezone_set('Asia/Tokyo'); ?>

<!DOCTYPE html>
<html lang="ja">

    <head>
        <title>家計簿</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
        <link rel="icon" href="img/favicon.ico">
        <link rel="apple-touch-icon" href="img/icon.png">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <script type="text/javascript" src="js/kodai/pitch_canceller.js"></script>
        <script type="text/javascript" src="js/kodai/form_manager.js"></script>
    </head>
    <body>
        <style>
            body , input , textarea , select {
            /* 入力欄にフォーカスが当たっても拡大しない */
            font-size:16px;
            }
        </style>

        <h2 class="h2 text-center">家計簿</h2>
        <div class = "container">
            <form action="php/register.php" id="form" onSubmit="return formManager.check()" method="post" enctype="application/x-www-form-urlencoded" class="form-horizontal">
                <div class="form-group">
                    <label for="item" class="col-xs-2 control-label">項目</label>
                    <div class="col-xs-10">
                        <select name="item" class="form-control" required>
                            <option value="日用品">日用品</option>
                            <option value="外ごはん">外ごはん</option>
                            <option value="家ごはん">家ごはん</option>
                            <option value="趣味・娯楽">趣味・娯楽</option>
                            <option value="運賃">運賃</option>
                            <option value="住居費">住居</option>
                            <option value="雑費">雑費</option>
                            <option value="電気">電気</option>
                            <option value="水道">水道</option>
                            <option value="ガス">ガス</option>
                            <option value="通信">通信</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="date" class="col-xs-2 control-label">日付</label>
                    <div class="col-xs-10">
                        <input name="date" id="date" type="date" class="form-control" value="<?php echo date("Y-m-d"); ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="person" class="col-xs-2 control-label">名前</label>
                    <div class="col-xs-10">
                        <label class="radio-inline"><input type="radio" name="person" value="高尾航大" data-toggle="radio" required>こうだい</label>
                        <label class="radio-inline"><input type="radio" name="person" value="長谷川まい" data-toggle="radio" required>まい</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="name" class="col-xs-2 control-label">品目</label>
                    <div class="col-xs-10">
                        <input type="text" name="name" class="form-control" placeholder="おにぎり" required>
                    </div>
                    
                </div>
                <div class="form-group">
                    <label for="price" class="col-xs-2 control-label">金額</label>
                    <div class="col-xs-10">
                        <input type="number" name="price" class="form-control" placeholder="1000" pattern="\d*" required>
                    </div>
                    
                </div>
                <div class="form-group">
                    <div class="col-xs-10 col-xs-offset-2">
                        <div class="btn-toolbar">
                            <div class="btn-group">
                                <input type="submit" value="送信" class="btn btn-lg btn-primary">
                            </div>
                            <div class="btn-group">
                                <input type="button" value="リセット" onclick="formManager.reset();" class="btn btn-lg btn-danger">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-10 col-xs-offset-2">
                        <! Will be used to display an alert to the user>
                    </div>
                </div>
            </form>


            <div style="text-align:center;" width="100%">
                <img width="250px" id="penguin">
                <script type="text/javascript" src="js/kodai/random_image.js"></script>
            </div>
        </div>
    </body>

</html>
