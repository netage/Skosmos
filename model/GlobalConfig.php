<?php

class GlobalConfig {
    private $languages;

    public function __construct($config_name=null) 
    {
        global $LANGUAGES;
        try {
            $file_path = dirname(__FILE__);
            if ($config_name !== null) {
                $file_path .= $config_name;
            } else {
                $file_path .= '/../config.inc';
            }
            if (!file_exists(dirname(__FILE__).'/../config.inc')) {
                throw new Exception('config.inc file is missing, please provide one.');
            }
            require_once($file_path);
            if (isset($LANGUAGES)) {
                $this->languages = $LANGUAGES;
            }
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
            return;
        }
    }

    public function getLanguages() 
    {
        return $this->languages;
    }
    
    public function getVocabularyConfigFile() 
    {
        if (defined('VOCABULARIES_FILE')) {
            return VOCABULARIES_FILE;
        }
        return null;
    }
    
    public function getHttpTimeout() 
    {
        if (defined('HTTP_TIMEOUT')) {
            return HTTP_TIMEOUT;
        }
        return null;
    }
    
    public function getDefaultEndpoint() 
    {
        if (defined('DEFAULT_ENDPOINT')) {
            return DEFAULT_ENDPOINT;
        }
        return null;
    }
    
    public function getSparqlGraphStore() 
    {
        if (defined('SPARQL_GRAPH_STORE')) {
            return SPARQL_GRAPH_STORE;
        }
        return null;
    }
    
    public function getDefaultTransitiveLimit() 
    {
        if (defined('DEFAULT_TRANSITIVE_LIMIT')) {
            return DEFAULT_TRANSITIVE_LIMIT;
        }
        return null;
    }
    
    public function getDefaultSearchLimit() 
    {
        if (defined('DEFAULT_SEARCH_LIMIT')) {
            return DEFAULT_SEARCH_LIMIT;
        }
        return null;
    }
    
    public function getTemplateCache() 
    {
        if (defined('TEMPLATE_CACHE')) {
            return TEMPLATE_CACHE;
        }
        return null;
    }
    
    public function getDefaultSparqlDialect() 
    {
        if (defined('DEFAULT_SPARQL_DIALECT')) {
            return DEFAULT_SPARQL_DIALECT;
        }
        return null;
    }

    public function getFeedbackAddress() 
    {
        if (defined('FEEDBACK_ADDRESS')) {
            return FEEDBACK_ADDRESS;
        }
        return null;
    }
    
    public function getLogCaughtExceptions() 
    {
        if (defined('LOG_CAUGHT_EXCEPTIONS')) {
            return LOG_CAUGHT_EXCEPTIONS;
        }
        return null;
    }
    
    public function getServiceName() 
    {
        if (defined('SERVICE_NAME')) {
            return SERVICE_NAME;
        }
        return null;
    }
    
    public function getServiceTagline() 
    {
        if (defined('SERVICE_TAGLINE')) {
            return SERVICE_TAGLINE;
        }
        return null;
    }
    
    public function getServiceLogo() 
    {
        if (defined('SERVICE_LOGO')) {
            return SERVICE_LOGO;
        }
        return null;
    }
    
    public function getCustomCss() 
    {
        if (defined('CUSTOM_CSS')) {
            return CUSTOM_CSS;
        }
        return null;
    }
    
    public function getUiLanguageDropdown() 
    {
        if (defined('UI_LANGUAGE_DROPDOWN')) {
            return UI_LANGUAGE_DROPDOWN;
        }
        return null;
    }
    
    public function getBaseHref() 
    {
        if (defined('BASE_HREF')) {
            return BASE_HREF;
        }
        return null;
    }
}