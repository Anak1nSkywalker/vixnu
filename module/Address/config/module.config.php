<?php
return array(
    'router' => array(
        'routes' => array(
            'address.rest.address' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/address[/:address_id]',
                    'defaults' => array(
                        'controller' => 'Address\\V1\\Rest\\Address\\Controller',
                    ),
                ),
            ),
            'address.rest.federative-unit' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/federative-unit[/:federative_unit_id]',
                    'defaults' => array(
                        'controller' => 'Address\\V1\\Rest\\FederativeUnit\\Controller',
                    ),
                ),
            ),
            'address.rest.patio-type' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/patio-type[/:patio_type_id]',
                    'defaults' => array(
                        'controller' => 'Address\\V1\\Rest\\PatioType\\Controller',
                    ),
                ),
            ),
        ),
    ),
    'zf-versioning' => array(
        'uri' => array(
            0 => 'address.rest.address',
            2 => 'address.rest.federative-unit',
            3 => 'address.rest.patio-type',
        ),
    ),
    'service_manager' => array(
        'factories' => array(
            'Address\\V1\\Rest\\Address\\AddressResource' => 'Address\\V1\\Rest\\Address\\AddressResourceFactory',
            'Address\\V1\\Rest\\FederativeUnit\\FederativeUnitResource' => 'Address\\V1\\Rest\\FederativeUnit\\FederativeUnitResourceFactory',
            'Address\\V1\\Rest\\PatioType\\PatioTypeResource' => 'Address\\V1\\Rest\\PatioType\\PatioTypeResourceFactory',
        ),
    ),
    'zf-rest' => array(
        'Address\\V1\\Rest\\Address\\Controller' => array(
            'listener' => 'Address\\V1\\Rest\\Address\\AddressResource',
            'route_name' => 'address.rest.address',
            'route_identifier_name' => 'address_id',
            'collection_name' => 'address',
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
            'entity_class' => 'Address\\V1\\Rest\\Address\\AddressEntity',
            'collection_class' => 'Address\\V1\\Rest\\Address\\AddressCollection',
            'service_name' => 'Address',
        ),
        'Address\\V1\\Rest\\FederativeUnit\\Controller' => array(
            'listener' => 'Address\\V1\\Rest\\FederativeUnit\\FederativeUnitResource',
            'route_name' => 'address.rest.federative-unit',
            'route_identifier_name' => 'federative_unit_id',
            'collection_name' => 'federative_unit',
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
            'entity_class' => 'Address\\V1\\Rest\\FederativeUnit\\FederativeUnitEntity',
            'collection_class' => 'Address\\V1\\Rest\\FederativeUnit\\FederativeUnitCollection',
            'service_name' => 'FederativeUnit',
        ),
        'Address\\V1\\Rest\\PatioType\\Controller' => array(
            'listener' => 'Address\\V1\\Rest\\PatioType\\PatioTypeResource',
            'route_name' => 'address.rest.patio-type',
            'route_identifier_name' => 'patio_type_id',
            'collection_name' => 'patio_type',
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
            'entity_class' => 'Address\\V1\\Rest\\PatioType\\PatioTypeEntity',
            'collection_class' => 'Address\\V1\\Rest\\PatioType\\PatioTypeCollection',
            'service_name' => 'PatioType',
        ),
    ),
    'zf-content-negotiation' => array(
        'controllers' => array(
            'Address\\V1\\Rest\\Address\\Controller' => 'HalJson',
            'Address\\V1\\Rest\\FederativeUnit\\Controller' => 'HalJson',
            'Address\\V1\\Rest\\PatioType\\Controller' => 'HalJson',
        ),
        'accept_whitelist' => array(
            'Address\\V1\\Rest\\Address\\Controller' => array(
                0 => 'application/vnd.address.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'Address\\V1\\Rest\\FederativeUnit\\Controller' => array(
                0 => 'application/vnd.address.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'Address\\V1\\Rest\\PatioType\\Controller' => array(
                0 => 'application/vnd.address.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
        ),
        'content_type_whitelist' => array(
            'Address\\V1\\Rest\\Address\\Controller' => array(
                0 => 'application/vnd.address.v1+json',
                1 => 'application/json',
            ),
            'Address\\V1\\Rest\\FederativeUnit\\Controller' => array(
                0 => 'application/vnd.address.v1+json',
                1 => 'application/json',
            ),
            'Address\\V1\\Rest\\PatioType\\Controller' => array(
                0 => 'application/vnd.address.v1+json',
                1 => 'application/json',
            ),
        ),
    ),
    'zf-hal' => array(
        'metadata_map' => array(
            'Address\\V1\\Rest\\Address\\AddressEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'address.rest.address',
                'route_identifier_name' => 'address_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
            ),
            'Address\\V1\\Rest\\Address\\AddressCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'address.rest.address',
                'route_identifier_name' => 'address_id',
                'is_collection' => true,
            ),
            'Address\\V1\\Rest\\FederativeUnit\\FederativeUnitEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'address.rest.federative-unit',
                'route_identifier_name' => 'federative_unit_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
            ),
            'Address\\V1\\Rest\\FederativeUnit\\FederativeUnitCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'address.rest.federative-unit',
                'route_identifier_name' => 'federative_unit_id',
                'is_collection' => true,
            ),
            'Address\\V1\\Rest\\PatioType\\PatioTypeEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'address.rest.patio-type',
                'route_identifier_name' => 'patio_type_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
            ),
            'Address\\V1\\Rest\\PatioType\\PatioTypeCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'address.rest.patio-type',
                'route_identifier_name' => 'patio_type_id',
                'is_collection' => true,
            ),
        ),
    ),
);
