/////////////////////////////////////
// MENU TOGGLE
/////////////////////////////////////\
const menuButton = document.querySelector(".menu-button");
const menuDropdown = document.querySelector(".menu-dropdown-box");
const menuIcon = document.querySelector("#nav-icon2");
const blackDrop = document.querySelector(".menu-blackdrop");

menuButton.addEventListener("click", function() {
  menuDropdown.classList.toggle("open");
  menuIcon.classList.toggle("open");
  blackDrop.classList.toggle("open");
});

window.addEventListener("scroll", function(e) {
  stickyMenu(e);
});

const menuBar = document.querySelector(".main-menu-desktop");
function stickyMenu() {
  if (window.pageYOffset > 50) {
    menuBar.classList.add("stickyMenu");
  } else {
    menuBar.classList.remove("stickyMenu");
  }
}

/////////////////////////////////////
// MULTILANG SWITCHER
/////////////////////////////////////

// Check language version
if (window.location.toString().includes("/en/")) {
  var activeLang = "en";
  switchLang(activeLang);
} else if (window.location.toString().includes("/de/")) {
  var activeLang = "de";
  switchLang(activeLang);
} else {
  var activeLang = "pl";
  switchLang(activeLang);
}
function switchLang(lang) {
  // var iconURL =
  //   "http://tmgb.pl/wp-content/themes/prgrm-theme/img/" + lang + ".svg";
  // var active_img = document.querySelector("#lang_active_box img");
  // active_img.setAttribute("src", iconURL);

  var active_span = document.querySelector("#lang_active_box span");
  active_span.innerHTML = lang;
}

// HIDE-SHOW MODULE
let readMoreText = "Read more";
let collapseText = "Collapse";

if (activeLang === "pl") {
  readMoreText = "Czytaj więcej";
  collapseText = "Zwiń";
}

let hide_show_panels = document.querySelectorAll(".prgrm-hide-show-panel");

if (hide_show_panels !== null) {
  hide_show_panels.forEach(function(panelItem) {
    let triger = panelItem.querySelector(".prgrm-hide-show-panel__triger");
    triger.addEventListener("click", function() {
      panelItem.classList.toggle("active");

      if (triger.innerText.includes(readMoreText)) {
        triger.innerHTML = "<span>" + collapseText + "</span>";
      } else {
        triger.innerHTML = "<span>" + readMoreText + "</span>";
      }
    });
  });
}

/////////////////////////////////////
// MULTILANG SWITCHER
/////////////////////////////////////
let menu;
if (innerWidth < 991) {
  menu = ".main-menu-mobile";
} else {
  menu = ".main-menu-desktop";
}

var lang_active_box = document.querySelector(menu + " #lang_active_box");
var lang_options_box = document.querySelector(menu + " #lang_options_box");
lang_active_box.addEventListener("click", function() {
  lang_options_box.classList.toggle("activSwitcher");
});

/*=======================================
// "Lightbox Filmbox" 
/*=======================================*/

$(".light_box_film").fadeOut(0);
$(document).ready(function() {
  $(".prgrmFilmbox-triggerContent").click(function() {
    var film_url = $(this).attr("film_url");
    $(".light_box_film video").attr("src", film_url);
    $(".light_box_film")
      .delay(200)
      .fadeIn(400);
  });
  $(".full_glass").click(function() {
    $(".light_box_film")
      .fadeOut(400)
      .delay(200);
    $(".light_box_film").removeAttr("src");
    $("video").each(function() {
      this.pause();
    });
  });
  $(".close_button").click(function() {
    $(".light_box_film")
      .fadeOut(400)
      .delay(200);
    $(".light_box_film").removeAttr("src");
    $("video").each(function() {
      this.pause();
    });
  });
});

/////////////////////////////////////
// slide elder carusel
/////////////////////////////////////

function _toConsumableArray(arr) {
  return (
    _arrayWithoutHoles(arr) || _iterableToArray(arr) || _nonIterableSpread()
  );
}

function _nonIterableSpread() {
  throw new TypeError("Invalid attempt to spread non-iterable instance");
}

function _iterableToArray(iter) {
  if (
    Symbol.iterator in Object(iter) ||
    Object.prototype.toString.call(iter) === "[object Arguments]"
  )
    return Array.from(iter);
}

function _arrayWithoutHoles(arr) {
  if (Array.isArray(arr)) {
    for (var i = 0, arr2 = new Array(arr.length); i < arr.length; i++) {
      arr2[i] = arr[i];
    }
    return arr2;
  }
}

function _objectSpread(target) {
  for (var i = 1; i < arguments.length; i++) {
    var source = arguments[i] != null ? arguments[i] : {};
    var ownKeys = Object.keys(source);
    if (typeof Object.getOwnPropertySymbols === "function") {
      ownKeys = ownKeys.concat(
        Object.getOwnPropertySymbols(source).filter(function(sym) {
          return Object.getOwnPropertyDescriptor(source, sym).enumerable;
        })
      );
    }
    ownKeys.forEach(function(key) {
      _defineProperty(target, key, source[key]);
    });
  }
  return target;
}

function _defineProperty(obj, key, value) {
  if (key in obj) {
    Object.defineProperty(obj, key, {
      value: value,
      enumerable: true,
      configurable: true,
      writable: true
    });
  } else {
    obj[key] = value;
  }
  return obj;
}

(function() {
  function ElderCarousel(selector, opts) {
    this.wrapper = null;
    this.wrapperWidth = 0;
    this.track = null;
    this.trackWidth = 0;
    this.trackPosition = 0;
    this.startPosition = 0; // this.trackMouseDown = false

    this.items = [];
    this.itemWidth = 0;
    this.firstItem = null; // this.pageDistance = 0

    this.lastItem = null;
    this.settings = _objectSpread({}, ElderCarousel.defaults, opts);
    this.settings.selector = selector;
    this.playInterval = null;
    this.navDisabled = false;
    this.isEnd = false;
    this.isStart = false;
    setup(this);
  }

  ElderCarousel.prototype.next = function() {
    // this.isEnd = Math.abs(this.trackPosition) === this.trackWidth - this.itemWidth
    if ((!this.settings.loop && this.isEnd) || this.items.length === 1) return;
    this.trackPosition -= this.itemWidth * this.settings.step;

    move(this);
  };

  ElderCarousel.prototype.prev = function() {
    this.isStart = Mattransformh.abs(this.trackPosition) === 0;
    if ((!this.settings.loop && this.isStart) || this.items.length === 1)
      return;
    this.trackPosition += this.itemWidth * this.settings.step;
    move(this);
  };

  ElderCarousel.prototype.goTo = function(index) {
    this.trackPosition = -(index * this.itemWidth);
    move(this);
  };

  ElderCarousel.prototype.play = function() {
    var _this = this;

    clearInterval(this.playInterval);
    this.playInterval = setInterval(function() {
      _this.next();
    }, this.settings.playInterval);
  };

  ElderCarousel.prototype.stop = function() {
    clearInterval(this.playInterval);
  };

  function move(self) {
    self.track.style.transition = "transform ".concat(
      self.settings.speed,
      "ms ease"
    );

    if (Math.abs(self.trackPosition) > Math.abs(self.trackWidthjs)) {
      self.trackPosition = 0;
    }

    // console.log(self);
    self.track.style.transform = "translate3d(".concat(
      self.trackPosition,
      "px,0,0)"
    ); // updatePagination(self)

    if (self.settings.play) self.play();
  }

  function setup(self) {
    if (!buildUI(self)) return; // if (self.settings.pagination) createPagination(self)

    if (self.settings.navs) createNavs(self);
    if (self.settings.play) self.play();
    setTrackStartPosition(self);
    setupEvents(self);
  }

  function buildUI(self) {
    self.wrapper = document.querySelector(self.settings.selector);
    if (!self.wrapper) return false;
    self.wrapper.classList.add("ec");
    self.wrapperWidth = self.wrapper.clientWidth;
    self.itemWidth = parseInt(self.wrapperWidth / self.settings.items);
    self.items = Array.from(self.wrapper.children);
    if (self.items.length === 0) return false;
    self.items.forEach(function(item) {
      item.classList.add("ec__item");
      item.style.width = self.itemWidth + "px";
    });

    if (self.items.length > 1) {
      // fazer calcullo com step ao invez de items
      var leftClonedItems = self.items
        .slice(self.items.length - self.settings.items, self.items.length)
        .map(function(item) {
          var clonedItem = item.cloneNode(true);
          clonedItem.classList.add("cloned");
          return clonedItem;
        });
      var rightClonedItems = self.items
        .slice(0, self.settings.items)
        .map(function(item) {
          var clonedItem = item.cloneNode(true);
          clonedItem.classList.add("cloned");
          return clonedItem;
        });
      self.items = [].concat(
        _toConsumableArray(leftClonedItems),
        _toConsumableArray(self.items),
        _toConsumableArray(rightClonedItems)
      );
    }

    self.track = document.createElement("div");
    self.track.className = "ec__track";
    self.trackWidth = self.itemWidth * self.items.length;
    self.track.style.width = self.trackWidth + "px";
    self.items.forEach(function(item) {
      return self.track.appendChild(item);
    });
    var trackHolder = document.createElement("div");
    trackHolder.className = "ec__holder";
    trackHolder.appendChild(self.track);
    self.wrapper.appendChild(trackHolder);
    return true;
  } // Atualiza a UI

  function updateUI(self) {
    self.wrapperWidth = self.wrapper.clientWidth;
    self.itemWidth = parseInt(self.wrapperWidth / self.settings.items);
    self.trackWidth = self.itemWidth * self.items.length;
    self.track.style.width = self.trackWidth + "px";
    self.items.forEach(function(item) {
      return (item.style.width = self.itemWidth + "px");
    });
  } // Adiciona os eventos

  function setupEvents(self) {
    // Eventos da window
    window.addEventListener("resize", function() {
      return updateUI(self);
    }); // Eventos da track

    self.track.addEventListener("transitionstart", function() {
      self.isEnd =
        Math.abs(self.trackPosition) ===
        self.trackWidth - self.itemWidth * self.settings.step;
    });
    self.track.addEventListener("transitionend", function() {
      if (self.items.length !== 1) {
        self.isEnd =
          Math.abs(self.trackPosition) ===
          self.trackWidth - self.itemWidth * self.settings.items;
        if (self.isEnd) setTrackStartPosition(self);
        self.isStart = Math.abs(self.trackPosition) === 0;
        if (self.isStart) setTrackEndPosition(self);
      }

      self.navDisabled = false;
    });
  } // Cria os botões de navegação

  function createNavs(self) {
    var prevNav, nextNav; // Seta de navegação esquerda

    prevNav = self.settings.prevNav || document.createElement("div");
    prevNav.className = "ec__nav ec__nav--prev";
    prevNav.setAttribute("role", "button");
    prevNav.setAttribute("disabled", "true");
    prevNav.addEventListener("click", function() {
      if (self.navDisabled) return;
      self.navDisabled = true;
      self.prev();
    }); // Seta de navegação direita

    nextNav = self.settings.nextNav || document.createElement("div");
    nextNav.className = "ec__nav ec__nav--next";
    nextNav.setAttribute("role", "button");
    nextNav.addEventListener("click", function() {
      if (self.navDisabled) return;
      self.navDisabled = true;
      self.next();
    });
    self.wrapper.appendChild(prevNav);
    self.wrapper.appendChild(nextNav);
  }

  function debounce(fn, ms) {
    var timer = 0;
    return function() {
      clearTimeout(timer);

      for (
        var _len = arguments.length, args = new Array(_len), _key = 0;
        _key < _len;
        _key++
      ) {
        args[_key] = arguments[_key];
      }

      timer = setTimeout(fn.bind.apply(fn, [this].concat(args)), ms || 0);
    };
  }

  // function createPagination(self) {
  //   var paginationWrapperEl = document.createElement("div");
  //   paginationWrapperEl.className = "ec__pagination";
  //   var dotsLength = self.items.length / self.settings.items;

  //   var _loop = function _loop(i) {
  //     var dot = document.createElement("div");
  //     dot.className = "pagination__dot";
  //     var index = i * self.settings.items;
  //     dot.addEventListener("click", function() {
  //       self.goTo(index);
  //     });
  //     paginationWrapperEl.appendChild(dot);
  //   };

  //   for (var i = 0; i < dotsLength; i++) {
  //     _loop(i);
  //   }

  //   self.wrapper.appendChild(paginationWrapperEl);
  // }

  function updatePagination(self) {
    var PAGE_DISTANCE = self.settings.items * self.itemWidth;

    if (Math.abs(self.trackPosition) % PAGE_DISTANCE === 0) {
      var index = Math.abs(self.trackPosition) / PAGE_DISTANCE;
      var paginationDotsNodeList = self.wrapper.querySelectorAll(
        ".pagination__dot"
      );
      var dots = Array.from(paginationDotsNodeList);
      dots.forEach(function(dot) {
        return dot.classList.remove("pagination__dot--active");
      });
      dots[index].classList.add("pagination__dot--active");
    }
  }

  function setTrackStartPosition(self) {
    if (self.items.length === 1) {
      self.trackPosition = 0;
    } else {
      self.startPosition =
        (self.settings.start + self.settings.items) * self.itemWidth;
      self.trackPosition = self.startPosition * -1;
    }

    setTrackPosition(self);
  }

  function setTrackEndPosition(self) {
    console.log(self);
    self.endPosition =
      Math.abs(self.trackPosition) -
      self.itemWidth * (self.settings.items * 2 + 1);

    self.trackPosition = self.endPosition;
    setTrackPosition(self);
  }

  function setTrackPosition(self) {
    console.log(self);
    var firstItemClone = self.items[0];
    // var firstItemClone = self.firstItem.cloneNode(true);
    self.track.style.transitionProperty = "none";
    self.track.appendChild(firstItemClone);
    self.track.style.transform = "translate3d(".concat(
      self.trackPosition,
      "px,0,0)"
    );
  }

  function loop(self) {
    console.log("loop function start");
    // var firstItemClone = self.firstItem.cloneNode(true);
    firstItemClone.classList.add("cloned");
    self.items.push(firstItemClone);

    updateUI(self);
    move(self);
  }

  ElderCarousel.defaults = {
    selector: "",
    items: 5,
    step: 1,
    speed: 300,
    start: 0,
    pagination: false,
    navs: false,
    loop: true,
    play: true,
    playInterval: 100000
  };
  window.ElderCarousel = ElderCarousel;
})();
//# sourceMappingURL=index.min.js.map
let elderCarouselItems = 5;
if (window.innerWidth < 900) {
  elderCarouselItems = 3;
}
if (window.innerWidth < 600) {
  elderCarouselItems = 1;
}

new ElderCarousel(".carousel-multiple-items", {
  items: elderCarouselItems
});

/*=======================================
// "Lightbox Gallry" Progremo module
/*=======================================*/
const slider_section6 = document.querySelector(".slider_section6");
if (slider_section6) {
  // Variable declarations

  const lightbox = document.querySelector(".LigthboxContent img"),
    lightboxCon = document.querySelector(".lighbox_container"),
    backdrop = document.querySelector(".backdrop"),
    loader = document.querySelector("#loader"),
    close = document.querySelector(".lighbox_container .close"),
    backdrop2 = document.querySelector(".backdrop2"),
    prev = document.querySelector(".lightbox_cont_prev"),
    next = document.querySelector(".lightbox_next"),
    fotoList = [];

  let activeLightbox = 0,
    xDown = null,
    yDown = null,
    url = null;

  //Generate Gallery
  const caroGallery_items = document.querySelectorAll(
    ".slider_section6 .item_box_container"
  );
  caroGallery_items.forEach(caroGallery_item => {
    let imgFullUrl = caroGallery_item.getAttribute("data-imgFullUrl");
    fotoList.push(imgFullUrl);
    caroGallery_item.addEventListener("click", function() {
      let imageID = caroGallery_item.getAttribute("data-id");
      openLighbox(imageID, imgFullUrl);
    });
  });

  // NVIGATION MOUSE EVENTS LISTENER
  close.addEventListener("click", function() {
    closeLightbox();
  });
  backdrop2.addEventListener("click", function() {
    closeLightbox();
  });
  prev.addEventListener("click", function() {
    prevLightbox();
  });
  next.addEventListener("click", function() {
    nextLightbox();
  });

  // KEYBOARD EVENTS LISTENER

  window.addEventListener("keydown", function(event) {
    var key = event.key || event.keyCode;
    if (key === "Escape" || key === "Esc" || key === 27) {
      closeLightbox();
    }

    if (key === "ArrowLeft" || key === 37 || key === "Left") {
      prevLightbox();
    }

    if (key === "ArrowRight" || key === 39 || key === "Right") {
      nextLightbox();
    }
  });

  // TOUTCH EVENTS LISTENER

  document.addEventListener("touchstart", handleTouchStart, false);
  document.addEventListener("touchmove", handleTouchMove, false);

  function handleTouchStart(evt) {
    xDown = evt.touches[0].clientX;
    yDown = evt.touches[0].clientY;
  }

  function handleTouchMove(evt) {
    if (!xDown || !yDown) {
      return;
    }

    var xUp = evt.touches[0].clientX;
    var yUp = evt.touches[0].clientY;

    var xDiff = xDown - xUp;
    var yDiff = yDown - yUp;

    if (Math.abs(xDiff) > Math.abs(yDiff)) {
      if (xDiff > 0) {
        prevLightbox();
      } else {
        nextLightbox();
      }
    }

    xDown = null;
    yDown = null;
  }

  // Open lighbox function
  function openLighbox(i, url) {
    activeLightbox = i;
    lightbox.setAttribute("src", url);
    backdrop.setAttribute("style", "visibility:visible;opacity:0.9");
    setTimeout(function() {
      lightboxCon.setAttribute("style", "transform:scale(1);");
    }, 1000);
  }

  // Close lighbox function
  function closeLightbox() {
    backdrop.removeAttribute("style", "visibility:visible;opacity:1");
    lightboxCon.removeAttribute("style", "transform:scale(1);");
    setTimeout(function() {
      lightbox.removeAttribute("src");
    }, 1000);
  }

  // Prev lighbox function
  function prevLightbox() {
    activeLightbox--;
    if (activeLightbox < 0) {
      activeLightbox = fotoList.length - 1;
    }
    url = fotoList[activeLightbox];
    loader.setAttribute("style", "opacity:1!important");
    prgrmLoader();
  }

  // Next lighbox function
  function nextLightbox() {
    activeLightbox++;
    if (activeLightbox > fotoList.length - 1) {
      activeLightbox = 0;
    }
    url = fotoList[activeLightbox];
    loader.setAttribute("style", "opacity:1!important");
    prgrmLoader();
  }

  // Loader function
  function prgrmLoader() {
    const objImg = new Image();
    objImg.src = url;
    objImg.onload = function() {
      lightbox.setAttribute("src", url);
      setTimeout(function() {
        loader.removeAttribute("style", "opacity:1!important");
      }, 500);
    };
  }
}

/*=======================================
// "Lightbox Gallry" Progremo module end
/*=======================================*/
