<?php


class Cashache
{
	const FILE_PERMISSION = '0644';

	protected static $file;
	protected static $compressed_file;

	public static function cash($cache_root_in = FALSE)
	{
		$cache_root = ( $cache_root_in ?  $cache_root_in : dirname(__FILE__). '/cache/');

		self::$file = $cache_root. str_replace('/', '_-_', $_SERVER['REQUEST_URI']);
		self::$compressed_file = $cache_root. 'gzip/'. str_replace('/', '_-_', $_SERVER['REQUEST_URI']);

		if( file_exists(self::$file) )
		{
			if( self::accepts_gzip() )
			{
				header("Content-Encoding: gzip");
				readfile(self::$compressed_file);
				die();
			}
			readfile(self::$file);
			die();
		}else{
			ob_start();
			register_shutdown_function('Cashache::shutdown');
		}
	}

	public static function shutdown()
	{
		if( !file_exists(dirname(self::$file)))
		{
			mkdir(dirname(self::$file), self::FILE_PERMISSION, TRUE);
		}
		if( !file_exists(dirname(self::$compressed_file)))
		{
			mkdir(dirname(self::$FILE_PERMISSION), NULL, TRUE);
		}

		file_put_contents(self::$file, ob_get_contents());
		file_put_contents(self::$compressed_file, gzencode(ob_get_contents()));

		ob_flush();
	}

	public static function accepts_gzip()
	{
		if( strpos($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip') !== FALSE ){ return TRUE; }
		return FALSE;
	}	

}