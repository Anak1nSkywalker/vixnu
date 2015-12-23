<?php
namespace Customer;

use ZF\Apigility\Provider\ApigilityProviderInterface;
/*GETGETGET
use Zend\Db\ResultSet\ResultSet;
use Domain\Entity\Customer\CustomerType;
use TableGatewayRepository\Service\BaseRepository;
use Zend\Db\TableGateway\TableGateway;
 * 
 */

class Module implements ApigilityProviderInterface
{
    public function getConfig()
    {
        return include __DIR__ . '/../../config/module.config.php';
    }
    
     public function getServiceConfig()
    {
        return array(
            'factories' => array(    
                /*EXEMPLO FACTORY
                'CustomerTypeTableGateway' => function ($sm){
                    $dbAdapter = $sm->get('TGAdapter');
                    $resultSetPrototype = new ResultSet();
                    $resultSetPrototype->setArrayObjectPrototype(new CustomerType());
                    
                    return new TableGateway('customer_types', $dbAdapter, null, $resultSetPrototype);
                },               
                'TableGatewayRepository\Service\CustomerType' => function ($sm){
                    $tableGateway = $sm->get('CustomerTypeTableGateway');
                    return new BaseRepository($tableGateway);
                }
                 * 
                 */
            )
        );        
    }    

    public function getAutoloaderConfig()
    {
        return array(
            'ZF\Apigility\Autoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__,
                ),
            ),
        );
    }
}
