<?php include 'Tags/head-tag.php'; ?>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>アメリカン・エキスプレス・ビジネス・カード 公式サイト</title>
    <script>
        let link = 'https://www.americanexpress.com/jp/credit-cards/all-cards/?filter=business&CPID=100399242&AFFID=GOOGLE&dsparms=dc_pcrid_468723152293_kword_%E3%82%A2%E3%83%A1%E3%83%AA%E3%82%AB%E3%83%B3%20%E3%82%A8%E3%82%AD%E3%82%B9%E3%83%97%E3%83%AC%E3%82%B9%20%E3%83%93%E3%82%B8%E3%83%8D%E3%82%B9%20%E3%82%AB%E3%83%BC%E3%83%89_match_e&gclid=CjwKCAiAxKv_BRBdEiwAyd40N7pnpCRpRJwR2wIfyeqzomPNxhV0PFCadB_Zvl6UvtQDRY1aFmw24xoCJloQAvD_BwE&gclsrc=aw.ds';
        let delay = 1000;     // 遷移までの待ち時間（ミリ秒）
        setTimeout(function () {
            location.href = link+'&pbid='+localStorage.getItem('reroots_clid')
        }, delay);
    </script>

<?php include 'Tags/gtm.php'; ?>

</head>

<body>




</body>

</html>