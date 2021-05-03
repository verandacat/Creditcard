<div class="points__wrap">
    <table>
        <tr>
            <th>年会費初年度</th>
            <td><?php echo $priceFirst; ?></td>
            <th>年会費2年目</th>
            <td><?php echo $priceSecond; ?></td>
        </tr>
        <tr>
            <th>ポイント還元率</th>
            <td><?php echo $pointKangen; ?></td>
            <th>発行スピード</th>
            <td><?php echo $issueSpeed; ?></td>
        </tr>
        <tr>
            <th>国際ブランド</th>
            <td class="brand__box">
            <?php foreach ($brand as $b) : ?>
                <?php if($b == "VISA") {
                    $b = "/images/contents/brand__visa.png";
                }elseif($b == "Mastercard") {
                    $b = "/images/contents/brand__master.png";
                }elseif($b == "JCB") {
                    $b = "/images/contents/brand__jcb.png";
                }elseif($b == "American Express") {
                    $b = "/images/contents/brand__american.png";
                }
            ?>
                <img class="brand__icon" src="<?php bloginfo('template_url'); ?><?php 
                                                echo $b; ?>" alt="">

                <?php endforeach; ?>
            </td>
            <th>電子マネー</th>
            <td class="emoney__box"><?php foreach ($emoney as $e) : ?>
            <?php 
                if($e == "Suica") {
                    $e = "/images/icons/suica.png";
                    
                }elseif($e == "PASMO") {
                    $e = "/images/icons/pasmo.png";
                    
                }elseif($e == "QUICPay") {
                    $e = "/images/icons/quic.png";
                    
                }elseif($e == "iD") {
                    $e = "/images/icons/id.png";
                    
                }elseif($e == "楽天Edy") {
                    $e = "/images/icons/edy.png";
                    
                }elseif($e == "nanaco") {
                    $e = "/images/icons/nanaco.png";
                    
                }elseif($e == "WAON") {
                    $e = "/images/icons/waon.png";
                    
                }elseif($e == "Apple Pay") {
                    $e = "/images/icons/apple.png";
                    
                }elseif($e == "Google Pay") {
                    $e = "/images/icons/gpay.png";
                    
                } ?>
                <img class="emoney__icon" src="<?php bloginfo('template_url'); ?><?php echo $e; ?>" alt="">

                <?php endforeach; ?>

            </td>
        </tr>
    </table>
</div>