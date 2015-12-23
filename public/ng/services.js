'use strict'

angular.module('vixnuApp.services', ['ngResource'])
        .factory('CustomerTypeSrv',
                ['$resource', function($resource) {
                        return $resource(
                                '/customer-type/:id', {
                                    id: '@id'
                                },
                        {
                            update: {
                                method: 'PUT',
                                url: '/customer-type/:id'
                            }
                        }
                        )
                    }]
                )
        ;