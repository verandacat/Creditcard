<?php if($query1->have_posts()): ?>
<?php while ($query1->have_posts()) : $query1->the_post(); 
  $image_id = get_post_thumbnail_id ();
  $image_url = wp_get_attachment_image_src ($image_id, true);
  $type = get_field('type');
  $price = get_field('price');
  $brand = get_field('brand');
  $point1 = get_field('point1');
  $point2 = get_field('point2');
  $emoney = get_field('emoney');
  $speed = get_field('speed');
  $insurance = get_field('insurance');  
  $insuranceService = get_field('insurance-service');  
  $service = get_field('insurance-service');
  $campaign = get_field('campaign-descript');   
  $points1 = get_field('points1'); 
  $points2 = get_field('points2'); 
  $points3 = get_field('points3'); 
  $points4 = get_field('points4'); 
  $points5 = get_field('points5'); 
  $url = get_field('url');
  $priceFirst = get_field('price-first');
  $priceSecond = get_field('price-second');
  $pointKangen = get_field('point-kangen');
  $descript = get_field('description');
  $hyouka = get_field('hyouka');
  $star = get_field('star');
  $catch = get_field('catch');
  $issueSpeed = get_field('issue-speed');
  $touch = get_field('touch'); 
  $webp = get_field('img-webp');
   ?>

<?php if(!is_mobile()) : ?>

<div class="result__item__wrap pickup__wrap pc">

    <div class="result__content__wrap">

        <div class="item__left">

            <a href="<?php echo home_url('/'); ?><?php echo $url; ?>">
                <picture>
                    <source type="image/webp" srcset="<?php echo $webp; ?>">
                    <img src="<?php echo $image_url[0]; ?>" alt="">
                </picture>
            </a>

            <div class="star__wrap">
                <div class="star"><img src="<?php echo $star; ?>" alt=""></div>
                <span class="number">
                    <?php echo $hyouka; ?><span class="ss">点</span>
                </span>
            </div>

        </div>



        <div class="item__right">

            <h2 class="title__wrap">
                <a href="<?php echo home_url('/'); ?><?php echo $url; ?>" class="prrrr" target="_blank">
                    <?php the_title(); ?>
                </a>
            </h2>

            <div class="catch__wrap" style="background: #fff">
                <?php echo $catch ; ?>
            </div>

            <div class="campaign__wrap">
                <span class="campaign__title">限定キャンペーン</span>
                <ul class="campaign__descript"><?php echo $campaign; ?></ul>
            </div>

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
                        <td><?php echo $point1; ?></td>
                        <th>発行スピード</th>
                        <td><?php echo $issueSpeed; ?></td>
                    </tr>
                    <tr>
                        <th>国際ブランド</th>
                        <td class="brand__box"><?php foreach ($brand as $b) : ?>
                            <?php 
                            if($b == "VISA") {
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
                            <img class="emoney__icon" src="<?php bloginfo('template_url'); ?><?php 
                            echo $e; ?>" alt="">

                            <?php endforeach; ?>

                        </td>
                    </tr>

                </table>
                <div class="flex__wrap">
                    <div class="hutai__wrap">
                        <h3>付帯保険</h3>
                        <ul class="insurance__list">
                            <?php 
                                $insuranceList = array("国内旅行保険", "海外旅行保険");
                                $insuranceInter = array_intersect($insuranceList, $insurance);
                                $insuranceDiff = array_diff($insuranceList, $insurance);
                                foreach ($insuranceInter as $in) {
                                    if($in == "国内旅行保険") {
                                        $in = "国内旅行";
                                    } elseif($in == "海外旅行保険") {
                                        $in = "海外旅行";
                                    } 
                                    echo '<li>'.$in.'</li>';
                                }
                                foreach ($insuranceDiff as $in) {
                                    if($in == "国内旅行保険") {
                                        $in = "国内旅行";
                                    } elseif($in == "海外旅行保険") {
                                        $in = "海外旅行";
                                    } 
                                    echo '<li class="grey">'.$in.'</li>';
                                }
                            ?>
                        </ul>
                    </div>
                    <div class="service__wrap">
                        <h3>付帯サービス</h3>
                        <ul class="service__list">
                            <?php 
                            $serviceList = array("家族カード", "分割払い", "ETC");
                            
                            if(!empty($service)) {
                                $serviceInter = array_intersect($serviceList, $service);
                            $serviceDiff = array_diff($serviceList, $service);
                                foreach ($serviceInter as $val) {
                                    echo '<li>'.$val.'</li>';
                                }
                                foreach ($serviceDiff as $val) {
                                    echo '<li class="grey">'.$val.'</li>';
                                }
                                
                            } else {
                                foreach ($serviceList as $val) {
                                    echo '<li class="grey">'.$val.'</li>';
                                }
                            }
                            
                        ?>
                        </ul>
                    </div>
                    <div class="touch__wrap">
                        <h3>タッチ決済</h3>
                        <ul class="touch__list">
                            <?php 
                                $touchList = array("あり");
                                
                                if(!empty($touch)) {
                                    foreach ($touch as $val) {
                                        echo '<li>'.$val.'</li>';
                                    }
                                } else {
                                    echo '<li class="grey">あり</li>';
                                }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="discript__wrap">
                <?php the_content(); ?>
            </div>

        </div>

    </div>

    <div class="result__button__wrap">

        <div class="search__button">

            <a class="syousai__btn" href="<?php the_permalink(); ?>">詳細を見る</a>
            <div class="koushiki__wrap">
                <p class="koushiki__text">＼ 最短5分で申込完了 ／</p>
                <a class="koushiki__btn prrrr" style="margin:0 auto"
                    href="<?php echo home_url('/'); ?><?php echo $url; ?>" target="_blank">公式サイトでお得に申し込む</a>
            </div>

        </div>

    </div>

</div>

<?php else : ?>

<div class="result__item__wrap pickup__wrap sp">

    <div class="result__content__wrap">

        <div class="title__wrap">
            <a href="<?php echo home_url('/'); ?><?php echo $url; ?>" class="prrrr" target="_blank"><?php the_title(); ?></a>
        </div>

        <div class="star__wrap">

            <div class="star"><img src="<?php echo $star; ?>" alt="">
            </div>

            <span class="number">
                <?php echo $hyouka; ?><span class="ss">点</span>
            </span>

        </div>

        <div class="catch__wrap" style="background: #fff">
            <?php echo $catch ; ?>
        </div>

        <div class="content__wrap">

            <div class="image__wrap left">

                <a href="<?php echo home_url('/'); ?><?php echo $url; ?>" class="prrrr" target="_blank">
                <picture>
                    <source type="image/webp" srcset="<?php echo $webp; ?>">
                    <img src="<?php echo $image_url[0]; ?>" alt="">
                </picture>
                </a>

            </div>
            <!--.image__wrap end-->

            <div class="points__wrap right">
                <table>
                    <tbody>
                        <tr>
                            <th>年会費初年度</th>
                            <td><?php echo $priceFirst; ?></td>
                        </tr>
                        <tr>
                            <th>年会費2年目~</th>
                            <td><?php echo $priceSecond; ?></td>
                        </tr>
                        <tr>
                            <th>国際ブランド</th>
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
                        </tr>
                        <tr>
                            <th>ポイント還元率</th>
                            <td><?php echo $point1; ?></td>

                        </tr>
                        <tr>
                            <th>発行スピード</th>
                            <td><?php echo $issueSpeed; ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
        <!--.content__wrap end-->

        <div class="flex__wrap">
            <div class="hutai__wrap">
                <h3>付帯保険</h3>
                <ul class="insurance__list">
                    <?php 
                                $insuranceList = array("国内旅行保険", "海外旅行保険");
                                $insuranceInter = array_intersect($insuranceList, $insurance);
                                $insuranceDiff = array_diff($insuranceList, $insurance);
                                foreach ($insuranceInter as $in) {
                                    if($in == "国内旅行保険") {
                                        $in = "国内旅行";
                                    } elseif($in == "海外旅行保険") {
                                        $in = "海外旅行";
                                    } 
                                    echo '<li>'.$in.'</li>';
                                }
                                foreach ($insuranceDiff as $in) {
                                    if($in == "国内旅行保険") {
                                        $in = "国内旅行";
                                    } elseif($in == "海外旅行保険") {
                                        $in = "海外旅行";
                                    } 
                                    echo '<li class="grey">'.$in.'</li>';
                                }
                            ?>
                </ul>
            </div>
            <div class="service__wrap">
                <h3>付帯サービス</h3>
                <ul class="service__list">
                    <?php 
                            $serviceList = array("家族カード", "分割払い", "ETC");
                            
                            if(!empty($service)) {
                                $serviceInter = array_intersect($serviceList, $service);
                            $serviceDiff = array_diff($serviceList, $service);
                                foreach ($serviceInter as $val) {
                                    echo '<li>'.$val.'</li>';
                                }
                                foreach ($serviceDiff as $val) {
                                    echo '<li class="grey">'.$val.'</li>';
                                }
                                
                            } else {
                                foreach ($serviceList as $val) {
                                    echo '<li class="grey">'.$val.'</li>';
                                }
                            }
                            
                        ?>
                </ul>
            </div>
            <div class="touch__wrap">
                <h3>タッチ決済</h3>
                <ul class="touch__list">
                    <?php 
                                $touchList = array("あり");
                                
                                if(!empty($touch)) {
                                    foreach ($touch as $val) {
                                        echo '<li>'.$val.'</li>';
                                    }
                                } else {
                                    echo '<li class="grey">あり</li>';
                                }
                            ?>
                </ul>
            </div>
        </div>

        <!-- <div class="service__wrap">
            <h3>付帯サービス</h3>
            <ul class="service__list">
                
                <?php 
                    // $serviceList = array("家族カード", "分割払い", "ETC");
                    // $serviceInter = array_intersect($insuranceList, $insurance);
                    // $serviceDiff = array_diff($insuranceList, $insurance);
                    // foreach ($serviceInter as $s) {
                    //     echo '<li>'.$i.'</li>';
                    // }
                    // foreach ($serviceDiff as $s) {
                    //     echo '<li class="grey">'.$i.'</li>';
                    // }
                ?>
            </ul>
        </div> -->
        <div class="info__wrap">

            <ul class="info__list__sp">
                <li><?php echo $points1; ?></li>
                <li><?php echo $points2; ?></li>
                <li><?php echo $points3; ?></li>
                <?php if(!empty($points4)) : ?>
                <li><?php echo $points4; ?></li>
                <?php endif; ?>
                <?php if(!empty($points5)) : ?>
                <li><?php echo $points5; ?></li>
                <?php endif; ?>
            </ul>

        </div>



        <div class="result__button__wrap">

                <div class="search__button">

                    
                    <div class="koushiki__wrap">
                        <p class="koushiki__text">＼最短5分で申込完了／</p>
                        <a class="koushiki__btn prrrr" style="margin:0 auto"
                            href="<?php echo home_url('/'); ?><?php echo $url; ?>"
                            target="_blank">公式サイトでお得に申し込む</a>
                    </div>

                    <a class="syousai__btn" href="<?php the_permalink(); ?>">詳細を見る</a>
                    
                </div>

            </div>

        <div class="campaign__wrap">

            <div class="campaign__img">＼キャンペーン／</div>
            <ul>
                <?php echo $campaign; ?>
            </ul>

        </div>


    </div>

</div>

<?php endif; ?>
<?php endwhile; endif; ?>