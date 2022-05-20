<!--================ Start Header Menu Area =================-->
<header class="header">
    <div class="container header__container flex">
      <div class="header__top-container flex">
        <button class="header__burger-btn btn-reset">
          <span></span>
       </button>
        <a class="header__logo-link">
          <img src="img/logo.png" alt="W-Wave-radio" class="header-logo-img">
        </a>
        <div class="header__burger-container flex">
         <nav class="header__top-nav">
          <ul class="header__top-nav-list flex list-reset">
            <li class="header__nav-list-item">
              <a href="" class="header__nav-link js-menu-link">Подкасты</a>
            </li>
            <li class="header__nav-list-item">
              <a href="" class="header__nav-link js-menu-link">Передачи</a>
            </li>
            <li class="header__nav-list-item">
              <a href="" class="header__nav-link js-menu-link">Гости</a>
            </li>
            <li class="header__nav-list-item">
              <a href="" class="header__nav-link js-menu-link">Плейлисты</a>
            </li>
            <li class="header__nav-list-item">
              <a href="" class="header__nav-link js-menu-link">О&nbsp;нас</a>
            </li>
          </ul>
          </nav>
          <div class="header__top-right-container flex">
          <button class="btn-reset header__search-btn"></button>
          <a class="header__login-link" href="/auth">Вход</a>
          </div>
        </div>
      </div>
      <div class="header__bottom-container flex">
        <nav class="header__bottom-nav">
          <ul class="header__bottom-nav-list flex list-reset">
            <li class="header__bottom-nav-list-item"><a href="#" class="bottom-nav-link">Новости</a></li>
            <li class="header__bottom-nav-list-item"><a href="#" class="bottom-nav-link">Блоги</a></li>
            <li class="header__bottom-nav-list-item"><a href="#" class="bottom-nav-link">Топы</a></li>
            <li class="header__bottom-nav-list-item"><a href="#" class="bottom-nav-link">Опросы</a></li>
            <li class="header__bottom-nav-list-item"><a href="#" class="bottom-nav-link">Рейтинги</a></li>
            <li class="header__bottom-nav-list-item"><a href="#" class="bottom-nav-link">Реклама</a></li>
          </ul>
        </nav>
        <div class="header__bottom-right-container flex">
          <div class="header-bottom-play-container flex">
            <button class="header-bottom-play-btn btn-reset"></button>
            <div class="play-descr-container flex">
              <span class="play-time">Ранее в эфире</span>
              <span class="play-name">"Музыка"</span>
            </div>
          </div>
          <div class="header-bottom-play-container play-now flex">
          <button class="header-bottom-play-btn btn-reset"></button>
          <div class="play-descr-container flex">
            <span class="play-time">Сейчас в эфире</span>
            <span class="play-name">"Как так?"</span>
          </div>
          </div>
        </div>
        <div class="age-cens-container"></div>
      </div>
    </div>
  </header>
  <!--================ End Header Menu Area =================-->
  <?php echo $content ?>
 <!--================ Start footer Area  =================-->
 <footer class="footer">
  <div class="container footer-container flex">
    <div class="top-footer-container flex">
      <div class="left-footer-container">
        <img src="img/logo-footer.svg" alt="" class="footer-logo-img">
        <ul class="footer-links-list list-reset flex">
          <li class="footer-links-item">
            <a href="" class="footer-link">
              <svg class="footer-link-svg" width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M19.543 2.498C20 4.28 20 8 20 8C20 8 20 11.72 19.543 13.502C19.289 14.487 18.546 15.262 17.605 15.524C15.896 16 10 16 10 16C10 16 4.107 16 2.395 15.524C1.45 15.258 0.708 14.484 0.457 13.502C2.98023e-08 11.72 0 8 0 8C0 8 2.98023e-08 4.28 0.457 2.498C0.711 1.513 1.454 0.738 2.395 0.476C4.107 -1.78814e-07 10 0 10 0C10 0 15.896 -1.78814e-07 17.605 0.476C18.55 0.742 19.292 1.516 19.543 2.498ZM8 11.5L14 8L8 4.5V11.5Z" fill="#A1A6B4"/>
              </svg>
            </a>
          </li>
          <li class="footer-links-item">
            <a href="" class="footer-link">
              <svg class="footer-link-svg" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 2C14.717 2 15.056 2.01 16.122 2.06C17.187 2.11 17.912 2.277 18.55 2.525C19.21 2.779 19.766 3.123 20.322 3.678C20.8305 4.1779 21.224 4.78259 21.475 5.45C21.722 6.087 21.89 6.813 21.94 7.878C21.987 8.944 22 9.283 22 12C22 14.717 21.99 15.056 21.94 16.122C21.89 17.187 21.722 17.912 21.475 18.55C21.2247 19.2178 20.8311 19.8226 20.322 20.322C19.822 20.8303 19.2173 21.2238 18.55 21.475C17.913 21.722 17.187 21.89 16.122 21.94C15.056 21.987 14.717 22 12 22C9.283 22 8.944 21.99 7.878 21.94C6.813 21.89 6.088 21.722 5.45 21.475C4.78233 21.2245 4.17753 20.8309 3.678 20.322C3.16941 19.8222 2.77593 19.2175 2.525 18.55C2.277 17.913 2.11 17.187 2.06 16.122C2.013 15.056 2 14.717 2 12C2 9.283 2.01 8.944 2.06 7.878C2.11 6.812 2.277 6.088 2.525 5.45C2.77524 4.78218 3.1688 4.17732 3.678 3.678C4.17767 3.16923 4.78243 2.77573 5.45 2.525C6.088 2.277 6.812 2.11 7.878 2.06C8.944 2.013 9.283 2 12 2ZM12 7C10.6739 7 9.40215 7.52678 8.46447 8.46447C7.52678 9.40215 7 10.6739 7 12C7 13.3261 7.52678 14.5979 8.46447 15.5355C9.40215 16.4732 10.6739 17 12 17C13.3261 17 14.5979 16.4732 15.5355 15.5355C16.4732 14.5979 17 13.3261 17 12C17 10.6739 16.4732 9.40215 15.5355 8.46447C14.5979 7.52678 13.3261 7 12 7V7ZM18.5 6.75C18.5 6.41848 18.3683 6.10054 18.1339 5.86612C17.8995 5.6317 17.5815 5.5 17.25 5.5C16.9185 5.5 16.6005 5.6317 16.3661 5.86612C16.1317 6.10054 16 6.41848 16 6.75C16 7.08152 16.1317 7.39946 16.3661 7.63388C16.6005 7.8683 16.9185 8 17.25 8C17.5815 8 17.8995 7.8683 18.1339 7.63388C18.3683 7.39946 18.5 7.08152 18.5 6.75ZM12 9C12.7956 9 13.5587 9.31607 14.1213 9.87868C14.6839 10.4413 15 11.2044 15 12C15 12.7956 14.6839 13.5587 14.1213 14.1213C13.5587 14.6839 12.7956 15 12 15C11.2044 15 10.4413 14.6839 9.87868 14.1213C9.31607 13.5587 9 12.7956 9 12C9 11.2044 9.31607 10.4413 9.87868 9.87868C10.4413 9.31607 11.2044 9 12 9V9Z" fill="#A1A6B4"/>
              </svg>
            </a>
          </li>
          <li class="footer-links-item">
            <a href="" class="footer-link">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M15.78 22V14.26H18.3722L18.76 11.2511H15.78V9.33111C15.78 8.46 16.0222 7.86556 17.2711 7.86556H18.8644V5.17444C18.0931 5.09261 17.3179 5.05292 16.5422 5.05556C14.2456 5.05556 12.6733 6.45778 12.6733 9.03333V11.2511H10.0756V14.26H12.6733V22H3.11111C2.81643 22 2.53381 21.8829 2.32544 21.6746C2.11706 21.4662 2 21.1836 2 20.8889V3.11111C2 2.81643 2.11706 2.53381 2.32544 2.32544C2.53381 2.11706 2.81643 2 3.11111 2H20.8889C21.1836 2 21.4662 2.11706 21.6746 2.32544C21.8829 2.53381 22 2.81643 22 3.11111V20.8889C22 21.1836 21.8829 21.4662 21.6746 21.6746C21.4662 21.8829 21.1836 22 20.8889 22H15.78V22Z" fill="#A1A6B4"/>
              </svg>
            </a>
          </li>
          <li class="footer-links-item">
            <a href="" class="footer-link">
              <svg class="footer-link-svg" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M22.1621 5.65593C21.3986 5.99362 20.589 6.2154 19.7601 6.31393C20.6338 5.79136 21.2878 4.96894 21.6001 3.99993C20.7801 4.48793 19.8811 4.82993 18.9441 5.01493C18.3147 4.34151 17.4804 3.89489 16.571 3.74451C15.6616 3.59413 14.728 3.74842 13.9153 4.18338C13.1026 4.61834 12.4564 5.30961 12.0772 6.14972C11.6979 6.98983 11.6068 7.93171 11.8181 8.82893C10.1552 8.74558 8.52838 8.31345 7.04334 7.56059C5.55829 6.80773 4.24818 5.75097 3.19805 4.45893C2.82634 5.09738 2.63101 5.82315 2.63205 6.56193C2.63205 8.01193 3.37005 9.29293 4.49205 10.0429C3.82806 10.022 3.17869 9.84271 2.59805 9.51993V9.57193C2.59825 10.5376 2.93242 11.4735 3.5439 12.221C4.15538 12.9684 5.00653 13.4814 5.95305 13.6729C5.33667 13.84 4.69036 13.8646 4.06305 13.7449C4.32992 14.5762 4.85006 15.3031 5.55064 15.824C6.25123 16.3449 7.09718 16.6337 7.97005 16.6499C7.10253 17.3313 6.10923 17.8349 5.04693 18.1321C3.98464 18.4293 2.87418 18.5142 1.77905 18.3819C3.69075 19.6114 5.91615 20.264 8.18905 20.2619C15.8821 20.2619 20.0891 13.8889 20.0891 8.36193C20.0891 8.18193 20.0841 7.99993 20.0761 7.82193C20.8949 7.23009 21.6017 6.49695 22.1631 5.65693L22.1621 5.65593Z" fill="#A1A6B4"/>
              </svg>
            </a>
          </li>
        </ul>
      </div>
      <nav class="footer-nav">
        <ul class="footer-nav-list list-reset flex">
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-item-link">Подкасты</a>
          </li>
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-item-link">Плейлисты</a>
          </li>
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-item-link">Новости</a>
          </li>
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-item-link">Передачи</a>
          </li>
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-item-link">Сетка</a>
          </li>
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-item-link">Блоги</a>
          </li>
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-item-link">Гости</a>
          </li>
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-item-link">О нас</a>
          </li>
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-item-link">Топы</a>
          </li>
        </ul>
      </nav>
    </div>
  </div>
  <div class="footer-midle-container"></div>
    <div class="footer-bottom-container">
      <span class="footer-bottom-copyright">W-WAVE ® 2022</span>
    </div>
</footer>
 <!--================ End footer Area  =================-->
