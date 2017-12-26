<?php

/**
 * -----------------------------------------------------------------------------
 * Configurações Padrão
 * -----------------------------------------------------------------------------
 *
 * Define as configurações padrão do sistema, indices que são escritos no
 * aquivo de configuração do ambiente (declarado na variavel 'environment')
 * sobrescrevem as configurações definidas aqui.
 *
 */
return  [
    'site' => [
      'url' => 'http://localhost/mvc/'
    ],
    /**
     * -------------------------------------------------------------------------
     * Configurações de Ambiente
     * -------------------------------------------------------------------------
     *
     * Define o tipo de configuração e credenciais a ser
     * carregadas pelo sistema, possui os seguintes valores:
     *
     * dev: ambiente de desenvolvimento
     * homol: ambiente de produção
     * live: ambiente de homologação
     *
     */
    'environment' => 'dev',
    /**
     * -------------------------------------------------------------------------
     * Modo de tratamento de erros
     * -------------------------------------------------------------------------
     *
     * Define a exibição de erros ao usuário final.
     * Caso seja 'false', qualquer erro é omitido, podendo ser
     * consultado via logs
     *
     */
    'debug' => false,
    /**
     * -------------------------------------------------------------------------
     * Configurações de caminhos
     * -------------------------------------------------------------------------
     *
     * Define os caminhos para as pastas do sistema
     *
     */
    'path' => [
        // pasta base, raiz do sistema
        'base' => dirname(dirname(__DIR__)) . '/',
        // pasta de arquivos públicos
        'public' => dirname(dirname(__DIR__)) . '/public/',
        // pasta de uploads
        'uploads' => dirname(dirname(__DIR__)) . '/public/uploads/',
    ],
    /**
     * -------------------------------------------------------------------------
     * Configurações de temas
     * -------------------------------------------------------------------------
     *
     * Define os caminhos para os aquivos do tema
     *
     */
    'theme' => [
        'path' => '/',
        'views' =>  'app/Views/',
    ],
];
