<?php

namespace App\Services;

use App\Models\User;

class UserRegistry
{
    private static $users = [
        ['id' => 1, 'name' => 'Alice', 'email' => 'alice@example.com'],
        ['id' => 2, 'name' => 'Bob', 'email' => 'bob@example.com']
    ];

    public static function getAllUsers(): array
    {
        return array_map(function ($user) {
            return new User($user['id'], $user['name'], $user['email']);
        }, self::$users);
    }
}