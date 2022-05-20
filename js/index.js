(() => {
  function setBurger (params) {
    const btn = document.querySelector(`.${params.btnClass}`);
    const menu = document.querySelector(`.${params.menuClass}`);
    const links = menu.querySelectorAll(`.${params.linksClass}`);

    function closeBurger () {
      if (window.screen.width <= 1368) {
        btn.classList.toggle(params.activeClass);
        if (
          !menu.classList.contains(params.activeClass) &&
          !menu.classList.contains(params.hiddenClass)
        ) {
            menu.classList.add(params.activeClass);
            document.body.style.overflow = 'hidden';
          } else {
          menu.classList.add(params.hiddenClass);
        document.body.removeAttribute('style');
        }
      }
    };

    menu.addEventListener("animationend", function () {
      if (this.classList.contains(params.hiddenClass)) {
        this.classList.remove(params.activeClass);
        this.classList.remove(params.hiddenClass);
        btn.classList.remove(params.hiddenClass);
    }
  });

  btn.addEventListener("click", closeBurger);

  links.forEach((link) => {
    link.addEventListener("click", closeBurger);
  });
}

setBurger({
  btnClass: "header__burger-btn",
  menuClass: "header__top-nav",
  activeClass: "is-opened",
  hiddenClass: "is-closed",
  linksClass: "js-menu-link"
});
})();

function BroadcastDefault () {
 const element = document.querySelector('.bradcasts-authors-select');
 const choices = new Choices (element , {
  searсhEnabled: false,
 });
}

BroadcastDefault ();

$('.jq-accordion').accordion ({
  active: 1,
  heightStyle: "content",
  collapsible: true,
  icons: false,
});

document.querySelector('.js-show').addEventListener ('click', function() {
  let blocks = document.querySelectorAll('.js-podcasts-item');
  let responsibleBlocks = document.querySelectorAll('.podcasts__item_responsible');
    blocks.forEach(block => {block.style.display = "flex";
  });
  responsibleBlocks.forEach(responsibleBlock => {responsibleBlock.style.display = "flex";
  });
});

window.addEventListener('DOMContentLoaded', function() {
  document.querySelector('.js-show').addEventListener ('click', function() {
    document.querySelector('.js-show').classList.add('js-show-disabled')
  });
});

document.querySelectorAll('.guest__item-btn').forEach(function(tabsBtn) {
  tabsBtn.addEventListener('click', function (e) {
  const guest=e.currentTarget.dataset.guest;

document.querySelectorAll('.guest__item-btn').forEach(function(btn) {
  btn.classList.remove('guest_btn-active')});
  e.currentTarget.classList.add('guest_btn-active')
  document.querySelectorAll('.guests__descr-item').forEach(function(tabsBtn) {
  tabsBtn.classList.remove('guests_item-active')});

document.querySelector(`[data-target = ${guest}]`).classList.add('guests_item-active');
  });
});

new JustValidate('.js-form-validate', {
  rules: {
    name: {
      required: true,
      minLength: 2,
      maxLength: 30
    },
    mail: {
      required: true,
      email: true
    },
  },
  messages: {
    name: 'Недопустимый формат',
    mail: 'Недопустимый формат'
  },
  colorWrong: '#6D31EE'
});

(() => {
  const mobileWidth = 640;
  const desktopWidth = 980;

  const sliderMobileParams  = {
    paginationClassName: "test-pagination",
    navClassName: "test-navigation",
    navBtnClassName: "nav-btn",
    navPrev: "test-prev",
    navNext: "test-next",
    cardsContainerName: "js-slider",
    cardsWrapName: "js-slides-wrap",
    card: "slide",
    hiddenClass: "is-hidden"
  };

  function getWindowWidth()  {
    return Math.max (
      document.body.scrollWidth,
      document.documentElement.scrollWidth,
      document.body.offsetWidth,
      document.documentElement.offsetWidth,
      document.body.clientWidth,
      document.documentElement.clientWidth
    );
  }

  function activateMobileSlider(params)  {
    const navigation = document.createElement("div");
    // const pagination = document.createElement("div");
    const navBtnPrev = document.createElement("button");
    const navBtnNext = document.createElement("button");

    // pagination.classList.add(params.paginationClassName);
    // params.cardsContainer.append(pagination);

    navigation.classList.add(params.navClassName);
    params.cardsContainer.append(navigation);

    navBtnPrev.classList.add(params.navBtnClassName);
    navBtnPrev.classList.add(params.navPrev);
    params.cardsContainer.append(navBtnPrev);

    navBtnNext.classList.add(params.navBtnClassName);
    navBtnNext.classList.add(params.navNext);
    params.cardsContainer.append(navBtnNext);

    params.cardsContainer.classList.add("swiper-container");
    params.cardsWrap.classList.add("swiper-wrapper");

    params.cardsSlider = new Swiper(`.${params.cardsContainerName}`, {
      slidesPerView: 1,
      spaceBetween: 20,

      // pagination: {
      //   el: `${params.cardsContainerName} .${params.paginationClassName}`,
      //   type: "fraction"
      // },

      navigation: {
        nextEl: `.${params.navNext}`,
        prevEl: `.${params.navPrev}`
      },

      on: {
        beforeInit() {
          document.querySelectorAll(`.${params.card}`).forEach((el) => {
            el.classList.add("swiper-slide");
          });
        },

        beforeDestroy() {
          this.slides.forEach((el) => {
            el.classList.remove("swiper-slide");
            el.removeAttribute("role");
            el.removeAttribute("aria-label");
          });

          this.pagination.el.remove();
        }
      }
    });
  }
  function destroyMobileSlider(params) {
    params.cardsSlider.destroy();
    params.cardsContainer.classList.remove("swiper-container");
    params.cardsWrap.classList.remove("swiper-wrapper");
    params.cardsWrap.removeAttribute("aria-live");
    params.cardsWrap.removeAttribute("id");
  }

  function setHiddenCards(params, windowWidth) {
    const cards = document.querySelectorAll(`.${params.card}`);
    let quantity = cards.length;

    cards.forEach((card, i) => {
      card.classList.remove(params.hiddenClass);
      if (i >= quantity) {
        card.classList.add(params.hiddenClass);
      }
    });
  }

  function checkWindowWidthMobile(params) {
    const currentWidth = getWindowWidth();
    params.cardsContainer = document.querySelector(
      `.${params.cardsContainerName}`
    );
    params.cardsWrap = document.querySelector(`.${params.cardsWrapName}`);

    if (
      currentWidth <= mobileWidth &&
      (!params.cardsSlider || params.cardsSlider.destroyed)
    ) {
      activateMobileSlider(params);
    } else if (currentWidth > mobileWidth && params.cardsSlider) {
      destroyMobileSlider(params);
    }

    setHiddenCards(params, currentWidth);
  }

  checkWindowWidthMobile(sliderMobileParams);
  window.addEventListener("resize", function () {
    checkWindowWidthMobile(sliderMobileParams);
  });
})();

