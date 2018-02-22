<?php 
define('ACCESS_TOKEN', 'EAAAAUaZA8jlABALXzZAXzVePCZA58xuuWpZCbFPkviTZAzqw8tMucDer2mF3DXAC93mepaY5vcjiXcQGqBE6wmdZBTpKFekVtQsfygSjM9KqDjXqiHqKy4gnAxo5xXvOSmxCsPZCZB2xVR4YvFQnsEhPNK1kyhAYEScZD');

function request($link)
{
	$ch = curl_init();



	$options = array(
		CURLOPT_URL            => $link,
		CURLOPT_RETURNTRANSFER => TRUE,
		CURLOPT_HEADER         => FALSE,
		CURLOPT_FOLLOWLOCATION => TRUE,
		CURLOPT_ENCODING       => '',
		CURLOPT_USERAGENT      => 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.87 Safari/537.36',
		CURLOPT_AUTOREFERER    => TRUE,
		CURLOPT_CONNECTTIMEOUT => 15,
		CURLOPT_TIMEOUT        => 15,
		CURLOPT_MAXREDIRS      => 5,
		CURLOPT_SSL_VERIFYHOST => 2,
		CURLOPT_SSL_VERIFYPEER => 0
	);
	curl_setopt_array($ch, $options);
	$response = curl_exec($ch);
	curl_close($ch);

	return $response;
};

function getFbFeed($url=null)
{
	$link = "https://graph.facebook.com/v2.11/1744536689167030/feed?fields=id%2Cfrom%2Ccreated_time%2Clikes%2Cmessage%2Cstory%2Cattachments%7Bsubattachments%2Cmedia%2Ctype%2Curl%7D%2Ccomments%7Bcomment_count%7D&limit=10&access_token=EAAAAUaZA8jlABALXzZAXzVePCZA58xuuWpZCbFPkviTZAzqw8tMucDer2mF3DXAC93mepaY5vcjiXcQGqBE6wmdZBTpKFekVtQsfygSjM9KqDjXqiHqKy4gnAxo5xXvOSmxCsPZCZB2xVR4YvFQnsEhPNK1kyhAYEScZD&".$url;

	$response = array();

	$response = json_decode(request($link), true);
	
	return  $response;
};




function make_card() {
	$q = $_GET['q'];

	$data = getFbFeed($q);

	$next = $data['paging']['next'];
	$next = parse_url($next);
	parse_str($next['query'], $query);
	$next = 'until='.$query['until'];
	$pre = $data['paging']['previous'];
	$pre = parse_url($pre);
	parse_str($pre['query'], $query);
	$pre = 'since='.$query['since'];
	$feed = $data['data'];


	foreach ($feed as $status) {
		# code...
		$user_name = $status['from']['name'];
		$user_id = $status['from']['id'];
		$time = $status['created_time'];
		$time = strtotime($time);
		$time = $time +3600*7;
		$time_fixed = date("y-m-d, h:i:s", $time);
		$likes_count = $status['likes']['count'];
		$content = $status['message'];
		$attachment =$status['attachments'];
		$comment_count = count($status['comments']['data']);
		$story = $status['story'];
		$id = $status['id'];
		


		echo '"<div class="col-12">
		<div class="box box-widget">
		<div class="box-header with-border">"';
		if (!is_null($story)) {
			echo '<p><b>'.$story.'</b></p>
			</div>
			<div class="box-header with-border">';
			# code...
		};

		echo '<div class="user-block">
		<img src="https://graph.facebook.com/'.$user_id.'/picture" alt="User ava" class="rounded">
		<span class="username"><a target="_blank"  href="https://facebook.com/'.$user_id.'" >'.$user_name.'</a></span>
		<span class="description">'.$time_fixed.'</span>
		</div>
		<div class="box-tools">
		<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
		</button>
		<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
		</div>
		</div>							
		<div class="box-body">';
		echo '<p>'.$content.'</p>';



		if (!is_null($attachment['data'][0]['subattachments'])) {
			# code...

			foreach ($attachment['data'][0]['subattachments']['data'] as $key) {
				# code...

				echo '<center><img class="img-fluid pad" src="'.$key['media']['image']['src'].'" alt="'.$key['type'].'">';
				echo ' <a target="_blank" href="'.$key['url'].'"><p>Tới nguồn cùa tệp đính kèm </p></a></center>';
			};
		} elseif (!is_null($attachment['data'][0]['media'])) {
			# code...
			foreach ($attachment['data'] as $key) {
				# code...

				echo '<center><img class="img-fluid pad" src="'.$key['media']['image']['src'].'" alt="'.$key['type'].'">';
				echo ' <a target="_blank" href="'.$key['url'].'"><p>Tới nguồn cùa tệp đính kèm </p></a></center>';

			};
		};

		echo '<a class="btn btn-default btn-lg bg-blue-active" target="_blank" href="https://facebook.com/'.$id.'"><i class="fa fa-facebook-official"></i> Tới bài gốc</a>
		<a class="btn btn-default btn-lg bg-green-active" href="./status.php?id='.$id.'"><i class="fa fa-hand-o-right" ></i> Xem bài đăng</a>';
		echo '<span class="pull-right text-muted">'.$likes_count.' likes - '.$comment_count.' comments</span>';
		echo '							</div>
		<div class="box-footer"></div>
		</div>
		</div>';



	};


	if(!is_null($next)&&!is_null($pre)){
		echo '<div class="col-12">
		<a href="group.php?q='.$pre.'" class="pull-left col-4 btn btn-flat bg-aqua btn-lg"><h4>Previous</h4></a>
		<a href="group.php?q='.$next.'" class="pull-right col-4 btn btn-flat bg-aqua btn-lg"><h4>Next</h4></a>
		</div>';

	};

};

function make_post(){
	$id = $_GET['id'];
	if (is_null($id)||(strpos($id, '1744536689167030')===FALSE)) {
		header('Location: 404.html');
	}	else {
		$url = 'https://graph.facebook.com/v2.11/'.$id.'/?fields=created_time%2Cid%2Cfrom%2Cmessage%2Ccomments%2Clikes%2Cattachments%7Bsubattachments%2Ctype%2Cmedia%2Curl%7D%2Cstory&access_token=EAAAAUaZA8jlABALXzZAXzVePCZA58xuuWpZCbFPkviTZAzqw8tMucDer2mF3DXAC93mepaY5vcjiXcQGqBE6wmdZBTpKFekVtQsfygSjM9KqDjXqiHqKy4gnAxo5xXvOSmxCsPZCZB2xVR4YvFQnsEhPNK1kyhAYEScZD';
		$data = array();
		$data = json_decode(request($url),true);

		$user_name = $data['from']['name'];
		$user_id = $data['from']['id'];
		$time = $data['created_time'];
		$time = strtotime($time);
		$time = $time +3600*7;
		$time_fixed = date("y-m-d, h:i:s", $time);
		$likes_count = $data['likes']['count'];
		$content = $data['message'];
		$attachment =$data['attachments'];
		$comment_count = count($data['comments']['data']);
		$story = $data['story'];
		$id = $data['id'];

		echo '"<div class="col-12">
		<div class="box box-widget">
		<div class="box-header with-border">"';
		if (!is_null($story)) {
			echo '<p><b>'.$story.'</b></p>
			</div>
			<div class="box-header with-border">';
			# code...
		};

		echo '<div class="user-block">
		<img src="https://graph.facebook.com/'.$user_id.'/picture" alt="User ava" class="rounded">
		<span class="username"><a target="_blank"  href="https://facebook.com/'.$user_id.'" >'.$user_name.'</a></span>
		<span class="description">'.$time_fixed.'</span>
		</div>
		<div class="box-tools">
		<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
		</button>
		<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
		</div>
		</div>							
		<div class="box-body">';
		echo '<p>'.$content.'</p>';



		if (!is_null($attachment['data'][0]['subattachments'])) {
			# code...

			foreach ($attachment['data'][0]['subattachments']['data'] as $key) {
				# code...

				echo '<center><img class="img-fluid pad" src="'.$key['media']['image']['src'].'" alt="'.$key['type'].'">';
				echo ' <a target="_blank" href="'.$key['url'].'"><p>Tới nguồn cùa tệp đính kèm </p></a></center>';
			};
		} elseif (!is_null($attachment['data'][0]['media'])) {
			# code...
			foreach ($attachment['data'] as $key) {
				# code...

				echo '<center><img class="img-fluid pad" src="'.$key['media']['image']['src'].'" alt="'.$key['type'].'">';
				echo ' <a target="_blank" href="'.$key['url'].'"><p>Tới nguồn cùa tệp đính kèm </p></a></center>';

			};
		};

		echo '<a class="btn btn-default btn-lg bg-blue-active" target="_blank" href="https://facebook.com/'.$id.'"><i class="fa fa-facebook-official"></i> Tới bài gốc</a>
		<a class="btn btn-default btn-lg bg-green-active" href="./status.php?id='.$id.'"><i class="fa fa-hand-o-right" ></i> Xem bài đăng</a>';
		echo '<span class="pull-right text-muted">'.$likes_count.' likes - '.$comment_count.' comments</span>';




	};

};




function make_comment(){

	$id= $_GET['id'];
	$url = 'https://graph.facebook.com/v2.11/'.$id.'/comments?fields=created_time%2Cfrom%2Cmessage%2Cid%2Cmessage_tags%2Clikes%2Ccomments&access_token=EAAAAUaZA8jlABALXzZAXzVePCZA58xuuWpZCbFPkviTZAzqw8tMucDer2mF3DXAC93mepaY5vcjiXcQGqBE6wmdZBTpKFekVtQsfygSjM9KqDjXqiHqKy4gnAxo5xXvOSmxCsPZCZB2xVR4YvFQnsEhPNK1kyhAYEScZD';
	$data = array();
	$data = json_decode(request($url),true);

	echo '							</div>
	<div class="box-footer box-comments">';
	$black = array();

	foreach ($data['data'] as $comment) {
		# code...
		$id = $comment['id'];
		$content =$comment['message'];
		$user_id =$comment['from']['id'];
		$user_name=$comment['from']['name'];
		$likes_count = count($comment['likes']);
		$time = $comment['created_time'];
		$time = strtotime($time);
		$time = $time +3600*7;
		$time_fixed = date("y-m-d, h:i:s", $time);
		

		if(array_search($id, $black)===false){
			echo '<div class="box-comment">';
			echo '<img src="https://graph.facebook.com/'.$user_id.'/picture" alt="User-ava" class="rounded img-sm">';
			echo '<div class="comment-text">
			<span class="username">';
			echo $user_name;
			echo '<span class="text-muted pull-right">';
			echo $time_fixed;
			echo '</span>
			</span>';
			echo $content;
			echo '</div>';

			if (!is_null($comment['comments'])) {
				foreach ($comment['comments']['data'] as $comment) {
				# code...
					$id = $comment['id'];
					array_push($black, $id);
					$content =$comment['message'];
					$user_id =$comment['from']['id'];
					$user_name=$comment['from']['name'];
					$likes_count = count($comment['likes']);
					$time = $comment['created_time'];
					$time = strtotime($time);
					$time = $time +3600*7;
					$time_fixed = date("y-m-d, h:i:s", $time);

					echo '<div class="box-comment">';

					echo '<img src="" alt="" class="rounded img-sm">';
					echo '<img src="https://graph.facebook.com/'.$user_id.'/picture" alt="User-ava" class="rounded img-sm">';
					echo '<div class="comment-text">';
					echo '<div class="comment-text">
					<span class="username">';
					echo $user_name;
					echo '<span class="text-muted pull-right">';
					echo $time_fixed;
					echo '</span>
					</span>';
					echo $content;
					echo '</div> </div>';

				};
			# code...
			};
		}




	};






	echo '</div>
	</div>
	<div class="box-footer">
	<form method="post">
	<!-- .img-push is used to add margin to elements next to floating images -->
	<div class="img-push">
	<input type="text" class="form-control input-sm" placeholder="Press enter to post comment" name="comment">
	</div>
	</form>
	</div>
	</div>';
};



?>