<?php



class Paginator{

	var $items_per_page;

	var $items_total;

	var $current_page;

	var $num_pages;

	var $mid_range;

	var $low;

	var $high;

	var $limit;

	var $return;

	var $default_ipp = 30;

	var $querystring;

	//var $option = "";



	function Paginator()

	{

		

		if(!(isset($_GET['page']))){$_GET['page'] = 1;}

		if(!(isset($_GET['ipp']))){$_GET['ipp'] = $this->default_ipp; } 

		$this->current_page = 1;

		$this->mid_range = 6;

		$this->items_per_page = (!empty($_GET['ipp'])) ? $_GET['ipp']:$this->default_ipp;

	}



	function paginate()

	{

		if($_GET['ipp'] == 'All')

		{

			$this->num_pages = ceil($this->items_total/$this->default_ipp);

			$this->items_per_page = $this->default_ipp;

		}

		else

		{

			if(!is_numeric($this->items_per_page) OR $this->items_per_page <= 0) $this->items_per_page = $this->default_ipp;

			$this->num_pages = ceil($this->items_total/$this->items_per_page);

		}

		$this->current_page = (int) $_GET['page']; // must be numeric > 0

		if($this->current_page < 1 Or !is_numeric($this->current_page)) $this->current_page = 1;

		if($this->current_page > $this->num_pages) $this->current_page = $this->num_pages;

		$prev_page = $this->current_page-1;

		$next_page = $this->current_page+1;



		if($_GET)

		{

			$args = explode("&",$_SERVER['QUERY_STRING']);

			foreach($args as $arg)

			{

				$keyval = explode("=",$arg);

				if($keyval[0] != "page" And $keyval[0] != "ipp") $this->querystring .= "&" . $arg;

			}

		}



		if($_POST)

		{

			foreach($_POST as $key=>$val)

			{

				if($key != "page" And $key != "ipp") $this->querystring .= "&$key=$val";

			}

		}



		if($this->num_pages > 10)

		{

			$this->return = ($this->current_page != 1 And $this->items_total >= 10) ? "<a class=\"paginate\" href=\"$_SERVER[PHP_SELF]?page=$prev_page&ipp=$this->items_per_page$this->querystring\" style='width:60px;'>&laquo; Previous</a> ":"<span class=\"inactive\" href=\"#\">&laquo; Previous</span> ";



			$this->start_range = $this->current_page - floor($this->mid_range/2);

			$this->end_range = $this->current_page + floor($this->mid_range/2);



			if($this->start_range <= 0)

			{

				$this->end_range += abs($this->start_range)+1;

				$this->start_range = 1;

			}

			if($this->end_range > $this->num_pages)

			{

				$this->start_range -= $this->end_range-$this->num_pages;

				$this->end_range = $this->num_pages;

			}

			$this->range = range($this->start_range,$this->end_range);



			for($i=1;$i<=$this->num_pages;$i++)

			{

				if($this->range[0] > 2 And $i == $this->range[0]) $this->return .= " ... ";

				// loop through all pages. if first, last, or in range, display

				if($i==1 Or $i==$this->num_pages Or in_array($i,$this->range))

				{

					$this->return .= ($i == $this->current_page And $_GET['page'] != 'All') ? "<a title=\"Go to page $i of $this->num_pages\" class=\"current\" href=\"#\">$i</a> ":"<a class=\"paginate\" title=\"Go to page $i of $this->num_pages\" href=\"$_SERVER[PHP_SELF]?page=$i&ipp=$this->items_per_page$this->querystring\">$i</a> ";

				}

				if($this->range[$this->mid_range-1] < $this->num_pages-1 And $i == $this->range[$this->mid_range-1]) $this->return .= " ... ";

			}

			$this->return .= (($this->current_page != $this->num_pages And $this->items_total >= 10) And ($_GET['page'] != 'All')) ? "<a class=\"paginate\" href=\"$_SERVER[PHP_SELF]?page=$next_page&ipp=$this->items_per_page$this->querystring\" style='width:40px;'>Next &raquo;</a>\n":"<span class=\"inactive\" href=\"#\">&raquo; Next</span>\n";

			$this->return .= ($_GET['page'] == 'All') ? "<a class=\"current\" style=\"margin-left:10px\" href=\"#\" style='width:40px;'>All</a> \n":"<a class=\"paginate\" style=\"margin-left:10px\" href=\"$_SERVER[PHP_SELF]?page=1&ipp=All$this->querystring\" style='width:auto;' >All</a> \n";

		}

		else

		{

			for($i=1;$i<=$this->num_pages;$i++)

			{

				$this->return .= ($i == $this->current_page) ? "<a class=\"current\" href=\"#\">$i</a> ":"<a class=\"paginate\" href=\"$_SERVER[PHP_SELF]?page=$i&ipp=$this->items_per_page$this->querystring\">$i</a> ";

			}

			$this->return .= "<a class=\"paginate\" href=\"$_SERVER[PHP_SELF]?page=1&ipp=All$this->querystring\" style='width:auto;'>All</a> \n";

		}

		$this->low = ($this->current_page-1) * $this->items_per_page;

		$this->high = ($_GET['ipp'] == 'All') ? $this->items_total:($this->current_page * $this->items_per_page)-1;

		$this->limit = ($_GET['ipp'] == 'All') ? "":" LIMIT $this->low,$this->items_per_page";

	}



	function display_items_per_page()

	{

		$items = '';

		$ipp_array = array(10,20,30,40,50,60,70,80,90,100);

		foreach($ipp_array as $ipp_opt)	$items .= ($ipp_opt == $this->items_per_page) ? "<option selected value=\"$ipp_opt\">$ipp_opt</option>\n":"<option value=\"$ipp_opt\">$ipp_opt</option>\n";

		return "<span class=\"paginate\" style='line-height:27px; float: left;'>Records per page:</span><select class=\"input\"   style ='margin-left: 5px; width:65px;'onchange=\"window.location='$_SERVER[PHP_SELF]?page=1&ipp='+this[this.selectedIndex].value+'$this->querystring';return false\">$items</select>\n";

	}



	function display_jump_menu()

	{

/*<span class="paginate">Page:</span>

		<select class="paginate" onchange="window.location='/pk/raw/pagi/index.php?page='+this[this.selectedIndex].value+'&ipp=50&';return false"><option value="1">1</option>

<option value="2" selected>2</option>

<option value="3">3</option>

<option value="4">4</option>

<option value="5">5</option>

<option value="6">6</option>

<option value="7">7</option>

<option value="8">8</option>

<option value="9">9</option>

<option value="10">10</option>

<option value="11">11</option>

<option value="12">12</option>

<option value="13">13</option>

<option value="14">14</option>

<option value="15">15</option>

<option value="16">16</option>

<option value="17">17</option>

<option value="18">18</option>

<option value="19">19</option>

<option value="20">20</option>

<option value="21">21</option>

<option value="22">22</option>

<option value="23">23</option>

<option value="24">24</option>

</select>*/

		//echo "dhf".$this->num_pages;

		

		$option = "<option value='' >Select</option>";

		for($i=1;$i<=$this->num_pages;$i++)

		{

			//echo $i;

			//echo '<br />';

			if(!(isset($option)))

			{

				

				$option .= ($i==$this->current_page) ? "<option value=\"$i\" selected>$i</option>\n":"<option value=\"$i\">$i</option>\n";

				

			}

			

		}

		return "<span class=\"paginate\">Page:</span>

		<select class=\"paginate\" onchange=\"window.location='$_SERVER[PHP_SELF]?page='+this[this.selectedIndex].value+'&ipp=$this->items_per_page$this->querystring';return false\">$option</select>\n";

	}



	function display_pages()

	{

		return $this->return;

	}

}