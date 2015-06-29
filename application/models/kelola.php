<?php

	Class Kelola extends CI_Model {

		
	// Insert registration data in database
	function show_user() {

		// Query to check whether username already exist or not
		//$condition = "user_name =" . "'" . $data['user_name'] . "'";
		$this->db->select('*');
		$this->db->from('user');
		//$this->db->where($condition);
		//$this->db->limit(1);
		$query = $this->db->get();
		return $query -> result();
		//if ($query->num_rows() == 0) {

			// Query to insert data in database
//			$this->db->insert('user_login', $data);
//			if ($this->db->affected_rows() > 0) {
//				return true;
//			}
//			} else {
//				return false;
//			}
		//if ($query->num_rows() == 1) {
		//	return $query->result();
		//} else {
		//	return false;
		//}	
		}	

	function get_kategori(){
		$this->db->select('*');
		$this->db->from('kategori1');

		$query = $this->db->get();
		return $query -> result();
	}

	function simpan_barang($data){
		$query = $this->db->insert('barang1',$data);
		if ($this->db->affected_rows() > 0) {
				return TRUE;
			}else {
				return FALSE;
			}
	}

	function update_barang($data){
		$this->db->where('id', $data['id']);
		$query = $this->db->update('barang1',$data);
		if ($this->db->affected_rows() > 0) {
				return TRUE;
			}else {
				return FALSE;
			}
	}

	function get_barang(){
		$this->db->select('*');
		$this->db->from('barang1');
		$query = $this->db->get();
		return $query -> result();
	}

	function get_kat_bar(){
		$query = "SELECT kategori1.kategori , barang1.kategori  
				FROM kategori1, barang1
				WHERE kategori1.kategori = barang1.kategori";
        //Get all invoices from Invoices table
        $hasil = $this->db->query($query);
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else {
            return false;
        }
	}

	function edit_barang($get){
		$query = "SELECT barang1.*, kategori1.kategori
				FROM barang1, kategori1
				WHERE barang1.kategori = kategori1.id and barang1.id=$get";
        //Get all invoices from Invoices table
        $hasil = $this->db->query($query);

        return $hasil->result();


  
		/**$condition = "id =". "'" . $get . "'";
		$this->db->select('*');
		$this->db->from('barang1');
		$this->db->where($condition);
		$query = $this->db->get();
		return $query -> result();
		**/
	}

	function edit_barang2($get){
		$query = "SELECT barang1.$get[ukuran]
				FROM barang1
				WHERE id=$get[id]";
        //Get all invoices from Invoices table
        $hasil = $this->db->query($query);

        return $hasil->result();


  
		/**$condition = "id =". "'" . $get . "'";
		$this->db->select('*');
		$this->db->from('barang1');
		$this->db->where($condition);
		$query = $this->db->get();
		return $query -> result();
		**/
	}

	function cek_sepatu($get){
		$query = "SELECT stok
				FROM barang1
				WHERE id=$get[id]";
        //Get all invoices from Invoices table
        $hasil = $this->db->query($query);

        return $hasil->result();


	}


	function cari_kategori($get){
		$condition = "kategori =". "'" . $get . "'";
		$this->db->select('*');
		$this->db->from('barang1');
		$this->db->where($condition);
		$query = $this->db->get();
		return $query -> result();

	}

	function name_kategori($get){
		$condition = "id =". "'" . $get . "'";
		$this->db->select('kategori');
		$this->db->from('kategori1');
		$this->db->where($condition);
		$query = $this->db->get();
		return $query -> result();
	}

	function delete_barang($get){
		$query = $this->db->delete('barang1', array('id' => $get));
		if ($this->db->affected_rows() > 0) {
				return TRUE;
			}else {
				return FALSE;
			}
	}

	function delete_user($get){
		$query = $this->db->delete('user', array('id' => $get));
		if ($this->db->affected_rows() > 0) {
				return TRUE;
			}else {
				return FALSE;
			}
	}

	function edit_user($get){
		$condition = "id =". "'" . $get . "'";
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where($condition);
		$query = $this->db->get();
		return $query -> result();
	}

	function update_user($data){
		$this->db->where('id', $data['id']);
		$query = $this->db->update('user',$data);
		if ($this->db->affected_rows() > 0) {
				return TRUE;
			}else {
				return FALSE;
			}
	}

	function add_testimoni($data){
		$query = $this->db->insert('testimoni',$data);
		if ($this->db->affected_rows() > 0) {
				return TRUE;
			}else {
				return FALSE;
			}
	}

	function get_testimoni(){
		$this->db->select('*');
		$this->db->from('testimoni');
		$this->db->order_by("id", "desc");
		$query = $this->db->get();
		return $query -> result();
	}

	function get_testimoni_sidebar(){
		//$condition = "id =". "'" . $get . "'";
		$this->db->select('*');
		$this->db->from('testimoni');
		//$this->db->where($condition);
		$this->db->order_by("id", "desc");
		$this->db->limit('2');
		$query = $this->db->get();
		return $query -> result();

	}

	function get_barang_detail($get){
		$condition = "id =". "'" . $get . "'";
		$this->db->select('*');
		$this->db->from('barang1');
		$this->db->where($condition);
		$this->db->limit('1');
		$query = $this->db->get();
		return $query -> result();
	}



	//Cart
	public function order($data)
	{

		//create new invoice
		$invoice = array(
			'date'		=> date('Y-m-d'),			
            'user_id'   => $data,
			'status'	=> 'unconfirmed'
		);
		$this->db->insert('invoices', $invoice);
		$invoice_id = $this->db->insert_id();
		
		// put ordered items in orders table
		foreach($this->cart->contents() as $item){
			$data = array(
				'invoice_id'		=> $invoice_id,
				'product_id'		=> $item['id'],
				'product_name'		=> $item['name'],
				'qty'				=> $item['qty'],
				'price'				=> $item['price'],
				'options'				=> $item['options']['Size']
			); 
			
			//menyimpan apa kategori barang
			$dataa = array(
				'kategori'			=> $item['kat']
				);


			$this->db->insert('orders', $data);

			//update stok
			$stok = array(
				'out' => $data['qty'],
				'in' => 0
			);
			
			//melakukan query yang berpedoman pada jenis kategori
			if ($dataa['kategori'] == 3){
				$query = "UPDATE barang1 set barang1.stok = (barang1.stok - $data[qty]) where barang1.id = $data[product_id]";
				$this->db->query($query);
			}else{
				$query = "UPDATE barang1 set barang1.$data[options] = (barang1.$data[options] - $data[qty]) where barang1.id = $data[product_id]";
				$this->db->query($query);
			}
		}
		
		return true;
	}
	
    public function get_pesanan($id)
    {
        $query = "SELECT invoices.id , invoices.date, invoices.status , orders.qty  
				FROM invoices, orders
				WHERE invoices.id = orders.invoice_id and invoices.user_id=$id";
        //Get all invoices from Invoices table
        $hasil = $this->db->query($query);
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else {
            return false;
        }
    }

    public function get_pesanan_admin()
    {
        $query = "SELECT invoices.id , invoices.date, invoices.status , orders.qty, user.nama, orders.product_name, user.email, orders.options  
				FROM invoices, orders, user
				WHERE invoices.id = orders.invoice_id and invoices.user_id = user.id";
        //Get all invoices from Invoices table
        $hasil = $this->db->query($query);
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else {
            return false;
        }
    }

    public function get_invoice_by_id($invoice)
    {
    	$query = "SELECT invoices.id , invoices.date, invoices.status,invoices.bukti, orders.options, orders.qty, orders.product_name, orders.product_id, orders.price, orders.pengiriman, orders.total_harga, user.email, user.nama, user.alamat, user.kota, user.kecamatan, user.kelurahan , user.provinsi, barang1.harga
				FROM invoices, orders, user, barang1
				WHERE invoices.id = $invoice and invoices.id = orders.invoice_id "; //and invoices.user_id = user.id and barang1.id = orders.product_id
        $hasil = $this->db->query($query);
        return $hasil -> result();
    }

    public function upload_konfirmasi($data){
    		$query = $this->db->insert('konfirm_pembayaran',$data);
		if ($this->db->affected_rows() > 0) {
				return TRUE;
			}else {
				return FALSE;
			}
    }

    public function get_pembayaran($data){
    	 $query = "SELECT *   
				FROM konfirm_pembayaran
				WHERE id_user = $data";
        //Get all invoices from Invoices table
        $hasil = $this->db->query($query);
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else {
            return false;
        }
    }

    public function get_pembayaran1(){
    	$query = "SELECT konfirm_pembayaran.*, invoices.status  
				FROM konfirm_pembayaran, invoices
				WHERE konfirm_pembayaran.id_invoice = invoices.id";
    	/* $query = "SELECT *   
				FROM konfirm_pembayaran";
        */
        //Get all invoices from Invoices table
        $hasil = $this->db->query($query);
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else {
            return false;
        }
    }

    public function accept_bukti($id){
    	 $query = "UPDATE invoices SET status='paid' WHERE id=$id";
        //Get all invoices from Invoices table
        $hasil = $this->db->query($query);
        if($hasil){
            return true;
        } else {
	            return false;       
	    }
	}

	    public function delete_bukti($id){
    	$query = $this->db->delete('konfirm_pembayaran', array('id_invoice' => $id));
		if ($this->db->affected_rows() > 0) {
				return TRUE;
			}else {
				return FALSE;
			}
	}

	public function set_status_penjualan($get){
		//Penambahan stok jika gagal transaksi
    	$result = $this->get_invoice_by_id($get['id']);
    	$data = array(
    		'id' => $result[0]->product_id,
          	'options' =>$result[0]->options,
          	'qty' =>$result[0]->qty
        );
        //update status
    		$query = "UPDATE invoices, orders SET orders.pengiriman=$get[pengiriman], orders.total_harga=$get[total_harga] WHERE invoices.id=$get[id] AND invoices.id=orders.invoice_id";
    		$hasil = $this->db->query($query);
    		if($hasil){
            	return true;
        	} else {
	            return false;       
	   	 	}
        /*
    	if ($get['status']=='batal'){
    		$query1 = "UPDATE barang1, invoices set barang1.$data[options] = (barang1.$data[options] + $data[qty]), invoices.status='$get[status]' where barang1.id = $data[id]";
    		$hasil = $this->db->query($query1);
    		if($hasil){
            	return true;
        	} else {
	            return false;       
	   	 	}
    	}else{
    		//update status
    		$query = "UPDATE invoices, orders SET invoices.status='$get[status]', orders.pengiriman=$get[pengiriman], orders.total_harga=$get[total_harga] WHERE invoices.id=$get[id] AND invoices.id=orders.invoice_id";
    		$hasil = $this->db->query($query);
    		if($hasil){
            	return true;
        	} else {
	            return false;       
	   	 	}
    	} */   	
    	
    } 

    	public function set_status_penjualan1($get){
		//Penambahan stok jika gagal transaksi
    	$result = $this->get_invoice_by_id($get['id']);
    	$data = array(
    		'id' => $result[0]->product_id,
          	'options' =>$result[0]->options,
          	'qty' =>$result[0]->qty,
        );
        //update status
    		if ($get['status']=='batal'){
    		$query1 = "UPDATE barang1, invoices, orders set barang1.$data[options] = (barang1.$data[options] + $data[qty]), invoices.status='$get[status]' WHERE invoices.id=$get[id] and invoices.id=orders.invoice_id and orders.product_id=barang1.id"; //where barang1.id = $data[id]";
    		$hasil = $this->db->query($query1);
    		if($hasil){
            	return true;
        	} else {
	            return false;       
	   	 	}
    	}else{
    		//update status
    		$query = "UPDATE invoices, orders SET invoices.status='$get[status]' WHERE invoices.id=$get[id] AND invoices.id=orders.invoice_id";
    		$hasil = $this->db->query($query);
    		if($hasil){
            	return true;
        	} else {
	            return false;       
	   	 	}
    	}

    	
        /*
    	if ($get['status']=='batal'){
    		$query1 = "UPDATE barang1, invoices set barang1.$data[options] = (barang1.$data[options] + $data[qty]), invoices.status='$get[status]' where barang1.id = $data[id]";
    		$hasil = $this->db->query($query1);
    		if($hasil){
            	return true;
        	} else {
	            return false;       
	   	 	}
    	}else{
    		//update status
    		$query = "UPDATE invoices, orders SET invoices.status='$get[status]', orders.pengiriman=$get[pengiriman], orders.total_harga=$get[total_harga] WHERE invoices.id=$get[id] AND invoices.id=orders.invoice_id";
    		$hasil = $this->db->query($query);
    		if($hasil){
            	return true;
        	} else {
	            return false;       
	   	 	}
    	} */   	
    	
    } 

    public function delete_pesanan_admin($get){
    	//update stok
    	$result = $this->get_invoice_by_id($get);
    	$data = array(
    		'id' => $result[0]->product_id,
          	'options' =>$result[0]->options,
          	'qty' =>$result[0]->qty
        );
        $query = "UPDATE barang1 set barang1.$data[options] = (barang1.$data[options] + $data[qty]) where barang1.id = $data[id]";
		$this->db->query($query);
		//delete invoice
    	$query = "DELETE FROM invoices, orders";

        //Get all invoices from Invoices table
        $hasil = $this->db->delete('invoices', array('invoices.id' => $get));
        $hasil2 = $this->db->delete('orders', array('orders.invoice_id' => $get));
        if($this->db->affected_rows()> 0){
            return true;
        } else {
            return false;
        }
    }
























    public function get_orders_by_invoice($invoice_id)
    {
        $hasil = $this->db->where('invoice_id',$invoice_id)->get('orders');
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else {
            return false;
        }
    }

    public function get_logged_user_id()
    {
        $hasil = $this->db
                        ->select('id')
                        ->where('username',$this->session->userdata('username'))
                        ->limit(1)
                        ->get('users');
        if($hasil->num_rows() > 0){
            return $hasil->row()->id;
        } else {
            return 0;
        }
    }

    


}

?>