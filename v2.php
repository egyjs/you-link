
<?php 
parse_str( parse_url( $_GET['url'], PHP_URL_QUERY ), $vars );

    parse_str(file_get_contents("https://www.youtube.com/get_video_info?video_id=".$vars['v']),$info);
    $streams = $info['adaptive_fmts']; // $info['url_encoded_fmt_stream_map'];
    $streams = explode(',',$streams);

    $listQuality = [];
    foreach($streams as $stream){
	    print_r($stream)
    }

