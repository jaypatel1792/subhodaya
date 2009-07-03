<?php
class News_Model extends Model {
	function rename($data,$id){
		$oldname='assets/news/'.$data['upload_data']['file_name'];
		rename($oldname,'assets/news/news_img'.$id.'.jpg');
	}
	function getnews_details(){
		$result=$this->db->get('news');
		return $result->result();
	}
	function delete($id){
	$remove=array();
    	if(isset($_POST['remove']))
    	{
    		$remove = $_POST['removeid'];
    		
    	}
    	else {
    		$remove = array($id);
    	}
    	foreach($remove as $item)
    	{
    		$this->db->where('id',$item);
    		$this->db->delete('news');
    		unlink('./assets/news/news_img'.$item.'.jpg');
    		unlink('./assets/news/news_img'.$item.'_thumb.jpg');
    	}
	}
	function getdetails($id){
		$result=$this->db->get_where('news',array('id'=>$id));
		return $result->result();
		
	}
    function edit1($id,$breaking)
    {
    	
    	$data=array('heading'=>$_POST['heading'],
  					'summery'=>$_POST["summary"],
  					'description'=>$_POST["description"],
  					'breking_news'=>$breaking
  					);
  					print_r($data);
  		$this->db->where('id',$id);	
  		$this->db->update('news',$data);		
    }
    function get_newstype(){
    	$this->db->select('id,news_cat');
    	$result=$this->db->get('news_types');
    	return $result->result();
    }
    function get_newstype1(){
    	$this->db->select('*');
    	$this->db->where('type','1');
		$this->db->from('news_types');
		$this->db->join('news', 'news.type= news_types.id');
		$query = $this->db->get_where();
		return $query->result();
    }
    function get_newstype2(){
    	$this->db->select('*');
    	$this->db->where('type','2');
		$this->db->from('news_types');
		$this->db->join('news', 'news.type= news_types.id');
		$query = $this->db->get_where();
		return $query->result();
    }
    function get_newstype3(){
    	$this->db->select('*');
    	$this->db->where('type','3');
		$this->db->from('news_types');
		$this->db->join('news', 'news.type= news_types.id');
		$query = $this->db->get_where();
		return $query->result();
    }
    function get_newstype4(){
    	$this->db->select('*');
    	$this->db->where('type','4');
		$this->db->from('news_types');
		$this->db->join('news', 'news.type= news_types.id');
		$query = $this->db->get_where();
		return $query->result();
    }
    function get_newstype5(){
    	$this->db->select('*');
    	$this->db->where('type','5');
		$this->db->from('news_types');
		$this->db->join('news', 'news.type= news_types.id');
		$query = $this->db->get_where();
		return $query->result();
    }
    function get_newstype6(){
    	$this->db->select('*');
    	$this->db->where('type','6');
		$this->db->from('news_types');
		$this->db->join('news', 'news.type= news_types.id');
		$query = $this->db->get_where();
		return $query->result();
    }
    function more_news(){
    	$result=$this->db->get('more');
    	return $result->result();
    }
    function get_news($type){
    
 		$this->db->select('*');
    	$this->db->where('type',$type);
		$this->db->from('news_types');
		$this->db->join('news', 'news.type= news_types.id');
		$query = $this->db->get_where();
		
			return $query->result();
		
		
    }
    function inner_news($id){
    	$this->db->select('*');
    	$this->db->where('news.id',$id);
		$this->db->from('news_types');
		$this->db->join('news', 'news.type= news_types.id');
		$query = $this->db->get_where();
		return $query->result();
    }
}
?>