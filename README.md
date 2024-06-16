Step to reproduce the error:

* `composer install`
* `bin/console doctrine:fixtures:load -n`

Error:

> PHP Fatal error:  Declaration of Symfony\Component\VarExporter\LazyProxyTrait::__unserialize(array $data): void must be compatible with libphonenumber\PhoneNumber::__unserialize($data) in /home/jdecool/Workspace/sandbox/bug-foundry/vendor/symfony/var-exporter/LazyProxyTrait.php on line 322
> 
> Fatal error: Declaration of Symfony\Component\VarExporter\LazyProxyTrait::__unserialize(array $data): void must be compatible with libphonenumber\PhoneNumber::__unserialize($data) in /home/jdecool/Workspace/sandbox/bug-foundry/vendor/symfony/var-exporter/LazyProxyTrait.php on line 322
> [critical] Fatal Compile Error: Declaration of Symfony\Component\VarExporter\LazyProxyTrait::__unserialize(array $data): void must be compatible with libphonenumber\PhoneNumber::__unserialize($data)

