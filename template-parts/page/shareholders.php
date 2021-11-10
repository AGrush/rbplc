<div <?php post_class('c-page'); ?>>
  <div class="c-page__content">

    <div class="c-banner-1">

      <div class="c-banner-1__page-title">
        <p><?php the_field('shareholders_page__section_1__page_title'); ?></p>
      </div>

      <div class="video-wrapper">
        <?php $imageHpPoster = get_field('shareholders_page__section_1__main_image');
                    if( !empty( $imageHpPoster ) ): ?>
        <img class="c-banner-1__mobile-poster m-object-fit" src="<?php echo esc_url($imageHpPoster['url']); ?>"
          alt="<?php echo esc_attr($imageHpPoster['alt']); ?>" />
        <?php endif; ?>
      </div>

      <!-- <div class="box">
                <div class="target"> Target </div>
                <span>In viewport: <strong>false</strong></span>
            </div> -->

      <div class="copy-wrapper" data-id="observedArea">


        <div class="copy-inner">

          <div class="copy-wrapper__text m-extra-space-above m-shareholders">
            <h1>
              <?php the_field('shareholders_page__section_1__title'); ?>
            </h1>
          </div>
        
          <div class="c-tables">
            <table class="c-table">
                <tbody>
                <tr class="c-table__heading">
                    <td><?php the_field('shareholders_page__section_1__shareholders_table_1__title'); ?></td>
                    <td><?php the_field('shareholders_page__section_1__shareholders_table_1__unit'); ?></td>
                </tr>

                <?php $column1shareholder_1 = get_field('shareholders_page__section_1__table_1__shareholder_1_holdings'); 
                if( !empty( $column1shareholder_1 ) ): ?>
                <tr>
                    <td><?php the_field('shareholders_page__section_1__table_1__shareholder_1'); ?></td>
                    <td><?php the_field('shareholders_page__section_1__table_1__shareholder_1_holdings'); ?></td>
                </tr>
                <?php endif; ?>

                <?php $column1shareholder_2 = get_field('shareholders_page__section_1__table_1__shareholder_2_holdings'); 
                if( !empty( $column1shareholder_2 ) ): ?>
                <tr>
                    <td><?php the_field('shareholders_page__section_1__table_1__shareholder_2'); ?></td>
                    <td><?php the_field('shareholders_page__section_1__table_1__shareholder_2_holdings'); ?></td>
                </tr>
                <?php endif; ?>

                <?php $column1shareholder_3 = get_field('shareholders_page__section_1__table_1__shareholder_3_holdings'); 
                if( !empty( $column1shareholder_3 ) ): ?>
                <tr>
                    <td><?php the_field('shareholders_page__section_1__table_1__shareholder_3'); ?></td>
                    <td><?php the_field('shareholders_page__section_1__table_1__shareholder_3_holdings'); ?></td>
                </tr>
                <?php endif; ?>

                <?php $column1shareholder_4 = get_field('shareholders_page__section_1__table_1__shareholder_4_holdings'); 
                if( !empty( $column1shareholder_4 ) ): ?>
                <tr>
                    <td><?php the_field('shareholders_page__section_1__table_1__shareholder_4'); ?></td>
                    <td><?php the_field('shareholders_page__section_1__table_1__shareholder_4_holdings'); ?></td>
                </tr>
                <?php endif; ?>

                <?php $column1shareholder_5 = get_field('shareholders_page__section_1__table_1__shareholder_5_holdings'); 
                if( !empty( $column1shareholder_5 ) ): ?>
                <tr>
                    <td><?php the_field('shareholders_page__section_1__table_1__shareholder_5'); ?></td>
                    <td><?php the_field('shareholders_page__section_1__table_1__shareholder_5_holdings'); ?></td>
                </tr>
                <?php endif; ?>

                <?php $column1shareholder_6 = get_field('shareholders_page__section_1__table_1__shareholder_6_holdings'); 
                if( !empty( $column1shareholder_6 ) ): ?>
                <tr>
                    <td><?php the_field('shareholders_page__section_1__table_1__shareholder_6'); ?></td>
                    <td><?php the_field('shareholders_page__section_1__table_1__shareholder_6_holdings'); ?></td>
                </tr>
                <?php endif; ?>

                <?php $column1shareholder_7 = get_field('shareholders_page__section_1__table_1__shareholder_7_holdings'); 
                if( !empty( $column1shareholder_7 ) ): ?>
                <tr>
                    <td><?php the_field('shareholders_page__section_1__table_1__shareholder_7'); ?></td>
                    <td><?php the_field('shareholders_page__section_1__table_1__shareholder_7_holdings'); ?></td>
                </tr>
                <?php endif; ?>


                <?php $column1shareholder_8 = get_field('shareholders_page__section_1__table_1__shareholder_8_holdings'); 
                if( !empty( $column1shareholder_8 ) ): ?>
                <tr>
                    <td><?php the_field('shareholders_page__section_1__table_1__shareholder_8'); ?></td>
                    <td><?php the_field('shareholders_page__section_1__table_1__shareholder_8_holdings'); ?></td>
                </tr>
                <?php endif; ?>


                <?php $column1shareholder_9 = get_field('shareholders_page__section_1__table_1__shareholder_9_holdings'); 
                if( !empty( $column1shareholder_9 ) ): ?>
                <tr>
                    <td><?php the_field('shareholders_page__section_1__table_1__shareholder_9'); ?></td>
                    <td><?php the_field('shareholders_page__section_1__table_1__shareholder_9_holdings'); ?></td>
                </tr>
                <?php endif; ?>

                <?php $column1shareholder_10 = get_field('shareholders_page__section_1__table_1__shareholder_10_holdings'); 
                if( !empty( $column1shareholder_10 ) ): ?>
                <tr>
                    <td><?php the_field('shareholders_page__section_1__table_1__shareholder_10'); ?></td>
                    <td><?php the_field('shareholders_page__section_1__table_1__shareholder_10_holdings'); ?></td>
                </tr>
                <?php endif; ?>

                </tbody>
            </table>

            <table class="c-table m-table2">
                <tbody>
                <tr class="c-table__heading">
                    <td><?php the_field('shareholders_page__section_1__shareholders_table_2__title'); ?></td>
                    <td><?php the_field('shareholders_page__section_1__shareholders_table_2__shares'); ?></td>
                    <td><?php the_field('shareholders_page__section_1__shareholders_table_2__unit'); ?></td>
                </tr>

                <?php $column1shareholder_1 = get_field('shareholders_page__section_1__table_2__shareholder_1_holdings'); 
                if( !empty( $column1shareholder_1 ) ): ?>
                <tr>
                    <td><?php the_field('shareholders_page__section_1__table_2__shareholder_1'); ?></td>
                    <td><?php the_field('shareholders_page__section_1__table_2__shareholder_1_shares'); ?></td>
                    <td><?php the_field('shareholders_page__section_1__table_2__shareholder_1_holdings'); ?></td>
                </tr>
                <?php endif; ?>

                <?php $column1shareholder_2 = get_field('shareholders_page__section_1__table_2__shareholder_2_holdings'); 
                if( !empty( $column1shareholder_2 ) ): ?>
                <tr>
                    <td><?php the_field('shareholders_page__section_1__table_2__shareholder_2'); ?></td>
                    <td><?php the_field('shareholders_page__section_1__table_2__shareholder_2_shares'); ?></td>
                    <td><?php the_field('shareholders_page__section_1__table_2__shareholder_2_holdings'); ?></td>
                </tr>
                <?php endif; ?>

                <?php $column1shareholder_3 = get_field('shareholders_page__section_1__table_2__shareholder_3_holdings'); 
                if( !empty( $column1shareholder_3 ) ): ?>
                <tr>
                    <td><?php the_field('shareholders_page__section_1__table_2__shareholder_3'); ?></td>
                    <td><?php the_field('shareholders_page__section_1__table_2__shareholder_3_shares'); ?></td>
                    <td><?php the_field('shareholders_page__section_1__table_2__shareholder_3_holdings'); ?></td>
                </tr>
                <?php endif; ?>

                <?php $column1shareholder_4 = get_field('shareholders_page__section_1__table_2__shareholder_4_holdings'); 
                if( !empty( $column1shareholder_4 ) ): ?>
                <tr>
                    <td><?php the_field('shareholders_page__section_1__table_2__shareholder_4'); ?></td>
                    <td><?php the_field('shareholders_page__section_1__table_2__shareholder_4_shares'); ?></td>
                    <td><?php the_field('shareholders_page__section_1__table_2__shareholder_4_holdings'); ?></td>
                </tr>
                <?php endif; ?>


                <?php $column1shareholder_5 = get_field('shareholders_page__section_1__table_2__shareholder_5_holdings'); 
                if( !empty( $column1shareholder_5 ) ): ?>
                <tr>
                    <td><?php the_field('shareholders_page__section_1__table_2__shareholder_5'); ?></td>
                    <td><?php the_field('shareholders_page__section_1__table_2__shareholder_5_shares'); ?></td>
                    <td><?php the_field('shareholders_page__section_1__table_2__shareholder_5_holdings'); ?></td>
                </tr>
                <?php endif; ?>

                <?php $column1shareholder_6 = get_field('shareholders_page__section_1__table_2__shareholder_6_holdings'); 
                if( !empty( $column1shareholder_6 ) ): ?>
                <tr>
                    <td><?php the_field('shareholders_page__section_1__table_2__shareholder_6'); ?></td>
                    <td><?php the_field('shareholders_page__section_1__table_2__shareholder_6_shares'); ?></td>
                    <td><?php the_field('shareholders_page__section_1__table_2__shareholder_6_holdings'); ?></td>
                </tr>
                <?php endif; ?>

                <?php $column1shareholder_7 = get_field('shareholders_page__section_1__table_2__shareholder_7_holdings'); 
                if( !empty( $column1shareholder_7 ) ): ?>
                <tr>
                    <td><?php the_field('shareholders_page__section_1__table_2__shareholder_7'); ?></td>
                    <td><?php the_field('shareholders_page__section_1__table_2__shareholder_7_shares'); ?></td>
                    <td><?php the_field('shareholders_page__section_1__table_2__shareholder_7_holdings'); ?></td>
                </tr>
                <?php endif; ?>


                <?php $column1shareholder_8 = get_field('shareholders_page__section_1__table_2__shareholder_8_holdings'); 
                if( !empty( $column1shareholder_8 ) ): ?>
                <tr>
                    <td><?php the_field('shareholders_page__section_1__table_2__shareholder_8'); ?></td>
                    <td><?php the_field('shareholders_page__section_1__table_2__shareholder_8_shares'); ?></td>
                    <td><?php the_field('shareholders_page__section_1__table_2__shareholder_8_holdings'); ?></td>
                </tr>
                <?php endif; ?>


                <?php $column1shareholder_9 = get_field('shareholders_page__section_1__table_2__shareholder_9_holdings'); 
                if( !empty( $column1shareholder_9 ) ): ?>
                <tr>
                    <td><?php the_field('shareholders_page__section_1__table_2__shareholder_9'); ?></td>
                    <td><?php the_field('shareholders_page__section_1__table_2__shareholder_9_shares'); ?></td>
                    <td><?php the_field('shareholders_page__section_1__table_2__shareholder_9_holdings'); ?></td>
                </tr>
                <?php endif; ?>

                <?php $column1shareholder_10 = get_field('shareholders_page__section_1__table_2__shareholder_10_holdings'); 
                if( !empty( $column1shareholder_10 ) ): ?>
                <tr>
                    <td><?php the_field('shareholders_page__section_1__table_2__shareholder_10'); ?></td>
                    <td><?php the_field('shareholders_page__section_1__table_2__shareholder_10_shares'); ?></td>
                    <td><?php the_field('shareholders_page__section_1__table_2__shareholder_10_holdings'); ?></td>
                </tr>
                <?php endif; ?>

                </tbody>
            </table>
          </div>

        </div>

      </div>

      <div class="brighterir-shareprice-wrapper">
        <div class="brighterir-shareprice">
          <iframe
            src="https://polaris.brighterir.com/public/revolution_beauty_group/data_table/share_price_widget"></iframe>
        </div>
      </div>

    </div>


  </div>
</div>