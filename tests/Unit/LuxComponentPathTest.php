<?php

use Lux\Lux;

it('returns empty string when no subdir and no component', function () {
    config()->set('lux.subdir', '');
    expect(app(Lux::class)->componentPath())->toBe('');
});

it('returns component name when no subdir', function () {
    config()->set('lux.subdir', '');
    expect(app(Lux::class)->componentPath('button'))->toBe('.button');
});

it('returns subdir when set and no component', function () {
    config()->set('lux.subdir', 'lux');
    expect(app(Lux::class)->componentPath())->toBe('lux');
});

it('returns subdir.component when both set', function () {
    config()->set('lux.subdir', 'lux');
    expect(app(Lux::class)->componentPath('button'))->toBe('lux.button');
});
