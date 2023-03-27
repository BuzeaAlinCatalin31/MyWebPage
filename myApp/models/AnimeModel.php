<?php

class AnimeModel extends UsersModel
{
    protected $animeName;
    protected $tier;

    public function __construct($animeName='A', $tier='T'){
        $this->animeName = $animeName;
        $this->tier = $tier;
    }

    public function getAnime(){
        $q = "SELECT * FROM	`anime_list` ORDER BY CASE
             WHEN tier = 'S' THEN 1
             WHEN tier = 'A' THEN 2
             WHEN tier = 'B' THEN 3
             WHEN tier = 'C' THEN 4
             WHEN tier = 'D' THEN 5.
             ELSE 6 END ASC,
             animeName ASC";
		$result = $this->db()->query($q);
		return $result->fetch_all(MYSQLI_ASSOC);
    }    

    public function delAnime($id){
        $q = "DELETE FROM `anime_list` WHERE `id` = $id;";
		$result = $this->db()->query($q);
		if($result) return true;
        else return false;
    }

    public function addAnime($animeName, $tier){
        $q = "INSERT INTO `anime_list`
                (`animeName`, `tier`)
                VALUES (?, ?);";
        $myPrep = $this->db()->prepare($q);
        $myPrep->bind_param("ss", $animeName, $tier);
        if($myPrep->execute()) {
            return true;
        }
        else {
            return false;
        }
    }

    public function animeList(){

        $dataArray = $this->getAnime();
        $table = '';

        if(is_array($dataArray)){
            $table .= '<h3 class="mb-4">This is your list of anime:</h3>
                       <table id="tableID" style="background-color:#F8F8FF" class="table w-50 table-striped table-bordered"><tr>';
            $table .= "<th>ID</th>";
            $table .= "<th>Anime</th>";
            $table .= "<th style='width:50px'>Tier</th>";
            $table .= "<th style='width:80px'>Action</th>";
            $table .= '</tr >';
            $i=1;
            foreach($dataArray as $anime){
                $table .= '<tr><td style="width:50px; text-align:center">'.$i.'.</td>';
                $i++;
                foreach($anime as $field=>$value){
                    if($field !== 'id'){
                        $table .= "<td>$value</td>";
                    }
                }
                $del_id = $anime['id'];
                $edit_id = $anime['id'];
                $table .= '<td>'. 
                          "<form action='delanime' method='post'>
                          <button class='btn btn-danger btn-sm' name='del_id' type='submit' value='$del_id'>DELETE</button>
                          </form>";                           
                $table .= '</tr>';
            }
            $table .= '</table>';
        }
        return $table;  
    }
}