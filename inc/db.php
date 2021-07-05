<?php
 
$db = new DB();
$res = $db->connect($db_host, $db_user, $db_passw, $db_name);
if ( ! $res) exit('db connect error');






class DB
{
    private $w = false;

    function DB()
    {

    }

    function connect($host, $username, $passwd, $dbname)
    {
        $this->w = new mysqli($host, $username, $passwd, $dbname);
        if ($this->w->connect_error) return false;
        $res = $this->w->set_charset('utf8');
        if ( ! $res) return false;
        return true;
    }

    function query($query)
    {
        return $this->w->query($query);
    }

    function escape($escapestr)
    {
        return $this->w->real_escape_string($escapestr);
    }

    function insert_id()
    {
        return $this->w->insert_id;
    }

    function num_rows($result)
    {
        return $result->num_rows;
    }

    function fetch_assoc($result)
    {
        return $result->fetch_assoc();
    }

    function result($result, $offset=0, $field=false)
    {
        $res = $result->data_seek($offset);
        if ( ! $res) return false;
        $row = $result->fetch_assoc();
        return $field ? $row[$field] : $row;
    }
}