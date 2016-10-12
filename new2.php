<?PHP
$a=array(1,2,3,8,4,5,2,6);
$b=new_array($a);
$c=new_array2($a);
$d=new_array3($a);
print_r($d);

function new_array($a) {
$b=array();
for($i=count($a)-1; $i>=0; $i-- )
{
	$b[]=$a[$i];
}
return $b;
}

function new_array2($a) {
	$count=0;
	$count_value_0=$a[0];
	for($i=0; $i<count($a); $i++ ) {

		$count_value=$a[$i];
		$count_j=0;
		for($j=0; $j<count($a); $j++ )
		{
			if($a[$j]==$count_value){$count_j=$count_j+1;}
		}
		if($count_j>$count){$count_value_0=$count_value; $count=$count_j;};
	}
return $count_value_0;
}

function new_array3($a) {
	$bb=array();
	for($i=0; $i<count($a)-1; $i++ ) {
		
		for($j=$i+1; $j<count($a); $j++ )
		{
			if(($a[$j]+$a[$i])==10){$aa=array($i,$j); $bb[]=$aa;};
		}
		
	}
return $bb;
}

/*
SELECT user.first_name, address.country, address.postal_code FROM user
inner join address 
on user.id=address.user_id
where 
address.country="Canada"
and address.postal_code like 'm4k%'
*/

?>
<script>
	var a=4;
	var b=5;
	var b1=b;
	console.log(ff(a,b));
	console.log(ff2(a,b,a));
	
	function ff(a,b){
	var c=a;
	for (i = 1; i < b; i++) {
		c=c+a;
	}
	return c;
	}
	
	function ff2(a,b1,c){
		c=c+a;
		b1=b1-1;
		if(b1>1){
		c=ff2(a,b1,c);
		}
	return c;
	}
	
	
</script>