<?php
class Subhodaya extends Controller {
	var $layout = 'default'; 
	function Subhodaya(){
		parent::Controller();
		$this->load->helper('directory');
		$this->load->model('admin/News_Model');
		$this->load->model("admin/Cinema_Model");
		$this->load->model("admin/Poll_Model");
		$this->load->model("admin/Mahila_Model");
		$this->load->model("admin/Sahithi_Model");
		$this->load->Model("admin/Gallery_Model");
		$this->load->Model('admin/Greeting_Model');
		
	}
	function index(){
		$news_type7=$this->News_Model->get_newstype1(7);
		$active_news=$this->News_Model->active_news(2);
		$active_news1=$this->News_Model->active_news(7);
		$news_type4=$this->News_Model->get_newstype1(4);
		$cinema_type2=$this->Cinema_Model->get_cinematype(2);
		$cinema_type1=$this->Cinema_Model->get_cinematype(1);
		$more=$this->News_Model->more_news();
		$yes_poll=$this->Poll_Model->get_yes_newspoll($type=4);
		$newspoll=$this->Poll_Model->get_newspolls($type=4);
		$sahithi_details=$this->Sahithi_Model->active_sahithi(1);
		$mahila_details=$this->Mahila_Model->active_mahila(1);
	   // print_r($sahithi_details);
	    $greetings1=$this->Greeting_Model->get_main_greetings(1);

		$details=$this->Gallery_Model->get_cateimage(11);
		$images=array();
		foreach($details as $item)
		{
			$images[$item->id]=$this->Gallery_Model->getimage($item->id);
		}
		print_r($images);
		//print_r($sahithi_details);
		$data=array('more'=>$more,
		            'news_type7'=>$news_type7,
					'news_type4'=>$news_type4,
					'cinema_type2'=>$cinema_type2,
					'cinema_type1'=>$cinema_type1,
					'newspoll'=>$newspoll,
					'yes_poll'=>$yes_poll,
					'active_news'=>$active_news,
		            'active_news1'=>$active_news1,
		            'sahithi_details'=>$sahithi_details,
		           'mahila_details'=>$mahila_details,
					'images'=>$images,
					'greetings1'=>$greetings1
					);
		$this->load->view('home',$data);
	}
	function sendmail()
	{
		$to = "$_POST[email]";
        $subject = "Hai your friend".$_POST['name']." sent u an article on shubhodaya";
        $message = $_POST['url'];
        $message.="\n";
        $message.= $_POST['description'];
        $headers = "From:";
//        if( mail($to,$subject,$message,$headers))
//         echo "sent successfully";
//        else
//         echo "we cant send mail";
	    }

}
?>