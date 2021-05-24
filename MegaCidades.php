<?php

	include 'lib/app.php';

	$link = bancoConecta();

	$sql = <<<EOT

    SELECT city.Name, city.Population, country.Name 
    FROM city, country
    WHERE city.Population>5000000 and city.CountryCode=country.Code
EOT;
?>

<h1>Cidades com mais de 5 milhões de habitantes</h1>
<table class="table table-striped table-sm table-bordered">
	<thead>
		<tr>
			<th scope="col">Nome</th>
			<th scope="col">População</th>
            <th scope="col">País</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach(executaSelect($link,$sql) as $linha) { ?> 
			<tr>
				<td><?=$linha['Name']?></td>
				<td><?=$linha['Population']?></td>
                <td><?=$linha['Name']?></td>
			</tr>
		<?php } /*foreach*/ ?>
	</tbody>
</table>