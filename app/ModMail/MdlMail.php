<?php
/**
* This file is part of the Agora-Project Software package.
*
* @copyright (c) Agora-Project Limited <https://www.agora-project.net>
* @license GNU General Public License, version 2 (GPL-2.0)
*/


/*
 * MODELE DES LIENS/FAVORIS
 */
class MdlMail extends MdlObject
{
	const moduleName="mail";
	const objectType="mail";
	const dbTable="ap_mail";
	const htmlEditorField="description";
	const hasAttachedFiles=true;
}