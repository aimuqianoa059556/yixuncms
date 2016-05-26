<?php
/** ******************************************************************************
 * MySQL数据库备份类，通过该类对数据库进行数据备份与恢复。					     *
 * *******************************************************************************
 * 许可声明：专为YIXUNCMS网站建设系统开发的扩展类								 *
 * *******************************************************************************
 * 版权所有 (C) 2014-2015 易迅软件工作室，并保留所有权利。			             *
 * *******************************************************************************
 * $Author: (1652368686@qq.com) $     		                                     *
 * $Date: 2015-12-10 10:00:00 $                                                  * 
 * ******************************************************************************/
	class bakdb{
	private $pdo=null;
	//初始化构造函数，使用PDO连接MYSQL数据库，信息从config.inc.php中自动获取
 	function __construct(){
		if(is_null($this->pdo)) {
			try {
				$pdo = new PDO("mysql:host=".HOST.";dbname=".DBNAME,USER, PASS);//连接数据库
				$pdo->exec('SET NAMES utf8');
				$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//设置调优参数，遇到错误抛出异常
				$this->pdo=$pdo;
			} catch (PDOException $e) {
				echo $e->getMessage();//如果连接异常则抛出错误信息
				exit;
			}		
		}else{
			$this->pdo=$pdo;
		}
	} 
	
	//生成备份文件函数，1为导出数据苦结构和数据，0为仅导出数据库结构
    function outputSql($flag=1) {
		$pdo=$this->pdo;
        $mysql = '';//准备字符串装载导出来的sql语句
        $statments = $pdo->query("show tables");//返回结果集，show tables检视所有表名
        foreach ($statments as $value) {//遍历此结果集，导出每个表名对应的信息
            $table_name = $value[0];//获取该表名
            $mysql.="DROP TABLE IF EXISTS `$table_name`;\n";//每个表前都准备Drop语句
            $table_query = $pdo->query("show create table `$table_name`");//取出该表建表信息的结果集
            $create_sql = $table_query->fetch();//利用fetch方法取出该结果集对应的数组
            $mysql.=$create_sql['Create Table'] . ";\r\n\r\n";//写入建表信息
            if ($flag != 0) {//如果标志位不是0则继续取出该表内容生成insert语句
                $iteams_query = $pdo->query("select * from `$table_name`");//取出该表所有字段结果集
                $values = "";//准备空字符串装载insert value值
                $items = "";//准备空字符串装载该表字段名
                while ($item_query = $iteams_query->fetch(PDO::FETCH_ASSOC)) { //用关联查询方式返回表中字段名和值的数组
                    $item_names = array_keys($item_query);//取出该数组键值 即字段名
                    $item_names = array_map("addslashes", $item_names);//将特殊字符转译加\
                    $items = join('`,`', $item_names); //联合字段名 如：items1`,`item2 `符号为反引号 键盘1旁边 字段名用反引号括起
                    $item_values = array_values($item_query);//取出该数组值 即字段对应的值
                    $item_values = array_map("addslashes", $item_values);//将特殊字符转译加\
                    $value_string = join("','", $item_values);//联合值 如：value1','value2 值用单引号括起
                    $value_string = "('" . $value_string . "'),";//值两边加括号
                    $values.="\n" . $value_string;//最后返回给$value
                }
                if ($values != "") {//如果$values不为空，即该表有内容
                    //写入insert语句
                    $insert_sql = "INSERT INTO `$table_name` (`$items`) VALUES" . rtrim($values, ",") . ";\n\r";
                    //将该语句写入$mysql
                    $mysql.=$insert_sql;
                }
            }
            //表间的分割线
            //$mysql.="-- ---------------------------------------------------\n\r";
        }
		$sqldir=PROJECT_PATH.'databak/';
		if(!file_exists($sqldir)){
			if(!@mkdir($sqldir,0755)){
				echo "目录创建失败";
			}
		}
        $filename = $sqldir.DBNAME. "_" . date('Ymdhis') . ".sql"; //导出的文件名
        file_put_contents($filename, $mysql);//导出sql文件
        if(file_exists($filename)){
			return true;
		}else{
			return false;
		}
    }
	
    /*
    * 数据库导入函数inputSql
    * 用PDO方式导入数据库数据
    * $filename为导入的文件名
    * 注：用PDO->exec方法一次性导入整个sql文件是可以导入数据库的，但如果某条语句中有错误是无法抛出异常的
    * 所以这里对整个sql文件进行了一次切割，以；作为切割位，切割成单条sql语句（sql文件中注释等部分不影响PDO->exec的执行），逐条调用PDO->exec方法导入，可以方便查错
    */
    function inputSql($filename) {
		$pdo=$this->pdo;
        try {
            if (file_exists($filename)) {//如果文件存在
                $sql_stream = file_get_contents($filename);//读取整个文件内容
                $sql_stream = rtrim($sql_stream);//去掉末尾空格
                //利用正则替换函数，将导入的内容部分,即insert value里的；换成特殊符号' $$$ '为进一步按；切割单条sql语句做准备
                $new_stream = preg_replace_callback("/\((.*)\)/", create_function('$matches', 'return str_replace(";"," $$$ ",$matches[0]);'), $sql_stream);
                //切割单条sql语句生成数组
                $sql_array = explode(";", $new_stream);
                 //遍历该数组
                foreach ($sql_array as $value) {
                    if (!empty($value)){ //数组最后一个是空数组，所以需要判断一下
                        $sql = str_replace(" $$$ ", ";", $value) . ";"; //将该条sql语句中' $$$ '转换回；
                    $pdo->exec($sql); //执行该语句
                    //echo "成功插入数据：<br/><per>".$sql.";<per/><br/><br/>";
                    }
                }
                return true;
            }else{
				return false;
			}
        } catch (PDOException $e) {
            echo $e->getMessage(); //执行异常则抛出异常
            exit;
        }
    }
	}