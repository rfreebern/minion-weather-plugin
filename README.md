# Minion Weather Plugin

Minion, is it nice outside?

## Installation

* `cd` to your minion base directory.
* `git clone https://github.com/rfreebern/minion-weather-plugin.git plugins/Weather`
* Edit `config.php` to add `$this->PluginConfig['Weather'] = [];` in the appropriate location.
* Restart minion.

## Usage

`!weather <location>`

### Examples

* `!weather burlington vt`
* `!weather ivano-frankivsk, ukraine`
* `!weather lax`
* `!weather ~Eiffel Tower`

## Credits
This uses https://wttr.in directly.
