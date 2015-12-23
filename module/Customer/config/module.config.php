<?php
return array(
    'router' => array(
        'routes' => array(
            'customer.rest.customer' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/customer[/:customer_id]',
                    'defaults' => array(
                        'controller' => 'Customer\\V1\\Rest\\Customer\\Controller',
                    ),
                ),
            ),
            'customer.rest.customer-type' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/customer-type[/:customer_type_id]',
                    'defaults' => array(
                        'controller' => 'Customer\\V1\\Rest\\CustomerType\\Controller',
                    ),
                ),
            ),
        ),
    ),
    'zf-versioning' => array(
        'uri' => array(
            0 => 'customer.rest.customer',
            2 => 'customer.rest.customer-type',
        ),
    ),
    'service_manager' => array(
        'factories' => array(
            'Customer\\V1\\Rest\\Customer\\CustomerResource' => 'Customer\\V1\\Rest\\Customer\\CustomerResourceFactory',
            'Customer\\V1\\Rest\\CustomerType\\CustomerTypeResource' => 'Customer\\V1\\Rest\\CustomerType\\CustomerTypeResourceFactory',
        ),
    ),
    'zf-rest' => array(
        'Customer\\V1\\Rest\\Customer\\Controller' => array(
            'listener' => 'Customer\\V1\\Rest\\Customer\\CustomerResource',
            'route_name' => 'customer.rest.customer',
            'route_identifier_name' => 'customer_id',
            'collection_name' => 'customer',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'Customer\\V1\\Rest\\Customer\\CustomerEntity',
            'collection_class' => 'Customer\\V1\\Rest\\Customer\\CustomerCollection',
            'service_name' => 'Customer',
        ),
        'Customer\\V1\\Rest\\CustomerType\\Controller' => array(
            'listener' => 'Customer\\V1\\Rest\\CustomerType\\CustomerTypeResource',
            'route_name' => 'customer.rest.customer-type',
            'route_identifier_name' => 'customer_type_id',
            'collection_name' => 'customer_type',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'Customer\\V1\\Rest\\CustomerType\\CustomerTypeEntity',
            'collection_class' => 'Customer\\V1\\Rest\\CustomerType\\CustomerTypeCollection',
            'service_name' => 'CustomerType',
        ),
    ),
    'zf-content-negotiation' => array(
        'controllers' => array(
            'Customer\\V1\\Rest\\Customer\\Controller' => 'HalJson',
            'Customer\\V1\\Rest\\CustomerType\\Controller' => 'HalJson',
        ),
        'accept_whitelist' => array(
            'Customer\\V1\\Rest\\Customer\\Controller' => array(
                0 => 'application/vnd.customer.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'Customer\\V1\\Rest\\CustomerType\\Controller' => array(
                0 => 'application/vnd.customer.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
        ),
        'content_type_whitelist' => array(
            'Customer\\V1\\Rest\\Customer\\Controller' => array(
                0 => 'application/vnd.customer.v1+json',
                1 => 'application/json',
            ),
            'Customer\\V1\\Rest\\CustomerType\\Controller' => array(
                0 => 'application/vnd.customer.v1+json',
                1 => 'application/json',
            ),
        ),
    ),
    'zf-hal' => array(
        'metadata_map' => array(
            'Customer\\V1\\Rest\\Customer\\CustomerEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'customer.rest.customer',
                'route_identifier_name' => 'customer_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
            ),
            'Customer\\V1\\Rest\\Customer\\CustomerCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'customer.rest.customer',
                'route_identifier_name' => 'customer_id',
                'is_collection' => true,
            ),
            'Customer\\V1\\Rest\\CustomerType\\CustomerTypeEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'customer.rest.customer-type',
                'route_identifier_name' => 'customer_type_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
            ),
            'Customer\\V1\\Rest\\CustomerType\\CustomerTypeCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'customer.rest.customer-type',
                'route_identifier_name' => 'customer_type_id',
                'is_collection' => true,
            ),
        ),
    ),
);
