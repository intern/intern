<?php
// +----------------------------------------------------------------------
// |  [ WE CAN DO IT JUST programmer ]
// +----------------------------------------------------------------------
// | Copyright (c) 2010 http://www.hongrs.net All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: lan_chi <lan_chi@qq.com>
// +----------------------------------------------------------------------
// $Id$

require_once intern_join_path(MASTER, 'database', 'db.abstract.php');

/**
 +------------------------------------------------------------------------------
 * Factory for database
 +------------------------------------------------------------------------------
 * @version   $Id$
 +------------------------------------------------------------------------------
 */
class internCoreDatabase {

    /**
     * Private db instance
     * @var array with object
     */
    private static $instance = array();

    // TODO
    public function __construct($link_name = 'default', $config = NULl ) {

    }

    /**
     +------------------------------------------------------------------------------
     * Factory for database
     +------------------------------------------------------------------------------
     * @version   $Id$
     +------------------------------------------------------------------------------
     */
    public static function getInstance( $conf = NULL ) {
        global $db_handle;

        if( is_object( $db_handle ) ) return $db_handle;

        $_db_config = intern_parse_db_config( $conf );

        $_require = intern_join_path(MASTER, 'database', 'db.'.$_db_config['scheme'].'.php');

        if( !file_exists( $_require )) {
            logger::error( 'Error: Database layout file "'.MASTER.'db.'.$_db_config['scheme'].'.php" not found!' );
        }else{
            require_once $_require;
        }

        $db_handle = new $_db_config['scheme']( $_db_config );
        // unset unused variable
        unset($_db_config['path'], $_db_config['scheme']);

        return $db_handle;
    }
}
