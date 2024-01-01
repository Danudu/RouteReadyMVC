<?php
trait Model{

    use Database;
    // protected $table = 'user';
    protected $id_column = 'id';
    // function test(){
    //     $query = "SELECT * FROM user";
    //     $data = $this->query($query);
    //     show($data);
    // }
    public function findAll(){
        $query = "SELECT * FROM $this->table ORDER BY $this->id_column DESC";
        return $this->query($query);

    }
    public function where($data){
        $keys = array_keys($data);

        $query ="SELECT * FROM $this->table WHERE ";
        foreach($keys as $key){
            $query .= "$key = :$key";
        }
        // echo $query;
        return $this->query($query, $data);
    }
    public function insert($data){
        /*Remove Unwanted Data*/
        if(!empty($this->allowedColumns)){
            foreach($data as $key => $value){
                if(!in_array($key, $this->allowedColumns)){
                    unset($data[$key]);
                }
            }
        }
        $keys = array_keys($data);
        $query ="INSERT INTO $this->table (".implode(",",$keys).") VALUES (:".implode(",:",$keys).")";
        // echo $query;
        $this->query($query, $data);
        return false;
    }
    public function update($id, $data, $id_column = 'id'){
        
        /*Remove Unwanted Data*/
        if(!empty($this->allowedColumns)){
            foreach($data as $key => $value){
                if(!in_array($key, $this->allowedColumns)){
                    unset($data[$key]);
                }
            }
        }
        $keys = array_keys($data);

        $query ="UPDATE $this->table SET  ";
        foreach($keys as $key){
            $query .= $key. "= :".$key.",";
        }
        $query = rtrim($query, ',');
        $query .= " WHERE $id_column = :$id_column";
        $data[$id_column] = $id;
        // echo $query;
        $this->query($query, $data);
        return false;
    }
    public function delete($id, $id_column = 'id'){
        $data[$id_column] = $id;
        $query ="DELETE FROM $this->table WHERE $id_column = :$id_column";
        // echo $query;
        $this->query($query, $data);
        return false;
    }

}