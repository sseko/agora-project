<?php
/**
* This file is part of the Agora-Project Software package.
*
* @copyright (c) Agora-Project Limited <https://www.agora-project.net>
* @license GNU General Public License, version 2 (GPL-2.0)
*/


/*
 * MODELE DES PERSONNES : UTILISATEURS / CONTACTS
 */
class MdlPerson extends MdlObject
{
	public static $displayModes=["block","line"];
	public static $requiredFields=["name","firstName","login"];
	public static $searchFields=["name","firstName","companyOrganization","function","adress","postalCode","city","country","telephone","telmobile","mail","comment"];
	//Valeurs en cache
	private $_hasImg=null;
	//Formats .csv  ("fieldKeys" : "nom du champ bdd agora"=>"nom du champ d'export csv")
	public static $csvFormats=array(
		//AGORA
		"csv_agora"=>array(
			"delimiter"=>";",
			"enclosure"=>'"',
			"fieldKeys"=>array(
				"civility"=>"civility",
				"name"=>"name",
				"firstName"=>"firstName",
				"companyOrganization"=>"companyOrganization",
				"function"=>"function",
				"adress"=>"adress",
				"postalCode"=>"postalCode",
				"city"=>"city",
				"country"=>"country",
				"telephone"=>"telephone",
				"telmobile"=>"telmobile",
				"mail"=>"mail",
				"comment"=>"comment",
				"login"=>"login",
				"password"=>"password"
			)
		),
		//GMAIL
		"csv_gmail"=>array(
			"delimiter"=>",",
			"enclosure"=>"",
			"fieldKeys"=>array(
				"civility"=>"Name Prefix",
				"firstName"=>"Additional Name",
				"firstName"=>"Given Name",
				"name"=>"Name",
				"name"=>"Family Name",
				"mail"=>"E-mail 1 - Value",
				"telmobile"=>"Phone 1 - Value",
				"function"=>"Organization 1 - Title",
				"companyOrganization"=>"Société",
				"adress"=>"Address 1 - Street",
				"city"=>"Address 1 - City",
				"postalCode"=>"Address 1 - Postal Code",
				"country"=>"Address 1 - Country",
				"comment"=>"Notes"
			)
		),
		//OUTLOOK
		"csv_outlook"=>array(
			"delimiter"=>",",
			"enclosure"=>'"',
			"fieldKeys"=>array(
				"firstName"=>"Prénom",
				"name"=>"Nom",
				"companyOrganization"=>"Société",
				"function"=>"Fonction",
				"adress"=>"Rue (domicile)",
				"city"=>"Ville (domicile)",
				"adress"=>"Code postal (domicile)",
				"country"=>"Pays (domicile)",
				"telephone"=>"Téléphone (domicile)",
				"telmobile"=>"Tél. mobile",
				"mail"=>"Adresse mail",
				"comment"=>"Notes"
			)
		),
		//HOTMAIL
		"csv_hotmail"=>array(
			"delimiter"=>";",
			"enclosure"=>'"',
			"fieldKeys"=>array(
				"civility"=>"Title",
				"firstName"=>"First Name",
				"Middle Name"=>"Middle Name",
				"name"=>"Last Name",
				"companyOrganization"=>"Company",
				"Department"=>"Department",
				"function"=>"Job Title",
				"adress"=>"Home Street",
				"city"=>"Home City",
				"postalCode"=>"Home Postal Code",
				"country"=>"Home Country",
				"telephone"=>"Home Phone",
				"telmobile"=>"Mobile Phone",
				"mail"=>"E-mail Address",
				"comment"=>"Notes"
			)
		),
		//THUNDERBIRD
		"csv_thunderbird"=>array(
			"delimiter"=>",",
			"enclosure"=>"",
			"fieldKeys"=>array(
					"firstName"=>"Prénom",
					"name"=>"Nom de famille",
					"mail"=>"Première adresse électronique",
					"telephone"=>"Tél. personnel",
					"telmobile"=>"Portable",
					"adress"=>"Adresse privée",
					"city"=>"Ville",
					"country"=>"Pays/État",
					"postalCode"=>"Code postal",
					"function"=>"Profession",
					"companyOrganization"=>"Société",
					"comment"=>"Notes"
			)
		)
	);

	/*******************************************************************************************
	 * SURCHARGE : CONSTRUCTEUR
	 *******************************************************************************************/
	function __construct($objIdOrValues=null)
	{
		parent::__construct($objIdOrValues);
		//Tri par défaut en fonction du prénom (cf. parametrage general) : switch "name" et "firstName"
		if(Ctrl::$agora->personsSort=="firstName")   {static::$sortFields[0]="firstName@@asc";  static::$sortFields[1]="firstName@@desc";  static::$sortFields[2]="name@@asc"; static::$sortFields[3]="name@@desc";
		}
	}

	/*******************************************************************************************
	 * SURCHARGE : AFFICHE LE LABEL DE L'UTILISATEUR / CONTACT
	 *******************************************************************************************/
	public function getLabel($labelType=null)
	{
		if(empty($this->firstName) && empty($this->name))			{return "<i>".Txt::trad("deletedUser")."</i>";}					//Renvoie "Compte utilisateur supprimé"
		elseif($labelType=="full")									{return $this->civility." ".$this->firstName." ".$this->name;}	//$labelType=="full" -> "Dr Boby SMITH"  (cf. profil utilisateur ou contact)
		elseif($labelType=="firstName" && !empty($this->firstName))	{return $this->firstName;}										//$labelType=="firstName" -> "Boby"  (cf. Messenger ou "MdlTask->responsiblePersons()")
		else														{return $this->firstName." ".$this->name;}						//Par défaut -> "Boby SMITH"
	}

	/*******************************************************************************************
	 * POSSÈDE UNE ADRESSE ? city + (adress / postalCode)
	 *******************************************************************************************/
	public function hasAdress()
	{
		return (!empty($this->city) && (!empty($this->adress) || !empty($this->postalCode)));
	}

	/*******************************************************************************************
	 * AFFICHE LES INFOS SUR LA PERSONNE  ($displayMode : block / line / profile / edit)
	 *******************************************************************************************/
	public function getFieldsValues($displayMode)
	{
		$labels=null;
		//Affichage en page principale (display block/line)
		if($displayMode=="block" || $displayMode=="line")
		{
			$labels.=	$this->getFieldValue("companyOrganization",$displayMode).
						$this->getFieldValue("function",$displayMode).
						$this->getFieldValue("mail",$displayMode).
						$this->getFieldValue("telephone",$displayMode).
						$this->getFieldValue("telmobile",$displayMode).
						$this->getFieldValue("fullAdress",$displayMode);
		}
		//Affichage du profil (vue / édition)
		elseif($displayMode=="profile" || $displayMode=="edit")
		{
			if($displayMode=="edit")	{$labels.=$this->getFieldValue("civility",$displayMode).$this->getFieldValue("name",$displayMode).$this->getFieldValue("firstName",$displayMode)."<hr>";}
			$labels.=	$this->getFieldValue("mail",$displayMode).
						$this->getFieldValue("telmobile",$displayMode).
						$this->getFieldValue("telephone",$displayMode).
						($displayMode=="edit"?"<hr>":null).
						$this->getFieldValue("adress",$displayMode).
						$this->getFieldValue("postalCode",$displayMode).
						$this->getFieldValue("city",$displayMode).
						$this->getFieldValue("country",$displayMode).
						($displayMode=="edit"?"<hr>":null).
						$this->getFieldValue("function",$displayMode).
						$this->getFieldValue("companyOrganization",$displayMode).
						$this->getFieldValue("comment",$displayMode);
		}
		//Ajoute la date de dernire connexion
		if(static::objectType=="user" && Ctrl::$curUser->isAdminSpace() && $displayMode!="edit")  {$labels.=$this->getFieldValue("lastConnection",$displayMode);}
		//Si besoin, enleve le dernier séparateur (pas de "trim()" car pas fiable dans ce cas)
		if($displayMode=="line")	{$labels=substr($labels,0,strrpos($labels,"<img src='app/img/separator.png'>"));}
		//Renvoi le résultat
		return $labels;
	}

	/*******************************************************************************************
	 * AFFICHE UNE INFO SUR LA PERSONNE  ($displayMode : "block", "line", "profile", "edit")
	 *******************************************************************************************/
	public function getFieldValue($fieldName, $displayMode)
	{
		//Valeur du champ
		$fieldValue=$this->$fieldName;
		//Habillage du champ en mode "Edit" ||  Habillage de certains champs spécifiques
		if($displayMode=="edit"){
			if($fieldName=="comment")	{$fieldValue="<textarea name='".$fieldName."'>".strip_tags($fieldValue)."</textarea>";}
			else						{$fieldValue="<input type='text' name='".$fieldName."' value=\"".strip_tags($fieldValue)."\">";}
		}
		//Mail : redirige vers le module mail (ou à défaut, l'outil de messagerie). "parent" pour rediriger aussi depuis un lightbox..
		elseif($fieldName=="mail" && !empty($fieldValue)){
			$mailtoUrl=(Ctrl::$curSpace->moduleEnabled("mail"))  ?  "javascript:windowParent.redir('?ctrl=mail&checkedMailto=".$this->$fieldName."');"  :  "mailto:".$this->$fieldName;
			$fieldValue="<a href=\"".$mailtoUrl."\" title=\"".Txt::trad("sendMail")."\">".$this->$fieldName." &nbsp;<img src='app/img/person/mail.png'></a>";
		}
		elseif($fieldName=="fullAdress" && $this->hasAdress())	{$fieldValue="<a href=\"javascript:lightboxOpen('?ctrl=misc&action=PersonsMap&targetObjects[".static::objectType."]=".$this->_id."');\" title=\"".Txt::trad("mapLocalize")."\">".$this->adress." ".$this->postalCode." ".$this->city." <img src='app/img/map.png'></a>";}//Adresse complete : affiche une carte 
		elseif($fieldName=="lastConnection")					{$fieldValue=(!empty($fieldValue))  ?  Txt::trad("lastConnection2")." ".Txt::dateLabel($fieldValue,"dateMini")  :  Txt::trad("lastConnectionEmpty");}//"Connecté le 20 mars" / "Pas encore connecté"
		elseif($fieldName=="comment")							{$fieldValue=nl2br($fieldValue);}
		//Retourne le champ dans son conteneur
		if(!empty($fieldValue)){
			if($displayMode=="block")		{return "<div class='objPersonDetail'>".$fieldValue."</div>";}
			elseif($displayMode=="line")	{return "<div class='objPersonDetail'>".$fieldValue."</div> &nbsp;<img src='app/img/separator.png'>&nbsp;";}
			else							{return "<div class='objField'><div class='fieldLabel'><img src='app/img/person/".$fieldName.".png'> ".Txt::trad($fieldName)."</div><div>".$fieldValue."</div></div>";}
		}
	}

	/*******************************************************************************************
	 * LA PERSONNE POSSÈDE UNE IMAGE DE PROFIL ?
	 *******************************************************************************************/
	public function hasImg()
	{
		if($this->_hasImg===null)  {$this->_hasImg=is_file($this->pathImgThumb());}
		return $this->_hasImg;
	}

	/*******************************************************************************************
	 * PATH DE L'IMAGE DE PROFIL
	 *******************************************************************************************/
	public function getImgPath($getDefaultImg=false)
	{
		if($this->hasImg())				{return $this->pathImgThumb()."?version=".md5($this->dateModif);}//"version" pour toujours afficher la derniere image mise en cache
		elseif($getDefaultImg==true)	{return "app/img/".static::moduleName."/iconBg.png";}//image par défaut (si demandé)
	}

	/*******************************************************************************************
	 * BALISE <IMG> DE L'IMAGE DU PROFIL
	 *******************************************************************************************/
	public function getImg($openProfile=false, $smallImg=false, $getDefaultImg=false)
	{
		$imgPath=$this->getImgPath($getDefaultImg);
		if(!empty($imgPath)){
			$personImg="<img src='".$imgPath."' class='personImg ".($smallImg==true?"personImgSmall":null)."'>";
			if($openProfile==true)  {$personImg="<a href=\"javascript:lightboxOpen('".$this->getUrl("vue")."');\" title=\"".Txt::trad("displayProfil")."\">".$personImg."</a>";}
			return $personImg;
		}
	}

	/*******************************************************************************************
	 * AFFICHE LE MENU DE GESTION DE L'IMAGE DU PROFIL
	 *******************************************************************************************/
	public function displayImgMenu()
	{
		////	Ajouter un fichier  OU  Fichier à conserver/modifier/supprimer
		if($this->hasImg()!=true)	{return "<input type='file' name='personImgFile'><input type='hidden' name='personImgAction' value='change'>";}	
		else{
			return "<select name='personImgAction' onchange=\"if(this.value=='change') {\$('[name=personImgFile]').fadeIn();} else {\$('[name=personImgFile]').fadeOut();}\">
						<option>".Txt::trad("keepImg")."</option>
						<option value='change'>".Txt::trad("changeImg")."</option>
						<option value='delete'>".Txt::trad("delete")."</option>
					</select>
					<input type='file' name='personImgFile' style='display:none;margin-top:10px;'>";
		}
	}

	/*******************************************************************************************
	 * ENREGISTRE/SUPPRIME L'IMAGE DU PROFIL
	 *******************************************************************************************/
	public function editImg()
	{
		if(Req::isParam("personImgAction"))
		{
			// Supprime
			if(Req::getParam("personImgAction")=="delete")	{unlink($this->pathImgThumb());}
			// Ajoute / change
			if(Req::getParam("personImgAction")=="change" && !empty($_FILES["personImgFile"]) && File::isType("imageResize",$_FILES["personImgFile"]["name"])){
				move_uploaded_file($_FILES["personImgFile"]["tmp_name"], $this->pathImgThumb());
				File::imageResize($this->pathImgThumb(),$this->pathImgThumb(),200);
			}
		}
	}

	/*******************************************************************************************
	 * EXPORTE DES PERSONNES AU FORMAT SPÉCIFIÉ
	 *******************************************************************************************/
	public static function exportPersons($personObjList, $exportType)
	{
		//Init
		$fileContent=null;
		////	EXPORT CSV
		if(strstr($exportType,"csv"))
		{
			//Nom et champs du .csv
			$csv=static::$csvFormats[$exportType];
			$fileName=$exportType.".csv";
			//Enlève la colonne "password" pour tous les exports csv  &&  la colonne "login" pour les contacts 
			unset($csv["fieldKeys"]["password"]);
			if(static::objectType!="user")  {unset($csv["fieldKeys"]["login"]);}
			//Créé l'entête du fichier CSV (ajoute la colonne "groups" pour les users)
			foreach($csv["fieldKeys"] as $fieldAgora=>$fieldCsv)  {$fileContent.=$csv["enclosure"].$fieldCsv.$csv["enclosure"].$csv["delimiter"];}
			if(static::objectType=="user")  {$fileContent.=$csv["enclosure"]."groups".$csv["enclosure"].$csv["delimiter"];}
			$fileContent.="\n";
			//Ajoute chaque user/contact
			foreach($personObjList as $tmpPerson)
			{
				//Ajoute chaque champ du user/contact
				foreach($csv["fieldKeys"] as $fieldAgora=>$fieldCsv){
					if($csv["enclosure"]=="'")	{$tmpPerson->$fieldAgora=addslashes($tmpPerson->$fieldAgora);}//Addslashes de la valeur si besoin
					$fileContent.=(!empty($tmpPerson->$fieldAgora))  ?  $csv["enclosure"].$tmpPerson->$fieldAgora.$csv["enclosure"].$csv["delimiter"]  :  $csv["delimiter"];
				}
				//User : ajoute la liste des groupes
				if(static::objectType=="user"){
					foreach(MdlUserGroup::getGroups(null,$tmpPerson) as $tmpGroup)  {$fileContent.=$csv["enclosure"].$tmpGroup->title.$csv["enclosure"].$csv["delimiter"];}
				}
				//Retour à la ligne
				$fileContent.="\n";
			}
		}
		////	EXPORT LDIF
		elseif($exportType=="ldif")
		{
			//Init
			$fileName="contact.ldif";
			//Ajout de chaque personne
			foreach($personObjList as $tmpPerson)
			{
				$fileContent.="dn: cn=".$tmpPerson->firstName." ".$tmpPerson->name."\n";
				$fileContent.="objectclass: top\n";
				$fileContent.="objectclass: person\n";
				$fileContent.="objectclass: organizationalPerson\n";
				$fileContent.="cn: ".$tmpPerson->firstName." ".$tmpPerson->name."\n";
				$fileContent.="givenName: ".$tmpPerson->firstName."\n";
				$fileContent.="sn: ".$tmpPerson->name."\n";
				if(!empty($tmpPerson->mail))				{$fileContent.="mail: ".$tmpPerson->mail."\n";}
				if(!empty($tmpPerson->telephone))			{$fileContent.="homePhone: ".$tmpPerson->telephone."\n";}
				if(!empty($tmpPerson->telephone))			{$fileContent.="telephonenumber: ".$tmpPerson->telephone."\n";}
				if(!empty($tmpPerson->telmobile))			{$fileContent.="mobile: ".$tmpPerson->telmobile."\n";}
				if(!empty($tmpPerson->adress))				{$fileContent.="homeStreet: ".$tmpPerson->adress."\n";}
				if(!empty($tmpPerson->city))				{$fileContent.="mozillaHomeLocalityName: ".$tmpPerson->city."\n";}
				if(!empty($tmpPerson->postalCode))			{$fileContent.="mozillaHomePostalCode: ".$tmpPerson->postalCode."\n";}
				if(!empty($tmpPerson->country))				{$fileContent.="mozillaHomeCountryName: ".$tmpPerson->country."\n";}
				if(!empty($tmpPerson->companyOrganization))	{$fileContent.="company: ".$tmpPerson->companyOrganization."\n";}
				if(!empty($tmpPerson->function))			{$fileContent.="title: ".$tmpPerson->function."\n";}
				if(!empty($tmpPerson->comment))				{$fileContent.="description: ".$tmpPerson->comment."\n";}
				$fileContent.="\n";
			}
		}
		////	EXPORT VCARD (.vcf)
		elseif($exportType=="vcard")
		{
			//Init
			$fileName="contacts_agora.vcf";
			//Ajout de chaque personne au fichier Vcard
			foreach($personObjList as $tmpPerson)
			{
				$fileContent .="BEGIN:VCARD\n";
				$fileContent .="VERSION:2.1\n";//V2.1 pour une complatibilité Android
				$fileContent.="FN:".$tmpPerson->firstName." ".$tmpPerson->name."\n";
				$fileContent.="N:".$tmpPerson->name.";".$tmpPerson->firstName."\n";
				if(!empty($tmpPerson->telmobile))			{$fileContent.="TEL;CELL:".$tmpPerson->telmobile."\n";}
				if(!empty($tmpPerson->telephone))			{$fileContent.="TEL;HOME:".$tmpPerson->telephone."\n";}
				if(!empty($tmpPerson->mail))				{$fileContent.="EMAIL: ".$tmpPerson->mail."\n";}
				if(!empty($tmpPerson->adress))				{$fileContent.="ADR;TYPE=home:;;".$tmpPerson->adress.";".$tmpPerson->city.";;".$tmpPerson->postalCode.";".$tmpPerson->country."\n";}
				if(!empty($tmpPerson->companyOrganization))	{$fileContent.="ORG:".$tmpPerson->companyOrganization."\n";}
				if(!empty($tmpPerson->function))			{$fileContent.="TITLE:".$tmpPerson->function."\n";}
				if(!empty($tmpPerson->comment))				{$fileContent.="NOTE:".$tmpPerson->comment."\n";}
				$fileContent.="END:VCARD\n";
			}
		}
		/////   LANCEMENT DU TELECHARGEMENT
		File::download($fileName, null, $fileContent);
	}

	/*******************************************************************************************
	 * CONNEXION A UN SERVEUR LDAP
	 *******************************************************************************************/
	public static function ldapConnect($ldapServer=null, $ldapServerPort=null, $ldapUserLogin=null, $ldapUserPassword=null, $displayNotif=true)
	{
		// la fonction de connexion LDAP est activée ?
		if(!function_exists("ldap_connect"))	{return false;}
		// Config
		if(empty($ldapServer))			{$ldapServer		=Ctrl::$agora->ldap_server;}
		if(empty($ldapServerPort))		{$ldapServerPort	=Ctrl::$agora->ldap_server_port;}
		if(empty($ldapUserLogin))		{$ldapUserLogin		=Ctrl::$agora->ldap_admin_login;}
		if(empty($ldapUserPassword))	{$ldapUserPassword	=Ctrl::$agora->ldap_admin_pass;}
		// Connexion au serveur LDAP
		$ldapConnection=@ldap_connect($ldapServer, $ldapServerPort);
		ldap_set_option($ldapConnection, LDAP_OPT_PROTOCOL_VERSION, 3);	//Utiliser LDAP Protocol V3! (v2 par défaut)
		ldap_set_option($ldapConnection, LDAP_OPT_REFERRALS, 0);		//Pour Active Directory
		// Identification au serveur LDAP en tant qu'admin + retourne la connexion ldap si c'est ok
		$ldapIdentification=@ldap_bind($ldapConnection, $ldapUserLogin, $ldapUserPassword);
		if($ldapIdentification==false && $displayNotif==true)	{Ctrl::notify("AGORA_ldapConnectError");}
		return ($ldapIdentification==false) ? false : $ldapConnection;
	}

	/*******************************************************************************************
	 * RECUPERES DES PERSONNES DE L'ANNUAIRE LDAP  (exple de $searchFilter -> "(&(samaccountname=MONLOGIN)(cn=*))" )
	 *******************************************************************************************/
	public static function ldapSearch($getLoginPassword=false, $searchMode="importArray", $searchFilter="(cn=*)")
	{
		$ldapConnection=self::ldapConnect();
		if($ldapConnection!=false)
		{
			// Champs Agora => Attributs LDAP correspondants (Toujours en minucule!)
			$ldapAttributes=array(
				"civility"			=>array("designation"),
				"name"				=>array("sn","name","lastname"),//Sur ActiveDirectory : "sn" est avant "name"
				"firstName"			=>array("firstname","givenname","knownas"),
				"mail"				=>array("mail"),
				"telmobile"			=>array("mobile","mobiletelephonenumber"),
				"telephone"			=>array("telephonenumber","homephone","hometelephonenumber"),
				"adress"			=>array("postaladdress","homepostaladdress","streetaddress","street"),
				"postalCode"		=>array("postalcode","homepostalcode"),
				"city"				=>array("localityname","l"),
				"companyOrganization"=>array("company","department","organizationname","organizationalunitname","o","ou"),
				"function"			=>array("title","titleall"),
				"comment"			=>array("description"));
			// Champs Agora  => On ajoute l'id/password en cas d'import d'utilisateur
			if($getLoginPassword==true){
				$ldapAttributes["login"]=array("uid","samaccountname");
				$ldapAttributes["password"]=array("userpassword","password");
			}
			// Récupere les users LDAP
			$ldapSearch=@ldap_search($ldapConnection, Ctrl::$agora->ldap_base_dn, $searchFilter);
			if($ldapSearch!=false)
			{
				$searchPersons=ldap_get_entries($ldapConnection, $ldapSearch);
				if($searchPersons["count"]>0)
				{
					////	Champs Agora à utiliser
					$importedFields=[];
					foreach($searchPersons as $userAttributes){
						//Pour chaque champs de l'utilisateur importé : vérif si le champ ldap correspond à un champ Agora
						foreach($ldapAttributes as $agoraField=>$tmpLdapAttributes){
							foreach($tmpLdapAttributes as $ldapAttribute){
								if(!empty($userAttributes[$ldapAttribute][0]) && !in_array($agoraField,$importedFields))   {$importedFields[]=$agoraField;}
							}
						}
					}
					////	Attributs / valeurs de chaque contact
					$importedPersons=[];
					foreach($searchPersons as $userKey=>$userAttributes)
					{
						if(is_numeric($userKey))
						{
							$importedPerson=[];
							foreach($ldapAttributes as $agoraField=>$tmpLdapAttributes)
							{
								//Cle du tableau d'entête correspondant au champ visé (tableau d'import: numéro de colonne du champ agora || import direct : nom du champ agora)
								$fieldCpt=array_search($agoraField,$importedFields);
								$fieldKey=($searchMode=="importArray") ? $fieldCpt : $agoraField;
								// Ajoute la valeur si l'attribut ldap correspond à un champ de l'agora (..et qu'il n'a pas déjà été ajouté avec un autre attribut)
								foreach($tmpLdapAttributes as $ldapAttribute){
									if(isset($userAttributes[$ldapAttribute][0]))   {$importedPerson[$fieldKey]=$userAttributes[$ldapAttribute][0];}
								}
								//Champ non spécifié : "null"
								if(empty($importedPerson[$fieldKey]))   {$importedPerson[$fieldKey]="";}//pas de null
								//Si besoin, re-tri les champs en fonction du numéro de colonne du champ agora
								if($searchMode=="importArray")	{ksort($importedPerson);}
							}
							//Ajoute les Valeurs à l'user temporaire
							$importedPersons[]=$importedPerson;
						}
					}
					//Ferme la connexion et retourne le résultat
					ldap_close($ldapConnection);
					return array("headerFields"=>$importedFields, "ldapPersons"=>$importedPersons);
				}
			}
		}
	}
}