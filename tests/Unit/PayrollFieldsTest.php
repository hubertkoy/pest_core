<?php
test('validator returns an array of errors when validation fails for title input', function () {
    $is_valid = Validator::is_valid(['title' => 'title'], ['title' => 'max_len,4']);
    expect($is_valid)->toBeArray();
});