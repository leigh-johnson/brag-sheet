
# Brag Sheet

### An AnchorCMS theme for designers, artists, and dreamers.

#### Features
* Responsive, mobile-ready 
* Drawer navigation 
* Beautiful preset palettes
* Sophisticated hover effects
* Rich typography & icon fonts (Icomoo)
* Mixitup gallery for art, photos, and your wildest visuals: https://mixitup.kunkalabs.com/
* Publish to social media
* Unobtrusive sticky footer
* Joyous UX!


#### Extra slaw
* Sass
* Bourbon & Neat
* Please.JS - a color generator based on the golden ratio
* MixItUp jQuery plugin

#### Upcoming - pending Anchor 1.0 release
* Plugin support
* Pleasing custom palette-picker: http://www.checkman.io/please/ 
* Per-page & per-article custom fields
* More page templates/components: price tables, accordion, forms

#### To-do
* Better documentation
* Make SCSS sheets modular, so extra styles aren't being loaded unnecessarily

#### Installation
##### Requires:
* Anchor CMS installation: http://anchorcms.com/docs/getting-started/installing
* Sass 3.3.*
* Bourbon 3.2.*
* Neat 1.5.*
* jQuery (included in header.php)
* jQuery.mixitup (portfolio.php grid)
* jQuery.cookie (saves alert dismiss state, might do more stuff in the future)


#### Usage
* Icon fonts by IcoMoon: include class="icon-x" with element
* screen.scss -> screen.css // Contains global styles, grid system, variables, and mixins
* page-$name.scss -> page-$name.css // Modular styles for page templates; e.g. page-about.css contains all styles for page-about.php
* _variables.scss // Contains style variables. Variable names describe styled element e.g. $comment-color, $comment-color-focus, $link, $link-hover.
* Drawer navigation requires all content to be nested between <main> tags, which open in header.php and close in footer.php. 
* Call to action styles are located in _footer.scss & footer.php
* To swap between preset color palettes...
