<?php
#parse("PHP File Header.php")

#if (${NAMESPACE})

namespace ${NAMESPACE};

#end

class ${NAME} {
    private static \$_instance;
    
    private function __construct() {
        // TODO: implement constructor
    }
    
    /**
     *  @return ${NAME} 
     */
    public static function getInstance() {
        if(self::\$_instance === null) {
            self::\$_instance = new ${NAME}(); 
        }
        
        return self::\$_instance;
    }
}