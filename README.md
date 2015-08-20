# Hash

This is the Hash-Plugin for Detleff.

It listens for `hash <hashAlgorithm> <hashText>` and sends back the hash of the string.

The regEx, that must be added to `config/regEx.php` is:

```
'hash' => '/hash (.*?) (.*)$/i'
```
