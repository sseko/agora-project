<?php
/*
 * Classe de gestion d'une langue
 */
class Trad extends Txt
{
	/*
	 * Chargement les elements de traduction
	 */
	public static function loadTradsLang()
	{
		////	Dates formatées par PHP
		setlocale(LC_TIME, "en_US.utf8", "en_US.UTF-8", "en_US", "en", "english");

		////	TRADUCTIONS
		self::$trad=array(
			////	Header http / Editeurs Tinymce,DatePicker,etc
			"CURLANG"=>"en",
			"DATELANG"=>"en_GB",
			"EDITORLANG"=>"en_GB",

			////	Divers
			"fillFieldsForm"=>"Please fill in the fields of the form",
			"requiredFields"=>"Required Fields",
			"inaccessibleElem"=>"Inaccessible Element",
			"warning"=>"Warning",
			"elemEditedByAnotherUser"=>"The element is being edited by",//"..bob"
			"yes"=>"yes",
			"no"=>"no",
			"none"=>"no",
			"noneFem"=>"no",
			"or"=>"or",
			"and"=>"and",
			"goToPage"=>"Go to page",
			"alphabetFilter"=>"Alphabetical Filter",
			"displayAll"=>"Display all",
			"allCategory"=>"Any category",
			"show"=>"Show",
			"hide"=>"Hide",
			"byDefault"=>"By default",
			"mapLocalize"=>"Localize on the map",
			"mapLocalizationFailureLeaflet"=>"Localization of the following address failed",
			"mapLocalizationFailureLeaflet2"=>"Please check that the following address exists on www.google.com/maps or www.openstreetmap.org",
			"sendMail"=>"Send an email",
			"mailInvalid"=>"This email is not valid",
			"element"=>"element",
			"elements"=>"elements",
			"folder"=>"folder",
			"folders"=>"folders",
			"close"=>"Close",
			"visibleAllSpaces"=>"Visible on all spaces",
			"confirmCloseForm"=>"Are you sure you want to close the form?",
			"modifRecorded"=>"The changes were saved",
			"confirm"=>"Confirm ?",
			"comment"=>"Comment",
			"commentAdd"=>"Add a comment",
			"optional"=>"(optional)",
			"objNew"=>"Recently created item",
			"personalAccess"=>"Personal access",
			"copyUrl"=>"Copy the link/url to the element",
			"copyUrlInfo"=>"This link/url allows direct access to the element:<br> It can be integrated into a news, a forum topic, an email, a blog (external access), etc.",
			"copyUrlConfirmed"=>"The web address has been copied successfully.",
			"cancel"=>"Cancel",

			////	images
			"picture"=>"Picture",
			"pictureProfil"=>"Profile picture",
			"wallpaper"=>"wallpaper",
			"keepImg"=>"Keep image",
			"changeImg"=>"Change image",
			"pixels"=>"pixels",

			////	Connexion
			"specifyLoginPassword"=>"Thank you for choosing a login and a password",
			"specifyLogin"=>"Thank you for choosing an email/login (without space)",
			"specifyLoginMail"=>"It is recommended to use an email as login",
			"login"=>"Email / Login",
			"loginPlaceholder"=>"Email / Login",
			"connect"=>"Log In",
			"connectAuto"=>"Remember me",
			"connectAutoInfo"=>"Save my login and password to automatically connect",
			"gIdentityButton"=>"Login with Google",
			"gIdentityButtonInfo"=>"Sign in with your Google / Gmail account : to do this, you must already have an account on this space, with an email address <i>@gmail.com</i>",
			"gIdentityUserUnknown"=>"is not registered on the space",
			"connectSpaceSwitch"=>"Connect to another space",
			"connectSpaceSwitchConfirm"=>"Are you sure you want to leave this space to connect to another space ?",
			"guestAccess"=>"Login as guest",
			"guestAccessInfo"=>"Log in to this space as a guest",
			"spacePassError"=>"Wrong password",
			"ieObsolete"=>"Your browser is outdated and does not support all HTML standards : It is advisable to update it or use another browser",
			
			////	Password : connexion d'user / edition d'user / reset du password
			"password"=>"Password",
			"passwordModify"=>"Change password",
			"passwordToModify"=>"Temporary password (to be changed at login)",//Mail d'envoi d'invitation
			"passwordToModify2"=>"Password (change if needed)",//Mail de création de compte
			"passwordVerif"=>"Confirm password",
			"passwordInfo"=>"Leave blank if you want to keep your password",
			"passwordInvalid"=>"Your password must have at least 6 characters with at least 1 digit and at least 1 letter",
			"passwordConfirmError"=>"Your confirmation password is not valid",
			"specifyPassword"=>"Thank you to specify a password",
			"resetPassword"=>"Forgotten login info ?",
			"resetPassword2"=>"Enter your email address to receive your login and password",
			"resetPasswordNotif"=>"An email has just been sent to your address to reset your password. If you have not received an email, please verify that the address specified is correct, or that the email is not in your spams.",
			"resetPasswordMailTitle"=>"Reset your password",
			"resetPasswordMailPassword"=>"To login to your space and reset your password",
			"resetPasswordMailPassword2"=>"Please click here",
			"resetPasswordMailLoginRemind"=>"Login reminder",
			"resetPasswordIdExpired"=>"The link to reset your password has expired .. Please restart the procedure",
			
			////	Type d'affichage
			"displayMode"=>"View",
			"displayMode_line"=>"List",
			"displayMode_block"=>"Block",
			
			////	Sélectionner / Déselectionner tous les éléments
			"select"=>"Select",
			"selectUnselect"=>"Select / Unselect",
			"selectAll"=>"Select all",
			"selectSwitch"=>"Switch selection",
			"deleteElems"=>"Remove the selected elements",
			"changeFolder"=>"Move in another folder",
			"showOnMap"=>"Show on a map",
			"showOnMapInfo"=>"See on a map the contacts with an address, postal code, city",
			"selectUser"=>"Thank you for selecting a user",
			"selectUsers"=>"Thank you for selecting at least 2 users",
			"selectSpace"=>"Thank you for selecting at least one space",
			
			////	Temps ("de 11h à 12h", "le 25-01-2007 à 10h30", etc.)
			"from"=>"of ",
			"at"=>"to",
			"the"=>"the",
			"begin"=>"Begin",
			"end"=>"End",
			"days"=>"days",
			"day_1"=>"Monday",
			"day_2"=>"Tuesday",
			"day_3"=>"Wednesday",
			"day_4"=>"Thursday",
			"day_5"=>"Friday",
			"day_6"=>"Saturday",
			"day_7"=>"Sunday",
			"month_1"=>"January",
			"month_2"=>"February",
			"month_3"=>"March",
			"month_4"=>"April",
			"month_5"=>"May",
			"month_6"=>"June",
			"month_7"=>"July",
			"month_8"=>"August",
			"month_9"=>"September",
			"month_10"=>"October",
			"month_11"=>"November",
			"month_12"=>"December",
			"today"=>"Today",
			"beginEndError"=>"The end date can't be before the start date",
			"dateFormatError"=>"The date must be in the format dd/mm/YYYY",
			
			////	Menus d'édition des objets et editeur tinyMce
			"title"=>"Title",
			"name"=>"Name",
			"description"=>"Description",
			"specifyName"=>"Thank you for specifying a name",
			"editorDraft"=>"Retrieve my text",
			"editorDraftConfirm"=>"Retrieve the last specified text",
			"editorFileInsert"=>"Add Image or video",
			"editorFileInsertNotif"=>"Please select an image in Jpeg, Png, Gif or Svg format",
			
			////	Validation des formulaires
			"add"=>"Add",
			"modify"=>"Modify",
			"record"=>"Record",
			"modifyAndAccesRight"=>"Modify & define access",
			"validate"=>"Validate",
			"send"=>"Send",
			"sendTo"=>"Send to",
			
			////	Tri d'affichage. Tous les elements (dossier, tache, lien, etc...) ont par défaut une date, un auteur & une description
			"sortBy"=>"Sorted by",
			"sortBy2"=>"Sort by",
			"SORT_dateCrea"=>"creation date",
			"SORT_dateModif"=>"change date",
			"SORT_title"=>"title",
			"SORT_description"=>"description",
			"SORT__idUser"=>"author",
			"SORT_extension"=>"type of file",
			"SORT_octetSize"=>"size",
			"SORT_downloadsNb"=>"downloads",
			"SORT_civility"=>"title",
			"SORT_name"=>"last name",
			"SORT_firstName"=>"first name",
			"SORT_adress"=>"address",
			"SORT_postalCode"=>"zip code",
			"SORT_city"=>"city",
			"SORT_country"=>"country",
			"SORT_function"=>"function",
			"SORT_companyOrganization"=>"company / Organization",
			"SORT_lastConnection"=>"last login",
			"tri_ascendant"=>"Ascend",
			"tri_descendant"=>"Descend",
			
			////	Options de suppression
			"confirmDelete"=>"Confirm the deletion ?",
			"confirmDeleteNbElems"=>"items selected",//"55 éléments sélectionnés"
			"confirmDeleteDbl"=>"Are you sure ?!",
			"confirmDeleteFolderAccess"=>"Caution ! certain sub-folders are not accessible for you : they will be deleted !",
			"notifyBigFolderDelete"=>"Deleting --NB_FOLDERS-- sub-folders can be a little large, please wait a few moments before the end of the process",
			"delete"=>"Delete",
			"notDeletedElements"=>"Some items have not been deleted because you do not have the necessary access rights",
			
			////	Visibilité d'un Objet : auteur et droits d'accès
			"autor"=>"Author",
			"postBy"=>"Post by",
			"guest"=>"Guest",
			"creation"=>"Creation",
			"modification"=>"Modification",
			"createBy"=>"Created by",
			"modifBy"=>"Modified by",
			"objHistory"=>"Element history",
			"all"=>"all",
			"deletedUser"=>"deleted user account",
			"folderContent"=>"content",
			"accessRead"=>"Read",
			"accessReadInfo"=>"Access in reading",
			"accessWriteLimit"=>"limited writing",
			"accessWriteLimitInfo"=>"Limited write access: possibility to add -OBJCONTENT- in the -OBJLABEL-,<br> but each user can only modify/delete the -OBJCONTENT- he created.",
			"accessWrite"=>"write",
			"accessWriteInfo"=>"Access in writing",
			"accessWriteInfoContainer"=>"Access in writing : Ability to add, modify or delete all the -OBJCONTENT-s of the -OBJLABEL-",
			"accessAutorPrivilege"=>"Only the author and administrators can edit the access rights or delete the -OBJLABEL-",
			"accessRightsInherited"=>"Access rights inherited from the -OBJLABEL-",
			
			////	Libellé des objets
			"OBJECTcontainer"=>"container",
			"OBJECTelement"=>"element",
			"OBJECTfolder"=>"folder",
			"OBJECTdashboardNews"=>"news",
			"OBJECTdashboardPoll"=>"poll",
			"OBJECTfile"=>"file",
			"OBJECTfileFolder"=>"folder",
			"OBJECTcalendar"=>"calendar",
			"OBJECTcalendarEvent"=>"event",
			"OBJECTforumSubject"=>"topic",
			"OBJECTforumMessage"=>"message",
			"OBJECTcontact"=>"contact",
			"OBJECTcontactFolder"=>"folder",
			"OBJECTlink"=>"bookmark",
			"OBJECTlinkFolder"=>"folder",
			"OBJECTtask"=>"task",
			"OBJECTtaskFolder"=>"folder",
			"OBJECTuser"=>"user",
			
			////	Envoi d'un email (nouvel utilisateur, notification de création d'objet, etc...)
			"MAIL_hello"=>"Hello",
			"MAIL_hideRecipients"=>"Hide recipients",
			"MAIL_hideRecipientsInfo"=>"Put all recipients in hidden copy. Note that with this option your email may arrive in spam in some mailboxes",
			"MAIL_addReplyTo"=>"Put my email in reply",
			"MAIL_addReplyToInfo"=>"Add my email in the ''Reply to'' field. Note that with this option your email may arrive in spam in some mailboxes",
			"MAIL_noFooter"=>"Do not sign the message",
			"MAIL_noFooterInfo"=>"Do not sign the end of the message with the sender's name and a weblink to the space",
			"MAIL_receptionNotif"=>"Delivery receipt",
			"MAIL_receptionNotifInfo"=>"Warning! some email clients don't support delivery receipts",
			"MAIL_specificMails"=>"Add email addresses",
			"MAIL_specificMailsInfo"=>"Add email addresses listed on the space",
			"MAIL_fileMaxSize"=>"All of your attachments should not exceed 15 MB, some messaging services may refuse emails beyond this limit. Send anyway?",
			"MAIL_sendButton"=>"Send email",
			"MAIL_sendBy"=>"Sent by",//"Envoyé par" Mr trucmuche
			"MAIL_sendOk"=>"The email was sent !",
			"MAIL_sendNotif"=>"The notification email was sent !",
			"MAIL_notSend"=>"The email could not be sent",
			"MAIL_notSendEverybody"=>"The email was not sent to all recipients: if possible check the validity of the emails",
			"MAIL_fromTheSpace"=>"from the space",//"depuis l'espace Bidule"
			"MAIL_elemCreatedBy"=>"-OBJLABEL- created by",//boby
			"MAIL_elemModifiedBy"=>"-OBJLABEL- modified by",//boby
			"MAIL_elemAccessLink"=>"Click here to access the element on your space",

			////	Dossier & fichier
			"gigaOctet"=>"Gb",
			"megaOctet"=>"Mb",
			"kiloOctet"=>"Kb",
			"rootFolder"=>"Root folder",
			"rootFolderEditInfo"=>"Open the the space settings<br> to change the access rights to the root folder",
			"addFolder"=>"add a folder",
			"download"=>"Download file",
			"downloadFolder"=>"Download folder",
			"diskSpaceUsed"=>"Disk space used",
			"diskSpaceUsedModFile"=>"Disk space used for the File manager",
			"downloadAlert"=>"Your archive is too large to download during the day (--ARCHIVE_SIZE--). Please restart the download after",//"19h"
			
			////	Infos sur une personne
			"civility"=>"Title",
			"name"=>"Name",
			"firstName"=>"First name",
			"adress"=>"Address",
			"postalCode"=>"Zip code",
			"city"=>"City",
			"country"=>"country",
			"telephone"=>"Phone",
			"telmobile"=>"Mobile Phone",
			"mail"=>"Email",
			"function"=>"Function",
			"companyOrganization"=>"Company /Organization",
			"lastConnection"=>"Last login",
			"lastConnection2"=>"Logged in on",
			"lastConnectionEmpty"=>"Not logged in yet",
			"displayProfil"=>"Display Profile",
			
			////	Captcha
			"captcha"=>"Copy the 5 characters",
			"captchaInfo"=>"Thank you for entering the 5 characters for your identification",
			"captchaError"=>"The visual identification is false",
			
			////	Rechercher
			"searchSpecifyText"=>"Thank you for entering key words of at least 3 characters",
			"search"=>"Search",
			"searchDateCrea"=>"Creation date",
			"searchDateCreaDay"=>"less than one day",
			"searchDateCreaWeek"=>"less than a week",
			"searchDateCreaMonth"=>"less than one month",
			"searchDateCreaYear"=>"less than a year",
			"searchOnSpace"=>"Search in this space",
			"advancedSearch"=>"Advanced Search",
			"advancedSearchAnyWord"=>"any word",
			"advancedSearchAllWords"=>"all words",
			"advancedSearchExactPhrase"=>"exact phrase",
			"keywords"=>"Key words",
			"listModules"=>"Modules",
			"listFields"=>"Fields",
			"listFieldsElems"=>"Elements involved",
			"noResults"=>"No result",
			
			////	Inscription d'utilisateur
			"userInscription"=>"Register on this space",
			"userInscriptionInfo"=>"Create a new user account (validated by an administrator)",
			"userInscriptionSpace"=>"Register on the space",
			"userInscriptionRecorded"=>"Your registration was saved : it will be validated as soon as possible by the administrator of the space",
			"userInscriptionNotifSubject"=>"New registration on the space",//"Mon espace"
			"userInscriptionNotifMessage"=>"A new registration has been requested by <i>--NEW_USER_LABEL--</i> for the space <i>--SPACE_NAME--</i> : <br><br><i>--NEW_USER_MESSAGE--<i> <br><br>Remember to validate or invalidate this registration during your next connection.",
			"userInscriptionEdit"=>"Allow visitors to register on the space",
			"userInscriptionEditInfo"=>"The registration is on the homepage of the site. Registration must then be validated by the administrator of the space.",
			"userInscriptionNotifyEdit"=>"Notify by email at each registration",
			"userInscriptionNotifyEditInfo"=>"Send an email notification to space administrators, after each registration",
			"userInscriptionPulsate"=>"Registration",
			"userInscriptionValidate"=>"Validate user registration",
			"userInscriptionValidateInfo"=>"Validate user registration on the site",
			"userInscriptionSelectValidate"=>"Validate registrations",
			"userInscriptionSelectInvalidate"=>"Invalidate registrations",
			"userInscriptionInvalidateMail"=>"Your account has not been validated on",

			////	Importer ou Exporter : Contact OU Utilisateurs
			"importExport_user"=>"Import / Export users",
			"import_user"=>"Import users into the current space",
			"export_user"=>"Export current space users",
			"importExport_contact"=>"Import / Export contacts",
			"import_contact"=>"Import contacts into the current folder",
			"export_contact"=>"Export contacts from current folder",
			"exportFormat"=>"Format",
			"specifyFile"=>"Thank you for choosing a file",
			"fileExtension"=>"The file type is invalid. It must be of the type",
			"importContactRootFolder"=>"The contacts will be assigned by default to &quot;all users of the space&quot;",//"Mon espace"
			"importInfo"=>"Select the Agora's fields to target, thanks to the dropdown of each column",
			"importNotif1"=>"Thank you for selecting the name's column in the select boxes",
			"importNotif2"=>"Thank you for selecting a contact to import",
			"importNotif3"=>"this agora's field has already been selected in another column (each agora's fields can be selected only once)",

			////	Messages d'erreur / Notifications
			"NOTIF_identification"=>"Invalid login or password",
			"NOTIF_identificationToken"=>"Obsolete authentication token, please log in again",
			"NOTIF_presentIp"=>"This user account is currently being used from another computer, with another IP address",
			"NOTIF_noAccessNoSpaceAffected"=>"Your user account has been successfully identified, but you are not currently assigned to any space. Please contact the administrator",
			"NOTIF_noAccess"=>"You are logged out",
			"NOTIF_fileOrFolderAccess"=>"File or folder not accessible",
			"NOTIF_diskSpace"=>"Space for the storage of your files is insufficient, you cannot add file",
			"NOTIF_fileVersionForbidden"=>"File type not allowed",
			"NOTIF_fileVersion"=>"File type different from the original",
			"NOTIF_folderMove"=>"You cannot move the folder inside..!",
			"NOTIF_duplicateName"=>"A folder or file with the same name already exists",
			"NOTIF_fileName"=>"A file with the same name already exists (but not replaced with the current file)",
			"NOTIF_chmodDATAS"=>"The ''DATAS'' folder is not accessible in writing. You need to give a read-write access to the owner and the group (''chmod 775'').",
			"NOTIF_usersNb"=>"You cannot add new user: limited to ", // "...limité à" 10
			
			////	Header / Footer
			"HEADER_displaySpace"=>"Available spaces",
			"HEADER_displayAdmin"=>"Administrator view",
			"HEADER_displayAdminEnabled"=>"Administrator view enabled",
			"HEADER_displayAdminInfo"=>"Show all elements of the current space (reserved for administrators)",
			"HEADER_searchElem"=>"Search in the space",
			"HEADER_documentation"=>"Documentation",
			"HEADER_disconnect"=>"Log out from Agora",
			"HEADER_shortcuts"=>"Shortcuts",
			"FOOTER_pageGenerated"=>"page generated in",

			////	Messenger / Visio
			"MESSENGER_headerModuleName"=>"Messages",
			"MESSENGER_moduleDescription"=>"Instant messaging : Chat live or start a videoconference with people connected to the space",
			"MESSENGER_messengerTitle"=>"Instant messaging : click on a person's name to chat or start a video conference",
			"MESSENGER_messengerMultiUsers"=>"Chat with others by selecting my interlocutors in the right pane",
			"MESSENGER_connected"=>"Online",
			"MESSENGER_nobody"=>"You are currently the only user logged in on the space.<br> Note: your old discussions are kept for 30 days",
			"MESSENGER_messageFrom"=>"Message from",
			"MESSENGER_messageTo"=>"sent to",
			"MESSENGER_chatWith"=>"Chat with",
			"MESSENGER_addMessageToSelection"=>"My message (selected persons)",
			"MESSENGER_addMessageTo"=>"My message to",
			"MESSENGER_addMessageNotif"=>"Thank you to specify a message",
			"MESSENGER_visioProposeTo"=>"Propose a video call to",//..boby
			"MESSENGER_visioProposeToSelection"=>"Propose a video call to the selected people",
			"MESSENGER_visioProposeToUsers"=>"Click here to start the video call with",//"..Will & Boby"
			
			////	Lancer une Visio
			"VISIO_urlAdd"=>"Add a videoconference",
			"VISIO_urlCopy"=>"Copy the videoconference link",
			"VISIO_urlDelete"=>"Remove the video conference link",
			"VISIO_launch"=>"Start the videoconference",
			"VISIO_launchFromEvent"=>"Start the videoconference of this event",
			"VISIO_urlMail"=>"Add a link at the end of the text to start a new videoconference",
			"VISIO_launchInfo"=>"Remember to allow access to your webcam and microphone",
			"VISIO_launchHelp"=>"Click here if you have problems launching the videoconference",
			"VISIO_installJitsi"=>"Install the free Jitsi application to launch your videoconferences",
			"VISIO_launchServerInfo"=>"Choose the secondary server if the primary server is not functioning properly.<br>Your contacts will have to select the same video server.",
			"VISIO_launchServerMain"=>"Main server",
			"VISIO_launchServerAlt"=>"Secondary server",
			"VISIO_launchButton"=>"Start the videoconference",

			////	vueObjMenuEdit
			"EDIT_notifNoSelection"=>"You must select at least a person or a space",
			"EDIT_notifNoPersoAccess"=>"You are not assigned to the element. validate all the same ?",
			"EDIT_notifWriteAccess"=>"There must be at least a person or a space assigned in writing",
			"EDIT_parentFolderAccessError"=>"Remember to check the access rights of the parent folder ''<i>--FOLDER_NAME--</i>'': If it is not also assigned to ''<i>--TARGET_LABEL--</i>'', the present file will not be accessible to him.",
			"EDIT_accessRight"=>"Access rights",
			"EDIT_accessRightContent"=>"Access rights to the content",
			"EDIT_spaceNoModule"=>"The current module has not yet been added to this space",
			"EDIT_allUsers"=>"All users",
			"EDIT_allUsersAndGuests"=>"All users and guests",
			"EDIT_allUsersInfo"=>"All the users of the space <i>--SPACENAME--</i>",
			"EDIT_allUsersAndGuestsInfo"=>"All the users of the space <i>--SPACENAME--</i> and guests but with a read only access (guests : people who do not have a user account)",
			"EDIT_adminSpace"=>"Administrator of this space:<br>write access to all the elements of this space",
			"EDIT_showAllUsers"=>"Display all users",
			"EDIT_showAllUsersAndSpaces"=>"Display all users and spaces",
			"EDIT_notifMail"=>"Notify",
			"EDIT_notifMail2"=>"Send a notification of creation/modification by email",
			"EDIT_notifMailInfo"=>"The notification will be sent to the people assigned to the item (-OBJLABEL-)",
			"EDIT_notifMailInfoCal"=>"<hr>If you assign the event to personal calendars, then the notification will only be sent to the owners of these calendars (write access).",
			"EDIT_notifMailAddFiles"=>"Attach files to the notification",
			"EDIT_notifMailSelect"=>"Select the recipients of notifications",
			"EDIT_accessRightSubFolders"=>"Assign the same access rights to the under-folders",
			"EDIT_accessRightSubFolders_info"=>"Extend rights of access, to subfolders that you can edit",
			"EDIT_shortcut"=>"Shortcut",
			"EDIT_shortcutInfo"=>"Put a shortcut on the main menu",
			"EDIT_attachedFile"=>"Attached files",
			"EDIT_attachedFileAdd"=>"Add attached files",
			"EDIT_attachedFileInsert"=>"Insert into text",
			"EDIT_attachedFileInsertInfo"=>"Insert image/video into editor text (jpg, png or mp4 format)",
			"EDIT_guestName"=>"Your Name / Nickname",
			"EDIT_guestNameNotif"=>"Thank you to specify a Name / Nickname",
			"EDIT_guestMail"=>"Your email",
			"EDIT_guestMailInfo"=>"Please specify your email for the validation of your proposal",
			"EDIT_guestElementRegistered"=>"Thanks for your proposition. This will be examined as soon as possible before validation",
			
			////	Formulaire d'installation
			"INSTALL_dbConnect"=>"Connection to the database",
			"INSTALL_dbHost"=>"Hostname of the databases server",
			"INSTALL_dbName"=>"Name of the database",
			"INSTALL_dbLogin"=>"User name",
			"INSTALL_adminAgora"=>"Information about the administrator of the ",
			"INSTALL_dbErrorName"=>"Warning: the name of the database should preferably contain only alphanumeric characters and dashes or underscores",
			"INSTALL_dbErrorConnect"=>"The identification to the MariaDB/MySQL database failed",
			"INSTALL_dbErrorAlreadyInstalled"=>"The installation has already been done. Thank you to remove the database whether to restart the installation.",
			"INSTALL_dbErrorNoSqlFile"=>"The db.sql installation file is not accessible or has been deleted because the installation has already been performed",
			"INSTALL_PhpOldVersion"=>"Agora-Project requires a newer version of PHP",
			"INSTALL_confirmInstall"=>"Confirm the installation ?",
			"INSTALL_installOk"=>"Agora-Project was installed correctly !",
			"INSTALL_spaceDescription"=>"Space for sharing and collaborative work",
			"INSTALL_dataDashboardNews"=>"<h3>Welcome to your new sharing space!</h3>
													<h4><img src='app/img/file/iconSmall.png'> Share your files now in the file manager</h4>
													<h4><img src='app/img/calendar/iconSmall.png'> Share your common calendars or your personal calendar</h4>
													<h4><img src='app/img/dashboard/iconSmall.png'> Expand your community's news feed</h4>
													<h4><img src='app/img/messenger.png'> Communicate via the forum, instant messaging or video conferences</h4>
													<h4><img src='app/img/task/iconSmall.png'> Centralize your notes, projects and contacts</h4>
													<h4><img src='app/img/mail/iconSmall.png'> Send newsletters by email</h4>
													<h4><img src='app/img/postMessage.png'> <a href=\"javascript:lightboxOpen('?ctrl=user&action=SendInvitation')\">Click here to send invitation emails and grow your community!</a></h4>
													<h4><img src='app/img/pdf.png'> <a href='https://www.omnispace.fr/index.php?ctrl=offline&action=Documentation' target='_blank'>For more information, see the official Omnispace & Agora-Project documentation</a></h4>",
			"INSTALL_dataDashboardPoll"=>"What do you think of the news feed ?",
			"INSTALL_dataDashboardPollA"=>"Very interesting !",
			"INSTALL_dataDashboardPollB"=>"Interesting",
			"INSTALL_dataDashboardPollC"=>"Not interesting",
			"INSTALL_dataCalendarEvt"=>"Welcome on Omnispace !",
			"INSTALL_dataForumSubject1"=>"Welcome to the Omnispace forum !",
			"INSTALL_dataForumSubject2"=>"Feel free to share your questions or discuss the topics you want to share.",

			////	MODULE_PARAMETRAGE
			////
			"AGORA_generalSettings"=>"General Settings",
			"AGORA_versions"=>"Versions",
			"AGORA_dateUpdate"=>"Updated on",
			"AGORA_Changelog"=>"View the version log",
			"AGORA_funcMailDisabled"=>"The PHP function to send emails is disabled",
			"AGORA_funcImgDisabled"=>"The PHP GD2 library for image manipulation is disabled",
			"AGORA_backupFull"=>"Full backup",
			"AGORA_backupFullInfo"=>"Recover the full backup of the space: all the files as well as the database",
			"AGORA_backupDb"=>"Back up the database",
			"AGORA_backupDbInfo"=>"Recover only the space database backup",
			"AGORA_backupConfirm"=>"This operation can take several minutes: confirm the download?",
			"AGORA_diskSpaceInvalid"=>"Disk space for files must be an integer",
			"AGORA_visioHostInvalid"=>"The web address of your videocall server is invalid : it must start with 'https'",
			"AGORA_mapApiKeyInvalid"=>"If you choose Google Map as the mapping tool, you must specify an 'API Key'",
			"AGORA_gIdentityKeyInvalid"=>"If you choose the optional connection via Google, you must specify an 'API Key' for Google SignIn",
			"AGORA_confirmModif"=>"Confirm modifications ?",
			"AGORA_name"=>"Site name",
			"AGORA_footerHtml"=>"Footer text/html",
			"AGORA_lang"=>"Language by default",
			"AGORA_timezone"=>"Timezone",
			"AGORA_spaceName"=>"Name of principal space",
			"AGORA_diskSpaceLimit"=>"Space available for the storage of the files",
			"AGORA_logsTimeOut"=>"Duration of event history (logs)",
			"AGORA_logsTimeOutInfo"=>"The retention period of the events history concerns the addition or modification of the elements. The deletion logs are kept for at least 1 year.",
			"AGORA_visioHost"=>"Videoconferencing server Jitsi",
			"AGORA_visioHostInfo"=>"Jitsi videoconferencing server address. Example: https://meet.jit.si",
			"AGORA_visioHostAlt"=>"Alternative videoconferencing server",
			"AGORA_visioHostAltInfo"=>"Alternative videoconferencing server : in case of unavailability of the main video server",
			"AGORA_skin"=>"Color of the interface",
			"AGORA_black"=>"Black",
			"AGORA_white"=>"White",
			"AGORA_wallpaperLogoError"=>"The wallpaper and the logo must have a jpg or png extension",
			"AGORA_deleteWallpaper"=>"Delete the wallpaper",
			"AGORA_logo"=>"Logo at the bottom of each page",
			"AGORA_logoUrl"=>"URL",
			"AGORA_logoConnect"=>"Logo / Image on login page",
			"AGORA_logoConnectInfo"=>"Displayed above the login form",
			"AGORA_usersCommentLabel"=>"Allow users to comment the item",
			"AGORA_usersComment"=>"comment",
			"AGORA_usersComments"=>"comments",
			"AGORA_usersLikeLabel"=>"Users can <i>Like</i> the item",
			"AGORA_usersLike_likeSimple"=>"Only like",
			"AGORA_usersLike_likeOrNot"=>"Like / Dislike",
			"AGORA_usersLike_like"=>"Like!",
			"AGORA_usersLike_dontlike"=>"Dislike",
			"AGORA_mapTool"=>"Mapping tool",
			"AGORA_mapToolInfo"=>"Mapping tool to see users and contacts on a map",
			"AGORA_mapApiKey"=>"API Key for mapping tool",
			"AGORA_mapApiKeyInfo"=>"API Key for Google Map mapping tool",
			"AGORA_gIdentity"=>"Optional connection via Google",
			"AGORA_gIdentityInfo"=>"Users can connect more easily to their space through their Google account : for that, an email <i>@gmail.com</ i> must already be registered on the account of the user.",
			"AGORA_gIdentityClientId"=>"Google Sign-In settings : Client ID",
			"AGORA_gIdentityClientIdInfo"=>"This setting is required to enable Google Sign-In : https://developers.google.com/identity/sign-in/web/",
			"AGORA_gPeopleApiKey"=>"Google People settings :  API KEY",
			"AGORA_gPeopleApiKeyInfo"=>"This setting is required to get Google / Gmail contacts : <a href='https://developers.google.com/people/' target='_blank'>https://developers.google.com/people/</a>",
			"AGORA_messengerDisabled"=>"Instant messenger enabled",
			"AGORA_moduleLabelDisplay"=>"Name of modules in the menu bar",
			"AGORA_folderDisplayMode"=>"Default view mode in folders",
			"AGORA_personsSort"=>"Sort users and contacts",
			//SMTP
			"AGORA_smtpLabel"=>"Connecting SMTP & sendMail",
			"AGORA_sendmailFrom"=>"Email 'From'",
			"AGORA_sendmailFromPlaceholder"=>"eg: 'noreply@mydomain.com'",
			"AGORA_smtpHost"=>"Server address (hostname)",
			"AGORA_smtpPort"=>"Port server",
			"AGORA_smtpPortInfo"=>"'25' by défault. '587' or '465' for SSL/TLS",
			"AGORA_smtpSecure"=>"Encrypted connection type (option)",
			"AGORA_smtpSecureInfo"=>"'ssl' or 'tls'",
			"AGORA_smtpUsername"=>"Username",
			"AGORA_smtpPass"=>"Password",
			//LDAP
			"AGORA_ldapLabel"=>"Connecting to an LDAP server",
			"AGORA_ldapLabelInfo"=>"Connection to an LDAP server for user creation on your space: cf. ''User import/export'' option of the ''User'' module",
			"AGORA_ldapUri"=>"URI LDAP",
			"AGORA_ldapUriInfo"=>"Full LDAP URI as LDAP://hostname:port or LDAPS://hostname:port for SSL encryption.",
			"AGORA_ldapPort"=>"Server port",
			"AGORA_ldapPortInfo"=>"The port used for the connection: '' 389 '' by default",
			"AGORA_ldapLogin"=>"DN of the LDAP administrator (Distinguished Name)",
			"AGORA_ldapLoginInfo"=>"for example ''cn=admin,dc=mon-entreprise,dc=com''",
			"AGORA_ldapPass"=>"Password of the admin",
			"AGORA_ldapDn"=>"DN of the group (Distinguished Name)",
			"AGORA_ldapDnInfo"=>"DN of the group : location of users in the directory. Example ''ou=mon-groupe,dc=mon-entreprise,dc=com''",
			"importLdapFilterInfo"=>"LDAP search filter (cf. https://www.php.net/manual/function.ldap-search.php). Example ''(cn=*)'' or ''(&(samaccountname=MONLOGIN)(cn=*))''",
			"AGORA_ldapDisabled"=>"The PHP module for connecting to an LDAP server is not installed",
			"AGORA_ldapConnectError"=>"LDAP server connection error !",

			////	MODULE_LOG
			////
			"LOG_moduleDescription"=>"Logs - Event Log",
			"LOG_path"=>"Path",
			"LOG_filter"=>"filter",
			"LOG_date"=>"Date / Time",
			"LOG_spaceName"=>"space",
			"LOG_moduleName"=>"module",
			"LOG_objectType"=>"Object type",
			"LOG_action"=>"Action",
			"LOG_userName"=>"User",
			"LOG_ip"=>"IP",
			"LOG_comment"=>"comment",
			"LOG_noLogs"=>"no log",
			"LOG_filterSince"=>"filtered from",
			"LOG_search"=>"search",
			"LOG_connexion"=>"connection",//action
			"LOG_add"=>"add",//action
			"LOG_delete"=>"delete",//action
			"LOG_modif"=>"edit change",//action

			////	MODULE_ESPACE
			////
			"SPACE_moduleInfo"=>"The site (or main space) can be divided into several spaces",
			"SPACE_manageSpaces"=>"Manage spaces of the site",
			"SPACE_config"=>"Settings of the space",
			//Index
			"SPACE_confirmDeleteDbl"=>"Confirm the deletion ? Attention, this action cannot be undone !",
			"SPACE_space"=>"space",
			"SPACE_spaces"=>"spaces",
			"SPACE_accessRightUndefined"=>"To define !",
			"SPACE_modules"=>"Modules",
			"SPACE_addSpace"=>"Add a space",
			//Edit
			"SPACE_userAdminAccess"=>"Space users and administrators",
			"SPACE_selectModule"=>"You must select a module",
			"SPACE_spaceModules"=>"Space modules",
			"SPACE_moduleRank"=>"Move to set the display order of modules",
			"SPACE_publicSpace"=>"Public space : guest access",
			"SPACE_publicSpaceInfo"=>"A public space is open to people who do not have a user account: the 'guests'. You can specify a generic password to protect access to this public space. The following modules will not be accessible to guests : 'mail' and 'user' (if the public space does not have a password)",
			"SPACE_publicSpaceNotif"=>"Your space is public: if it contains personal data (telephone, address, etc.) remember to specify a password to comply with the GDPR: General Data Protection Regulation",
			"SPACE_usersInvitation"=>"Users can send invitations by email",
			"SPACE_usersInvitationInfo"=>"All users can send email invitations to join the space",
			"SPACE_allUsers"=>"All the users",
			"SPACE_user"=>" User",
			"SPACE_userInfo"=>"User of the space : <br> Normal access to the space",
			"SPACE_admin"=>"Administrator",
			"SPACE_adminInfo"=>"The administrator of a space is a user who can edit or delete all the elements present in the space. He can also configure the space, create new user accounts, create user groups, send invitations by email to add new users, etc.",

			////	MODULE_UTILISATEUR
			////
			// Menu principal
			"USER_headerModuleName"=>"User",
			"USER_moduleDescription"=>"Users of the space",
			"USER_option_allUsersAddGroup"=>"Users can also create groups",
			//Index
			"USER_allUsers"=>"View all users",
			"USER_allUsersInfo"=>"View all users from all spaces",
			"USER_spaceUsers"=>"Users of the current space",
			"USER_deleteDefinitely"=>"Delete permanently",
			"USER_deleteFromCurSpace"=>"Unassign to the current space",
			"USER_deleteFromCurSpaceConfirm"=>"Confirm the unassignment of the user to current space ?",
			"USER_allUsersOnSpaceNotif"=>"All the users are affected to this space",
			"USER_user"=>"User",
			"USER_users"=>"users",
			"USER_addExistUser"=>"Add an existing user to the space",
			"USER_addExistUserTitle"=>"Add to the space an already existing user on the site : assignment to the space",
			"USER_addUser"=>"Add User",
			"USER_addUserSite"=>"Create a user on the site: by default, assigned to any space!",
			"USER_addUserSpace"=>"Create a user into the current space",
			"USER_sendCoords"=>"Send login and password",
			"USER_sendCoordsInfo"=>"Send users an email with their login and a link to initialize their password",
			"USER_sendCoordsInfo2"=>"Send users an email with their login informations",
			"USER_sendCoordsConfirm"=>"Passwords will be renewed ! continue ?",
			"USER_sendCoordsMail"=>"Your login details to your space",
			"USER_noUser"=>"No user assigned to this space for the moment",
			"USER_spaceList"=>"Spaces of the user",
			"USER_spaceNoAffectation"=>"No space",
			"USER_adminGeneral"=>"General administrator of the site",
			"USER_adminGeneralInfo"=>"Warning: the ''general administrator'' access right gives many privileges and responsibilities, in particular to edit all the elements (calendars, folders, files, etc.), as well as all the users and spaces. It is therefore advisable to assign this privilege to 2 or 3 users maximum.<br><br>For more restricted privileges, choose the access right ''space administrator'' (see main menu > ''Set the space'')",
			"USER_adminSpace"=>"Administrator of the space",
			"USER_userSpace"=>"User of the space",
			"USER_profilEdit"=>"Modify profile",
			"USER_myProfilEdit"=>"Modify my user profile",
			// Invitation
			"USER_sendInvitation"=>"Send invitations by email",
			"USER_sendInvitationInfo"=>"Send invitations by email to your contacts to join you on the current space.<hr><img src='app/img/google.png' height=15> If you have a Google account, you can also get your Gmail contacts to send invitations.",
			"USER_mailInvitationObject"=>"Invitation of ", // ..Jean DUPOND
			"USER_mailInvitationFromSpace"=>"invites you to join ", // Jean DUPOND "vous invite à rejoindre l'espace" Mon Espace
			"USER_mailInvitationConfirm"=>"Click here to confirm the invitation",
			"USER_mailInvitationWait"=>"Invitations not confirmed yet",
			"USER_exired_idInvitation"=>"The weblink for your invitation has expired ...",
			"USER_invitPassword"=>"Confirm your invitation",
			"USER_invitPassword2"=>"Choose your password to confirm your invitation",
			"USER_invitationValidated"=>"Your invitation has been validated !",
			"USER_gPeopleImport"=>"Get my contacts from my Gmail address",
			"USER_importQuotaExceeded"=>"You are limited to --USERS_QUOTA_REMAINING-- new user accounts, out of a total of --LIMITE_NB_USERS-- users",
			// groupes
			"USER_spaceGroups"=>"groups of users of the space",
			"USER_spaceGroupsEdit"=>"edit the groups of users of the space",
			"USER_groupEditInfo"=>"Each group can be modified by its author or the space administrator",
			"USER_addGroup"=>"Add a group",
			"USER_userGroups"=>"User groups",
			// Utilisateur_affecter
			"USER_searchPrecision"=>"Thank you for specifying a last name, a first name or an address of email",
			"USER_userAffectConfirm"=>"Confirm assignements?",
			"USER_userSearch"=>"Search users to add to the current space",
			"USER_allUsersOnSpace"=>"All the users of the site are already assigned to this space",
			"USER_usersSpaceAffectation"=>"Assign users to the space :",
			"USER_usersSearchNoResult"=>"No user found",
			// Utilisateur_edit & CO
			"USER_langs"=>"Language",
			"USER_persoCalendarDisabled"=>"Personal calendar disabled",
			"USER_persoCalendarDisabledInfo"=>"A personal agenda is assigned by default to each user (even if the ''Calendar'' module is not activated on the space). Check this option to disable this user's personal calendar.",
			"USER_connectionSpace"=>"Space displayed after connection",
			"USER_loginExists"=>"The login/email already exists. Please choose another",
			"USER_mailPresentInAccount"=>"A user account already exists with this email address",
			"USER_loginAndMailDifferent"=>"Both email addresses must be identical",
			"USER_mailNotifObject"=>"New account on",  // "...sur" l'Agora machintruc
			"USER_mailNotifContent"=>"Your user account has been created on",  // idem
			"USER_mailNotifContent2"=>"Connect with the following login and password",
			"USER_mailNotifContent3"=>"Thank you for archiving this email.",
			// Livecounter & Messenger & Visio
			"USER_messengerEdit"=>"Configure my instant messaging",
			"USER_messengerEdit2"=>"Configure instant messaging",
			"USER_livecounterVisibility"=>"Visibility on instant messaging and videoconferencing",
			"USER_livecounterAllUsers"=>"Display my presence when I am connected: messaging / video enabled",
			"USER_livecounterDisabled"=>"Hide my presence when I am connected: messaging / video disabled",
			"USER_livecounterSomeUsers"=>"Only certain users can see me when I'm logged in",

			////	MODULE_TABLEAU BORD
			////
			// Menu principal + options du module
			"DASHBOARD_headerModuleName"=>"News",
			"DASHBOARD_moduleDescription"=>"News, Polls and Recent elements",
			"DASHBOARD_option_adminAddNews"=>"Only the admin can add News",//OPTION!
			"DASHBOARD_option_disablePolls"=>"Disable polls",//OPTION!
			"DASHBOARD_option_adminAddPoll"=>"Only the admin can add Polls",//OPTION!
			//Index
			"DASHBOARD_menuNews"=>"News",
			"DASHBOARD_menuPolls"=>"Polls",
			"DASHBOARD_menuElems"=>"Last elements",
			"DASHBOARD_addNews"=>"Add news",
			"DASHBOARD_offlineNews"=>"Show archived news",
			"DASHBOARD_offlineNewsNb"=>"archived news",//"55 actualités archivées"
			"DASHBOARD_noNews"=>"No news for the moment",
			"DASHBOARD_addPoll"=>"Add a poll",
			"DASHBOARD_pollsVoted"=>"Show only voted polls",
			"DASHBOARD_pollsVotedNb"=>"polls I've already voted for",//"55 sondages..déjà voté"
			"DASHBOARD_vote"=>"Vote and see the results !",
			"DASHBOARD_voteTooltip"=>"The votes are anonymous : nobody will know your choice of vote",
			"DASHBOARD_answerVotesNb"=>"Voté --NB_VOTES-- times",
			"DASHBOARD_pollVotesNb"=>"The poll was voted --NB_VOTES-- times",
			"DASHBOARD_pollVotedBy"=>"Voted by",//Bibi, boby, etc
			"DASHBOARD_noPoll"=>"No poll for the moment",
			"DASHBOARD_plugins"=>"New Elements",
			"DASHBOARD_pluginsInfo"=>"Elements created",
			"DASHBOARD_pluginsInfo2"=>"between",
			"DASHBOARD_plugins_day"=>"of today",
			"DASHBOARD_plugins_week"=>"of this week",
			"DASHBOARD_plugins_month"=>"of the month",
			"DASHBOARD_plugins_previousConnection"=>"since the last login",
			"DASHBOARD_pluginsTooltipRedir"=>"View the element in is folder",
			"DASHBOARD_pluginEmpty"=>"No new elements for this period",
			// Actualite/News
			"DASHBOARD_topNews"=>"Top news",
			"DASHBOARD_topNewsInfo"=>"News at the top of the list",
			"DASHBOARD_offline"=>"Archived news",
			"DASHBOARD_dateOnline"=>"Date online",
			"DASHBOARD_dateOnlineInfo"=>"Select a date to automatically put the news online.<br>In the meantime, the news is offline",
			"DASHBOARD_dateOnlineNotif"=>"The news is momentarily archived",
			"DASHBOARD_dateOffline"=>"Date of archiving",
			"DASHBOARD_dateOfflineInfo"=>"Select a date to archive automatically the news",
			// Sondage/Polls
			"DASHBOARD_titleQuestion"=>"Title / Question",
			"DASHBOARD_multipleResponses"=>"Several answers possible for each vote",
			"DASHBOARD_newsDisplay"=>"Show with news (left menu)",
			"DASHBOARD_publicVote"=>"Public vote: the choice of voters is  public",
			"DASHBOARD_publicVoteInfos"=>"Note that a public vote can be a barrier to participation to the survey.",
			"DASHBOARD_dateEnd"=>"End of votes",
			"DASHBOARD_responseList"=>"Possible answers",
			"DASHBOARD_responseNb"=>"Answer n°",
			"DASHBOARD_addResponse"=>"Add an answer",
			"DASHBOARD_controlResponseNb"=>"Please specify at least 2 possible answers",
			"DASHBOARD_votedPollNotif"=>"Attention: as soon as the poll is voted, it is no longer possible to change the title or the answers",
			"DASHBOARD_voteNoResponse"=>"Please select an answer",
			"DASHBOARD_exportPoll"=>"Download the survey results in pdf",
			"DASHBOARD_exportPollDate"=>"survey result as of",

			////	MODULE_AGENDA
			////
			// Menu principal
			"CALENDAR_headerModuleName"=>"Calendar",
			"CALENDAR_moduleDescription"=>"Personal and shared calendar",
			"CALENDAR_option_adminAddRessourceCalendar"=>"Only the admin can add resource calendars",
			"CALENDAR_option_adminAddCategory"=>"Only the admin can add a category of event",
			"CALENDAR_option_createSpaceCalendar"=>"Create a shared agenda",
			"CALENDAR_option_createSpaceCalendarInfo"=>"The calendar will have the same name than the space. This can be useful if the calendars of the users are disabled.",
			"CALENDAR_option_moduleDisabled"=>"Users who have not deactivated their personal calendar in their user profile will still see the Calendar module in the menu bar",
			//Index
			"CALENDAR_calsList"=>"Available calendars",
			"CALENDAR_displayAllCals"=>"Show all calendars (for administrators)",
			"CALENDAR_hideAllCals"=>"Hide all calendars",
			"CALENDAR_printCalendars"=>"Print calendar(s)",
			"CALENDAR_printCalendarsInfos"=>"Print in landscape mode",
			"CALENDAR_addSharedCalendar"=>"Add a chared calendar",
			"CALENDAR_addSharedCalendarInfo"=>"Add a chared calendar :<br>for the reservations of a room, vehicle, videoprojector, etc",
			"CALENDAR_exportIcal"=>"Export the events (iCal)",
			"CALENDAR_icalUrl"=>"Copy the link/url to view the calendar on an external app",
			"CALENDAR_icalUrlCopy"=>"Allows reading of calendar events via an external application such as Microsoft Outlook, Google Calendar, Mozilla Thunderbird, etc.",
			"CALENDAR_importIcal"=>"Import the events (iCal)",
			"CALENDAR_ignoreOldEvt"=>"Do not import events older than one year",
			"CALENDAR_importIcalState"=>"State",
			"CALENDAR_importIcalStatePresent"=>"Already present",
			"CALENDAR_importIcalStateImport"=>"To import",
			"CALENDAR_displayMode"=>"Display",
			"CALENDAR_display_day"=>"Day",
			"CALENDAR_display_4Days"=>"4 days",
			"CALENDAR_display_workWeek"=>"Working week",
			"CALENDAR_display_week"=>"Week",
			"CALENDAR_display_month"=>"Month",
			"CALENDAR_weekNb"=>"See the week n°",
			"CALENDAR_periodNext"=>"Next period",
			"CALENDAR_periodPrevious"=>"Preceding period",
			"CALENDAR_evtAffects"=>"In the calendar of",
			"CALENDAR_evtAffectToConfirm"=>"Confirmation on standby in the calendar of",
			"CALENDAR_evtProposed"=>"Events proposals to confirm", 
			"CALENDAR_evtProposedBy"=>"Proposed by",//..Mr SMITH
			"CALENDAR_evtProposedConfirm"=>"Confirm the proposal",
			"CALENDAR_evtProposedConfirmBis"=>"The event proposal has been integrated into the agenda",
			"CALENDAR_evtProposedConfirmMail"=>"Your event proposal has been confirmed",
			"CALENDAR_evtProposedDecline"=>"Decline the proposal",
			"CALENDAR_evtProposedDeclineBis"=>"The proposal has been declined",
			"CALENDAR_evtProposedDeclineMail"=>"Your event proposal has been declined",
			"CALENDAR_deleteEvtCal"=>"Delete only for this calendar ?",
			"CALENDAR_deleteEvtCals"=>"Delete for all the calendars ?",
			"CALENDAR_deleteEvtDate"=>"Delete only for this date ?",
			"CALENDAR_evtPrivate"=>"Private event",
			"CALENDAR_evtAutor"=>"Events which I created",
			"CALENDAR_noEvt"=>"No event",
			"CALENDAR_synthese"=>"Calendars synthesis",
			"CALENDAR_calendarsPercentBusy"=>"Busy calendars",
			"CALENDAR_noCalendarDisplayed"=>"No calendars displayed",
			// Evenement
			"CALENDAR_category"=>"Category",
			"CALENDAR_importanceNormal"=>"Normal importance",
			"CALENDAR_importanceHight"=>"High importance",
			"CALENDAR_visibilityPublic"=>"Normal visibility",
			"CALENDAR_visibilityPrivate"=>"Private visibility",
			"CALENDAR_visibilityPublicHide"=>"Semi-private visibility",
			"CALENDAR_visibilityInfo"=>"<u>private visibility</ u>: visible only to those whose event is accessible in writing <br><br> <u>semi-private visibility</u> : Only the time slot is displayed (without title and details) if the event is read-only",
			// Agenda/Evenement : edit
			"CALENDAR_noPeriodicity"=>"Only once",
			"CALENDAR_period_weekDay"=>"Every week",
			"CALENDAR_period_month"=>"Every month",
			"CALENDAR_period_year"=>"Every year",
			"CALENDAR_periodDateEnd"=>"End of recurrence",
			"CALENDAR_periodException"=>"Recurrence exception",
			"CALENDAR_calendarAffectations"=>"Assign to the following calendars",
			"CALENDAR_addEvt"=>"Add an event",
			"CALENDAR_addEvtTooltip"=>"Add an event",
			"CALENDAR_addEvtTooltipBis"=>"Add the event to the calendar",
			"CALENDAR_proposeEvtTooltip"=>"Propose an event to the owner of the calendar",
			"CALENDAR_proposeEvtTooltipBis"=>"Propose the event to the owner of the calendar",
			"CALENDAR_proposeEvtTooltipBis2"=>"Propose the event to the owner of the calendar : calendar accessible only for reading",
			"CALENDAR_inputProposed"=>"The event will be proposed to the owner of the calendar",
			"CALENDAR_verifCalNb"=>"Thank you for selecting a calendar",
			"CALENDAR_noModifInfo"=>"Modification forbidden because you don't have access to write in this calendar",
			"CALENDAR_editLimit"=>"You are not the author of the event: you can only manage your calendars assignments",
			"CALENDAR_busyTimeslot"=>"The slot is already occupied on this calendar :",
			"CALENDAR_timeSlot"=>"Time range of the ''week'' display",
			"CALENDAR_propositionNotify"=>"Notify by email of each event proposal",
			"CALENDAR_propositionNotifyInfo"=>"Note: Each event proposal is validated or invalidated by the owner of the calendar.",
			"CALENDAR_propositionGuest"=>"Guests can propose events",
			"CALENDAR_propositionGuestInfo"=>"Note: Remember to select 'all users and guests' in the access rights below.",
			"CALENDAR_propositionNotifTitle"=>"New event proposed by",//.."boby SMITH"
			"CALENDAR_propositionNotifMessage"=>"New event proposed by --AUTOR_LABEL-- : &nbsp; <i><b>--EVT_TITLE_DATE--</b></i> <br><i>--EVT_DESCRIPTION--</i> <br>Access your space to confirm or cancel this proposal",
			// Categories
			"CALENDAR_editCategories"=>"Manage event categories",
			"CALENDAR_editCategoriesRight"=>"Each category can be modified by its author or the general administrator",
			"CALENDAR_addCategory"=>"Add a category",
			"CALENDAR_filterByCategory"=>"View only events by caterory",

			////	MODULE_FICHIER
			////
			// Menu principal
			"FILE_headerModuleName"=>"File manager",
			"FILE_moduleDescription"=>"File manager",
			"FILE_option_adminRootAddContent"=>"Only the administrator can add folders and files in the root folder",
			//Index
			"FILE_addFile"=>"Add files",
			"FILE_addFileAlert"=>"Folder on the server not accessible in writing! thank you to contact the administrator",
			"FILE_downloadSelection"=>"Download Selection",
			"FILE_nbFileVersions"=>"versions of the file",//"55 versions du fichier"
			"FILE_downloadsNb"=>"(downloaded --NB_DOWNLOAD-- times)",
			"FILE_downloadedBy"=>"file Downloaded by",//"..boby, will"
			"FILE_addFileVersion"=>"add a new file version",
			"FILE_noFile"=>"No file for the moment",
			// Fichier_edit  &  Dossier_edit  &  fichier_edit_ajouter  &  Versions_fichier
			"FILE_fileSizeLimit"=>"The files should not exceed", // ...2 Mega Octets
			"FILE_uploadSimple"=>"Simple upload",
			"FILE_uploadMultiple"=>"Multiple upload",
			"FILE_imgReduce"=>"Optimize the image",
			"FILE_updatedName"=>"The filename will be replaced by the new version",
			"FILE_fileSizeError"=>"File is too large",
			"FILE_addMultipleFilesInfo"=>"Button 'Shift' or 'Ctrl' to select multiple files",
			"FILE_selectFile"=>"Thank you to select at least a file",
			"FILE_fileContent"=>"Content",
			// Versions_fichier
			"FILE_versionsOf"=>"Versions of", // versions de fichier.gif
			"FILE_confirmDeleteVersion"=>"Confirm the removal of this version ?",

			////	MODULE_FORUM
			////
			// Menu principal
			"FORUM_headerModuleName"=>"Forum",
			"FORUM_moduleDescription"=>"Forum",
			"FORUM_option_adminAddSubject"=>"Only the administrator can add topics",
			"FORUM_option_allUsersAddTheme"=>"Users can also add themes",
			// TRI
			"SORT_dateLastMessage"=>"Last message",
			//Index & Sujet
			"FORUM_subject"=>"Topic",
			"FORUM_subjects"=>"Topics",
			"FORUM_message"=>"Message",
			"FORUM_messages"=>"Messages",
			"FORUM_lastSubject"=>"Last topic from",
			"FORUM_lastMessage"=>"Last message from",
			"FORUM_noSubject"=>"No subject for the moment",
			"FORUM_noMessage"=>"No message for the moment",
			"FORUM_subjectBy"=>"Subjet by",
			"FORUM_addSubject"=>"New topic",
			"FORUM_displaySubject"=>"View topic",
			"FORUM_addMessage"=>"Answer",
			"FORUM_quoteMessage"=>"Answer and quote this message",
			"FORUM_notifyLastPost"=>"Notify by email",
			"FORUM_notifyLastPostInfo"=>"Send me a notification by email to each new message",
			// Sujet_edit  &  Message_edit
			"FORUM_accessRightInfos"=>"Attention: the reading access does not allow to participate in the discussion. So prefer limited write access. Write access should be reserved for moderators.",
			"FORUM_themeSpaceAccessInfo"=>"The topic is available in the spaces",
			// Themes
			"FORUM_subjectTheme"=>"Theme",
			"FORUM_subjectThemes"=>"Themes",
			"FORUM_forumRoot"=>"Forum Home",
			"FORUM_forumRootResp"=>"Home",
			"FORUM_noTheme"=>"Without theme",
			"FORUM_editThemes"=>"Manage themes",
			"FORUM_editThemesInfo"=>"Each theme can be modified by its author or the general administrator",
			"FORUM_addTheme"=>"Add a theme",

			////	MODULE_TACHE
			////
			// Menu principal
			"TASK_headerModuleName"=>"Tasks",
			"TASK_moduleDescription"=>"Tasks",
			"TASK_option_adminRootAddContent"=>"Only the administrator can add folders and tasks in the root folder",
			// TRI
			"SORT_priority"=>"Priority",
			"SORT_advancement"=>"Progress",
			"SORT_dateBegin"=>"Begin date",
			"SORT_dateEnd"=>"End date",
			//Index
			"TASK_addTask"=>"Add a task",
			"TASK_noTask"=>"No task for the moment",
			"TASK_advancement"=>"Progress",
			"TASK_advancementAverage"=>"Average progress",
			"TASK_priority"=>"Priority",
			"TASK_priority1"=>"Low",
			"TASK_priority2"=>"Medium",
			"TASK_priority3"=>"High",
			"TASK_priority4"=>"Critical",
			"TASK_responsiblePersons"=>"Leaders",
			"TASK_advancementLate"=>"Progress delayed",

			////	MODULE_CONTACT
			////
			// Menu principal
			"CONTACT_headerModuleName"=>"Contacts",
			"CONTACT_moduleDescription"=>"Directory of contacts",
			"CONTACT_option_adminRootAddContent"=>"Only the administrator can add folders and contacts in the root folder",
			//Index
			"CONTACT_addContact"=>"Add a contact",
			"CONTACT_noContact"=>"No contact for the moment",
			"CONTACT_createUser"=>"Create a user in this space",
			"CONTACT_createUserInfo"=>"Create a user in this space from this contact ?",
			"CONTACT_createUserConfirm"=>"The user was successfully created",

			////	MODULE_LIEN
			////
			// Menu principal
			"LINK_headerModuleName"=>"Bookmarks",
			"LINK_moduleDescription"=>"Bookmarks",
			"LINK_option_adminRootAddContent"=>"Only the administrator can add folders and bookmarks to the root folder",
			//Index
			"LINK_addLink"=>"Add a bookmark",
			"LINK_noLink"=>"No bookmark at the moment",
			// lien_edit & dossier_edit
			"LINK_adress"=>"bookmark",

			////	MODULE_MAIL
			////
			//  Menu principal
			"MAIL_headerModuleName"=>"Emails",
			"MAIL_moduleDescription"=>"Send emails in a click!",
			//Index
			"MAIL_specifyMail"=>"Thank you for entering an address email",
			"MAIL_title"=>"Email subject",
			"MAIL_description"=>"Email message",
			// Historique Email
			"MAIL_historyTitle"=>"History of the emails sent",
			"MAIL_delete"=>"Delete this email",
			"MAIL_resend"=>"Resend this email",
			"MAIL_resendInfo"=>"Retrieve the content of this email and integrate it directly into the editor for a new sending",
			"MAIL_historyEmpty"=>"No email",
			"MAIL_recipients"=>"Recipients",
			"MAIL_attachedFileError"=>"The file was not added to the email because it is too large",
		);
	}

	/*
	 * Jours Fériés de l'année
	 */
	public static function celebrationDays($year)
	{
		// Init
		$dateList=[];

		//Fêtes mobiles (si la fonction de récup' de paques existe)
		if(function_exists("easter_date"))
		{
			$daySecondes=86400;
			$paquesTime=easter_date($year);
			$date=date("Y-m-d", $paquesTime+$daySecondes);
			$dateList[$date]="Easter Monday";
		}

		//Fêtes fixes
		$dateList[$year."-01-01"]="New Year's Day";
		$dateList[$year."-12-25"]="Christmas";

		//Retourne le résultat
		return $dateList;
	}
}