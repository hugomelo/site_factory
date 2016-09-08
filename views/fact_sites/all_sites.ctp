<?php

/**
 *
 * Copyright 2011-2013, Museu Exploratório de Ciências da Unicamp (http://www.museudeciencias.com.br)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2011-2013, Museu Exploratório de Ciências da Unicamp (http://www.museudeciencias.com.br)
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 * @link          https://github.com/museudecienciasunicamp/site_factory.git Site Factory public repository
 */

echo $this->Bl->br();

echo $this->Bl->h1Dry("Nossos projetos");
foreach ($sites as $n => $site)
{
	echo $this->Bl->srow(array('class' => 'home'));
		echo $this->Bl->sdiv(array('class' => 'projects col-xs-12'));
			echo $this->Bl->sdiv(array('class' => 'project-desc')); {
				$site['KLASS'] = 'active';
				echo $this->Jodel->insertModule('SiteFactory.FactSite', array('mini_preview'), $site);
			} echo $this->Bl->ediv();
		echo $this->Bl->ediv();
	echo $this->Bl->erow();
}
