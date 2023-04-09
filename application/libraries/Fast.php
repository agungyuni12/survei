<?php
defined('BASEPATH') OR exit('No direct script access allowed');


// library ini adalah hasil copy paste dari beberapa calss di maindri yang di gunakan untuk mengambil data secara cepat 
class Fast
{
	protected $ci;

	public function __construct()
	{
		$this->ci =& get_instance();
	}

	public function do_ge_performence_relazation($param_data = array())
	{
		// date, where, db, group by, order_by, how,limit, yes or no
		if (!empty($param_data)) {
			extract($param_data);
			// print_r($date);
			$as_amount = "amount";
			if(isset($arr_where['amount_result'])){
				if($arr_where['amount_result']) $as_amount = $arr_where['amount_result'];
				unset($arr_where['amount_result']);
			}

			$limits_stat = "";
			if(strpos($db, "credit") !== false){$limits_stat = ", sum( limits ) as limits";}
			$this->ci->db->select("*, sum(".$as_amount.") as endbal ".$limits_stat.", ".$group_by." as tit_col");        
			if($arr_where){
				foreach($arr_where as $key => $row){
					if(is_array($row))
					{
						$this->ci->db->where_in($key, $row);
					}
					else{
						$this->ci->db->where($key, $row);
					}
				}
			}
			if($limit){$this->ci->db->limit($limit);}

			if(is_array($date)){
				if($date[0] == "range_date"){
					$from = $date[1]; $to = $date[2];
					if($to<$from){
						$this->ci->db->where("date",$to);
					}
					else{
						$this->ci->db->where("date BETWEEN '$from' AND '$to'");
					}
				}else{
					$this->ci->db->where_in("date",$date);
				}
			}
			else{$this->ci->db->where("date",$date);}

			if($combine_data == "NO"){
				if($group_by == "customer_group"){$this->ci->db->group_by('buc');}
			}
			$this->ci->db->group_by($group_by);
			$this->ci->db->order_by($order_by, $how);
			$query = $this->ci->db->get($db);
			if($query->result()){
				return $query->result();
			}
			else{
				return false;
			}
		}
	}

	public function get_cust_realz($type =0, $code = 0)
	{
		$this->ci->db->select("customer.id, customer.customer_name as customer, custgroup_name, credit, fund, fee, buc");
		$this->ci->db->distinct();

		if($type == "rm"){
			$this->ci->db->where("nip",$code);
			$this->ci->db->join('user_customer', 'customer.customer_name = user_customer.customer_name');
			
		}elseif($type == "buc"){
			$this->ci->db->where("buc",$code);
		}elseif($type == "group" && $code){
			$group = get_group_buc($code);
			$this->ci->db->where("buc like 'CB$group%'");
		}elseif($type == "cust_group" && $code){
			$this->ci->db->where("custgroup_name", "$code");
		}
		$this->ci->db->order_by('credit','desc');
		$query = $this->ci->db->get('customer');
		return $query->result();
	}

	public function get_last_date_on_db($db = 'undefained')
	{
		$this->ci->db->select('MAX(date) as latest_date');
		$realizations = $this->ci->db->get($db);

		return $realizations ->result()[0]->latest_date;
	}


	public function get_db($order,$how,$db,$arr_where,$select,$limit){
		if($arr_where){
			if(is_array($arr_where)){
				foreach ($arr_where as $key => $value) {
					if(is_array($value)) $this->ci->db->where_in($key, $value);
					else $this->ci->db->where($key, $value);
				}    
			}else{
				$this->ci->db->where($arr_where);
			}


		}
		if($limit){$this->ci->db->limit($limit);}
		if($select){$this->ci->db->select($select);}

		if(is_array($order)){
			$i=0;
			foreach($order as $row){
				$this->ci->db->order_by($row,$how[$i]); $i++;
			}
		}
		else{$this->ci->db->order_by($order,$how);}

		$query = $this->ci->db->get($db);
		return $query->result();
	}

}

/* End of file Fast.php */
/* Location: ./application/libraries/Fast.php */
