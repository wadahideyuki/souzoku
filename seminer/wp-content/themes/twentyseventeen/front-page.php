<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<?php // Show the selected frontpage content.
		if ( have_posts() ) :
			while ( have_posts() ) : the_post();
				get_template_part( 'template-parts/page/content', 'front-page' );
			endwhile;
		else :
			get_template_part( 'template-parts/post/content', 'none' );
		endif; ?>

		<?php
		// Get each of our panels and show the post data.
		if ( 0 !== twentyseventeen_panel_count() || is_customize_preview() ) : // If we have pages to show.

			/**
			 * Filter number of front page sections in Twenty Seventeen.
			 *
			 * @since Twenty Seventeen 1.0
			 *
			 * @param int $num_sections Number of front page sections.
			 */
			$num_sections = apply_filters( 'twentyseventeen_front_page_sections', 4 );
			global $twentyseventeencounter;

			// Create a setting and control for each of the sections available in the theme.
			for ( $i = 1; $i < ( 1 + $num_sections ); $i++ ) {
				$twentyseventeencounter = $i;
				twentyseventeen_front_page_section( null, $i );
			}

	endif; // The if ( 0 !== twentyseventeen_panel_count() ) ends here. ?>

  <h2 class="title1"><span>申し込みフォーム</span></h2>
    
		<form method="post" action="mail.php" id="validForm">
      <div  class="semTbl">
				<table>
					<tr>
						<th>セミナー日程<p class="txRed fz12">※必須</p></th>
						<td>
							<div class="selectWrap">
								<select name="セミナー日程">
									<option value="">選択してください</option>
									<?php echo get_post_meta($post->ID , 'DATE' ,true); ?>
								</select>
							</div>
						</td>
					</tr>
					<tr>
					    <th>お名前 <p class="txRed fz12">※必須</p></th>
					    <td><input size="20" type="text" name="お名前" id="name" /></td>
					    </tr>
					<tr>
					    <th>ふりがな
					        <p class="txRed fz12">※必須</p></th>
					    <td><input size="20" type="text" name="ふりがな" id="name2" /></td>
					    </tr>
					<tr>
					    <th>電話番号
					        <p class="txRed fz12">※必須</p></th>
					    <td><input size="30" type="text" name="電話番号" id="tel" /></td>
					    </tr>
					<tr>
					    <th><label for="jyusho">お住まいの都道府県</label>
					        <br></th>
					    <td><select name="pref" class="wpcf7-form-control wpcf7-select" aria-invalid="false"><option value="都道府県">都道府県</option><option value="北海道">北海道</option><option value="青森県">青森県</option><option value="岩手県">岩手県</option><option value="宮城県">宮城県</option><option value="秋田県">秋田県</option><option value="山形県">山形県</option><option value="福島県">福島県</option><option value="茨城県">茨城県</option><option value="栃木県">栃木県</option><option value="群馬県">群馬県</option><option value="埼玉県">埼玉県</option><option value="千葉県">千葉県</option><option value="東京都">東京都</option><option value="神奈川県">神奈川県</option><option value="新潟県">新潟県</option><option value="富山県">富山県</option><option value="石川県">石川県</option><option value="福井県">福井県</option><option value="山梨県">山梨県</option><option value="長野県">長野県</option><option value="岐阜県">岐阜県</option><option value="静岡県">静岡県</option><option value="愛知県">愛知県</option><option value="三重県">三重県</option><option value="滋賀県">滋賀県</option><option value="京都府">京都府</option><option value="大阪府">大阪府</option><option value="兵庫県">兵庫県</option><option value="奈良県">奈良県</option><option value="和歌山県">和歌山県</option><option value="鳥取県">鳥取県</option><option value="島根県">島根県</option><option value="岡山県">岡山県</option><option value="広島県">広島県</option><option value="山口県">山口県</option><option value="徳島県">徳島県</option><option value="香川県">香川県</option><option value="愛媛県">愛媛県</option><option value="高知県">高知県</option><option value="福岡県">福岡県</option><option value="佐賀県">佐賀県</option><option value="長崎県">長崎県</option><option value="熊本県">熊本県</option><option value="大分県">大分県</option><option value="宮崎県">宮崎県</option><option value="鹿児島県">鹿児島県</option><option value="沖縄県">沖縄県</option></select></td>
					    </tr>
					<tr>
					    <th><label for="jyusho2">都道府県以降のご住所</label>
					        <br></th>
					    <td><textarea name="都道府県以降のご住所" cols="50" rows="5" id="都道府県以降のご住所"></textarea></td>
					    </tr>
					<tr>
						<th>Mail（半角） <p class="txRed fz12">※必須</p></th>
						<td><input size="30" type="text" name="Email" id="Email" /></td>
					</tr>
				</table>
    
		<p align="center" class="btnWrap">
					<input class="btn clr2 sz3" type="submit" value="　 確認 　" />
				</p></div>
      </form>
	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer();
