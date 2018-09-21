<?php namespace App\Providers;

use Limoncello\Application\Packages\Csrf\CsrfContainerConfigurator;
use Limoncello\Passport\Package\PassportProvider;

/**
 * @package App
 */
class CustomPassportProvider extends PassportProvider
{
    /**
     * @inheritdoc
     */
    public static function getContainerConfigurators(): array
    {
        $extraConfigurators = [
            CsrfContainerConfigurator::class,
        ];

        return array_merge(parent::getContainerConfigurators(), $extraConfigurators);
    }
}
