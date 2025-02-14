=== CPS | Before / After Images ===
Contributors: CherryPickStudios, Surbma
Donate link: https://surbma.com/donate/
Tags: surbma, before, after, image, picture, before after, compare
Requires at least: 5.5
Tested up to: 6.7
Requires PHP: 7.4
Stable tag: 2.2
License: GPLv2
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Simply add a before / after image to any WordPress website.

== Description ==

With this plugin, you can display two similar images in one frame with a bar in the middle. So visitors can see the difference by moving the bar from left to right. Typical usecase is, when you want to show a "before-after" state with two images.

The shortcode: `[surbma-before-after before_src="" before_alt="" after_src="" after_alt="" with="" height=""]`

Parameters:

- before_src: This is the URL of the left image. REQUIRED
- before_alt: This is the ALT attribute of the left image.
- after_src: This is the URL of the right image. REQUIRED
- after_alt: This is the ALT attribute of the right image.
- with: This is the width of the image.
- height: This is the height of the image.

Only the two src parameters are required, the rest of them are optional.

**Do you want to contribute or help improving this plugin?**

You can find it on GitHub: [https://github.com/Surbma/surbma-before-after](https://github.com/Surbma/surbma-before-after)

**You can find my other plugins and projects on GitHub:**

[https://github.com/Surbma](https://github.com/Surbma)

Please feel free to contribute, help or recommend any new features for my plugins, themes and other projects.

**Do you want to know more about me?**

Visit my webpage: [Surbma.com](https://surbma.com/)

== Installation ==

1. Upload `surbma-before-after` folder to the `/wp-content/plugins/` directory
2. Activate the Surbma - Before / After Images plugin through the 'Plugins' menu in WordPress
3. That's it. Now you can use the shortcodes. :)

== Frequently Asked Questions ==

= What does Surbma mean? =

It is the reverse version of my last name. ;)

== Changelog ==

= 2.2 =

Release date: 2025-01-01

FIX

- Changed textdomain hook to init.
- Security fix for shortcode: parameters are properly escaped.

OTHER

- Code optimizations.

= 2.1 =

Release date: 2020-09-15

FIX

- Fixes jQuery call, so it is compatible with latest versions of WordPress (5.5) and jQuery.

TWEAK

- Checked compatibility with the latest version of WordPress.
- Changed minimum WordPress version and PHP requirements.

= 2.0 =

Release date: 2019-07-19

With this version, the plugin is rebranded to CherryPick Studios or CPS with the short version. CherryPick Studios is created by me, Surbma, so everything is the same, but better. :)

NEW

- Plugin author and contributor has changed to CherryPick Studios.

TWEAK

- Checked compatibility with the latest version of WordPress.

= 1.4 =

- NEW - Plugin name change.

= 1.3 =

- TWEAK - Modified description and name symbols.

= 1.2 =

- TWEAK - Simple versioning.
- TWEAK - Modified description and name symbols.

= 1.1.0 =

- Updated scripts and styles.
- Added more description.
- Code optimization.

= 1.0.0 =

- Initial release.
