<?php

	include 'lib/app.php';

	$link = bancoConecta();

	$sql = <<<EOT

    SELECT Name, Population, LifeExpectancy, GNP
    FROM country
    WHERE Continent='Africa'
    ORDER BY GNP DESC
EOT;
?>

<h1>Países Africanos</h1>
<table class="table table-striped table-sm table-bordered">
	<thead>
		<tr>
			<th scope="col">Nome</th>
			<th scope="col">População</th>
			<th scope="col">Expectativa de Vida</th>
			<th scope="col">PIB</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach(executaSelect($link,$sql) as $linha) { ?> 
			<tr>
				<td><?=$linha['Name']?></td>
				<td><?=$linha['Population']?></td>
				<td><?=$linha['LifeExpectancy']?></td>
				<td><?=$linha['GNP']?></td>
			</tr>
		<?php } /*foreach*/ ?>
	</tbody>
</table>