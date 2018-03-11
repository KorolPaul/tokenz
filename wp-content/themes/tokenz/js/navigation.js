/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */
( function() {
    var container, button, menu, items, links, i, len, header, social, loginButton, currencies;

    container = document.getElementById( 'site-navigation' );
    if ( ! container ) {
        return;
    }

    button = container.getElementsByTagName( 'button' )[0];
    if ( 'undefined' === typeof button ) {
        return;
    }

    menu = container.getElementsByClassName( 'menu' )[0];

    // Hide menu toggle button if menu is empty and return early.
    if ( 'undefined' === typeof menu ) {
        button.style.display = 'none';
        return;
    }

    menu.setAttribute( 'aria-expanded', 'false' );
    if ( -1 === menu.className.indexOf( 'menu' ) ) {
        menu.className += ' menu';
    }

    button.onclick = function() {
        if ( -1 !== container.className.indexOf( 'toggled' ) ) {
            container.className = container.className.replace( ' toggled', '' );
            button.setAttribute( 'aria-expanded', 'false' );
            menu.setAttribute( 'aria-expanded', 'false' );
        } else {
            container.className += ' toggled';
            button.setAttribute( 'aria-expanded', 'true' );
            menu.setAttribute( 'aria-expanded', 'true' );
        }
    };

    // Get all the link elements within the menu.menu-item-has-children
    links    = menu.getElementsByTagName( 'a' );

    // Each time a menu link is focused or blurred, toggle focus.
    for ( i = 0, len = links.length; i < len; i++ ) {
        links[i].addEventListener( 'focus', toggleFocus, true );
        links[i].addEventListener( 'blur', toggleFocus, true );
    }

    // Get all the menu item elements
    items    = menu.querySelectorAll( '.menu-item-has-children' );

    // Enable submenu show/hide
    for ( i = 0; i < items.length; i++ ) {
        items[i].addEventListener('click', function(e){
            e.target.classList.toggle('menu-item-opened');
        });
    }

    header = document.querySelector('.header_content');
    social = document.querySelector('.social');
    login = document.querySelector('.login');
    currencies = document.querySelector('.currencies');

    /**
     * Sets or removes .focus class on an element.
     */
    function toggleFocus() {
        var self = this;

        // Move up through the ancestors of the current link until we hit .menu.
        while ( -1 === self.className.indexOf( 'menu' ) ) {

            // On li elements toggle the class .focus.
            if ( 'li' === self.tagName.toLowerCase() ) {
                if ( -1 !== self.className.indexOf( 'focus' ) ) {
                    self.className = self.className.replace( ' focus', '' );
                } else {
                    self.className += ' focus';
                }
            }

            self = self.parentElement;
        }
    }

    /**
     * Check is menu items fit to screen width.
     */
    function checkWidth() {
        if(screen.width >= 992 && window.innerWidth >= 992) {
            var headerWidth = header.offsetWidth - parseInt(window.getComputedStyle(header, null).getPropertyValue('padding-left')) * 2,
                containerWidth = container.offsetWidth,
                socialWidth = social.offsetWidth,
                loginWidth = login.offsetWidth,
                currenciesWidth = currencies.offsetWidth,
                ellipsisWidth = 100;

            if((headerWidth - containerWidth - socialWidth - loginWidth - currenciesWidth - ellipsisWidth) <= 0) {
                var ellipsisItem = document.querySelector('.menu-item__other') || document.createElement('li'),
                    ellipsisLink = document.querySelector('.menu-item__other a') || document.createElement('a'),
                    submenuElement = document.querySelector('.menu-item__other .sub-menu') || document.createElement('ul');

                submenuElement.classList.add('sub-menu');

                ellipsisLink.innerHTML = '...';
                ellipsisItem.classList.add('menu-item');
                ellipsisItem.classList.add('menu-item__other');
                ellipsisItem.appendChild(ellipsisLink);
                ellipsisItem.appendChild(submenuElement);

                menu.appendChild(ellipsisItem);

                var lastMenuElement = menu.children[menu.children.length - 2];
                submenuElement.insertBefore(lastMenuElement, submenuElement.children[0]);

                setTimeout( function(){ checkWidth(); }, 0);
            }
        }
    }

    /**
     * Toggles `focus` class to allow submenu access on tablets.
     */
    ( function( container ) {
        var touchStartFn, i,
            parentLink = container.querySelectorAll( '.menu-item-has-children > a, .page_item_has_children > a' );

        if ( 'ontouchstart' in window ) {
            touchStartFn = function( e ) {
                var menuItem = this.parentNode, i;

                if ( ! menuItem.classList.contains( 'focus' ) ) {
                    e.preventDefault();
                    for ( i = 0; i < menuItem.parentNode.children.length; ++i ) {
                        if ( menuItem === menuItem.parentNode.children[i] ) {
                            continue;
                        }
                        menuItem.parentNode.children[i].classList.remove( 'focus' );
                    }
                    menuItem.classList.add( 'focus' );
                } else {
                    menuItem.classList.remove( 'focus' );
                }
            };

            for ( i = 0; i < parentLink.length; ++i ) {
                parentLink[i].addEventListener( 'touchstart', touchStartFn, false );
            }
        }

        checkWidth();
        window.addEventListener('resize', checkWidth);

    }( container ) );

    var netElement = document.querySelector('.net'),
        netElementStyles = window.getComputedStyle(netElement, null).getPropertyValue('transform');

    document.querySelector('.parallax').addEventListener('mousemove', (e) => {
        var multiplier = 40,
            delta = (window.innerWidth / 2 - e.clientX),
            translate = Math.floor(delta / multiplier);

        netElement.style.transform = netElementStyles + ' translateX(' + translate + 'px)';
    });
} )();
