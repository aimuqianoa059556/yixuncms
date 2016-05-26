<?php
	/*==================================================================*/
	/*		文件名:SysInfo.class.php                            */
	/*		概要: 系统信息管理类.                	       	    */
	/*		作者: 高洛峰                                        */
	/*		创建时间: 2009-05-25                                */
	/*		最后修改时间:2009-05-25                             */
	/*		copyright (c)2009 lampteacher@gmail.com             */
	/*==================================================================*/
	class Sysinfo {
		private static $gd;
		private static $serverEnv;
		private static $domainName;
		private static $phpVersion;
		private static $gdInfo;
		private static $freeType;
		private static $mysqlVersion;
		private static $allowUrl;
		private static $fileUpload;
		private static $dbSize;
		private static $maxExeTime;
		private static $code;
		private static $edition;

		function setSysinfo(){
			$db=D();
			self::$serverEnv =self::getServerEnv();
			self::$domainName = $_SERVER['SERVER_NAME'];
			self::$phpVersion = PHP_VERSION;
			self::$gdInfo = self::getGdInfo();
			self::$freeType = self::getFreeType();
			self::$mysqlVersion =$db->dbVersion();
			self::$allowUrl = self::getAllowUrl();
			self::$fileUpload = self::getFileUpload();
			self::$dbSize = $db->dbSize();
			self::$maxExeTime = self::getMaxExeTime();
			self::$code = 'utf-8(多语言不区分大小写)';
			self::$edition = 'YIXUNCMS2.0.4.7增强版（共享）';
		}

		private static function getServerEnv() {
			return PHP_OS.' | '.$_SERVER['SERVER_SOFTWARE'];
		}



		private static function getGdInfo() {
			if(function_exists('gd_info')){
				self::$gd = gd_info();
				$gdInfo = self::$gd['GD Version'];
			}else {
				$gdInfo = '<span class="red_font">未知</span>';
			}
			return $gdInfo;
		}

		private static function getFreeType() {
			if(self::$gd["FreeType Support"])
				return '支持';
			else
				return '<span class="red_font">不支持</span>';
		}


		private static function getAllowUrl() {
			if(@ini_get('allow_url_fopen'))
				return '支持';
		        else
				return '<span class="red_font">不支持</span>';
		}

		private static function getFileUpload() {
			if(@ini_get('file_uploads')){
				$umfs = ini_get('upload_max_filesize');
				$pms = ini_get('post_max_size');
   				return '允许 | 文件:'.$umfs.' | 表单：'.$pms;
			}else{
				return '<span class="red_font">禁止</span>';
			}
		}
	


		private static function getMaxExeTime() {
			return ini_get('max_execution_time').'秒';
		}
		
		public static function getSysInfos() {
			self::setSysinfo();
			$infos=array(
				"服务器环境:" => self::$serverEnv,
				"采用字符集:" => self::$code,
				"域名:" => self::$domainName,
				"PHP版本:" => self::$phpVersion,
				"GD库版本:" => self::$gdInfo,
				"FreeType:" => self::$freeType,
				"MYSQL版本:" => self::$mysqlVersion,
				"远程文件获取:" => self::$allowUrl,
				"文件上传:" => self::$fileUpload,
				"数据库使用:" => self::$dbSize,
				"脚本最大执行时间:"=> self::$maxExeTime,
				"当前系统版本:"=> self::$edition
			);
			return $infos;
		}	
	}

