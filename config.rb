# Require any additional compass plugins here.

# Set this to the root of your project when deployed:
http_path = "../"
css_dir = "dist/css"
sass_dir = "_build/sass"
images_dir = "dist/images"
javascripts_dir = "dist/js"
fonts_dir = "dist/css/fonts"

# Set the images directory relative to your http_path or change
# the location of the images themselves using http_images_path:
# http_images_path = "../images"

# You can select your preferred output style here (can be overridden via the command line):
# output_style = :expanded or :nested or :compact or :compressed
# environment = :development
# output_style = :expanded

# To enable relative paths to assets via compass helper functions. Uncomment:
 relative_assets = true

# To disable debugging comments that display the original location of your selectors. Uncomment:
 line_comments = false

sourcemap = true

# If you prefer the indented syntax, you might want to regenerate this
# project again passing --syntax sass, or you can uncomment this:
# preferred_syntax = :sass
# and then run:
# sass-convert -R --from scss --to sass sass scss && rm -rf sass && mv scss sass


# Edit the project configuration file and add:
require 'ceaser-easing'
require 'bootstrap-sass'
# require 'compass/import-once/activate'

Encoding.default_external = 'utf-8'