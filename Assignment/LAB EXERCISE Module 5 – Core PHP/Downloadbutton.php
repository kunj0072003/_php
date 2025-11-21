<?php
	header('Content-type:application/octect-stream'); // we will be outputing a pdf and octect-stream for any file download
	header('Content-Disposition:attachment;filename="php_assignment_1731399600.pdf"'); // we will called downlod pdf
	readfile('php_assignment_1731399600.pdf');  
  ?>