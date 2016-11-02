<?php

class Library {

    public function eightBall() {
        $options = array(
            "<b>Without a doubt<b>",
            "<center>As I see it, yes</center>",
            "<h3>Most likely<h3>",
            "<b>Reply hazy, try again<b>",
            "<h1>Better not tell you now<h1>",
            "<center>Concentrate and ask again</center>",
            "<center><b>Don't count on it</b></center>",
            "<h2>Very doubtful</h2>");

        return $options[array_rand($options)];
    }
}
