# Text Formatter

This module provides an additional formatter to render values in core fields as
HTML or comma-separated lists. This works with taxonomy terms, entity reference
fields, link fields, and text fields.

For multi-value fields, each field value becomes a list item. For long text
fields, each line becomes a list item.

There is an option to sort if desired, including alphabetical, reverse
alphabetical, and (for taxonomy terms) by term weight.

Text Formatter also provides hooks (see textformatter.api.php) so that other
modules can register and implement listings for their field data. The
textformatter_contrib module provides some implementations. This is bundled
with this module. Currently entityreference, node reference, and link fields
are supported.

## Installation

- Install this module using the official
  [Backdrop CMS instructions](https://backdropcms.org/guide/modules)

## Configuration

There is no special configuration for this module.  You may configure it just as
you would any other field formatter on the "Manage display" tab.

![Text Formatter](https://github.com/backdrop-contrib/textformatter/blob/1.x-1.x/images/textformatter.jpg "Text Formatter Display Settings")

## Issues

Bugs and Feature requests should be reported in the
[Issue Queue](https://github.com/backdrop-contrib/textformatter/issues)

## Current Maintainers

- [Laryn Kragt Bakker](https://github.com/laryn)

## Credits

- Ported to Backdrop CMS by [Laryn Kragt Bakker](https://github.com/laryn).
- Initial Backdrop port was sponsored by [CEDC.org](https://cedc.org).
- Initiated and maintained for Drupal 7 by
  [Damian Lee](https://github.com/damiankloip).
- Originally developed for Drupal 6 by Larry Garfield & Emily Brand
  (Palantir.net).

## License

This project is GPL v2 software. See the
[LICENSE.txt](https://github.com/backdrop-contrib/textformatter/blob/1.x-1.x/LICENSE.txt)
file in this directory for complete text.
