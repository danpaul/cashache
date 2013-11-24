<?php

/*

The MIT License (MIT)

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.

*/

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
			mkdir(dirname(self::$compressed_file, self::FILE_PERMISSION, TRUE));
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