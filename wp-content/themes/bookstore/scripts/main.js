(function ( $ ) {

class App {

  static initializeApp = () => {
    Home.initializeHome();
    App.handleScrollButtons();
    Shop.initializeShop();
  };

  static handleScrollButtons = () => {
    const $ScrollButtons = $( '.scroll-btn' );

    $ScrollButtons.on( 'click', function( evt ) {
      $("html, body").animate({ scrollTop: $($(this).attr('href')).offset().top }, 1000);

    });
  }

}

class Home {

  static activePosition = 0;

  static initializeHome = () => {
    Home.Favorites.Gallery.initialize();
  };

  static Favorites = {
    Gallery: {
      constants: {
        cardGap: 24,
        cardWidth: 320,
      },
      container: $('.cards'),
      cards: $('.favorites .gallery .cards .card'),
      initialize: () => {
        Home.Favorites.Gallery.assignPositions();
        Home.Favorites.Gallery.setWrapperWidth();
        Home.Favorites.Gallery.setPosition( Home.activePosition );
        Home.Favorites.Gallery.galleryControls();
      },
      assignPositions: ( options = { debug: false } ) => {
        const { cards } = Home.Favorites.Gallery;

        cards.hasClass('active') && cards.removeClass( 'active' );

        cards.each( ( index, card ) => {
          const number = ( index + 1 ) / 3;

          options.debug && console.log( `Gallery setup loop element :: `, card);

          if ( number % 1 === 0 ) {
            $(cards[index]).attr( 'data-position', number );
            $(cards[index - 1]).attr( 'data-position', number );
            $(cards[index - 2]).attr( 'data-position', number )
          }

          if ( Home.activePosition === ( number - 1 ) ) {
            $(cards[index]).addClass( 'active' );
            $(cards[index - 1]).addClass( 'active' );
            $(cards[index - 2]).addClass( 'active' );
          }

        } )
      },
      setWrapperWidth: () => {
        const { container, cards, constants: { cardGap, cardWidth } } = Home.Favorites.Gallery;

        container.width( cards.length * ( cardWidth + ( cardGap * 2 ) ) )
      },
      setPosition: ( position, direction ) => {
        const { cards, constants: { cardWidth, cardGap } } = Home.Favorites.Gallery;
        const windowWidth = $('body').width();
        const cardSpace = ( 2 * cardGap ) + cardWidth;
        const activeSpace = 3 * cardSpace;
        const bodyOffset = ( windowWidth - activeSpace ) / 2;
        const positionOffset = bodyOffset + ( position * activeSpace );

        console.log( `position ::`, -position );
        console.log( `windowWidth ::`, windowWidth );
        console.log( `cardSpace ::`, cardSpace );
        console.log( `activeSpace ::`, activeSpace );
        console.log( `bodyOffset ::`, bodyOffset );
        console.log( `positionOffset ::`, positionOffset );

        cards.hasClass('active') && cards.removeClass( 'active' );

        if( direction === 'right' ) {
          cards.each( ( index, card ) => {
            setTimeout( () => {
              $(card).css( {
                'left': positionOffset
              } )
            }, index * 50 );

            const number = ( index + 1 ) / 3;

            console.log( `number ::`, number );

            if ( -position === number - 1 ) {

              $(cards[index]).addClass( 'active' );
              $(cards[index - 1 ]).addClass( 'active' );
              $(cards[index - 2 ]).addClass( 'active' );
            }
          } )
        } else {
          $(cards.get().reverse()).each( ( index, card ) => {
            setTimeout( () => {
              $(card).css( {
                'left': positionOffset
              } )
            }, index * 30 );

            const number = ( index + 1 ) / 3;

            if ( -position === ( number - 1 ) ) {

              $(cards[index]).addClass( 'active' );
              $(cards[index - 1 ]).addClass( 'active' );
              $(cards[index - 2 ]).addClass( 'active' );
            }
          } )
        }
      },
      updatePosition: ( position, direction ) => {
        const { setPosition } = Home.Favorites.Gallery;

        setPosition( position, direction );
        Home.activePosition = position;
      },
      galleryControls: () => {
        const { updatePosition } = Home.Favorites.Gallery;
        const arrows = {
          left: $('svg.left'),
          right: $('svg.right')
        };

        arrows.left.on( 'click', () => updatePosition( Home.activePosition + 1, 'left' ) );
        arrows.right.on( 'click', () => updatePosition( Home.activePosition - 1, 'right' ) )
      }
    }
  }

}

class Shop {

  static _LOCALE = {
    search: {
      placeholder: 'Czego szukasz?'
    }
  }

  static initializeShop = () => {
    Shop.setSearchPlaceholder(Shop._LOCALE.search.placeholder);
  }

  static setSearchPlaceholder = (string, options = { debug: false }) => {
    const searchField = $('.search-field');

    if(options.debug) {
      console.log( '==> Shop.setSearchPlaceholder |> function data :: ', { string: string, searchField: searchField } );  
    }

    searchField.attr('placeholder', string);
  }

}

App.initializeApp();




})( window.$ );
