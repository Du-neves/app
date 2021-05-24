<?php

	include 'lib/app.php';

	$link = bancoConecta();

	$sql = <<<EOT

    SELECT city.Name, country.Name
    FROM city, country
    WHERE city.ID = country.Capital
EOT;
?>

<h1>Cidades Brasileiras</h1>
<table class="table table-striped table-sm table-bordered">
	<thead>
		<tr>
			<th scope="col">Capital</th>
			<th scope="col">País</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach(executaSelect($link,$sql) as $linha) { ?> 
			<tr>
				<td><?=$linha['Name']?></td>
				<td><?=$linha['Name']?></td>
			</tr>
		<?php } /*foreach*/ ?>
	</tbody>
</table>