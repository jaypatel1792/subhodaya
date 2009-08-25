<?php
class News extends Controller {
	var $layout = 'default'; 
	function News(){
		parent::Controller();
		$this->load->model("admin/News_Model");
		$this->load->model("admin/Poll_Model");
		$this->load->model("admin/Cinema_Model");
	}
	function index(){
		$more=$this->News_Model->more_news();
		$details=$this->News_Model->get_newstype1(1);
		$news_type2=$this->News_Model->get_newstype1(2);
		$news_type3=$this->News_Model->get_newstype1(3);
		$news_type4=$this->News_Model->get_newstype1(4);
		$news_type5=$this->News_Model->get_newstype1(5);
		$news_type6=$this->News_Model->get_newstype1(6);
		$news_type7=$this->News_Model->get_newstype1(7);
		$newspoll=$this->Poll_Model->get_newspolls($type=4);
		$yes_poll=$this->Poll_Model->get_yes_newspoll($type=4);
		$active_news1=$this->News_Model->active_news(1);
		$active_news2=$this->News_Model->active_news(2);
		$active_news3=$this->News_Model->active_news(3);
		$active_news4=$this->News_Model->active_news(4);
		//print_r($active_news1);
		$data=array('news_type1'  =>  $details,
					'news_type2'  =>  $news_type2,
					'news_type3'  =>  $news_type3,
					'news_type4'  =>  $news_type4,
					'news_type5'  =>  $news_type5,
					'news_type6'  =>  $news_type6,
					'news_type7'  =>  $news_type7,
					'more'        =>  $more,
					'newspoll'    =>  $newspoll,
					'yes_poll'    =>  $yes_poll,
					'active_news1'=>  $active_news1,
					'active_news2'=>  $active_news2,
					'active_news3'=>  $active_news3,
					'active_news4'=>  $active_news4
		);
		$this->load->view("news_main",$data);
	}
	function details(){
		$type=$this->uri->segment(3);
		$onload = "loadNews('".base_url()."newslist/listview/".$type."')";
		$more=$this->News_Model->more_news();
		$type=$this->uri->segment(3,0);
		$totel_rows=$this->News_Model->get_news($type,$count=true,$limit=0);
		$news=$this->News_Model->get_news($type,$count=false);
		$data=array(	'news'  =>$news,
						'more'=>$more,
						'onload' => $onload
					/*'pagination'=>$pagination*/);
		$this->load->view("news_content",$data);
	}
	function newsdetails(){
		$more=$this->News_Model->more_news();
		$cinema_type1=$this->Cinema_Model->get_cinematype(1);
		$id=$this->uri->segment(3,0);
		$result=$this->News_Model->inner_news($id);
		$data=array('result'   =>   $result,
					 'more'    =>   $more,
				'cinema_type1' =>   $cinema_type1);
				
		$this->load->view('news_inner',$data);
	}
}
?>