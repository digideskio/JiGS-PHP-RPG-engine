<?php
defined( '_JEXEC' ) or die( 'Restricted access' );

jimport('joomla.application.component.model');

class BattleModelWard extends JModel
{
	
	function enter_ward(){
	$db =& JFactory::getDBO();
	$user =& JFactory::getUser();
	$query = "Update jos_jigs_players SET active=3 WHERE iduser = ". $user->id;
	$db->setQuery($query);
	$result = $db->loadResult();
	return true ; 
}


	
}





