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

echo $this->Bl->srow(array('class' => 'projeto'));
	echo $this->Bl->sboxContainer(array('class' => "header col-xs-12"), array());
		echo $this->Bl->sdiv(array('class' => 'header-data'), array());
			echo $this->Bl->h4(array('class' => 'project-title'), array(), "Projeto");
			echo $this->Bl->h3(array('class' => 'project-title-inside'), array(), $site['FactSite']['name']);
		echo $this->Bl->ediv(); // close header-data
	echo $this->Bl->eboxContainer(); // close header
echo $this->Bl->erow(); // close row

echo $this->Bl->ediv(); // close container || YES, it was needed for showing the about_project

echo $this->Bl->sdiv(array('class' => 'about_project'), array());
	echo $this->Bl->sdiv(array('class' => 'container'), array());
		echo $this->Bl->srow(array('class' => ''));
			echo $this->Bl->p(array('class' => 'about'), array(), $site['FactSite']['description']);
		echo $this->Bl->erow(); // close row
	echo $this->Bl->ediv(); // close container
echo $this->Bl->ediv();

echo $this->Bl->sdiv(array('class' => 'container'), array());

echo $this->Bl->srow(array());
	echo $this->Jodel->insertModule('UnifiedSearch.SblUnifiedSearch', array('view', 'index_listing'), $items);
echo $this->Bl->erow();
		
echo $this->Bl->sboxContainer(array(), array('size' => array('M' => 12)));
	echo $this->Bl->sboxContainer(array('class' => 'logos'), array('size' => array('M' => 6)));
		echo $this->Bl->sbox(array(), array('size' => array('M' => 6, 'g' => -1), 'type' => 'cloud'));
			echo $this->Cork->tile(array(),array(
				'key' => 'logos_program_' . $site['FactSite']['id'],
				'type' => 'cs_cork',
				'title' => __d('mexc', 'Logos de parceiros/apoiadores para ' . $site['FactSite']['name'], true),
				'editorsRecommendations' => __d('mexc', 'Esses dados serão listados na área de logos da área "apoio". É importante que seja adicionado um título como "Apoio" ou "Apoiadores" antes de cada grupo de logos.', true),
				'options' => array(
					'cs_type' => 'about_logos',
				)
			));
		echo $this->Bl->ebox();
		echo $bl->floatBreak();
	echo $this->Bl->eboxContainer();
echo $this->Bl->eboxContainer();
