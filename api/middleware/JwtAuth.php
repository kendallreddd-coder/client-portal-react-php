<?php
class JwtAuth {
    public static function verify(string $token, string $secret): ?array {
        $parts = explode('.', $token);
        if (count($parts) !== 3) return null;
        [$h, $p, $s] = $parts;
        $expected = hash_hmac('sha256', "$h.$p", $secret, true);
        if (!hash_equals($expected, base64_decode(strtr($s, '-_', '+/')))) return null;
        return json_decode(base64_decode($p), true);
    }
}
