<?php
class Feeds extends Controller {
	function __construct()
	{
		parent::Controller();
		$this->load->model('feeds_model');
	}
	function news()
		{
				$query=$this->feeds_model->news();
				header('Content-type: text/xml');
						
				$output = '<rss version="2.0">';
			    $output .= '<channel>';
			    $output .= '<image>
			      				<link>'.base_url().'</link>
			                    <title>Subhodaya.com</title>
			                    <url>'.base_url().'assets/imgs/logo128 x 31.jpg</url>
			               </image>';
			    $output .= '<title>subhodaya special news</title>';
			    $output .= '<description>Latest news in suhodaya</description>';
			    $output .= '<link>http://www.subhodaya.com/news</link>';
			    $output .= '<copyright>CopyRight 2008-2009</copyright>';
			foreach($query->result() as $row)
			{	
					$output .= "<item><title>".strip_tags($row->heading)."</title>
				                    <link>".base_url()."news/newsdetails/".($row->id)."/".($row->type)."</link>
				                    <pubDate>".strip_tags($row->insert_date)."</pubDate>
				                                       
				<description>"."<![CDATA[<p><a href=".base_url()."news/newsdetails/".($row->id)."/".($row->type).">"."<img src=".base_url()."assets/news/news_img".($row->id)."_thumb.jpg  align=left border=0></a></p><p>".strip_tags($row->summary)."]]>"."</description>
				                </item>
				                "."<br/>"."<br/>"."<br/>"."<br/>"."<br/>"."<br/>"."<br/>"."<br/>"."<br/>"."<br/>"."<br/>"."<br/>";
			}
			  $output .= '</channel>';
			  $output .= '</rss>';
			  echo($output);
		}
		function cinema()
		{
			$query=$this->feeds_model->cinema();
				header('Content-type: text/xml');
						
				$output = '<rss version="2.0">';
			    $output .= '<channel>';
			    $output .= '<image>
			      				<link>'.base_url().'</link>
			                    <title>Subhodaya.com</title>
			                    <url>'.base_url().'assets/imgs/logo128 x 31.jpg</url>
			               </image>';
			    $output .= '<title>subhodaya special news</title>';
			    $output .= '<description>Latest cinema news in suhodaya</description>';
			    $output .= '<link>http://www.subhodaya.com/cinema</link>';
			    $output .= '<copyright>CopyRight 2008-2009</copyright>';
			foreach($query->result() as $row)
			{	
					$output .= "<item><title>".strip_tags($row->heading)."</title>
				                    <link>".base_url()."news/inner/".($row->id)."/".($row->type)."</link>
				                    <pubDate>".strip_tags($row->insert_date)."</pubDate>
				                                       
				<description>"."<![CDATA[<p><a href=".base_url()."news/inner/".($row->id)."/".($row->type).">"."<img src=".base_url()."assets/cinema/news_img".($row->id)."_thumb.jpg  align=left border=0></a></p><p>".strip_tags($row->summary)."]]>"."</description>
				                </item>
				                "."<br/>"."<br/>"."<br/>"."<br/>"."<br/>"."<br/>"."<br/>"."<br/>"."<br/>"."<br/>"."<br/>"."<br/>";
			}
			  $output .= '</channel>';
			  $output .= '</rss>';
			  echo($output);
		}
		function sports()
		{
			$query=$this->feeds_model->cinema();
				header('Content-type: text/xml');
						
				$output = '<rss version="2.0">';
			    $output .= '<channel>';
			    $output .= '<image>
			      				<link>'.base_url().'</link>
			                    <title>Subhodaya.com</title>
			                    <url>'.base_url().'assets/imgs/logo128 x 31.jpg</url>
			               </image>';
			    $output .= '<title>subhodaya special news</title>';
			    $output .= '<description>Latest cinema news in suhodaya</description>';
			    $output .= '<link>http://www.subhodaya.com/cinema</link>';
			    $output .= '<copyright>CopyRight 2008-2009</copyright>';
			foreach($query->result() as $row)
			{	
					$output .= "<item><title>".strip_tags($row->heading)."</title>
				                    <link>".base_url()."news/inner/".($row->id)."/".($row->type)."</link>
				                    <pubDate>".strip_tags($row->insert_date)."</pubDate>
				                                       
				<description>"."<![CDATA[<p><a href=".base_url()."news/inner/".($row->id)."/".($row->type).">"."<img src=".base_url()."assets/cinema/news_img".($row->id)."_thumb.jpg  align=left border=0></a></p><p>".strip_tags($row->summary)."]]>"."</description>
				                </item>
				                "."<br/>"."<br/>"."<br/>"."<br/>"."<br/>"."<br/>"."<br/>"."<br/>"."<br/>"."<br/>"."<br/>"."<br/>";
			}
			  $output .= '</channel>';
			  $output .= '</rss>';
			  echo($output);
		}
}
?>