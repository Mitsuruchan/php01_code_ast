

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- tailwindcss利用のためのリンク -->
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Document</title>
</head>
<body>
<section class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto">
        <div class="flex flex-col text-center w-full mb-20">
        <h1 class="sm:text-4xl text-3xl font-medium title-font mb-2 text-gray-900">回答結果</h1>
        </div>
        <div class="lg:w-2/3 w-full mx-auto overflow-auto">
        <table class="table-auto w-full text-left whitespace-no-wrap">
            <tbody>

            <?php
            // ファイルを開く
            $openFile = fopen('./data/data.txt', 'r');
            // ファイル内容を1行ずつ読み込んで出力
            // fgets($openFile)で、1行を読み込み、それを$strに代入
            // 何も読み込むものがなくなると、while文が終了する
            while ($str = fgets($openFile)) {
                // nl2br ... textファイルの改行を<br>に変換する関数
                // 一旦$answerに格納し、下記で出力する。
                echo '<tr>';
                echo '<td class="px-4 py-3">' . nl2br($str) . '</td>';
                echo '</tr>';
            };
            fclose($openFile);
            ?>

            </tbody>
        </table>
        </div>
        <div class="flex pl-4 mt-4 lg:w-2/3 w-full mx-auto">
        <a class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0" href="index.php">戻る
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
            <path d="M5 12h14M12 5l7 7-7 7"></path>
            </svg>
        </a>
        </div>
    </div>
</section>
</body>
</html>