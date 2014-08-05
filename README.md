
# Brag Sheet

An AnchorCMS theme for designers, artists, and dreamers.

### Features
* Responsive, mobile-ready 
* Drawer navigation 
* Alerts & calls to action
* Sophisticated hover effects
* Rich typography & icon fonts (Icomoo)
* Mixitup gallery for art, photos, and your wildest visuals: https://mixitup.kunkalabs.com/
* Unobtrusive sticky footer
* Joyous UX!

### Extra slaw
* Sass
* Bourbon & Neat
* MixItUp jQuery plugin

### Upcoming - pending Anchor 1.0 release
* Plugin support
* Publish to social media
* Pleasing custom palette-picker: http://www.checkman.io/please/ 
* Per-page & per-article custom fields
* More page templates/components: price tables, accordion, forms

#### Requires:
1. Anchor CMS 0.9  [Install Anchor CMS](http://anchorcms.com/docs/getting-started/installing "Anchor CMS - simple, lightweight blod system")
2. Sass 3.3.* [Install Sass](http://sass-lang.com/install "SASS - CSS with superpowers")
3. Bourbon 3.2.* [Install Bourbon](http://bourbon.io "A mixin library for Sass")
4. Neat 1.5.* [Install Neat](http://neat.bourbon.io "A semantic grid framework")
* jQuery (included in header.php)
* jQuery.mixitup (portfolio.php grid)
* jQuery.cookie (saves alert dismiss state, might do more stuff in the future

#### Installation
1. After verifying that your Anchor CMS instance is working, download & unzip to `anchor-install-path/themes/`
2. Log into Anchor CMS admin panel, Extend, Appearance section, set Current Theme to Brag Sheet. 
3. Create site variables & custom fields
	1. In the Extend section, select Custom Field. Create a new field with the following options: 
			Type: post
			Field: image
			Unique Key: thumbnail
			Label: Your choice - I suggest article thumbnail 200x200
			File types: .png, .gif, .jpg
			Image max width: 200
			Image max height: 200

### Usage
1. Icon fonts by [IcoMoon](https://icomoon.io "Icomoon")
	1. Download & unzip to brag-sheet/fonts
	2. Add includes styles.css to _icons.scss 
	3. Declare `class="icon-name"` on element in HTML or `content: "\symbol-code"` in SASS. 
	4. I recommend adding your icons in addition to mine (rather than substituting) if you're not sure what you're doing.
2. `screen.scss` contains global imports & styles, which are written to `screen.css`
3. `page-$name.scss` is the convention for page templates; e.g. page-about.css contains all styles for page-about.php
4  `_variables.scss` contains style variables. Variable names usually describe styled element e.g. $comment-color, $comment-color-focus, $link, $link-hover.
5. Drawer navigation requires all content to be nested between `<main></main>` tags, which open in header.php and close in footer.php. 
6. Call to action styles are located in _footer.scss & footer.php. Drawer & header styles can be found in _header.scss (although some related markup unexpectedly lives in footer.php, rather than header.php)
7. `posts.scss` & `posts.php` control the blog roll, likewise `article.scss` & `article.php` control individual post views.
8. `page-portfolio.php` items require the following:
	* MixItUp target element: `.portfolio-item`
	* Lightbox caption: `figcaption h2` & `figcaption .fig-description`
