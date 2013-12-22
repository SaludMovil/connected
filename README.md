## Connected
---
**master:** [![Build Status master](https://api.travis-ci.org/desyncr/connected.png?branch=master)](http://travis-ci.org/desyncr/connected) |
**development:** [![Build Status development](https://api.travis-ci.org/desyncr/connected.png?branch=development)](http://travis-ci.org/desyncr/connected)

Zend2 module for realtime and persistent communications/notifications. Currently supporting [ZeroMQ][4] and Doctrine.

## Installation

Recommended installation method is through composer:

    composer require desyncr/connected dev-master

## Configuration

Register the module in the main application: `config/application.config.php`

    'modules' => array(
        ...
        'Desyncr\\Connected'
        ...
    )

## Feedback

If you'd like to contribute to the project or file a bug or feature request, please visit [the project page][1].

## License

The project is licensed under the [GNU GPL v3][2] ([tldr][3]) license. Which means you're allowed to copy, edit, change, hack, use all or any part of this project *as long* as all of the changes and contributions remains under the same terms and conditions.

  [1]: https://github.com/desyncr/wtngrm/
  [2]: http://www.gnu.org/licenses/gpl.html
  [3]: http://www.tldrlegal.com/license/gnu-general-public-lic
  [4]: http://zeromq.org/
