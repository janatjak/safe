<?php

namespace Safe;

/**
 * Defines a named constant at runtime.
 * 
 * @param string $name The name of the constant.
 * @param mixed $value The value of the constant. In PHP 5, value must
 * be a scalar value (integer,
 * float, string, boolean, or
 * NULL). In PHP 7, array values are also accepted.
 * 
 * While it is possible to define resource constants, it is
 * not recommended and may cause unpredictable behavior.
 * @param bool $case_insensitive If set to TRUE, the constant will be defined case-insensitive. 
 * The default behavior is case-sensitive; i.e. 
 * CONSTANT and Constant represent
 * different values.
 * 
 * Case-insensitive constants are stored as lower-case.
 * @throws Exceptions\MiscException
 * 
 */
function define(string $name, $value, bool $case_insensitive = false): void
{
    error_clear_last();
    $result = \define($name, $value, $case_insensitive);
    if ($result === FALSE) {
        throw Exceptions\MiscException::createFromPhpError();
    }
}


/**
 * Set the codepage of the current process.
 * 
 * @param int $cp A codepage identifier.
 * @throws Exceptions\MiscException
 * 
 */
function sapi_windows_cp_set(int $cp): void
{
    error_clear_last();
    $result = \sapi_windows_cp_set($cp);
    if ($result === FALSE) {
        throw Exceptions\MiscException::createFromPhpError();
    }
}


/**
 * If enable is omitted, the function return TRUE if the stream stream has has VT100 control codes enabled, FALSE otherwise.
 * 
 * If enable is specified, the function will try to enable or disable the VT100 features of the stream stream.
 * If the feature has been successfully enabled (or disabled), .
 * 
 * At startup, PHP tries to enable the VT100 feature of the STDOUT/STDERR streams. By the way, if those streams are redirected to a file, the VT100 features may not be enabled.
 * 
 * @param resource $stream The stream on which the function will operate.
 * @param bool $enable If specified, the VT100 feature will be enabled (if TRUE) or disabled (if FALSE).
 * @throws Exceptions\MiscException
 * 
 */
function sapi_windows_vt100_support($stream, bool $enable = null): void
{
    error_clear_last();
    if ($enable !== null) {
        $result = \sapi_windows_vt100_support($stream, $enable);
    }else {
        $result = \sapi_windows_vt100_support($stream);
    }
    if ($result === FALSE) {
        throw Exceptions\MiscException::createFromPhpError();
    }
}


/**
 * 
 * 
 * @param int $seconds Halt time in seconds.
 * @return int Returns zero on success, .
 * 
 * If the call was interrupted by a signal, sleep returns
 * a non-zero value. On Windows, this value will always be
 * 192 (the value of the
 * WAIT_IO_COMPLETION constant within the Windows API).
 * On other platforms, the return value will be the number of seconds left to
 * sleep.
 * @throws Exceptions\MiscException
 * 
 */
function sleep(int $seconds): int
{
    error_clear_last();
    $result = \sleep($seconds);
    if ($result === FALSE) {
        throw Exceptions\MiscException::createFromPhpError();
    }
    return $result;
}


/**
 * Delays program execution for the given number of
 * seconds and nanoseconds.
 * 
 * @param int $seconds Must be a non-negative integer.
 * @param int $nanoseconds Must be a non-negative integer less than 1 billion.
 * @return array Returns TRUE on success .
 * 
 * If the delay was interrupted by a signal, an associative array will be
 * returned with the components:
 * 
 * 
 * 
 * seconds - number of seconds remaining in
 * the delay
 * 
 * 
 * 
 * 
 * nanoseconds - number of nanoseconds
 * remaining in the delay
 * 
 * 
 * 
 * @throws Exceptions\MiscException
 * 
 */
function time_nanosleep(int $seconds, int $nanoseconds)
{
    error_clear_last();
    $result = \time_nanosleep($seconds, $nanoseconds);
    if ($result === FALSE) {
        throw Exceptions\MiscException::createFromPhpError();
    }
    return $result;
}


/**
 * Makes the script sleep until the specified
 * timestamp.
 * 
 * @param float $timestamp The timestamp when the script should wake.
 * @throws Exceptions\MiscException
 * 
 */
function time_sleep_until(float $timestamp): void
{
    error_clear_last();
    $result = \time_sleep_until($timestamp);
    if ($result === FALSE) {
        throw Exceptions\MiscException::createFromPhpError();
    }
}


