Tag Enabler
***********
BY GIACOMO FURLAN

This Ionize module allows the website to render a theme's custom view for tags. For tags I mean the ones you set in the article's editor under Options -> Attributes -> Tags.

Ionize's <tag:url /> points to [/LANG]/tag/[TAG_NAME], which will render the default view (home page). This module intercepts this route and shows the theme's view.

It's a very simple module with no backend, but works, at least with the following tested tags (others may work as well):

- \<ion:article>
- \<ion:home_url />
- \<ion:media>
- \<ion:meta_title />
- \<ion:navigation />
- \<ion:tag>
- \<ion:theme_url />

LICENCE
*******
[Creative Commons Attribution-ShareAlike 4.0 International (CC BY-SA 4.0)](http://creativecommons.org/licenses/by-sa/4.0/deed.en "CC BY-SA 4.0")

HOW TO USE THIS MODULE
**********************

1. place the Tag_enabler folder in the Ionize's modules one.
2. enable the module via the backend, being sure the URI is set to "tag" (should be as default).
3. create a view called tag.php in your current theme and write it as a normal view.

TODO
****
Please feel free to fork this project in order to make it better.

1. create a backend
2. (backend) a cool icon <-- essential!
3. (backend) page name (now it's hardcoded as Tag - [TAG_NAME])
4. (backend) theme's custom view choice (instead of hardcoded tag.php)