<?php

use Illuminate\Support\Facades\Storage;

test('public disk files can be served without a storage symlink', function () {
    Storage::fake('public');
    Storage::disk('public')->put('testing/logo.txt', 'served-from-storage');

    $response = $this->get(route('public.storage', ['path' => 'testing/logo.txt']));

    $response->assertOk();
    expect($response->streamedContent())->toBe('served-from-storage');
});

test('missing public disk files return a not found response', function () {
    Storage::fake('public');

    $this->get(route('public.storage', ['path' => 'testing/missing.txt']))
        ->assertNotFound();
});
