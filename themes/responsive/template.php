<?php

function responsive_pager($tags = array(), $limit = 10, $element = 0, $parameters = array(), $quantity = 9) {	
  if ($pager_total[$element] > 1) { 
    if ($li_previous) {
        'class' => 'pager-previous',
        'data' => $li_previous,
    if ($li_next) {
        'class' => 'pager-next',
        'data' => $li_next,
    } 
    return theme('item_list', $items, NULL, 'ul', array('class' => 'pager'));