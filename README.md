# Rapid Springs WordPress Starter Theme

Based from the Underscores theme, but modified to use Bourbon, Neat and Bitters along with Gulp for Sass preprocessing, autoprefixer, concatenation and livereload.

## Getting Started

1. Set up your wp-config.php file to point to your database with the correct credentials.
2. Install Dependencies by running 'npm install' from the terminal cd'ed to the theme directory.
3. If you haven't run gulp before, run `npm install -g gulp` to install to your computer
4. Run `gulp` in terminal to compile the Sass files, minify scripts, etc.

To use Livereload, run `gulp watch` then click the Chrome Extension button for Livereload. Any changes to your files will instantly show up in your browser on save.


## Gulp Commands

`gulp` runs gulp to build for dev

`gulp build` builds for production (standard tasks + uglify)

`gulp watch` auto compile Sass and Javascript files on save with livereload.
