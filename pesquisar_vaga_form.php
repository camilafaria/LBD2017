<?php
	include("conectaBanco.php");

	$vaga = $_POST["vaga"];
	$habilidade = array(".", ".", ".", ".", ".", ".", ".", ".", ".", ".", ".", ".");
	$causa = array(".", ".", ".", ".", ".", ".", ".", ".", ".", ".", ".", ".", ".");
	
	$checkHab = false;
	$checkCausa = false;
	if(isset($_POST["habilidade"])){
		$i = 0;
		$checkHab = true;
		foreach($_POST["habilidade"] as $aux){
			$habilidade[$i] = $aux;
			$i = $i+1;
		}
	}
	if(isset($_POST["causa_de_interesse"])){ 
		$i = 0;
		$checkCausa = true;
		foreach($_POST["causa_de_interesse"] as $aux){
			$causa[$i] = $aux;
			$i = $i+1;
		}
	}
	if($vaga && $checkCausa && $checkHab){
		$sql = "select * 
				from vaga as v 
				where v.nome like '%$vaga%' and v.id_vaga in 
														(select hv.id_vaga 
														from habilidade_vaga as hv 
														where hv.id_habilidade in
																				(select h.id_habilidade 
																				from habilidade as h 
																				where h.nome = '$habilidade[0]' or
																					h.nome = '$habilidade[1]' or
																					h.nome = '$habilidade[2]' or
																					h.nome = '$habilidade[3]' or
																					h.nome = '$habilidade[4]' or
																					h.nome = '$habilidade[5]' or
																					h.nome = '$habilidade[6]' or
																					h.nome = '$habilidade[7]' or
																					h.nome = '$habilidade[8]' or
																					h.nome = '$habilidade[9]' or
																					h.nome = '$habilidade[10]' or
																					h.nome = '$habilidade[11]'))
										and v.id_projeto in
														(select cp.id_projeto
														from causa_projeto as cp
														where cp.id_causa in
																			(select ci.id_causa
																			from causa_de_interesse as ci
																			where ci.nome = '$causa[0]' or
																				ci.nome = '$causa[1]' or
																				ci.nome = '$causa[2]' or
																				ci.nome = '$causa[3]' or
																				ci.nome = '$causa[4]' or
																				ci.nome = '$causa[5]' or
																				ci.nome = '$causa[6]' or
																				ci.nome = '$causa[7]' or
																				ci.nome = '$causa[8]' or
																				ci.nome = '$causa[9]' or
																				ci.nome = '$causa[10]' or
																				ci.nome = '$causa[11]' or
																				ci.nome = '$causa[12]'))";
	}
	else if($vaga && $checkCausa && !$checkHab){
		$sql = "select * 
				from vaga as v 
				where v.nome like '%$vaga%' and v.id_projeto in
														(select cp.id_projeto
														from causa_projeto as cp
														where cp.id_causa in
																			(select ci.id_causa
																			from causa_de_interesse as ci
																			where ci.nome = '$causa[0]' or
																				ci.nome = '$causa[1]' or
																				ci.nome = '$causa[2]' or
																				ci.nome = '$causa[3]' or
																				ci.nome = '$causa[4]' or
																				ci.nome = '$causa[5]' or
																				ci.nome = '$causa[6]' or
																				ci.nome = '$causa[7]' or
																				ci.nome = '$causa[8]' or
																				ci.nome = '$causa[9]' or
																				ci.nome = '$causa[10]' or
																				ci.nome = '$causa[11]' or
																				ci.nome = '$causa[12]'))";
	}
	else if($vaga && !$checkCausa && $checkHab){
		$sql = "select * 
				from vaga as v 
				where v.nome like '%$vaga%' and v.id_vaga in 
														(select hv.id_vaga 
														from habilidade_vaga as hv 
														where hv.id_habilidade in
																				(select h.id_habilidade 
																				from habilidade as h 
																				where h.nome = '$habilidade[0]' or
																					h.nome = '$habilidade[1]' or
																					h.nome = '$habilidade[2]' or
																					h.nome = '$habilidade[3]' or
																					h.nome = '$habilidade[4]' or
																					h.nome = '$habilidade[5]' or
																					h.nome = '$habilidade[6]' or
																					h.nome = '$habilidade[7]' or
																					h.nome = '$habilidade[8]' or
																					h.nome = '$habilidade[9]' or
																					h.nome = '$habilidade[10]' or
																					h.nome = '$habilidade[11]'))";
	}
	else if($vaga && !$checkCausa && !$checkHab){
		$sql = "select * 
				from vaga as v 
				where v.nome like '%$vaga%'";
	}
	else if(!$vaga && $checkCausa && $checkHab){
		$sql = "select * 
				from vaga as v 
				where v.id_vaga in 
								(select hv.id_vaga 
								from habilidade_vaga as hv 
								where hv.id_habilidade in
														(select h.id_habilidade 
														from habilidade as h 
														where h.nome = '$habilidade[0]' or
															h.nome = '$habilidade[1]' or
															h.nome = '$habilidade[2]' or
															h.nome = '$habilidade[3]' or
															h.nome = '$habilidade[4]' or
															h.nome = '$habilidade[5]' or
															h.nome = '$habilidade[6]' or
															h.nome = '$habilidade[7]' or
															h.nome = '$habilidade[8]' or
															h.nome = '$habilidade[9]' or
															h.nome = '$habilidade[10]' or
															h.nome = '$habilidade[11]'))
					and v.id_projeto in
								(select cp.id_projeto
								from causa_projeto as cp
								where cp.id_causa in
													(select ci.id_causa
													from causa_de_interesse as ci
													where ci.nome = '$causa[0]' or
														ci.nome = '$causa[1]' or
														ci.nome = '$causa[2]' or
														ci.nome = '$causa[3]' or
														ci.nome = '$causa[4]' or
														ci.nome = '$causa[5]' or
														ci.nome = '$causa[6]' or
														ci.nome = '$causa[7]' or
														ci.nome = '$causa[8]' or
														ci.nome = '$causa[9]' or
														ci.nome = '$causa[10]' or
														ci.nome = '$causa[11]' or
														ci.nome = '$causa[12]'))";
	}
	else if(!$vaga && !$checkCausa && $checkHab){
		$sql = "select * 
				from vaga as v 
				where v.id_vaga in 
								(select hv.id_vaga 
								from habilidade_vaga as hv 
								where hv.id_habilidade in
														(select h.id_habilidade 
														from habilidade as h 
														where h.nome = '$habilidade[0]' or
															h.nome = '$habilidade[1]' or
															h.nome = '$habilidade[2]' or
															h.nome = '$habilidade[3]' or
															h.nome = '$habilidade[4]' or
															h.nome = '$habilidade[5]' or
															h.nome = '$habilidade[6]' or
															h.nome = '$habilidade[7]' or
															h.nome = '$habilidade[8]' or
															h.nome = '$habilidade[9]' or
															h.nome = '$habilidade[10]' or
															h.nome = '$habilidade[11]'))";
	}
	else if(!$vaga && $checkCausa && !$checkHab){
		$sql = "select * 
				from vaga as v 
				where v.id_projeto in
								(select cp.id_projeto
								from causa_projeto as cp
								where cp.id_causa in
													(select ci.id_causa
													from causa_de_interesse as ci
													where ci.nome = '$causa[0]' or
														ci.nome = '$causa[1]' or
														ci.nome = '$causa[2]' or
														ci.nome = '$causa[3]' or
														ci.nome = '$causa[4]' or
														ci.nome = '$causa[5]' or
														ci.nome = '$causa[6]' or
														ci.nome = '$causa[7]' or
														ci.nome = '$causa[8]' or
														ci.nome = '$causa[9]' or
														ci.nome = '$causa[10]' or
														ci.nome = '$causa[11]' or
														ci.nome = '$causa[12]'))";
	}
	else echo "Nenhum filtro foi selecionado";
	$query = pg_query ($dbcon,$sql);
	while ($row = pg_fetch_array($query)){
		$id_vaga = $row['id_vaga'];
		$nome = $row["nome"];
		$descricao = $row["descricao"];
		$pre_requisitos = $row["pre_requisitos"];
		$quantidade_total = $row["quantidade"];
		$a_distancia = $row["a_distancia"];
		$bairro = $row["bairro"];
		$eh_pontual = $row["eh_pontual"];
		$id_cidade = $row["id_cidade"];
		
		$sql_nome_cidade = "select nome from cidade where id_cidade = '$id_cidade'";
		$consulta = pg_query($dbcon, $sql_nome_cidade);
		$linha = pg_fetch_row($consulta);
		$nome_cidade = $linha[0];
		
		$sql_id_estado = "select id_estado from cidade where id_cidade = '$id_cidade'";
		$consulta = pg_query($dbcon, $sql_id_estado);
		$linha = pg_fetch_row($consulta);
		$id_estado = $linha[0];
		
		$sql_estado = "select nome from estado where id_estado = '$id_estado'";
		$consulta = pg_query($dbcon, $sql_estado);
		$linha = pg_fetch_row($consulta);
		$estado = $linha[0];
		
		if($a_distancia == 't'){
			$localizacao = "Trabalho à Distância";
		}
		else if($a_distancia == 'f'){
			$localizacao = $bairro . " - " . $nome_cidade . " - " . $estado; 
		}
		
		if($eh_pontual == 't'){
			$eh_pontual = "Vaga Pontual";
		}
		else if($a_distancia == 'f'){
			$eh_pontual = ""; 
		}
		
		$sql_quantidade_disp = "select count(id_vaga) from pessoa_vaga where id_vaga = '$id_vaga'";
		$consulta = pg_query($dbcon, $sql_quantidade_disp);
		$linha = pg_fetch_row($consulta);
		$quantidade_disp = $linha[0];
		$quantidade = $quantidade_disp . "/" . $quantidade_total;
		
		echo "<center>
		<table border = 0 width = '100%'>
			<tr>
				<td>$nome</td>
			</tr>
			<tr>
				<td>$localizacao</td>
			</tr>
			<tr>
				<td>$descricao</td>
			</tr>
			<tr>
				<td>Pré requisitos:</td>
			</tr>
			<tr>
				<td>$pre_requisitos</td>
			</tr>
			<tr>
				<td>Quantidade Vagas Disponíveis:</td>
			</tr>
			<tr>
				<td>$quantidade</td>
			</tr>
			<tr>
				<td>$eh_pontual</td><br><br>
			</tr>
		</table></center>";
	}
?>