<div class="points__wrap">
                                <table>
                                    <tr>
                                        <th>年会費初年度</th>
                                        <th>年会費2年目~</th>
                                        <th>国際ブランド</th>
                                    </tr>
                                    <tr>
                                        <td><?php echo $priceFirst; ?></td>
                                        <td><?php echo $priceSecond; ?></td>
                                        <td class="brand__box"><?php foreach ($brand as $b) : ?>
                                            <?php 
                                            if($b == "VISA") {
                                                $b = "/images/contents/brand__visa.jpg";
                                               
                                            }elseif($b == "Mastercard") {
                                                $b = "/images/contents/brand__master.jpg";
                                            }elseif($b == "JCB") {
                                                $b = "/images/contents/brand__jcb.jpg";
                                            }elseif($b == "American Express") {
                                                $b = "/images/contents/brand__american.jpg";
                                            }
                                            ?>
                                           <img class="brand__icon" src="<?php bloginfo('template_url'); ?><?php 
                                            echo $b; ?>" alt="">

                                            <?php endforeach; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>電子マネー</th>
                                        <th>ポイント還元率</th>
                                        <th>発行スピード</th>
                                    </tr>
                                    <tr>
                                        <td class="emoney__box"><?php foreach ($emoney as $e) : ?>
                                            <?php 
                                            if($e == "Suica") {
                                                $e = "/images/icons/suica.jpg";
                                               
                                            }elseif($e == "PASMO") {
                                                $e = "/images/icons/pasmo.jpg";
                                                
                                            }elseif($e == "QUICPay") {
                                                $e = "/images/icons/quic.jpg";
                                                
                                            }elseif($e == "iD") {
                                                $e = "/images/icons/id.jpg";
                                                
                                            }elseif($e == "楽天Edy") {
                                                $e = "/images/icons/edy.jpg";
                                                
                                            }elseif($e == "nanaco") {
                                                $e = "/images/icons/nanaco.jpg";
                                               
                                            }elseif($e == "WAON") {
                                                $e = "/images/icons/waon.jpg";
                                                
                                            }elseif($e == "Apple Pay") {
                                                $e = "/images/icons/apple.jpg";
                                               
                                            }elseif($e == "Google Pay") {
                                                $e = "/images/icons/gpay.jpg";
                                                
                                            } ?>
                                            <img class="emoney__icon" src="<?php bloginfo('template_url'); ?><?php 
                                            echo $e; ?>" alt="">

                                            <?php endforeach; ?>
                                       
                                        </td>
                                        <td><?php echo $pointKangen; ?></td>
                                        <td><?php echo $issueSpeed; ?></td>
                                    </tr>
                                </table>
                            </div>