<?php

$hierarquia = array (
	array (
		'nomeCargo' => 'CEO',
		'subordinados' => array(
			//inicio: Diretor comercial
			array (
				'nomeCargo' => 'Diretor Comercial',
				'subordinados' => array(
					//inicio: gerente de vendas
					'nomeCargo' => 'Gerente De Vendas',
					//termino gerente de vendas
				)
			),
		//Termino: Diretor Comercial
		//inicio diretor financeiro
			array (
				'nomeCargo' => 'Diretor Financeiro',
				'subordinados' => array(
					//inicio: gerente de contas a pagar
					'nomeCargo' => 'Gerente De contas a pagar',
					'subordinados' => array(
						//inicio: supervisor de contas
						'nomeCargo' => 'Supervisor de contas',
						)
						//termino supervisor de contas
					//termino gerente de contas a pagar
				)
			)
		//termino diretor financeiro
		)
	)
);

function exibirCargos($cargos) {
	$html = '<ul>';

	foreach ($cargos as $cargo) {
		$html .= '<li>';

		$html .= $cargo['nomeCargo'];

		if (isset($cargo['subordinados']) && count($cargo['subordinados']) > 0) {
			$html .= exibirCargos($cargo['subordinados']);
		}

		$html .= '</li>';
	}

	$html .= '</ul>';
	return $html;
}
echo exibirCargos($hierarquia);