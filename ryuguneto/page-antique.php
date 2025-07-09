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
<?php get_header(); ?>
    <main class="main l_main">
      <!-------------- fv ---------------->
      <div class="l_fv">
        <div class="l_fv_back">
          <div class="sec_ttl_box antique-fv">
            <div class="sec_ttl_logo">
              <img src="<?php echo get_template_directory_uri(); ?>/img/chara.webp" alt="ロゴ" />
            </div>
            <h2 class="sec_ttl">買取アイテム</h2>
            <p class="sec_sub_ttl">Purchase items</p>
          </div>
        </div>
      </div>
      <article class="l_color">
        <!-------------- ページタイトル ---------------->
        <div class="l_item_head_box l_item_head_box-antique">
          <div class="container-in">
            <div class="l_item_head_txtimg">
              <img src="<?php echo get_template_directory_uri(); ?>/img/item-sec1-txt-antique.webp" alt="古道具・アンティーク家具" class="is-pc" />
            </div>
          </div>
          <div class="l_item_head_txt_box is-sp">
            <img src="<?php echo get_template_directory_uri(); ?>/img/item-sec1-txt-kakejiku-head-sp.webp" alt="古道具・アンティーク家具">
            <div class="l_item_head_bottom">
              古道具<br>
              アンティーク家具
            </div>
          </div>
        </div>
        <section class="l_item">
          <div class="container-in">
            <!-- 古道具 -->
            <div class="l_item_content">
              <div class="l_item_ttl">
                <img src="<?php echo get_template_directory_uri(); ?>/img/chara.webp" alt="ロゴ" />
                <h3>古道具</h3>
              </div>
              <div class="l_item_box l_item_kodougu_box">
                <ul class="l_item_list">
                  <li>
                    <div class="l_item_list_img">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/kodougu.webp" alt="時代黄楊材　僧侶座禅根付" />
                    </div>
                    <div class="l_item_list_right">
                      <h4 class="l_item_list_ttl">
                        印籠
                      </h4>
                      <p class="l_item_list_txt">
                        印籠は、日本独自の発展を遂げた美術品です。古くから薬や携帯用の小物を入れる容器として、腰に下げて用いられていました。時代が下り、幕末から明治期にかけては、蒔絵などの精緻な装飾が施された品々が美術品として高く評価され、収集家の間で人気を博しました。しかし、幕末から明治期にかけて、印籠をはじめとする漆器や金工などの名品は、その多くが海外へ流出してしまいました。こちらのお品も、そうした時代の印籠の一つです。
                      </p>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <!-- アンティーク家具 -->
            <div class="l_item_content">
              <div class="l_item_ttl">
                <img src="<?php echo get_template_directory_uri(); ?>/img/chara.webp" alt="ロゴ" />
                <h3>アンティーク家具</h3>
              </div>
              <div class="l_item_box l_item_antique_box">
                <ul class="l_item_list">
                  <li>
                    <div class="l_item_list_img">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/antique1.webp" alt="富山県　蔵戸" />
                    </div>
                    <div class="l_item_list_right">
                      <h4 class="l_item_list_ttl">
                        富山県　蔵戸
                      </h4>
                      <p class="l_item_list_txt">
                        北陸地方は、古くから指物師が多く、建具や蔵戸の製作が盛んで、石川県、富山県、福井県のいずれにおいても、品質の高い製品が多く見られます。特に、金属製の金具を用いた細やかな装飾が特徴で、その品質の高さから人気があります。また、石川県で作られた蔵戸に、後から富山県特産のきんちゃく金具を取り付けたものなど、地域ごとの特徴を組み合わせた興味深い蔵戸も見られます。
                      </p>
                    </div>
                  </li>
                  <li>
                    <div class="l_item_list_img">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/antique2.webp" alt="石川県　蔵戸" />
                    </div>
                    <div class="l_item_list_right">
                      <h4 class="l_item_list_ttl">
                        石川県<br class="is-pc">
                        蔵戸
                      </h4>
                      <p class="l_item_list_txt">
                        石川県の加賀方面の蔵戸です。黒の金具が沢山使用されて重厚でとても良い蔵戸です。
                      </p>
                    </div>
                  </li>
                  <li>
                    <div class="l_item_list_img">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/antique3.webp" alt="福井県　三国箪笥" />
                    </div>
                    <div class="l_item_list_right">
                      <h4 class="l_item_list_ttl">
                        福井県<br class="is-pc">
                        三国箪笥
                      </h4>
                      <p class="l_item_list_txt">
                        もともと北前船の舟箪笥として商人に使用された箪笥になります。状態が良いものが少なくこちらも金具の多さや出来により
                        人気があるお品か分かれます。
                      </p>
                    </div>
                  </li>
                  <li>
                    <div class="l_item_list_img">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/antique4.webp" alt="神輿　山車 装飾欄間" />
                    </div>
                    <div class="l_item_list_right">
                      <h4 class="l_item_list_ttl">
                        神輿<br>
                        山車 装飾欄間
                      </h4>
                      <p class="l_item_list_txt">
                        江戸の幕末明治期初期頃の彫刻です。彫刻細工には珍しく玉眼が入っております。
                      </p>
                    </div>
                  </li>
                  <li class="icon-antique2">
                    <div class="l_item_list_img">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/antique5.webp" alt="富山県　井波彫刻 欄間" />
                    </div>
                    <div class="l_item_list_right">
                      <h4 class="l_item_list_ttl">
                        富山県<br>
                        井波彫刻 欄間
                      </h4>
                      <p class="l_item_list_txt">
                        富山県南砺市井波欄間になります。大島五雲の欄間等空間を見事な技術で彫刻された欄間であれば人気があります。
                      </p>
                    </div>
                  </li>
                  <li>
                    <div class="l_item_list_img">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/antique6.webp" alt="アンティーク　本棚" />
                    </div>
                    <div class="l_item_list_right">
                      <h4 class="l_item_list_ttl">
                        アンティーク<br class="is-pc">
                        本棚
                      </h4>
                      <p class="l_item_list_txt">
                        大正～昭和初期。作成された本棚です。時代のかすり具合や雰囲気により人気度が異なります。
                      </p>
                    </div>
                  </li>
                  <li>
                    <div class="l_item_list_img">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/antique7.webp" alt="昭和初期～中期　丸椅子" />
                    </div>
                    <div class="l_item_list_right">
                      <h4 class="l_item_list_ttl">
                        昭和初期～中期<br>
                        丸椅子
                      </h4>
                      <p class="l_item_list_txt">
                        昔はどの家庭にもあった古家具の１つです。足踏みミシンの椅子に使用されていました。現代では花台としても活用されます。
                      </p>
                    </div>
                  </li>
                  <li>
                    <div class="l_item_list_img">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/antique8.webp" alt="李朝箪笥　バンダチ/バンダジ" />
                    </div>
                    <div class="l_item_list_right">
                      <h4 class="l_item_list_ttl">
                        李朝朝鮮の箪笥
                      </h4>
                      <p class="l_item_list_txt">
                        朝鮮美術は日本でもコレクター方が多く日本美術にも大きな影響を受けました。日本美美術史において著名な柳宗悦、河井寛次郎、濱田庄司 民藝運動のきっかけとなる。朝鮮美術の美を見いだしたきっかけとなりました。こちらの李朝筆笥もその1つで日本にも多くの朝鮮美術品が蒐集されております。
                      </p>
                    </div>
                  </li>
                  <li>
                    <div class="l_item_list_img">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/antique9.webp" alt="酒田船箪笥" />
                    </div>
                    <div class="l_item_list_right">
                      <h4 class="l_item_list_ttl">
                        酒田船箪笥
                      </h4>
                      <p class="l_item_list_txt">
                        舟箪笥といえば和筆笥の中でも当時は非常に人気が高かった古道具です。その名前の通り北前船など商船の金庫でした。欅素材の品が多く金具からも重量感がありますが、船が沈んでも見つけれるように海中だと自然に浮くように設計されております。
                      </p>
                    </div>
                  </li>
                  <li class="icon-antique3">
                    <div class="l_item_list_img">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/antique10.webp" alt="近江一間自然色水屋箪笥" />
                    </div>
                    <div class="l_item_list_right">
                      <h4 class="l_item_list_ttl">
                        近江一間自然色水屋箪笥
                      </h4>
                      <p class="l_item_list_txt">
                        非常に状態の良い１間の水屋箪笥。自然食のオイル仕上げでとてもナチュラル。漆塗りのタンスとは全く違ったモダンなインテリアにも最適な仕上げです。引き戸には木目の素敵な欅材。
                        さらには黒柿の埋木が最高のアクセントとなっています。
                      </p>
                    </div>
                  </li>
                  <li>
                    <div class="l_item_list_img">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/antique11.webp" alt="総桐100杯薬箪笥" />
                    </div>
                    <div class="l_item_list_right">
                      <h4 class="l_item_list_ttl">
                        総桐100杯薬箪笥
                      </h4>
                      <p class="l_item_list_txt">
                        ほとんどの薬箪笥は虫等に侵食されています。それはそれで味わいがある品もありますが完品は極めて稀。金具は少しサイズなどが違ったりしますがほぼ洗浄のみで使用できる状態でした。引き出しが隣り合わせになっているので少し引っかかりを感じますがロウなどで緩和可能です。100杯という正方形に近い形で構成されている可愛さといいなんとも完成させられた箪笥です。
                      </p>
                    </div>
                  </li>
                  <li>
                    <div class="l_item_list_img">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/antique12.webp" alt="ヤマハ折り畳み式文化椅子" />
                    </div>
                    <div class="l_item_list_right">
                      <h4 class="l_item_list_ttl">
                        端渓硯
                      </h4>
                      <p class="l_item_list_txt">
                        端渓硯の中でも人気がある、老坑 坑仔巌 麻仔坑。<br>
                        これらの坑は現在採石禁止となっています。その中でも最も人気がある老坑・端渓硯です。本当の老坑・端渓硯は稀少です。
                      </p>
                    </div>
                  </li>
                  <li>
                    <div class="l_item_list_img">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/antique13.webp" alt="緑ダイア色ガラスの本棚" />
                    </div>
                    <div class="l_item_list_right">
                      <h4 class="l_item_list_ttl">
                        緑ダイア色ガラスの本棚
                      </h4>
                      <p class="l_item_list_txt">
                        緑色のダイアガラスを贅沢に使用した本棚。状態も良く楢できちっとした本棚です。使い勝手も良好です。
                      </p>
                    </div>
                  </li>
                  <li>
                    <div class="l_item_list_img">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/antique14.webp" alt="白被せ切子カット電笠" />
                    </div>
                    <div class="l_item_list_right">
                      <h4 class="l_item_list_ttl">
                        白被せ切子カット電笠
                      </h4>
                      <p class="l_item_list_txt">
                        厚めの白被せに。愛らしい手彫りの切子。温かみのある切子電笠になります。
                      </p>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </section>
      </article>
      <!-- 買取実績 -->
      <section class="l_item_purch">
        <div class="container-in">
          <div class="l_item_flex_ttl l_item_purch_ttl">
            <img src="<?php echo get_template_directory_uri(); ?>/img/chara.webp" alt="ロゴ" />
            <h2>新着買取実績<br class="is-sp"><span class="is-sp">NEW PURCHASE</span></h2><span class="is-pc">NEW PURCHASE</span>
          </div>
          <?php
            $args = array(
              'post_type' => 'buylist', 
              'posts_per_page' => 8 ,
              'tax_query' => array(
                array(
                  'taxonomy' => 'jisseki_cat', 
                  'field' => 'slug',
                  'terms' => 'antique', // タームスラッグを指定
                )
              )
            );
            $the_query = new WP_Query($args); if($the_query->have_posts()):
          ?>
          <div class="t_purch_wrapper">
            <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
<!--             <a href="<?php echo $home; ?>jisseki_cat/antique/#post-<?php the_ID(); ?>" class="t_purch_item"> -->
            <a href="<?php the_permalink(); ?>" class="t_purch_item">
              <div class="t_purch_img">
                <?php if (has_post_thumbnail()) : ?>
                  <?php the_post_thumbnail('thumbnail'); ?>
                <?php else: ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/thumbnail.jpg" alt="サムネイル">
                <?php endif; ?>
              </div>
              <time datetime="<?php echo get_the_date('Y-m-d'); ?>" class="published"><?php echo get_the_date('Y.m.d'); ?></time>
              <h3 class="t_purch_ttl post_ttl">
                <?php the_title(); ?>
              </h3>
            </a>
            <?php endwhile; ?>
          </div>
          <?php endif; ?>
          <div class="sec_btn t_purch_btn sec_more_btn">
            <a href="<?php echo $home; ?>jisseki_cat/antique/">MORE</a>
          </div>
        </div>
      </section>
      <?php echo get_template_part('./template-part/kaitori'); ?>
      <?php echo get_template_part('./template-part/info'); ?>
    </main>
<?php get_footer(); ?>