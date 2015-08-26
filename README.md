Bootstrap Genesis Fixed Nav Plugin
==================================

Plugin to make the primary nav fixed.  Requires the Bootstrap Genesis theme.

Disable Plugin CSS
--------------------------

You can include the CSS directly in your theme file and disable the plugin CSS.
The advantage to this method is you eliminate an asset load improving site
load time.

### Add this to functions.php to disable the plugin CSS

```
add_filter( 'bootstrap_genesis_fixed_nav_load_css', '__return_false' );
```

Fix Anchor Tag Link Scroll
--------------------------

With a fixed nav, a common problem is anchor tags that cause the page to
scroll result in the target displaying behind the fixed nav.

Please install the WebDevStudios plugin
[Hash Link Scroll Offset](https://github.com/WebDevStudios/Hash-Link-Scroll-Offset)
which addresses this problem by using JavaScript smooth scrolling and
an offset to avoiding hiding the content behind the fixed nav.

This offset varies depending on whether or not the admin bar is being displayed.
This plugin, Bootstrap Genesis Fixed Nav, applies a filter to set two different
values for the scroll offset (one for with and one for without the admin bar).

If you modify the height of your nav, you will need to change these values
in the plugin.

Change Log
--------------------------

### [1.1.0][2015-08-26]
- Add composer.json file
- Add body class .bootstrap-genesis-fixed-nav to target the CSS so it is only
applied when the plugin is active. This is relevant when adding the CSS to a
theme in order to reduce asset load
- Add filter to avoid loading CSS - this is useful if the CSS is included
directly in the theme.
- Remove alternate Hash Link Scroll Offset when is_admin_bar_showing() is
true (this is now accomodated in the HLSO plugin)

