<?php
/**
* Payments Factory
*/
namespace Minds\Core\Payments;

use Minds\Core\Di\Di;

/**
 * A factory providing handlers boosting items
 */
class Factory
{
    /**
     * Build the handler
     * @param string $handler
     * @param array $options (optional)
     * @return BoostHandlerInterface
     */
    public static function build($handler, $opts = [])
    {
        switch (ucfirst($handler)) {
          case "Braintree":
            return Di::_()->get('BraintreePayments')->setConfig($opts);
          default:
            throw new \Exception("Service not found");
        }
    }
}
