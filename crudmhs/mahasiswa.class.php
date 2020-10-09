<?php

class Mahasiswa {

    private $koneksi;

    public function __construct($h, $u, $p, $db) {
        $this->koneksi = mysqli_connect($h, $u, $p, $db);
        if (mysqli_connect_error()) {
            die("Connection failed. ".mysqli_connect_error()." (".mysqli_connect_errno().")");
        }
    }

    public function mysqli_query_cut($q, $i) {
        return substr($q, 0, strlen($q)-$i);
    }

    public function insert($t, $d) {
        $q = "INSERT INTO $t VALUES (";

        foreach ($d as $i => $v) {
            $q .= "'$v',";
        }
        $q = $this->mysqli_query_cut($q, 1);
        $q .= ")";

        // echo $q;
        // return mysqli_query($this->koneksi, $q) or die("Insert data failed. ".mysqli_error($this->koneksi));

        $r = mysqli_query($this->koneksi, $q);

        if ($r) {
            return "success";
        } else {
            return mysqli_error($this->koneksi);
        }
    }

    public function select($t, $d = null, $w = null) {
        if ($d) {
            $q = "SELECT ";
            foreach ($d as $i) {
                $q .= "$i,";
            }
            $q = $this->mysqli_query_cut($q, 1)." FROM $t ";
        } else {
            $q = "SELECT * FROM $t ";
        }

        if ($w) {
            $q .= "WHERE ";
            foreach ($w as $i => $v) {
                $q .= "$i='$v' AND ";
            }
            $q = $this->mysqli_query_cut($q, 5);
        }

        $r = mysqli_query($this->koneksi, $q);

        if ($r) {
            $d = array();
            while ($b = mysqli_fetch_object($r)) {
                $d[] = $b;
            }

            // echo $q;
            return $d;
        } else {
            // return die("Select data failed. ".mysqli_error($this->koneksi));
            return mysqli_error($this->koneksi);
        }

    }

    public function update($t, $d, $w = null) {
        $q = "UPDATE $t SET ";

        foreach ($d as $i => $v) {
            $q .= "$i='$v',";
        }
        $q = $this->mysqli_query_cut($q, 1);

        if ($w) {
            $q .= " WHERE ";
            foreach ($w as $i => $v) {
                $q .= "$i='$v' AND ";
            }
            $q = $this->mysqli_query_cut($q, 5);
        }

        // echo $q;
        // return mysqli_query($this->koneksi, $q) or die("Update data failed. ".mysqli_error($this->koneksi));

        $r = mysqli_query($this->koneksi, $q);

        if ($r) {
            return "success";
        } else {
            return mysqli_error($this->koneksi);
        }

    }

    public function delete($t, $w = null) {
        if ($w) {
            $q = "DELETE FROM $t WHERE ";
            foreach ($w as $i => $v) {
                $q .= "$i='$v' AND ";
            }
            $q = $this->mysqli_query_cut($q, 5);
            
            // echo $q;
            // return mysqli_query($this->koneksi, $q) or die("Delete data failed. ".mysqli_error($this->koneksi));
        } else {
            $q = "DELETE FROM $t";

            // echo $q;
            // return mysqli_query($this->koneksi, $q) or die("Delete data failed. ".mysqli_error($this->koneksi));

        }
        
        $r = mysqli_query($this->koneksi, $q);

        if ($r) {
            return "success";
        } else {
            return mysqli_error($this->koneksi);
        }
    }
}
?>