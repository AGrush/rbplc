<div <?php post_class('c-page'); ?>>
  <div class="c-page__content">

    <div class="c-banner-1">

      <div class="c-banner-1__page-title">
        <p><?php the_field('financial_calendar_page__section_1__page_title'); ?></p>
      </div>

      <div class="video-wrapper">

        <?php $imageHpPoster = get_field('financial_calendar_page__section_1__main_image');
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

            <div class="table-control">
                <div class="table-control__one active" data-id="nav-1">
                    <p>upcoming</p>
                </div>
                <div class="table-control__two" data-id="nav-2">
                    <p>past</p>
                </div>
            </div>

            <div class="c-tables">           
                <table class="c-table m-table-calendar" data-id="table-1">
                    <tbody>
                    <tr class="c-table__heading">
                        <td><?php the_field('financial_calendar_page__section_1__financial_calendar_table_1_header__date'); ?></td>
                        <td><?php the_field('financial_calendar_page__section_1__financial_calendar_table_1_header__event'); ?></td>
                        <td><?php the_field('financial_calendar_page__section_1__financial_calendar_table_1_header__addtocalendar'); ?></td>
                    </tr>

                    <?php $column1event_1 = get_field('financial_calendar_page__section_1__table_1__event_1_event'); 
                    if( !empty( $column1event_1 ) ): ?>
                    <tr>
                        <td><?php the_field('financial_calendar_page__section_1__table_1__event_1_date'); ?></td>
                        <td><?php the_field('financial_calendar_page__section_1__table_1__event_1_event'); ?></td>
                        <td>
                            <?php $file_1 = get_field('financial_calendar_page__section_1__table_1__event_1_calendar_file');
                            if( $file_1 ): ?>
                                <a class="file" href="<?php echo $file_1['url']; ?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="60.68mm" height="58.56mm" viewBox="0 0 172 166"><g><path d="M164.39,159.45H7.54V18.36H33.86V6.61h8V17.86h40V6.6h8V17.87h40V6.59h8V18.14h26.46Zm-8-7.95V64.06H15.72V151.5ZM15.65,26.5V55.43H156.28V26.54H137.93V38h-8V26.53H90V38h-8V26.52H42V37.85H33.79V26.5Z"/><path d="M81.86,86.4h8v17.33H107v7.87H90.16v17.09H82.05V111.82h-17v-7.89H81.86Z"/></g>
                                    </svg>
                                </a>
                            <?php endif; ?>
                        </td>
                    </tr>
                    <?php endif; ?>

                    <?php $column1event_2 = get_field('financial_calendar_page__section_1__table_1__event_2_event'); 
                    if( !empty( $column1event_2 ) ): ?>
                    <tr>
                        <td><?php the_field('financial_calendar_page__section_1__table_1__event_2_date'); ?></td>
                        <td><?php the_field('financial_calendar_page__section_1__table_1__event_2_event'); ?></td>
                        <td>
                            <?php $file_2 = get_field('financial_calendar_page__section_1__table_1__event_2_calendar_file');
                            if( $file_2 ): ?>
                                <a class="file" href="<?php echo $file_2['url']; ?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="60.68mm" height="58.56mm" viewBox="0 0 172 166"><g><path d="M164.39,159.45H7.54V18.36H33.86V6.61h8V17.86h40V6.6h8V17.87h40V6.59h8V18.14h26.46Zm-8-7.95V64.06H15.72V151.5ZM15.65,26.5V55.43H156.28V26.54H137.93V38h-8V26.53H90V38h-8V26.52H42V37.85H33.79V26.5Z"/><path d="M81.86,86.4h8v17.33H107v7.87H90.16v17.09H82.05V111.82h-17v-7.89H81.86Z"/></g>
                                    </svg>
                                </a>
                            <?php endif; ?>
                        </td>
                    </tr>
                    <?php endif; ?>

                    <?php $column1event_3 = get_field('financial_calendar_page__section_1__table_1__event_3_event'); 
                    if( !empty( $column1event_3 ) ): ?>
                    <tr>
                        <td><?php the_field('financial_calendar_page__section_1__table_1__event_3_date'); ?></td>
                        <td><?php the_field('financial_calendar_page__section_1__table_1__event_3_event'); ?></td>
                        <td>
                            <?php $file_3 = get_field('financial_calendar_page__section_1__table_1__event_3_calendar_file');
                            if( $file_3 ): ?>
                                <a class="file" href="<?php echo $file_3['url']; ?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="60.68mm" height="58.56mm" viewBox="0 0 172 166"><g><path d="M164.39,159.45H7.54V18.36H33.86V6.61h8V17.86h40V6.6h8V17.87h40V6.59h8V18.14h26.46Zm-8-7.95V64.06H15.72V151.5ZM15.65,26.5V55.43H156.28V26.54H137.93V38h-8V26.53H90V38h-8V26.52H42V37.85H33.79V26.5Z"/><path d="M81.86,86.4h8v17.33H107v7.87H90.16v17.09H82.05V111.82h-17v-7.89H81.86Z"/></g>
                                    </svg>
                                </a>
                            <?php endif; ?>
                        </td>
                    </tr>
                    <?php endif; ?>

                    <?php $column1event_4 = get_field('financial_calendar_page__section_1__table_1__event_4_event'); 
                    if( !empty( $column1event_4 ) ): ?>
                    <tr>
                        <td><?php the_field('financial_calendar_page__section_1__table_1__event_4_date'); ?></td>
                        <td><?php the_field('financial_calendar_page__section_1__table_1__event_4_event'); ?></td>
                        <td>
                            <?php $file_4 = get_field('financial_calendar_page__section_1__table_1__event_4_calendar_file');
                            if( $file_4 ): ?>
                                <a class="file" href="<?php echo $file_4['url']; ?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="60.68mm" height="58.56mm" viewBox="0 0 172 166"><g><path d="M164.39,159.45H7.54V18.36H33.86V6.61h8V17.86h40V6.6h8V17.87h40V6.59h8V18.14h26.46Zm-8-7.95V64.06H15.72V151.5ZM15.65,26.5V55.43H156.28V26.54H137.93V38h-8V26.53H90V38h-8V26.52H42V37.85H33.79V26.5Z"/><path d="M81.86,86.4h8v17.33H107v7.87H90.16v17.09H82.05V111.82h-17v-7.89H81.86Z"/></g>
                                    </svg>
                                </a>
                            <?php endif; ?>
                        </td>
                    </tr>
                    <?php endif; ?>


                    <?php $column1event_5 = get_field('financial_calendar_page__section_1__table_1__event_5_event'); 
                    if( !empty( $column1event_5 ) ): ?>
                    <tr>
                        <td><?php the_field('financial_calendar_page__section_1__table_1__event_5_date'); ?></td>
                        <td><?php the_field('financial_calendar_page__section_1__table_1__event_5_event'); ?></td>
                        <td>
                            <?php $file_5 = get_field('financial_calendar_page__section_1__table_1__event_5_calendar_file');
                            if( $file_5 ): ?>
                                <a class="file" href="<?php echo $file_5['url']; ?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="60.68mm" height="58.56mm" viewBox="0 0 172 166"><g><path d="M164.39,159.45H7.54V18.36H33.86V6.61h8V17.86h40V6.6h8V17.87h40V6.59h8V18.14h26.46Zm-8-7.95V64.06H15.72V151.5ZM15.65,26.5V55.43H156.28V26.54H137.93V38h-8V26.53H90V38h-8V26.52H42V37.85H33.79V26.5Z"/><path d="M81.86,86.4h8v17.33H107v7.87H90.16v17.09H82.05V111.82h-17v-7.89H81.86Z"/></g>
                                    </svg>
                                </a>
                            <?php endif; ?>
                        </td>
                    </tr>
                    <?php endif; ?>

                    <?php $column1event_6 = get_field('financial_calendar_page__section_1__table_1__event_6_event'); 
                    if( !empty( $column1event_6 ) ): ?>
                    <tr>
                        <td><?php the_field('financial_calendar_page__section_1__table_1__event_6_date'); ?></td>
                        <td><?php the_field('financial_calendar_page__section_1__table_1__event_6_event'); ?></td>
                        <td>
                            <?php $file_6 = get_field('financial_calendar_page__section_1__table_1__event_6_calendar_file');
                            if( $file_6 ): ?>
                                <a class="file" href="<?php echo $file_6['url']; ?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="60.68mm" height="58.56mm" viewBox="0 0 172 166"><g><path d="M164.39,159.45H7.54V18.36H33.86V6.61h8V17.86h40V6.6h8V17.87h40V6.59h8V18.14h26.46Zm-8-7.95V64.06H15.72V151.5ZM15.65,26.5V55.43H156.28V26.54H137.93V38h-8V26.53H90V38h-8V26.52H42V37.85H33.79V26.5Z"/><path d="M81.86,86.4h8v17.33H107v7.87H90.16v17.09H82.05V111.82h-17v-7.89H81.86Z"/></g>
                                    </svg>
                                </a>
                            <?php endif; ?>
                        </td>
                    </tr>
                    <?php endif; ?>

                    <?php $column1event_7 = get_field('financial_calendar_page__section_1__table_1__event_7_event'); 
                    if( !empty( $column1event_7 ) ): ?>
                    <tr>
                        <td><?php the_field('financial_calendar_page__section_1__table_1__event_7_date'); ?></td>
                        <td><?php the_field('financial_calendar_page__section_1__table_1__event_7_event'); ?></td>
                        <td>
                            <?php $file_7 = get_field('financial_calendar_page__section_1__table_1__event_7_calendar_file');
                            if( $file_7 ): ?>
                                <a class="file" href="<?php echo $file_7['url']; ?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="60.68mm" height="58.56mm" viewBox="0 0 172 166"><g><path d="M164.39,159.45H7.54V18.36H33.86V6.61h8V17.86h40V6.6h8V17.87h40V6.59h8V18.14h26.46Zm-8-7.95V64.06H15.72V151.5ZM15.65,26.5V55.43H156.28V26.54H137.93V38h-8V26.53H90V38h-8V26.52H42V37.85H33.79V26.5Z"/><path d="M81.86,86.4h8v17.33H107v7.87H90.16v17.09H82.05V111.82h-17v-7.89H81.86Z"/></g>
                                    </svg>
                                </a>
                            <?php endif; ?>
                        </td>
                    </tr>
                    <?php endif; ?>


                    <?php $column1event_8 = get_field('financial_calendar_page__section_1__table_1__event_8_event'); 
                    if( !empty( $column1event_8 ) ): ?>
                    <tr>
                        <td><?php the_field('financial_calendar_page__section_1__table_1__event_8_date'); ?></td>
                        <td><?php the_field('financial_calendar_page__section_1__table_1__event_8_event'); ?></td>
                        <td>
                            <?php $file_8 = get_field('financial_calendar_page__section_1__table_1__event_8_calendar_file');
                            if( $file_8 ): ?>
                                <a class="file" href="<?php echo $file_8['url']; ?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="60.68mm" height="58.56mm" viewBox="0 0 172 166"><g><path d="M164.39,159.45H7.54V18.36H33.86V6.61h8V17.86h40V6.6h8V17.87h40V6.59h8V18.14h26.46Zm-8-7.95V64.06H15.72V151.5ZM15.65,26.5V55.43H156.28V26.54H137.93V38h-8V26.53H90V38h-8V26.52H42V37.85H33.79V26.5Z"/><path d="M81.86,86.4h8v17.33H107v7.87H90.16v17.09H82.05V111.82h-17v-7.89H81.86Z"/></g>
                                    </svg>
                                </a>
                            <?php endif; ?>
                        </td>
                    </tr>
                    <?php endif; ?>


                    <?php $column1event_9 = get_field('financial_calendar_page__section_1__table_1__event_9_event'); 
                    if( !empty( $column1event_9 ) ): ?>
                    <tr>
                        <td><?php the_field('financial_calendar_page__section_1__table_1__event_9_date'); ?></td>
                        <td><?php the_field('financial_calendar_page__section_1__table_1__event_9_event'); ?></td>
                        <td>
                            <?php $file_9 = get_field('financial_calendar_page__section_1__table_1__event_9_calendar_file');
                            if( $file_9 ): ?>
                                <a class="file" href="<?php echo $file_9['url']; ?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="60.68mm" height="58.56mm" viewBox="0 0 172 166"><g><path d="M164.39,159.45H7.54V18.36H33.86V6.61h8V17.86h40V6.6h8V17.87h40V6.59h8V18.14h26.46Zm-8-7.95V64.06H15.72V151.5ZM15.65,26.5V55.43H156.28V26.54H137.93V38h-8V26.53H90V38h-8V26.52H42V37.85H33.79V26.5Z"/><path d="M81.86,86.4h8v17.33H107v7.87H90.16v17.09H82.05V111.82h-17v-7.89H81.86Z"/></g>
                                    </svg>
                                </a>
                            <?php endif; ?>
                        </td>
                    </tr>
                    <?php endif; ?>

                    <?php $column1event_10 = get_field('financial_calendar_page__section_1__table_1__event_10_event'); 
                    if( !empty( $column1event_10 ) ): ?>
                    <tr>
                        <td><?php the_field('financial_calendar_page__section_1__table_1__event_10_date'); ?></td>
                        <td><?php the_field('financial_calendar_page__section_1__table_1__event_10_event'); ?></td>
                        <td>
                            <?php $file_10 = get_field('financial_calendar_page__section_1__table_1__event_10_calendar_file');
                            if( $file_10 ): ?>
                                <a class="file" href="<?php echo $file_10['url']; ?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="60.68mm" height="58.56mm" viewBox="0 0 172 166"><g><path d="M164.39,159.45H7.54V18.36H33.86V6.61h8V17.86h40V6.6h8V17.87h40V6.59h8V18.14h26.46Zm-8-7.95V64.06H15.72V151.5ZM15.65,26.5V55.43H156.28V26.54H137.93V38h-8V26.53H90V38h-8V26.52H42V37.85H33.79V26.5Z"/><path d="M81.86,86.4h8v17.33H107v7.87H90.16v17.09H82.05V111.82h-17v-7.89H81.86Z"/></g>
                                    </svg>
                                </a>
                            <?php endif; ?>
                        </td>
                    </tr>
                    <?php endif; ?>

                    </tbody>
                </table>

                <table class="c-table m-table-calendar m-table-past h-hidden" data-id="table-2">
                    <tbody>
                    <tr class="c-table__heading">
                        <td><?php the_field('financial_calendar_page__section_1__financial_calendar_table_2_header__date'); ?></td>
                        <td><?php the_field('financial_calendar_page__section_1__financial_calendar_table_2_header__event'); ?></td>
                    </tr>

                    <?php $column1event_1 = get_field('financial_calendar_page__section_1__table_2__event_1_event'); 
                    if( !empty( $column1event_1 ) ): ?>
                    <tr>
                        <td><?php the_field('financial_calendar_page__section_1__table_2__event_1_date'); ?></td>
                        <td><?php the_field('financial_calendar_page__section_1__table_2__event_1_event'); ?></td>
                    </tr>
                    <?php endif; ?>

                    <?php $column1event_2 = get_field('financial_calendar_page__section_1__table_2__event_2_event'); 
                    if( !empty( $column1event_2 ) ): ?>
                    <tr>
                        <td><?php the_field('financial_calendar_page__section_1__table_2__event_2_date'); ?></td>
                        <td><?php the_field('financial_calendar_page__section_1__table_2__event_2_event'); ?></td>
                    </tr>
                    <?php endif; ?>

                    <?php $column1event_3 = get_field('financial_calendar_page__section_1__table_2__event_3_event'); 
                    if( !empty( $column1event_3 ) ): ?>
                    <tr>
                        <td><?php the_field('financial_calendar_page__section_1__table_2__event_3_date'); ?></td>
                        <td><?php the_field('financial_calendar_page__section_1__table_2__event_3_event'); ?></td>
                    </tr>
                    <?php endif; ?>

                    <?php $column1event_4 = get_field('financial_calendar_page__section_1__table_2__event_4_event'); 
                    if( !empty( $column1event_4 ) ): ?>
                    <tr>
                        <td><?php the_field('financial_calendar_page__section_1__table_2__event_4_date'); ?></td>
                        <td><?php the_field('financial_calendar_page__section_1__table_2__event_4_event'); ?></td>
                    </tr>
                    <?php endif; ?>


                    <?php $column1event_5 = get_field('financial_calendar_page__section_1__table_2__event_5_event'); 
                    if( !empty( $column1event_5 ) ): ?>
                    <tr>
                        <td><?php the_field('financial_calendar_page__section_1__table_2__event_5_date'); ?></td>
                        <td><?php the_field('financial_calendar_page__section_1__table_2__event_5_event'); ?></td>
                    </tr>
                    <?php endif; ?>

                    <?php $column1event_6 = get_field('financial_calendar_page__section_1__table_2__event_6_event'); 
                    if( !empty( $column1event_6 ) ): ?>
                    <tr>
                        <td><?php the_field('financial_calendar_page__section_1__table_2__event_6_date'); ?></td>
                        <td><?php the_field('financial_calendar_page__section_1__table_2__event_6_event'); ?></td>
                    </tr>
                    <?php endif; ?>

                    <?php $column1event_7 = get_field('financial_calendar_page__section_1__table_2__event_7_event'); 
                    if( !empty( $column1event_7 ) ): ?>
                    <tr>
                        <td><?php the_field('financial_calendar_page__section_1__table_2__event_7_date'); ?></td>
                        <td><?php the_field('financial_calendar_page__section_1__table_2__event_7_event'); ?></td>
                    </tr>
                    <?php endif; ?>


                    <?php $column1event_8 = get_field('financial_calendar_page__section_1__table_2__event_8_event'); 
                    if( !empty( $column1event_8 ) ): ?>
                    <tr>
                        <td><?php the_field('financial_calendar_page__section_1__table_2__event_8_date'); ?></td>
                        <td><?php the_field('financial_calendar_page__section_1__table_2__event_8_event'); ?></td>
                    </tr>
                    <?php endif; ?>


                    <?php $column1event_9 = get_field('financial_calendar_page__section_1__table_2__event_9_event'); 
                    if( !empty( $column1event_9 ) ): ?>
                    <tr>
                        <td><?php the_field('financial_calendar_page__section_1__table_2__event_9_date'); ?></td>
                        <td><?php the_field('financial_calendar_page__section_1__table_2__event_9_event'); ?></td>
                    </tr>
                    <?php endif; ?>

                    <?php $column1event_10 = get_field('financial_calendar_page__section_1__table_2__event_10_event'); 
                    if( !empty( $column1event_10 ) ): ?>
                    <tr>
                        <td><?php the_field('financial_calendar_page__section_1__table_2__event_10_date'); ?></td>
                        <td><?php the_field('financial_calendar_page__section_1__table_2__event_10_event'); ?></td>
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


    <div class="c-popup-disclaimer h-hidden">
      <div class="disclaimer-content">
        <p class="important">important</p>
        <p class="disclaimer">disclaimer</p>
        <div class="body-copy">
          <p><?php the_field('popup_disclaimer__multiple_pages__page_title'); ?></p>
        </div>
        <div class="buttons">
          <a class="c-button-1 accept">
            accept
          </a>
          <a href="<?php echo home_url(); ?>" class="c-button-1 decline">
            decline
          </a>
        </div>
      </div>
    </div>


  </div>
</div>