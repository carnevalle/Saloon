<?php

declare(strict_types=1);

namespace Saloon\Helpers;

final class MockConfig
{
    /**
     * Default fixture path
     *
     * @var string
     */
    private static string $fixturePath = 'tests/Fixtures/Saloon';

    /**
     * Denotes if an exception should be thrown if a fixture is missing.
     *
     * @var bool
     */
    private static bool $throwOnMissingFixtures = false;

    /**
     * Denotes if e-mails in responses should be obfuscated when recording fixtures.
     *
     * @var bool
     */
    private static bool $obfuscateEmails = false;

    /**
     * Set the fixture path
     *
     * @param string $path
     * @return void
     */
    public static function setFixturePath(string $path): void
    {
        self::$fixturePath = $path;
    }

    /**
     * Throw an exception if a fixture doesn't exist instead of recording it.
     *
     * @return void
     */
    public static function throwOnMissingFixtures(): void
    {
        self::$throwOnMissingFixtures = true;
    }

    /**
     * Return the fixture path
     *
     * @return string
     */
    public static function getFixturePath(): string
    {
        return self::$fixturePath;
    }

    /**
     * Should we throw an exception if a fixture is missing?
     *
     * @return bool
     */
    public static function isThrowingOnMissingFixtures(): bool
    {
        return self::$throwOnMissingFixtures;
    }

    /**
     * Obfuscate e-mails in responses when recording fixtures
     *
     * @return void
     */
    public static function obfuscateEmails(): void
    {
        self::$obfuscateEmails = true;
    }

    /**
     * Should we obfuscate e-mails in fixtures?
     *
     * @return bool
     */
    public static function shouldObfuscateEmails(): bool
    {
        return self::$obfuscateEmails;
    }
}
