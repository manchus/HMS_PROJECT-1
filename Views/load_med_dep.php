<?php 


try{
    $pdo = new PDO("mysql:host=localhost;dbname=system_hopital;charset=utf8","root","");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    die("ERROR: Could not connect. " . $e->getMessage());
}

$dep=$_POST['id_dep'];
$sql1 = "SELECT DISTINCT doctor.* FROM doctor d, doctor_departement dp 
where d.id = dp.id_doc AND dp.id_dep = ".$dep.";";
$stmt1 = $pdo->prepare($sql1);
$stmt1->execute();
$cadena="<label>SELECT 2 (paises)</label> 
			<select id='lista2' name='lista2'>";
while($row1 = $stmt1->fetch(PDO::FETCH_ASSOC)){
    $cadena=$cadena.'<option value='.$ver[0].'>'.utf8_encode($ver[2]).'</option>';

}
echo  $cadena."</select>";

/*
public function getAll($table, $obj)
{
    $var = [];
    $sql = "SELECT * FROM " . $table . ";";
    $query = self::$_db->prepare($sql);
    $query->execute();
    while ($data = $query->fetch(PDO::FETCH_ASSOC)) {
        $var[] = new $obj($data);
    }
    return $var;
    $query->closeCursor();
}
*/


?>