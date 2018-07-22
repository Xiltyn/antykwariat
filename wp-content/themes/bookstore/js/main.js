'use strict';

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

(function ($) {
  var App = function App() {
    _classCallCheck(this, App);
  };

  App.initializeApp = function () {
    Home.initializeHome();
    App.handleScrollButtons();
    Shop.initializeShop();
  };

  App.handleScrollButtons = function () {
    var $ScrollButtons = $('.scroll-btn');

    $ScrollButtons.on('click', function (evt) {
      $("html, body").animate({ scrollTop: $($(this).attr('href')).offset().top }, 1000);
    });
  };

  var Home = function Home() {
    _classCallCheck(this, Home);
  };

  Home.activePosition = 0;

  Home.initializeHome = function () {
    Home.Favorites.Gallery.initialize();
  };

  Home.Favorites = {
    Gallery: {
      constants: {
        cardGap: 24,
        cardWidth: 320
      },
      container: $('.cards'),
      cards: $('.favorites .gallery .cards .card'),
      initialize: function initialize() {
        Home.Favorites.Gallery.assignPositions();
        Home.Favorites.Gallery.setWrapperWidth();
        Home.Favorites.Gallery.setPosition(Home.activePosition);
        Home.Favorites.Gallery.galleryControls();
      },
      assignPositions: function assignPositions() {
        var options = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : { debug: false };
        var cards = Home.Favorites.Gallery.cards;


        cards.hasClass('active') && cards.removeClass('active');

        cards.each(function (index, card) {
          var number = (index + 1) / 3;

          options.debug && console.log('Gallery setup loop element :: ', card);

          if (number % 1 === 0) {
            $(cards[index]).attr('data-position', number);
            $(cards[index - 1]).attr('data-position', number);
            $(cards[index - 2]).attr('data-position', number);
          }

          if (Home.activePosition === number - 1) {
            $(cards[index]).addClass('active');
            $(cards[index - 1]).addClass('active');
            $(cards[index - 2]).addClass('active');
          }
        });
      },
      setWrapperWidth: function setWrapperWidth() {
        var _Home$Favorites$Galle = Home.Favorites.Gallery,
            container = _Home$Favorites$Galle.container,
            cards = _Home$Favorites$Galle.cards,
            _Home$Favorites$Galle2 = _Home$Favorites$Galle.constants,
            cardGap = _Home$Favorites$Galle2.cardGap,
            cardWidth = _Home$Favorites$Galle2.cardWidth;


        container.width(cards.length * (cardWidth + cardGap * 2));
      },
      setPosition: function setPosition(position, direction) {
        var _Home$Favorites$Galle3 = Home.Favorites.Gallery,
            cards = _Home$Favorites$Galle3.cards,
            _Home$Favorites$Galle4 = _Home$Favorites$Galle3.constants,
            cardWidth = _Home$Favorites$Galle4.cardWidth,
            cardGap = _Home$Favorites$Galle4.cardGap;

        var windowWidth = $('body').width();
        var cardSpace = 2 * cardGap + cardWidth;
        var activeSpace = 3 * cardSpace;
        var bodyOffset = (windowWidth - activeSpace) / 2;
        var positionOffset = bodyOffset + position * activeSpace;

        console.log('position ::', -position);
        console.log('windowWidth ::', windowWidth);
        console.log('cardSpace ::', cardSpace);
        console.log('activeSpace ::', activeSpace);
        console.log('bodyOffset ::', bodyOffset);
        console.log('positionOffset ::', positionOffset);

        cards.hasClass('active') && cards.removeClass('active');

        if (direction === 'right') {
          cards.each(function (index, card) {
            setTimeout(function () {
              $(card).css({
                'left': positionOffset
              });
            }, index * 50);

            var number = (index + 1) / 3;

            console.log('number ::', number);

            if (-position === number - 1) {

              $(cards[index]).addClass('active');
              $(cards[index - 1]).addClass('active');
              $(cards[index - 2]).addClass('active');
            }
          });
        } else {
          $(cards.get().reverse()).each(function (index, card) {
            setTimeout(function () {
              $(card).css({
                'left': positionOffset
              });
            }, index * 30);

            var number = (index + 1) / 3;

            if (-position === number - 1) {

              $(cards[index]).addClass('active');
              $(cards[index - 1]).addClass('active');
              $(cards[index - 2]).addClass('active');
            }
          });
        }
      },
      updatePosition: function updatePosition(position, direction) {
        var setPosition = Home.Favorites.Gallery.setPosition;


        setPosition(position, direction);
        Home.activePosition = position;
      },
      galleryControls: function galleryControls() {
        var updatePosition = Home.Favorites.Gallery.updatePosition;

        var arrows = {
          left: $('svg.left'),
          right: $('svg.right')
        };

        arrows.left.on('click', function () {
          return updatePosition(Home.activePosition + 1, 'left');
        });
        arrows.right.on('click', function () {
          return updatePosition(Home.activePosition - 1, 'right');
        });
      }
    }
  };

  var Shop = function Shop() {
    _classCallCheck(this, Shop);
  };

  Shop._LOCALE = {
    search: {
      placeholder: 'Czego szukasz?'
    }
  };

  Shop.initializeShop = function () {
    Shop.setSearchPlaceholder(Shop._LOCALE.search.placeholder);
  };

  Shop.setSearchPlaceholder = function (string) {
    var options = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : { debug: false };

    var searchField = $('.search-field');

    if (options.debug) {
      console.log('==> Shop.setSearchPlaceholder |> function data :: ', { string: string, searchField: searchField });
    }

    searchField.attr('placeholder', string);
  };

  App.initializeApp();
})(window.$);
//# sourceMappingURL=main.js.map
