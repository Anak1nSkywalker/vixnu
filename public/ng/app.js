'use strict'

angular.module('vixnuApp', ['ngRoute', 'vixnuApp.controllers'])
        .config(
                ['$routeProvider',
                    function($routerProvider) {
                        $routerProvider
                                .when('/customer-type/list', {
                                    templateUrl: 'ng/templates/customer/customer_type_list.html',
                                    controller: 'CustomerTypeCtrl'
                                })
                                .when('/customer-type/create', {
                                    templateUrl: 'ng/templates/customer/customer_type_create.html',
                                    controller: 'CustomerTypeCtrl'
                                })
                                .when('/customer-type/edit/:id', {
                                    templateUrl: 'ng/templates/customer/customer_type_edit.html',
                                    controller: 'CustomerTypeCtrl'
                                })
                    }
                ]);