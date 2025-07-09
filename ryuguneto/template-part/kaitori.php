<?php 
    $home = esc_html(home_url('/'));
    $contact = esc_html(home_url('/contact/'));
    $privacypolicy = esc_html(home_url('/privacypolicy/'));
    $qa = esc_html(home_url('/qa/'));
    $recruit = esc_html(home_url('/recruit/'));
    $china = esc_html(home_url('/genre-china/'));
    $kutani = esc_html(home_url('/genre-kutani/'));
    $company = esc_html(home_url('/company/'));
    $reservation01 = esc_html(home_url('/reservation01/'));
    $reservation02 = esc_html(home_url('/reservation02/'));
    $kaitori = esc_html(home_url('/kaitori/'));
    $newcustomer = esc_html(home_url('/newcustomer/'));
    $antique = esc_html(home_url('/antique/'));
    $sigyo = esc_html(home_url('/sigyo/'));
    $retro = esc_html(home_url('/retro-goods/'));
    $kakejiku = esc_html(home_url('/kakejiku/'));
    $auction = esc_html(home_url('/auction/'));
    $chadougu = esc_html(home_url('/chadougu/'));
    $youshoku = esc_html(home_url('/youshoku/'));
    $gold = esc_html(home_url('/genre-gold/'));
    $kotto = esc_html(home_url('/genre-kotto/'));
    $column = esc_html(home_url('/column/'));
    $news = esc_html(home_url('/news/'));
    $buylist = esc_html(home_url('/buylist/'));
?>
<!-- 選べる買取方法 -->
<section class="select_purch">
    <div class="container-in">
        <div class="l_item_flex_ttl">
        <img src="<?php echo get_template_directory_uri(); ?>/img/chara.webp" alt="" />
        <h2>選べる買取方法<br class="is-sp"><span class="is-sp">SELECT PURCHASE</span></h2><span class="is-pc">SELECT PURCHASE</span>
        </div>
        <div class="t_feature_item1_method_wrap">
        <!-- 出張買取 -->
        <div class="t_feature_item1_method_left">
            <h5 class="t_feature_item1_method_sub_ttl">出張買取</h5>
            <p class="t_feature_item1_method_sub_txt t_feature_item_txt">
            経験豊富な査定士がお伺い！<br />
            北陸地方どこでも即対応！<br />
            出張料無料！即現金買取！
            </p>
            <div class="t_feature_item1_method_img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/truck-icon.webp" alt="" />
            </div>
            <div class="sec_btn t_feature_item1_btn sec_more_btn">
            <a href="<?php echo $kaitori; ?>#sec01">MORE</a>
            </div>
        </div>
        <!-- 店頭買取 -->
        <div class="t_feature_item1_method_right">
            <h5 class="t_feature_item1_method_sub_ttl">店頭買取</h5>
            <p class="t_feature_item1_method_sub_txt t_feature_item_txt">
            広い店舗＆広い駐車場完備！<br />
            お客様のペースで売却ができる！<br />
            即現金買取！
            </p>
            <div class="t_feature_item1_method_info">
            <div class="t_feature_item1_method_info_ttl">受付時間</div>
            <div class="t_feature_item1_method_info_time">
                9:00-17:00(日･祝 16:00迄)
            </div>
            </div>
            <div class="sec_btn t_feature_item1_btn sec_more_btn">
            <a href="<?php echo $kaitori; ?>#sec02">MORE</a>
            </div>
        </div>
        </div>
    </div>
    </section>