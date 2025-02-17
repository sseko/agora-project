<script>
$(function(){
	////	Affiche un nouveau champ "specificMails"
	$("#specificMails").click(function(){
		$(".specificMailsDiv:hidden:first").fadeIn();
	});
	////	Controle un champs "specificMails"
	$("input[name='specificMails[]']").blur(function(){
		if($(this).isEmpty()==false && $(this).isMail()==false)  {$(this).focus();  notify("<?= Txt::trad("mailInvalid") ?> : "+this.value);}
	});
});
</script>

<style>
#specificMails img[src*=plusSmall]			{display:none;}
#specificMails:hover img[src*=plusSmall]	{display:inline;}
.specificMailsDiv							{display:none;}
.specificMailsDiv input						{width:350px; max-width:90%;}
</style>


<!--Option "Masquer les destinataires"-->
<div title="<?= Txt::trad("MAIL_hideRecipientsInfo") ?>"><img src="app/img/dependency.png"><input type="checkbox" name="mailOptions[]" value="hideRecipients" id="hideRecipients">&nbsp; <label for="hideRecipients"><?= Txt::trad("MAIL_hideRecipients") ?></label></div>

<!--Options "Mettre mon email en réponse" && "Accusé de reception"-->
<?php if(!empty(Ctrl::$curUser->mail)){ ?>
	<div title="<?= Txt::trad("MAIL_addReplyToInfo") ?>"><img src="app/img/dependency.png"><input type="checkbox" name="mailOptions[]" value="addReplyTo" id="addReplyTo">&nbsp; <label for="addReplyTo"><?= Txt::trad("MAIL_addReplyTo") ?></label></div>
	<div title="<?= Txt::trad("MAIL_receptionNotifInfo") ?>"><img src="app/img/dependency.png"><input type="checkbox" name="mailOptions[]" value="receptionNotif" id="receptionNotif">&nbsp; <label for="receptionNotif"><?= Txt::trad("MAIL_receptionNotif") ?></label></div>
<?php } ?>

<!--Option "Ne pas signer le message"-->
<div title="<?= Txt::trad("MAIL_noFooterInfo") ?>"><img src="app/img/dependency.png"><input type="checkbox" name="mailOptions[]" value="noFooter" id="noFooter">&nbsp; <label for="noFooter"><?= Txt::trad("MAIL_noFooter") ?></label></div>

<!--Option "Ajouter des adresses email"-->
<div id="specificMails" class="sLink" title="<?= Txt::trad("MAIL_specificMailsInfo") ?>"><img src="app/img/dependency.png"><img src="app/img/arobase.png">&nbsp; <?= Txt::trad("MAIL_specificMails") ?> <img src="app/img/plusSmall.png"></div>
<?php for($cptMail=1; $cptMail<=20; $cptMail++){ ?>
	<div class="specificMailsDiv"><input type="text" name="specificMails[]"></div>
<?php } ?>