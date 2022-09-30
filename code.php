<?php
class search
{ //   connect with database
    private $localhost = "localhost";
    private $user = "root";
    private $password = "";
    private $dbname = "mydb4";
    public $connection;

    public function __construct()
    {
        $this->connection = new mysqli($this->localhost, $this->user, $this->password, $this->dbname);
        if (mysqli_connect_error()) {
            echo "not connected";
        } else {
            return $this->connection;
        }
    }
    // search function
    public function search()
    {
        $search = $this->connection->real_escape_string($_POST['item']);
        $ro = strpos($search, "-");
        if ($ro) {
            $search = explode('-', $search);
            foreach ($search as $word) {
                $query = "select * from stud where title like '%$word%' or description like '%$word%'";
                $result = $this->connection->query($query);
                $num_result = $result->num_rows;
                if ($num_result > 0) {
                    while ($rows = $result->fetch_assoc()) {
                        $this->data[] = $rows;
                    }
                    return $this->data;
                } else {
                    echo "no records found";
                }
            }
        } else {
            $search = explode(' ', $search);
            foreach ($search as $word) {
                $query = "select * from stud where title like '%$word%' or description like '%$word%'";
                $result = $this->connection->query($query);
                $num_result = $result->num_rows;
                if ($num_result > 0) {
                    while ($rows = $result->fetch_assoc()) {
                        $this->data[] = $rows;
                    }
                    return $this->data;
                } else {
                    echo "no records found";
                }
            }
        }
    }
}
