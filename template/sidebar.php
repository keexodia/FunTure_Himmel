<div class="p-archive__side" id="side">
            <div class="p-archive__category">
              <p class="p-archive__topic">カテゴリー</p>
              <ul class="p-archive__links">
                <li class="p-archive__link">
                  <a href="<?php echo esc_url( home_url( '/' ) ); ?>category/lecture/">講演</a>
                  <ul class="p-archive__sub-links">
                    <li class="p-archive__sub-link"><a href="<?php echo esc_url( home_url( '/' ) ); ?>category/lecture/lecture-kimiharu/">斉田季実治</a></li>
                    <li class="p-archive__sub-link"><a href="<?php echo esc_url( home_url( '/' ) ); ?>category/lecture/lecture-eiko/">斉田英子</a></li>
                  </ul>
                </li>
              </ul>
              <ul class="p-archive__links">
                <li class="p-archive__link">
                  <a href="<?php echo esc_url( home_url( '/' ) ); ?>/category/media/">メディア</a>
                  <ul class="p-archive__sub-links">
                    <li class="p-archive__sub-link"><a href="<?php echo esc_url( home_url( '/' ) ); ?>/category/media/media-kimiharu/">斉田季実治</a></li>
                    <li class="p-archive__sub-link"><a href="<?php echo esc_url( home_url( '/' ) ); ?>/category/media/media-eiko/">斉田英子</a></li>
                  </ul>
                </li>
              </ul>
              <ul class="p-archive__links">
                <li class="p-archive__link">
                  <a href="<?php echo esc_url( home_url( '/' ) ); ?>/category/writing/">執筆</a>
                  <ul class="p-archive__sub-links">
                    <li class="p-archive__sub-link"><a href="<?php echo esc_url( home_url( '/' ) ); ?>/category/writing/writing-kimiharu">斉田季実治</a></li>
                    <li class="p-archive__sub-link"><a href="<?php echo esc_url( home_url( '/' ) ); ?>/category/writing/writing-eiko">斉田英子</a></li>
                  </ul>
                </li>
              </ul>
              <ul class="p-archive__links">
                <li class="p-archive__link">
                  <a href="<?php echo esc_url( home_url( '/' ) ); ?>/category/interview">インタビュー</a>
                  <ul class="p-archive__sub-links">
                    <li class="p-archive__sub-link"><a href="<?php echo esc_url( home_url( '/' ) ); ?>/category/interview/interview-kimiharu">斉田季実治</a></li>
                    <li class="p-archive__sub-link"><a href="<?php echo esc_url( home_url( '/' ) ); ?>/category/interview/interview-eiko">斉田英子</a></li>
                  </ul>
                </li>
              </ul>
              <ul class="p-archive__links">
                <li class="p-archive__link">
                  <a href="<?php echo esc_url( home_url( '/' ) ); ?>/category/book">書籍</a>
                  <ul class="p-archive__sub-links">
                    <li class="p-archive__sub-link"><a href="<?php echo esc_url( home_url( '/' ) ); ?>/category/book/book-kimiharu">斉田季実治</a></li>
                    <li class="p-archive__sub-link"><a href="<?php echo esc_url( home_url( '/' ) ); ?>/category/book/book-eiko">斉田英子</a></li>
                  </ul>
                </li>
              </ul>
              <ul class="p-archive__links">
                <li class="p-archive__link">
                  <a href="<?php echo esc_url( home_url( '/' ) ); ?>/category/movie">YouTube</a>
                  <ul class="p-archive__sub-links">
                    <li class="p-archive__sub-link"><a href="<?php echo esc_url( home_url( '/' ) ); ?>/category/movie/movie-kimiharu">斉田季実治</a></li>
                    <li class="p-archive__sub-link"><a href="<?php echo esc_url( home_url( '/' ) ); ?>/category/movie/movie-eiko">斉田英子</a></li>
                  </ul>
                </li>
              </ul>
            </div>
           <div class="p-archive__archive">
              <p class="p-archive__topic">アーカイブ</p>
              <ul class="p-archive__links">
                <?php for($year_cnt = 2021;$year_cnt>=2005;$year_cnt--):?>
                <li class="p-archive__link">
                  <a href="<?php echo get_year_link( $year_cnt );?>"><?php echo $year_cnt;?>年</a>
                </li>
                <?php endfor;?>
              </ul>
            </div>
          </div>