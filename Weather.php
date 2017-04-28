<?php

namespace Minion\Plugins;

$weather = new \Minion\Plugin(
    'Weather',
    'Minion, is it nice out?',
    'Ryan Freebern <ryan@freebern.org>'
);

return $weather
    ->on('PRIVMSG', function ($data) use ($weather) {
        list ($command, $arguments) = $weather->simpleCommand($data);
        $channel = $data['arguments'][0];

        if ($command == 'weather') {
            $location = filter_var(implode(' ', $arguments), FILTER_SANITIZE_ENCODED);

            $response = shell_exec("curl -s 'wttr.in/$location?1;Q;T' | sed 's/^.\{15\}//' | sed 's/[ \t]*$//' | head -n2 | tr '\n' ' '");
            $weather->Minion->msg($response, $channel);
        }
    });
