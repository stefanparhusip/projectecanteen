<?php

namespace App\Services;

use App\Models\User;

/**
 * Thin wrapper around the Sentry SDK.
 *
 * Injecting this class (rather than calling \Sentry\* directly) means it can
 * be swapped for a mock in PHPUnit tests without touching global state.
 */
class SentryService
{
    public function isEnabled(): bool
    {
        return ! empty(config('sentry.dsn'));
    }

    /**
     * Capture a throwable and send it to Sentry.
     *
     * @return string|null Sentry event ID, or null when Sentry is disabled.
     */
    public function capture(\Throwable $exception): ?string
    {
        if (! $this->isEnabled()) {
            return null;
        }

        $id = \Sentry\captureException($exception);

        return $id ? (string) $id : null;
    }

    /**
     * Capture a plain message at the given severity level.
     *
     * @return string|null Sentry event ID, or null when Sentry is disabled.
     */
    public function captureMessage(string $message, ?\Sentry\Severity $severity = null): ?string
    {
        if (! $this->isEnabled()) {
            return null;
        }

        $id = \Sentry\captureMessage($message, $severity ?? \Sentry\Severity::info());

        return $id ? (string) $id : null;
    }

    /** Attach the authenticated user to subsequent Sentry events. */
    public function setUserContext(User $user): void
    {
        if (! $this->isEnabled()) {
            return;
        }

        \Sentry\configureScope(function (\Sentry\State\Scope $scope) use ($user): void {
            $scope->setUser([
                'id' => $user->id,
                'name' => $user->name,
                'email' => $user->email,
                'role' => $user->role,
            ]);
        });
    }

    /** Add arbitrary key/value extra context to the current scope. */
    public function addContext(string $key, mixed $value): void
    {
        if (! $this->isEnabled()) {
            return;
        }

        \Sentry\configureScope(function (\Sentry\State\Scope $scope) use ($key, $value): void {
            $scope->setExtra($key, $value);
        });
    }
}
