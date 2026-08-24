<?php

use App\Notifications\BotStarted;

test('bot started email includes the user and bot details', function () {
    $notification = new BotStarted(
        'Ada Lovelace',
        'ada@example.com',
        'live',
        '250.5',
    );

    $mail = $notification->toMail(new stdClass);

    expect($mail->greeting)->toBe('Hi Admin User,')
        ->and($mail->introLines)->toBe([
            'Ada Lovelace (ada@example.com) just started a bot.',
            'Bot type: Live',
            'Amount: $250.5',
        ]);
});
