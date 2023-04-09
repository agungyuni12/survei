<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Access extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();	
    }
    

    
    function readtable($tablename = '', $select='', $where = '', $join = '', $limit = '',$sort = '',$join_model = '',$group_by ='')
    {    
        if(!empty($sort)){
    		$this->db->order_by($sort);
        }
        if(!empty($where)){
    		$this->db->where($where);
        }
        if(!empty($group_by)){
            $this->db->group_by($group_by);
        }
        if(is_array($join) AND !empty($join)){
            foreach($join as $key => $data){            
                $this->db->join($key, $data,$join_model);
            }
        }
        if(is_array($limit) AND !empty($limit)){                   
            $this->db->limit($limit[0], $limit[1]);
        }
        if(!empty($select)){
            $this->db->select($select);
        }       
        $query = $this->db->get($tablename);
        return $query;
    }
    
    function inserttable($tablename = '', $data = '')
    {
        $this->db->insert($tablename, $data); 
    }
       
    function updatetable($tablename = '', $data = '', $where='')
    {                
        $this->db->where($where);
        $this->db->update($tablename, $data); 
    }
     
    function deletetable($tablename = '',$where='')
    {
        $this->db->delete($tablename, $where); 
    }
	
	function max_id($tablename = '', $field = '', $as = '')
	{
		$this->db->select_max($field, $as);
		$query = $this->db->get($tablename);
		
		return $query;
	}
	
	function get_user($user_type)
	{
		if($user_type == 'superadmin'){
			$string_query = "SELECT * FROM user where user_type != 'superadmin'";
		}else{
			$string_query = "SELECT * FROM user where user_type != 'superadmin' AND user_type != 'admin'";
		}

        $query = $this->db->query($string_query);
        return $query;
	}
	
	function get_kasus_pk($id)
	{
		$string_query = "SELECT kasus_pk.*, pk.nama_pk FROM kasus_pk, pk WHERE kasus_pk.id_pk = pk.id_pk AND kasus_pk.id_kasus = $id";

        $query = $this->db->query($string_query);
        return $query;
	}
	
	function get_nilai($id)
	{
		$string_query = "SELECT nilai.*, alternatif.kode_alternatif as kd_alt, kriteria.kode_kriteria as kd_krt FROM nilai, alternatif, kriteria WHERE nilai.id_alternatif = alternatif.id_alternatif AND nilai.id_kriteria = kriteria.id_kriteria AND nilai.id_kasus = $id";

        $query = $this->db->query($string_query);
        return $query;
	}
	
	function get_nilai_ratarata($id)
	{
		$string_query = "SELECT nilai_ratarata.*, alternatif.kode_alternatif as kd_alt, kriteria.kode_kriteria as kd_krt FROM nilai_ratarata, alternatif, kriteria WHERE nilai_ratarata.id_alternatif = alternatif.id_alternatif AND nilai_ratarata.id_kriteria = kriteria.id_kriteria AND nilai_ratarata.id_kasus = $id";

        $query = $this->db->query($string_query);
        return $query;
	}
	
	function get_nilai_baru($id)
	{
		$string_query = "SELECT nilai_baru.*, alternatif.kode_alternatif as kd_alt, kriteria.kode_kriteria as kd_krt FROM nilai_baru, alternatif, kriteria WHERE nilai_baru.id_alternatif = alternatif.id_alternatif AND nilai_baru.id_kriteria = kriteria.id_kriteria AND nilai_baru.id_kasus = $id";

        $query = $this->db->query($string_query);
        return $query;
	}
	
	function get_hasil($id,$tipe)
	{
		$string_query = "SELECT hasil.*, alternatif.*, FIND_IN_SET(hasil.total_nilai,( SELECT GROUP_CONCAT(hasil.total_nilai ORDER BY hasil.total_nilai DESC) FROM hasil WHERE hasil.metode = '".$tipe."' AND hasil.id_kasus = $id)) AS ranking FROM hasil,alternatif WHERE hasil.id_alternatif = alternatif.id_alternatif AND hasil.metode = '".$tipe."' AND hasil.id_kasus = $id";
		
        $query = $this->db->query($string_query);
        return $query;
	}
	
	function get_total_nilai_kriteria($id,$id_krt,$tipe)
	{
		if($tipe == 'topsis'){
			$string_query = "SELECT SUM(nilai*nilai)as jml_nilai FROM nilai WHERE id_kriteria= $id_krt AND id_kasus=$id";
		}else{
			$string_query = "SELECT SUM(nilai)as jml_nilai FROM nilai WHERE id_kriteria= $id_krt AND id_kasus=$id";
		}
		
		$query = $this->db->query($string_query);
		return $query->row()->jml_nilai;
	}
	
	function get_total_nilai_alternatif($id,$id_alt,$tipe)
	{
		if($tipe == 'topsis'){
			$string_query = "SELECT SUM(nilai*nilai)as jml_nilai FROM nilai_baru WHERE id_kriteria= $id_alt AND id_kasus=$id";
		}else{
			$string_query = "SELECT SUM(nilai)as jml_nilai FROM nilai_baru WHERE id_kriteria= $id_alt AND id_kasus=$id";
		}
		
		$query = $this->db->query($string_query);
		return $query->row()->jml_nilai;
	}
	
	function get_nilai_bobot($id,$id_krt)
	{
		$string_query = "SELECT kriteria.kode_kriteria,kriteria.tipe_kriteria, bobot_baru.* FROM kriteria, bobot_baru WHERE kriteria.id_kriteria=bobot_baru.id_kriteria AND bobot_baru.id_kasus = $id AND bobot_baru.id_kriteria = $id_krt";
		$query = $this->db->query($string_query);
		return $query->row();
	}
	
	function get_normalisasi($id,$tipe)
	{
		$string_query = "SELECT nilai.*, (nilai.nilai/(SUM(nilai.nilai) GROUP BY id_kategori))as normalisasi";

        $query = $this->db->query($string_query);
        return $query;
	}
	
	function get_bobot_kriteria($id)
	{
		$string_query = "SELECT bobot_kriteria.*, (SUM(bobot_kriteria.bobot)/COUNT(DISTINCT(bobot_kriteria.id_pk))) AS bobot_baru FROM bobot_kriteria WHERE bobot_kriteria.id_kasus = $id GROUP BY bobot_kriteria.id_kriteria";

        $query = $this->db->query($string_query);
        return $query;
	}
	
	function get_rata_nilai($id)
	{
		$string_query = "SELECT nilai.*, (SUM(nilai.nilai)/COUNT(DISTINCT(nilai.id_pk))) AS nilai_baru FROM nilai WHERE nilai.id_kasus = $id GROUP BY nilai.id_kriteria, nilai.id_alternatif";

        $query = $this->db->query($string_query);
        return $query;
	}
	
	function get_nilai_min($id,$id_krt)
	{
		$string_query = "SELECT MIN(nilai) AS nilai_min FROM nilai_ratarata WHERE id_kasus = $id AND id_kriteria = $id_krt";

        $query = $this->db->query($string_query)->row()->nilai_min;
        return $query;
	}
	
	function get_nilai_max($id,$id_krt)
	{
		$string_query = "SELECT MAX(nilai) AS nilai_max FROM nilai_ratarata WHERE id_kasus = $id AND id_kriteria = $id_krt";

        $query = $this->db->query($string_query)->row()->nilai_max;
        return $query;
	}
	
	function get_jumlah_kuadrat($id,$id_krt)
	{
		$string_query = "SELECT SUM(nilai*nilai)as jml_nilai FROM nilai WHERE id_kriteria= $id_krt AND id_kasus=$id";

        $query = $this->db->query($string_query)->row()->jml_nilai;
        return $query;
	}
	
	function get_jumlah_kuadrat_ratanilai($id,$id_krt)
	{
		$string_query = "SELECT SUM(nilai*nilai)as jml_nilai FROM nilai_ratarata WHERE id_kriteria= $id_krt AND id_kasus=$id";

        $query = $this->db->query($string_query)->row()->jml_nilai;
        return $query;
	}
	
	function get_min_si($id,$id_krt)
	{
		$string_query = "SELECT MIN(nilai) AS nilai_min FROM nilai_solusi_ideal WHERE id_kasus = $id AND id_kriteria = $id_krt";

        $query = $this->db->query($string_query)->row()->nilai_min;
        return $query;
	}
	
	function get_max_si($id,$id_krt)
	{
		$string_query = "SELECT MAX(nilai) AS nilai_max FROM nilai_solusi_ideal WHERE id_kasus = $id AND id_kriteria = $id_krt";

        $query = $this->db->query($string_query)->row()->nilai_max;
        return $query;
	}
	
	function review_jml_metode($id)
	{
		$string_query = "SELECT COUNT(DISTINCT metode)AS metode FROM hasil WHERE id_kasus=$id";

        $query = $this->db->query($string_query)->row()->metode;
        return $query;
	}
	
	function review_kriteria($id)
	{
		$string_query = "SELECT kriteria.*,bobot_baru.bobot FROM kriteria, bobot_baru WHERE bobot_baru.id_kriteria = kriteria.id_kriteria AND kriteria.id_kasus = $id";

        $query = $this->db->query($string_query);
        return $query;
	}
	
	function review_nilai($id,$id_alt,$id_krt)
	{
		$pk = $this->db->query("SELECT COUNT(DISTINCT id_pk)AS num_pk FROM nilai WHERE id_kasus=$id")->row()->num_pk;
		if($pk > 1){
			$string_query = "SELECT (SUM(nilai)/COUNT(DISTINCT(id_pk))) AS nilai FROM nilai WHERE id_kasus = $id AND id_kriteria = $id_krt AND id_alternatif = $id_alt";
		}else{
			$string_query = "SELECT nilai FROM nilai WHERE id_kasus = $id AND id_kriteria = $id_krt AND id_alternatif = $id_alt";
		}
        $query = $this->db->query($string_query)->row()->nilai;
        return $query;
	}
	
	function get_bobot_edit($id, $id_pk)
	{
		$string_query = "SELECT kriteria.nama_kriteria,bobot_kriteria.* FROM kriteria, bobot_kriteria WHERE bobot_kriteria.id_kriteria = kriteria.id_kriteria AND kriteria.id_kasus = $id AND bobot_kriteria.id_pk = $id_pk";

        $query = $this->db->query($string_query)->result();
        return $query;
	}
	
}