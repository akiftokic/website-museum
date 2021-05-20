<?php
    try{
        $sqlconnection = new pdo('mysql:host=localhost;dbname=proba;charset=utf8','root','');
        }   
    catch(PDOException $pe){
        echo 'Nemoguće povezivanje na bazu podataka';
        die;
    }
	$selid=-1;
	if(isset($_POST['btnSubmit'])) {
		echo 'Izabrali Ste '.$_POST['lista'];
		$selid=$_POST['lista'] ;
		
	}
?>
<!DOCTYPE html>

<html>
    <head>
        <title>Lista</title>
    </head>

    <body>
		<form method="POST" action="">
			<label>Kolekcije</label>
			<select name="lista">
				<?php
					$commandstring = "SELECT * FROM odabirkolekcija order by userid";
					$cmd = $sqlconnection->prepare($commandstring);
					$cmd->execute();
					$result = $cmd->fetchAll(PDO::FETCH_ASSOC);
					foreach($result as $row) {
						if($selid==$row['odabirkol']) {
							echo '<option value="'.$row['odabirkol'] . ' '. ' ' .$row['opiskolekcija'].'" selected="selected">'.$row['listakolekcija'].'</option>';
						} else {
							echo '<option value="'.$row['odabirkol'].' '. ''.$row['opiskolekcija'].'">'.$row['listakolekcija'].'</option>';
						}						
					}
				?>			
			</select>
			<input type="submit" name="btnSubmit" value="Traži">
		</form>

    </body>
	
</html>
