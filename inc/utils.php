<?php
function serialize_data($data) {
	return urlencode(json_encode($data));
}

function sw_get_catagory_name() {
	$q = get_queried_object();
	return is_category() ? $q->name : $q->labels->name;
}