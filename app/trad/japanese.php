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
		setlocale(LC_TIME, "ja_JP.utf8", "ja_JP.UTF-8", "ja_JP", "ja", "japanese");

		////	TRADUCTIONS
		self::$trad=array(
			////	Header http / Editeurs Tinymce,DatePicker,etc
			"CURLANG"=>"ja",
			"DATELANG"=>"ja_JP",
			"EDITORLANG"=>"ja_JP",

			////	Divers
			"fillFieldsForm"=>"フォームのフィールドに入力してください",
			"requiredFields"=>"必須フィールド",
			"inaccessibleElem"=>"アクセスできない要素",
			"warning"=>"警告",
			"elemEditedByAnotherUser"=>"編集中です",//"..bob"
			"yes"=>"はい",
			"no"=>"いいえ",
			"none"=>"なし",
			"noneFem"=>"なし",
			"or"=>"または",
			"and"=>"と",
			"goToPage"=>"ページに移動",
			"alphabetFilter"=>"アルファベット順フィルター",
			"displayAll"=>"すべて表示",
			"allCategory"=>"全カテゴリー",
			"show"=>"見せる",
			"hide"=>"隠す",
			"byDefault"=>"デフォルト",
			"mapLocalize"=>"地図上でローカライズする",
			"mapLocalizationFailureLeaflet"=>"次の住所のローカライズに失敗しました",
			"mapLocalizationFailureLeaflet2"=>"次の住所が www.google.com/maps または www.openstreetmap.org に存在することを確認してください",
			"sendMail"=>"メールを送る",
			"mailInvalid"=>"このメールは無効です",
			"element"=>"要素",
			"elements"=>"複数要素",
			"folder"=>"フォルダー",
			"folders"=>"複数フォルダー",
			"close"=>"閉じる",
			"visibleAllSpaces"=>"すべてのスペースで表示",
			"confirmCloseForm"=>"フォームを閉じてもよろしいですか?",
			"modifRecorded"=>"変更が保存されました",
			"confirm"=>"よろしいですか？",
			"comment"=>"コメント",
			"commentAdd"=>"コメントの追加",
			"optional"=>"(オプション)",
			"objNew"=>"最近作成されたアイテム",
			"personalAccess"=>"パーソナルアクセス",
			"copyUrl"=>"リンク/URLをコピーします",
			"copyUrlInfo"=>"このリンク/URL を使用すると、要素に直接アクセスできます:<br> ニュース、フォーラムのトピック、メール、ブログ (外部アクセス) などに統合できます。",
			"copyUrlConfirmed"=>"Web アドレスが正常にコピーされました",
			"cancel"=>"キャンセル",

			////	images
			"picture"=>"画像",
			"pictureProfil"=>"プロフィール画像",
			"wallpaper"=>"壁紙",
			"keepImg"=>"画像を変更しない",
			"changeImg"=>"画像を変更する",
			"pixels"=>"ピクセル",

			////	Connexion
			"specifyLoginPassword"=>"ログインとパスワードを選択していただきありがとうございます",
			"specifyLogin"=>"メール/ログインを選択していただきありがとうございます",
			"specifyLoginMail"=>"メールアドレスでログインすることをお勧めします",
			"login"=>"メール / ログイン",
			"loginPlaceholder"=>"メール / ログイン",
			"connect"=>"ログイン",
			"connectAuto"=>"自動接続",
			"connectAutoInfo"=>"ログインとパスワードを保存して、自動的に接続します",
			"gIdentityButton"=>"Googleアカウントでログインする",
			"gIdentityButtonInfo"=>"Google / Gmail アカウントでサインイン : これを行うには、アカウントと電子メールアドレスが必要です。 <i>@gmail.com</i>",
			"gIdentityUserUnknown"=>"この場所に登録されていません",
			"connectSpaceSwitch"=>"別の場所に接続する",
			"connectSpaceSwitchConfirm"=>"この場所を離れて別の場所に接続してもよろしいですか?",
			"guestAccess"=>"ゲストとしてログイン",
			"guestAccessInfo"=>"この場所にゲストとしてログインします",
			"spacePassError"=>"パスワードが間違っています",
			"ieObsolete"=>"お使いのブラウザは古くなっているため、すべての HTML 標準をサポートしていません : 更新するか、別のブラウザを使用することをお勧めします",
			
			////	Password : connexion d'user / edition d'user / reset du password
			"password"=>"パスワード",
			"passwordModify"=>"パスワードの変更",
			"passwordToModify"=>"仮パスワード（ログイン時に変更）",//Mail d'envoi d'invitation
			"passwordToModify2"=>"パスワード（必要に応じて変更してください）",//Mail de création de compte
			"passwordVerif"=>"パスワードを認証する",
			"passwordInfo"=>"パスワードを保持する場合は空白のままにします",
			"passwordInvalid"=>"パスワードは、少なくとも 1 つの数字と少なくとも 1 つの文字を含む 6 文字以上である必要があります",
			"passwordConfirmError"=>"確認パスワードが無効です",
			"specifyPassword"=>"パスワードを指定していただきありがとうございます",
			"resetPassword"=>"ログイン情報をお忘れですか？",
			"resetPassword2"=>"メールアドレスを入力して、ログインとパスワードを受け取ります",
			"resetPasswordNotif"=>"パスワードをリセットするためのメールがあなたのアドレスに送信されました。 電子メールを受信していない場合は、指定されたアドレスが正しいこと、または電子メールがスパムに含まれていないことを確認してください。",
			"resetPasswordMailTitle"=>"パスワードをリセットします",
			"resetPasswordMailPassword"=>"ログインしてパスワードをリセットするには",
			"resetPasswordMailPassword2"=>"ここをクリックしてください",
			"resetPasswordMailLoginRemind"=>"ログインリマインダー",
			"resetPasswordIdExpired"=>"パスワードをリセットするためのリンクの有効期限が切れています。手順をやり直してください",
			
			////	Type d'affichage
			"displayMode"=>"ビュー",
			"displayMode_line"=>"リスト",
			"displayMode_block"=>"ブロック",
			
			////	Sélectionner / Déselectionner tous les éléments
			"select"=>"選択",
			"selectUnselect"=>"選択/選択解除",
			"selectAll"=>"全てを選択",
			"selectSwitch"=>"スイッチ選択",
			"deleteElems"=>"選択した要素を削除します",
			"changeFolder"=>"別のフォルダに移動",
			"showOnMap"=>"地図上に表示",
			"showOnMapInfo"=>"連絡先を住所、郵便番号、市区町村で地図上に表示",
			"selectUser"=>"ユーザーを選択していただきありがとうございます",
			"selectUsers"=>"少なくとも 2 人のユーザーを選択していただきありがとうございます",
			"selectSpace"=>"少なくとも 1 つのスペースを選択していただきありがとうございます",
			
			////	Temps ("de 11h à 12h", "le 25-01-2007 à 10h30", etc.)
			"from"=>"of ",
			"at"=>"to",
			"the"=>"the",
			"begin"=>"開始",
			"end"=>"終了",
			"days"=>"日",
			"day_1"=>"月曜日",
			"day_2"=>"火曜日",
			"day_3"=>"水曜日",
			"day_4"=>"木曜日",
			"day_5"=>"金曜日",
			"day_6"=>"土曜日",
			"day_7"=>"日曜日",
			"month_1"=>"１月",
			"month_2"=>"２月",
			"month_3"=>"３月",
			"month_4"=>"４月",
			"month_5"=>"５月",
			"month_6"=>"６月",
			"month_7"=>"７月",
			"month_8"=>"８月",
			"month_9"=>"９月",
			"month_10"=>"１０月",
			"month_11"=>"１１月",
			"month_12"=>"１２月",
			"today"=>"今日",
			"beginEndError"=>"終了日を開始日より前にすることはできません",
			"dateFormatError"=>"日付は次の形式である必要があります dd/mm/YYYY",
			
			////	Menus d'édition des objets et editeur tinyMce
			"title"=>"タイトル",
			"name"=>"名前",
			"description"=>"説明",
			"specifyName"=>"名前を指定していただきありがとうございます",
			"editorDraft"=>"テキストを取得する",
			"editorDraftConfirm"=>"最後に指定されたテキストを取得する",
			"editorFileInsert"=>"画像または動画を追加",
			"editorFileInsertNotif"=>"Jpeg、Png、Gif、または Svg 形式の画像を選択してください",
			
			////	Validation des formulaires
			"add"=>"追加",
			"modify"=>"変更",
			"record"=>"記録",
			"modifyAndAccesRight"=>"アクセスの変更と定義",
			"validate"=>"検証",
			"send"=>"送信",
			"sendTo"=>"送信 to",
			
			////	Tri d'affichage. Tous les elements (dossier, tache, lien, etc...) ont par défaut une date, un auteur & une description
			"sortBy"=>"Sorted by",
			"sortBy2"=>"Sort by",
			"SORT_dateCrea"=>"作成日",
			"SORT_dateModif"=>"変更日",
			"SORT_title"=>"タイトル",
			"SORT_description"=>"説明",
			"SORT__idUser"=>"著者",
			"SORT_extension"=>"ファイルのタイプ",
			"SORT_octetSize"=>"サイズ",
			"SORT_downloadsNb"=>"ダウンロード",
			"SORT_civility"=>"タイトル",
			"SORT_name"=>"姓名",
			"SORT_firstName"=>"名前",
			"SORT_adress"=>"住所",
			"SORT_postalCode"=>"郵便番号",
			"SORT_city"=>"町",
			"SORT_country"=>"国",
			"SORT_function"=>"役割",
			"SORT_companyOrganization"=>"会社・団体",
			"SORT_lastConnection"=>"前回のログイン",
			"tri_ascendant"=>"上へ",
			"tri_descendant"=>"下へ",
			
			////	Options de suppression
			"confirmDelete"=>"削除しますか?",
			"confirmDeleteNbElems"=>"アイテムが選択されました",//"55 éléments sélectionnés"
			"confirmDeleteDbl"=>"本当に実行してもよろしいですか ?!",
			"confirmDeleteFolderAccess"=>"注意 ！ 特定のサブフォルダにはアクセスできません: それらは削除されます!",
			"notifyBigFolderDelete"=>"削除中 --NB_FOLDERS-- サブフォルダが大きい場合、プロセスが終了するまでしばらくお待ちください",
			"delete"=>"削除",
			"notDeletedElements"=>"必要なアクセス権がないため、一部のアイテムは削除されませんでした",
			
			////	Visibilité d'un Objet : auteur et droits d'accès
			"autor"=>"著者",
			"postBy"=>"投稿 by",
			"guest"=>"ゲスト",
			"creation"=>"作成",
			"modification"=>"変更",
			"createBy"=>"作成者 by",
			"modifBy"=>"変更者 by",
			"objHistory"=>"要素履歴",
			"all"=>"全て",
			"deletedUser"=>"削除されたユーザー アカウント",
			"folderContent"=>"コンテンツ",
			"accessRead"=>"閲覧",
			"accessReadInfo"=>"閲覧時のアクセス",
			"accessWriteLimit"=>"制限付きの書き込み",
			"accessWriteLimitInfo"=>"制限付き書き込みアクセス: 追加する可能性 -OBJCONTENT- in the -OBJLABEL-,<br> ただし、各ユーザーは変更/削除のみ可能です -OBJCONTENT- ",
			"accessWrite"=>"書く",
			"accessWriteInfo"=>"書き込み時のアクセス",
			"accessWriteInfoContainer"=>"Access in writing : Ability to add, modify or delete all the -OBJCONTENT-s of the -OBJLABEL-",
			"accessAutorPrivilege"=>"Only the author and administrators can edit the access rights or delete the -OBJLABEL-",
			"accessRightsInherited"=>"Access rights inherited from the -OBJLABEL-",
			
			////	Libellé des objets
			"OBJECTcontainer"=>"コンテナ",
			"OBJECTelement"=>"要素",
			"OBJECTfolder"=>"フォルダー",
			"OBJECTdashboardNews"=>"ニュース",
			"OBJECTdashboardPoll"=>"調査",
			"OBJECTfile"=>"ファイル",
			"OBJECTfileFolder"=>"フォルダー",
			"OBJECTcalendar"=>"カレンダー",
			"OBJECTcalendarEvent"=>"イベント",
			"OBJECTforumSubject"=>"トピック",
			"OBJECTforumMessage"=>"メッセージ",
			"OBJECTcontact"=>"コンタクト",
			"OBJECTcontactFolder"=>"フォルダー",
			"OBJECTlink"=>"ブックマーク",
			"OBJECTlinkFolder"=>"フォルダー",
			"OBJECTtask"=>"タスク",
			"OBJECTtaskFolder"=>"フォルダー",
			"OBJECTuser"=>"ユーザー",
			
			////	Envoi d'un email (nouvel utilisateur, notification de création d'objet, etc...)
			"MAIL_hello"=>"こんにちは",
			"MAIL_hideRecipients"=>"受信者を非表示",
			"MAIL_hideRecipientsInfo"=>"すべての受信者を隠しコピーに入れます。 このオプションを使用すると、メールが一部のメールボックスに迷惑メールとして届く可能性があることに注意してください",
			"MAIL_addReplyTo"=>"メールに返信する",
			"MAIL_addReplyToInfo"=>"「返信先」フィールドに私のメールアドレスを追加してください。 このオプションを使用すると、メールが一部のメールボックスに迷惑メールとして届く可能性があることに注意してください",
			"MAIL_noFooter"=>"メッセージに署名しない",
			"MAIL_noFooterInfo"=>"送信者の名前とWebリンクを含むメッセージの末尾に署名しない",
			"MAIL_receptionNotif"=>"配信確認",
			"MAIL_receptionNotifInfo"=>"警告！ 一部のメール クライアントは配信確認をサポートしていません",
			"MAIL_specificMails"=>"メールアドレスを追加",
			"MAIL_specificMailsInfo"=>"記載されている電子メールアドレスを追加する",
			"MAIL_fileMaxSize"=>"すべての添付ファイルは15MB を超えてはなりません。メッセージング サービスによっては、この制限を超えるメールを拒否する場合があります。 送信しますか？",
			"MAIL_sendButton"=>"メールを送る",
			"MAIL_sendBy"=>"Sent by",//"Envoyé par" Mr trucmuche
			"MAIL_sendOk"=>"メールが送信されました！",
			"MAIL_sendNotif"=>"お知らせメールを送信しました！",
			"MAIL_notSend"=>"メールを送信できませんでした",
			"MAIL_notSendEverybody"=>"電子メールはすべての受信者に送信されませんでした: 電子メールの設定を確認してください",
			"MAIL_fromTheSpace"=>"from the space",//"depuis l'espace Bidule"
			"MAIL_elemCreatedBy"=>"-OBJLABEL- created by",//boby
			"MAIL_elemModifiedBy"=>"-OBJLABEL- modified by",//boby
			"MAIL_elemAccessLink"=>"アクセスするには、ここをクリックしてください",

			////	Dossier & fichier
			"gigaOctet"=>"Gb",
			"megaOctet"=>"Mb",
			"kiloOctet"=>"Kb",
			"rootFolder"=>"ルートフォルダー",
			"rootFolderEditInfo"=>"設定を開きます<br>ルート フォルダへのアクセス権を変更します",
			"addFolder"=>"フォルダー追加",
			"download"=>"ファイルダウンロード",
			"downloadFolder"=>"フォルダーダウンロード",
			"diskSpaceUsed"=>"使用ディスク容量",
			"diskSpaceUsedModFile"=>"ファイルマネージャに使用されるディスク容量",
			"downloadAlert"=>"アーカイブが大きすぎて日中にダウンロードできません (--ARCHIVE_SIZE--). あとでダウンロードを再開してください",//"19h"
			
			////	Infos sur une personne
			"civility"=>"タイトル",
			"name"=>"姓名",
			"firstName"=>"名前",
			"adress"=>"住所",
			"postalCode"=>"郵便番号",
			"city"=>"町",
			"country"=>"国",
			"telephone"=>"電話番号",
			"telmobile"=>"携帯電話番号",
			"mail"=>"Eメール",
			"function"=>"役割",
			"companyOrganization"=>"会社・団体",
			"lastConnection"=>"前回のログイン",
			"lastConnection2"=>"Logged in on",
			"lastConnectionEmpty"=>"まだログインしていません",
			"displayProfil"=>"プロファイルを表示",
			
			////	Captcha
			"captcha"=>"５文字を入力してください",
			"captchaInfo"=>"識別のための 5 文字を入力していただきありがとうございます",
			"captchaError"=>"視覚的認証は失敗しました",
			
			////	Rechercher
			"searchSpecifyText"=>"3文字以上のキーワードを入力していただきありがとうございます",
			"search"=>"検索",
			"searchDateCrea"=>"作成日",
			"searchDateCreaDay"=>"1日以内",
			"searchDateCreaWeek"=>"1週間以内",
			"searchDateCreaMonth"=>"１ヶ月以内",
			"searchDateCreaYear"=>"１年以内",
			"searchOnSpace"=>"検索する",
			"advancedSearch"=>"詳細検索",
			"advancedSearchAnyWord"=>"任意の単語",
			"advancedSearchAllWords"=>"すべての言葉",
			"advancedSearchExactPhrase"=>"正確なフレーズ",
			"keywords"=>"キーワード",
			"listModules"=>"モジュール",
			"listFields"=>"フィールド",
			"listFieldsElems"=>"関係する要素",
			"noResults"=>"検索結果はありません",
			
			////	Inscription d'utilisateur
			"userInscription"=>"ここに登録する",
			"userInscriptionInfo"=>"新しいユーザー アカウントを作成します (管理者によって検証されます)。",
			"userInscriptionSpace"=>"登録する",
			"userInscriptionRecorded"=>"登録が保存されました : 管理者によって検証されます",
			"userInscriptionNotifSubject"=>"新規登録",//"Mon espace"
			"userInscriptionNotifMessage"=>"新規登録がリクエストされました by <i>--NEW_USER_LABEL--</i> for the space <i>--SPACE_NAME--</i> : <br><br><i>--NEW_USER_MESSAGE--<i> <br><br>次回の接続時に、この登録を有効または無効にすることを忘れないでください。",
			"userInscriptionEdit"=>"訪問者がスペースに登録できるようにする",
			"userInscriptionEditInfo"=>"登録はサイトのホームページから。 登録は、管理者によって検証される必要があります。",
			"userInscriptionNotifyEdit"=>"登録ごとにメールで通知",
			"userInscriptionNotifyEditInfo"=>"各登録後に、スペース管理者に電子メール通知を送信します",
			"userInscriptionPulsate"=>"登録",
			"userInscriptionValidate"=>"ユーザー登録の検証",
			"userInscriptionValidateInfo"=>"サイトでのユーザー登録の検証",
			"userInscriptionSelectValidate"=>"登録の検証",
			"userInscriptionSelectInvalidate"=>"登録を無効にする",
			"userInscriptionInvalidateMail"=>"あなたのアカウントは認証されていません",

			////	Importer ou Exporter : Contact OU Utilisateurs
			"importExport_user"=>"ユーザーのインポート/エクスポート",
			"import_user"=>"ユーザーを現在のスペースにインポートする",
			"export_user"=>"現在のスペース ユーザーをエクスポートする",
			"importExport_contact"=>"連絡先のインポート/エクスポート",
			"import_contact"=>"連絡先を現在のフォルダーにインポートする",
			"export_contact"=>"現在のフォルダーから連絡先をエクスポートする",
			"exportFormat"=>"フォーマット",
			"specifyFile"=>"ファイルを選択していただきありがとうございます",
			"fileExtension"=>"ファイルの種類が無効です。次の型である必要があります",
			"importContactRootFolder"=>"The contacts will be assigned by default to &quot;all users of the space&quot;",//"Mon espace"
			"importInfo"=>"各列のドロップダウンで、対象とするアゴラのフィールドを選択します",
			"importNotif1"=>"選択ボックスで名前の列を選択していただきありがとうございます",
			"importNotif2"=>"インポートする連絡先を選択していただきありがとうございます",
			"importNotif3"=>"このアゴラのフィールドはすでに別の列で選択されています (各アゴラのフィールドは 1 回だけ選択できます)",

			////	Messages d'erreur / Notifications
			"NOTIF_identification"=>"無効なログインまたはパスワード",
			"NOTIF_presentIp"=>"このユーザー アカウントは現在、別の IP アドレスを持つ別のコンピューターから使用されています。 アカウントは、同時に 1 台のコンピューターでのみ使用できます。",
			"NOTIF_noSpaceAccess"=>"あなたのユーザー アカウントは正常に識別されましたが、現在、どのスペースにも割り当てられていません。 管理者に連絡してください",
			"NOTIF_noAccess"=>"ログアウトしました",
			"NOTIF_fileOrFolderAccess"=>"ファイルまたはフォルダにアクセスできません",
			"NOTIF_diskSpace"=>"ファイルの保存容量が不足しているため、ファイルを追加できません",
			"NOTIF_fileVersionForbidden"=>"そのファイル形式は許可されていません",
			"NOTIF_fileVersion"=>"オリジナルとは異なるファイルタイプ",
			"NOTIF_folderMove"=>"内部のフォルダを移動することはできません..!",
			"NOTIF_duplicateName"=>"同じ名前のフォルダーまたはファイルが既に存在します",
			"NOTIF_fileName"=>"同じ名前のファイルが既に存在します",
			"NOTIF_chmodDATAS"=>"The ''DATAS'' folder is not accessible in writing. You need to give a read-write access to the owner and the group (''chmod 775'').",
			"NOTIF_usersNb"=>"新しいユーザーを追加できません: limited to ", // "...limité à" 10
			
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
			"MESSENGER_headerModuleName"=>"メッセージ",
			"MESSENGER_moduleDescription"=>"インスタント メッセージング : スペースに接続しているユーザーとライブ チャットまたはビデオ会議を開始",
			"MESSENGER_messengerTitle"=>"インスタント メッセージ : 人の名前をクリックして、チャットまたはビデオ会議を開始します",
			"MESSENGER_messengerMultiUsers"=>"右側のペインで対話者を選択して、他のユーザーとチャットします",
			"MESSENGER_connected"=>"オンライン",
			"MESSENGER_nobody"=>"現在、スペースにログインしているユーザーはあなただけです。<br> 注: 古いディスカッションは 30日間保持されます",
			"MESSENGER_messageFrom"=>"Message from",
			"MESSENGER_messageTo"=>"sent to",
			"MESSENGER_chatWith"=>"Chat with",
			"MESSENGER_addMessageToSelection"=>"私のメッセージ（選ばれた人）",
			"MESSENGER_addMessageTo"=>"My message to",
			"MESSENGER_addMessageNotif"=>"メッセージを指定していただきありがとうございます",
			"MESSENGER_visioProposeTo"=>"ビデオ通話を提案する",//..boby
			"MESSENGER_visioProposeToSelection"=>"選択した人にビデオ通話を提案する",
			"MESSENGER_visioProposeToUsers"=>"ビデオ通話を開始するには、ここをクリックしてください",//"..Will & Boby"
			
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
			"INSTALL_dbErrorDbName"=>"Warning: the name of the database should preferably contain only alphanumeric characters and dashes or underscores",
			"INSTALL_dbErrorUnknown"=>"The connection to the MariaDB/MySQL database failed",
			"INSTALL_dbErrorIdentification"=>"The identification to the MariaDB/MySQL database failed",
			"INSTALL_dbErrorAppInstalled"=>"The installation has already been done. Thank you to remove the database whether to restart the installation.",
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
			"SPACE_usersAccess"=>"Users assigned to the space",
			"SPACE_selectModule"=>"You must select a module",
			"SPACE_spaceModules"=>"Space modules",
			"SPACE_moduleRank"=>"Move to set the display order of modules",
			"SPACE_publicSpace"=>"Public space : guest access",
			"SPACE_publicSpaceInfo"=>"A public space is open to people who do not have a user account: the 'guests'. You can specify a generic password to protect access to this public space. The following modules will not be accessible to guests : 'mail' and 'user' (if the public space does not have a password)",
			"SPACE_publicSpaceNotif"=>"If your public space contains sensitive data such as personal contact details (Contact module) or documents (File module): you are required to add password access to your public space, to comply with the GDPR.<hr>The General Data Protection Regulation is a regulation of the European Union constituting the reference text for the protection of personal data.",
			"SPACE_usersInvitation"=>"Users can send invitations by email",
			"SPACE_usersInvitationInfo"=>"All users can send email invitations to join the space",
			"SPACE_allUsers"=>"All the users",
			"SPACE_user"=>" User",
			"SPACE_userInfo"=>"User of the space : <br> Normal access to the space",
			"SPACE_admin"=>"Administrator",
			"SPACE_adminInfo"=>"Administrator of the space : <br>- Write access to all elements of the space <br>- ability to send email invitations <br>- ability to add users <br>- space setting",

			////	MODULE_UTILISATEUR
			////
			// Menu principal
			"USER_headerModuleName"=>"ユーザー",
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
			"USER_adminGeneralInfo"=>"The general administrator can manage all the settings of the site, all the users, spaces and elements assigned to it. He has full control over the settings and the elements of the space: it is therefore advisable to assign this privilege to two or three users maximum.",
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
			"USER_langs"=>"言語",
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
			"DASHBOARD_headerModuleName"=>"ニュース",
			"DASHBOARD_moduleDescription"=>"News, Polls and Recent elements",
			"DASHBOARD_option_adminAddNews"=>"Only the admin can add News",//OPTION!
			"DASHBOARD_option_disablePolls"=>"Disable polls",//OPTION!
			"DASHBOARD_option_adminAddPoll"=>"Only the admin can add Polls",//OPTION!
			//Index
			"DASHBOARD_menuNews"=>"ニュース",
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
			"CALENDAR_headerModuleName"=>"カレンダー",
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
			"FILE_headerModuleName"=>"ファイルマネージャー",
			"FILE_moduleDescription"=>"ファイルマネージャー",
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
			"FORUM_headerModuleName"=>"フォーラム",
			"FORUM_moduleDescription"=>"フォーラム",
			"FORUM_option_adminAddSubject"=>"Only the administrator can add topics",
			"FORUM_option_allUsersAddTheme"=>"Users can also add themes",
			// TRI
			"SORT_dateLastMessage"=>"Last message",
			//Index & Sujet
			"FORUM_subject"=>"トピックス",
			"FORUM_subjects"=>"トピックス",
			"FORUM_message"=>"メッセージ",
			"FORUM_messages"=>"メッセージ",
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
			"FORUM_subjectTheme"=>"テーマ",
			"FORUM_subjectThemes"=>"テーマ",
			"FORUM_forumRoot"=>"Forum Home",
			"FORUM_forumRootResp"=>"Home",
			"FORUM_noTheme"=>"Without theme",
			"FORUM_editThemes"=>"Manage themes",
			"FORUM_editThemesInfo"=>"Each theme can be modified by its author or the general administrator",
			"FORUM_addTheme"=>"Add a theme",

			////	MODULE_TACHE
			////
			// Menu principal
			"TASK_headerModuleName"=>"タスク",
			"TASK_moduleDescription"=>"タスク",
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
			"CONTACT_headerModuleName"=>"コンタクト",
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
			"LINK_headerModuleName"=>"ブックマーク",
			"LINK_moduleDescription"=>"ブックマーク",
			"LINK_option_adminRootAddContent"=>"Only the administrator can add folders and bookmarks to the root folder",
			//Index
			"LINK_addLink"=>"Add a bookmark",
			"LINK_noLink"=>"No bookmark at the moment",
			// lien_edit & dossier_edit
			"LINK_adress"=>"bookmark",

			////	MODULE_MAIL
			////
			//  Menu principal
			"MAIL_headerModuleName"=>"Eメール",
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