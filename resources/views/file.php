<style>
#grid {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#grid td, #grid th {
  border: 1px solid #ddd;
  padding: 8px;
}

#grid tr:nth-child(even){background-color: #f2f2f2;}

#grid tr:hover {background-color: #ddd;}

#grid th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
</style>
 <?php
 $url="http://covidcbrs.nmc.gov.in/";
 $html=file_get_contents($url);
 $dom=new domDocument;
 @$dom->loadHTML($html);
 $tables=$dom->getElementsByTagName('table');
 $rows=$tables->item(0)->getElementsByTagName('tr');
 echo "<table id='grid'>";
 echo "<tr>
			<th rowspan='2'>Sr.No</th>
			<th rowspan='2'>Hospital Name</th>
			<th rowspan='2'>Category</th>
			<th rowspan='2'>NMC Beds Reserved</th>
			<th colspan= '2'>General Beds</th>
			<th colspan= '2'>Oxygen Beds</th>		
			<th colspan= '2'>ICU Beds</th>
			<th colspan= '2'>Ventilater Beds</th>
		</tr>
		<tr>
		<th>Total</th>
		<th>Vacant</th>
		<th>Total</th>
		<th>Vacant</th>
		<th>Total</th>
		<th>Vacant</th>
		<th>Total</th>
		<th>Vacant</th>
		</tr>";
foreach($rows as $row){
	$cols=$row->getElementsByTagName('td');
	if(isset($cols->item(0)->nodeValue)&& isset($cols->item(1)->nodeValue)&& isset($cols->item(2)->nodeValue)&& isset($cols->item(3)->nodeValue)&& isset($cols->item(5)->nodeValue)&& isset($cols->item(6)->nodeValue)&& 
	isset($cols->item(7)->nodeValue)&& isset($cols->item(8)->nodeValue)&& isset($cols->item(9)->nodeValue)&& isset($cols->item(10)->nodeValue)&& isset($cols->item(11)->nodeValue)){
	 echo "<tr><td>".$cols->item(0)->nodeValue."</td><td>".$cols->item(1)->nodeValue."</td><td>".$cols->item(2)->nodeValue."</td><td>".$cols->item(3)->nodeValue."</td><td>".$cols->item(4)->nodeValue."</td><td>".$cols->item(5)->nodeValue."</td>
	 <td>".$cols->item(6)->nodeValue."</td><td>".$cols->item(7)->nodeValue."</td><td>".$cols->item(8)->nodeValue."</td><td>".$cols->item(9)->nodeValue."</td><td>".$cols->item(10)->nodeValue."</td><td>".$cols->item(11)->nodeValue."</td></tr>";
	}
 }
 echo "</table>";
 
 ?>
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 