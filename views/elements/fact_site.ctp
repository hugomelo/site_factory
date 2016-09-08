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

switch ($type[0])
{
	case 'buro':
		switch ($type[1])
		{
			case 'form':
				echo $this->element('fact_site_form', array('plugin' => 'site_factory'));
			break;
		}
	break;
	
	case 'preview':
		echo $this->Bl->sdiv(array('class' => 'fact_site_preview'));
			
			if (!empty($data['FactSite']['img_id']))
				echo $this->Bl->anchor(
					array('class' => 'img_link'),
					array('url' => array('action' => 'index', 'space' => $data['FactSite']['mexc_space_id'])), 
					$this->Bl->img(array(), array('id' => $data['FactSite']['img_id'], 'version' => 'preview'))
				);
			
			echo $this->Bl->anchor(
				array('class' => 'enter'),
				array('url' => array('action' => 'index', 'space' => $data['FactSite']['mexc_space_id'])), 
				__d('mexc', 'Entrar', true)
			);
			echo $this->Bl->floatBreak();
			echo $this->Bl->br();
			
			if (!empty($data['FactSite']['picture_id']))
				echo $this->Bl->anchor(
					array('class' => 'img_link'),
					array('url' => array('action' => 'index', 'space' => $data['FactSite']['mexc_space_id'])), 
					$this->Bl->img(array(), array('id' => $data['FactSite']['picture_id'], 'version' => 'preview'))
				);
			
			echo $this->Bl->paraDry(explode("\n", $data['FactSite']['description']));
			echo $this->Bl->br();
			
			foreach ($data['FactSection'] as $section)
			{
				echo $this->Bl->anchor(
					array(),
					array('section' => $section, 'space' => $data['FactSite']['mexc_space_id']), 
					$section['name']
				);
				echo '&ensp;';
			}
			
		echo $this->Bl->ediv();
	break;
	
	case 'mini_preview':
		echo $this->Bl->sdiv(array('class' => 'row fact_site_minipreview ' . $data['FactSite']['mexc_space_id']. ' '.$data['KLASS']));
			echo $this->Bl->sdiv(array('class' => 'col-xs-9'));
				echo $this->Bl->h3Dry($data['FactSite']['name']);
			echo $this->Bl->ediv();
			echo $this->Bl->sdiv(array('class' => 'col-xs-9'));
				echo $this->Bl->pDry($data['FactSite']['description']);
			echo $this->Bl->ediv();
			echo $this->Bl->sdiv(array('class' => 'col-xs-3'));
			echo $this->Bl->anchor(array('class' => 'visit-proj'), array(
				'url' => array('plugin' => 'site_factory', 'controller' => 'fact_sites', 'action' => 'index'),
				'space' => $data['FactSite']['mexc_space_id']
			), 'Visitar projeto');
			echo $this->Bl->ediv();
		echo $this->Bl->ediv();
	break;
	
	case 'header':
		echo $this->Bl->srow(array('class' => 'projeto'));
			echo $this->Bl->sboxContainer(array('class' => "header col-xs-12"), array());
				echo $this->Bl->sdiv(array('class' => 'header-data'), array());
					echo $this->Bl->h4(array('class' => 'project-title'), array(), "Projeto");
					echo $this->Bl->h3(array('class' => 'project-title-inside'), array(), $site['FactSite']['name']);
				echo $this->Bl->ediv(); // close header-data
				echo $this->Bl->sdiv(array('class' => 'fact_site_menu'));
					echo $this->Bl->menu(array(), array('menuLevel' => 3));
				echo $this->Bl->ediv();
			echo $this->Bl->eboxContainer(); // close header
		echo $this->Bl->erow(); // close row

		echo $this->Bl->ediv(); // close container || YES, it was needed for showing the about_project

	break;
}
