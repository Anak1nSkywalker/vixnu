'use strict'

angular.module('vixnuApp.controllers', ['ngRoute', 'vixnuApp.services'])
        .controller('CustomerTypeCtrl',
                ['$scope', 'CustomerTypeSrv', '$location', '$routeParams',
                    function($scope, CustomerTypeSrv, $location, $routeParams) {
                       
                        $scope.load = function() {
                            //$scope.registros = CustomerTypeSrv.query();
                           
                            $scope.registros = CustomerTypeSrv.get(); 
                    
                            /*
                            $scope.registros = [
                                {
                                    id: 30,
                                    description: "Livros e Ebooks"
                                },
                                {
                                    id: 31, 
                                    description: "Computador"
                                },
                                {
                                    id: 33, 
                                    description: "Casa"
                                }, 
                                {
                                    id: 34, 
                                    description: "Mesa"
                                },
                                {
                                    id: 35, 
                                    description: "Banho"
                                }
                            ];        
                            */
                            
                        }

                        $scope.get = function() {
                            $scope.item = CustomerTypeSrv.get({id: $routeParams.id});
                        }

                        $scope.add = function(item) {
                            $scope.result = CustomerTypeSrv.save(
                                    {},
                                    item,
                                    function(data, status, headers, config) {
                                        $location.path('/customer-type/list');
                                    },
                                    function(data, status, headers, config) {
                                        alert('Erro ao inserir registro: ' + data.messages[0]);
                                    }
                            )
                        }

                        $scope.edit = function(item) {
                            $scope.result = CustomerTypeSrv.update(
                                    {id: $routeParams.id},
                                    item,
                                    function(data, status, headers, config) {
                                        $location.path('/customer-type/list');
                                    },
                                    function(data, status, headers, config) {
                                        alert('Erro ao inserir registro: ' + data.messages[0]);
                                    }
                            )
                        }

                        $scope.delete = function(id) {
                            if (confirm('Deseja realmente excluir esse registro?')) {
                                CustomerTypeSrv.remove(
                                        {id: id},
                                        {},
                                        function(data, status, headers, config) {
                                            $location.path('/customer-type/list');
                                        },
                                        function(data, status, headers, config) {
                                            alert('Erro ao inserir registro: ' + data.messages[0]);
                                        }
                                )
                            } 
                        }
                    }
                ]
        );