<?php
function serialize_data($data) {
	return urlencode(json_encode($data));
}