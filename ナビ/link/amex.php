<?php include 'Tags/head-tag.php'; ?>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>アメリカン・エキスプレス・カード 公式サイト</title>
</head>

<body>

<?php include 'Tags/body-tag.php'; ?>

    <script>
    let link = 'https://www.americanexpress.com/jp/credit-cards/all-cards/?CPID=100321342&AFFID=GOOGLE&dsparms=dc_pcrid_351939698061_kword_%E3%82%A2%E3%83%A1%E3%83%AA%E3%82%AB%E3%83%B3%20%E3%82%A8%E3%82%AD%E3%82%B9%E3%83%97%E3%83%AC%E3%82%B9%20%E3%82%AB%E3%83%BC%E3%83%89_match_e&ds_rl=1266758&ds_rl=1271184&gclid=CjwKCAiAxKv_BRBdEiwAyd40N_o1zXd07dBTRKvUEbzaiVX4YrOS1X9OLrZUfMPzS0o0w_UlQVdkIBoCzy8QAvD_BwE&gclsrc=aw.ds';
    let delay = 1000;     // 遷移までの待ち時間（ミリ秒）
    setTimeout(function () {
        location.href = link+'&pbid='+localStorage.getItem('reroots_clid')
    }, delay);
    </script>

</body>

</html>