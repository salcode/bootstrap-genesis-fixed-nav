Bootstrap Genesis Fixed Nav Plugin
==================================

Plugin to make the primary nav fixed.  Requires the Bootstrap Genesis theme.

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
