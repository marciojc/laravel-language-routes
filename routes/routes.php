<?php

$locale = Request::segment(1);

if (in_array($locale, Config::get('app.locales'))) {
  App::setLocale($locale);
} else {
  App::setLocale(Config::get('app.locale'));
}
