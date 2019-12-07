<?php
class OptMysql
{
    /*成员变量*/
    public $conn;
    public $serverName;//服务器
    public $userName;//用户名
    public $userPassword;//密码
    public $dbName;//数据库名称
    public $dbTableName;//表名
    // 分页参数设置
    public $CurrentPage;  //当前页号
    public $MaxPage;   //最大页号
    public $Linage;   //每页行数
    public $MaxCount;   //记录总数(指查询返回数)
    public $offset;   //偏移量,指记录的开始

    /*连接数据库*/
    public function __construct($serverName,$userName,$userPassword,$dbName)
    {
        $this->conn = new mysqli($serverName,$userName,$userPassword,$dbName);
        if(!$this->conn){
            die("connect error ".$this->conn_error);
        }
//        mysqli_character_set_name($this->conn);
        mysqli_set_charset($this->conn, "utf8");
    }

    /*新增*/
    public function insert(){

    }

    /*查询*/
    public function query($sql){
//        $sql = '';
        $result = $this->conn->query($sql);
        $arr = array();
        $charset=mysqli_character_set_name($this->conn);  //返回数据库默认字符集的编码utf8
        echo "默认字符集为: " . $charset;
        while($rows=mysqli_fetch_array($result)){
            array_push($arr,array('sNo' => $rows['sNo'],'sAge' => $rows['sAge'],
                'sSex' => $rows['sSex'],'sName' => $rows['sName']));
        }
        return $arr;
//        return mysqli_fetch_array($result);
    }

    /*删除*/
    public function remove(){

    }

    /*更新*/
    public function update(){

    }

    /*
     * 析构函数
     * 销毁
     * 析构函数(destructor) 与构造函数相反，当对象结束其生命周期时（例如对象所在的函数已调用完毕），系统自动执行析构函数。
    */
    function _destruct(){
        $this->conn->close();
    }

}

?>