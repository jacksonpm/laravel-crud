<?php

/**
 * Configurações do ProSeleta - Listagem
 */
return [

    /**
     * View padrão a ser utilizada:
     * <String>
     */
    'view' => 'listing::listing',

    /**
     * Paginação: quantidade padrão de itens por página:
     * <Boolean>
     */
    'pagination' => true,
    
    /**
     * Paginação: quantidade padrão de itens por página:
     * <Int>
     */
    'defaultPerPage' => 10,

    /**
     * Paginação: quantidade máxima de itens por página: 
     * <Int>
     */
    'defaultPerPageMaximum' => 500,

    /**
     * Ações padrão da listagem:
     */
    'defaultActionInsert' => [ 'url' => '/create/', 'method' => 'get'],
    'defaultActionEdit'   => [ 'url' => '/edit/', 'method' => 'post'],
    'defaultActionDelete' => [ 'url' => '/destroy/', 'method' => 'post'],

    /**
     * Busca avançada
     * campos que serão ignorados por padrão na hora da busca:
     */
    'defaultFieldsRemovedFromAdvancedSearch' => [
        'flag_excluido',
    ],
];

