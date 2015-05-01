<?php
$this->title = 'Token: ' . $token;
?>
<div class="log-index">

	<div class="table-responsive">
		<table id="table-log" class="table table-condensed table-striped table-log">
			<thead>
			<tr>
				<th class="col1">TIPO</th>
				<th class="col2">MENSAGEM</th>
				<th class="col3">DATA</th>
			</tr>
			</thead>
			<tbody>
			<?php for($x = 0; $x < 100; $x++) { ?>
			<tr id="logHistoryRow_<?php echo($x); ?>">
				<td class="col1">ERROR</td>
				<td class="col2">Se for a primeira vez que você usa a Ferramenta de Diagnóstico do DirectX, talvez seja solicitado a verificar se os drivers estão assinados digitalmente. Nós recomendamos que você clique em Sim para verificar se os drivers estão assinados por um fornecedor que tenha verificado sua autenticidade. Para saber mais, veja Como decidir quais drivers posso instalar com segurança?.</td>
				<td class="col3"><?php echo(date('d/m/Y \à\s H:i:s')); ?></td>
			</tr>
			<?php } ?>
			</tbody>
		</table>
	</div>

</div>
