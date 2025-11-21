
<?php

$k=105;
$u=37;

$operator="%";


ECHO "<H3> ENHANCED CALCULATOR </H3>"; 

SWITCH($operator)
{
	CASE '+':
		ECHO "$k+$u= " . ($k+$u);
		break;
	case '-':
		ECHO "$k-$u= " . ($k-$u);
		break;
	case '*':
		echo "$k*$u= " . ($k*$u);
		break;
	case '/':
		echo "$k/$u= " . ($k/$u);
		break;	
	case '%':
		echo "$k%$u= " . ($k%$u);
		break;	
	case '^':
		echo "$k^$u= " . pow($k,$u);
		break;	
	case 'sqrt':
		echo "√$k= " . sqrt($k);
		break;
	default:
		echo "invalid operator.";
}

?>