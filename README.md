friendlysite
============

## Technology

###Jeet
The friendly site uses [jeet.gs](http://www.jeet.gs) almost exclusively for layout and column structuring. Make sure that jeet isn't able to posistion something the way you want before adding something new to the codebase. Jeet's creator, [Cory Simmons](https://github.com/corysimmons) is very active on [twitter](https://twitter.com/ccccory) and is usally very helpful when it comes to solving problems in Jeet.

###Typed.JS
The Typing Animation comes from Matt Boldt's [Typed.js](..mattboldt/typed.js/). This is a relatively new plugin so check his repo sporadically to see if he's fixed any errors or added features.

###SASS
All of the CSS is written in [SASS](http://sass-lang.com/) using the SCSS syntax (Sassy CSS). As tempting as it may be to just open up the CSS file and drop some changes, doing so will make the source files difficult to maintain. So whenever you need to change the stylesheet do it in SASS.

##Best Practices

###SASS
There are some exceptions to this but in general the site keeps a very semantic markup for HTML and keeps styling syntax in CSS (or SASS rather). The site tries only to use classes when necessary and attempts to keep id usage to an absolute minimum (at least in the new codebase). So unlike in bootstrap where they create classes to handle quick styling, i.e. `<div class="large-col-10 center">`, the friendly site highly utilizes advance CSS selectors to control styling while keeping the code very dry.

