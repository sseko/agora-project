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
			"inaccessibleElem"=>"アクセスできない項目",
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
			"element"=>"項目",
			"elements"=>"複数の項目",
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
			"copyUrlInfo"=>"このリンク/URL を使用すると、アイテムに直接アクセスできます:<br> ニュース、フォーラムのトピック、メール、ブログ (外部アクセス) などに統合できます。",
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
			"deleteElems"=>"選択した項目を削除します",
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
			"validate"=>"保存",
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
			"objHistory"=>"項目履歴",
			"all"=>"全て",
			"deletedUser"=>"削除されたユーザー アカウント",
			"folderContent"=>"コンテンツ",
			"accessRead"=>"閲覧",
			"accessReadInfo"=>"閲覧時のアクセス",
			"accessWriteLimit"=>"制限付きの書き込み",
			"accessWriteLimitInfo"=>"制限付き書き込みアクセス: 追加する可能性 -OBJCONTENT- in the -OBJLABEL-,<br> ただし、各ユーザーは変更/削除のみ可能です -OBJCONTENT- ",
			"accessWrite"=>"書く",
			"accessWriteInfo"=>"書き込み時のアクセス",
			"accessWriteInfoContainer"=>"書き込みアクセス : 追加、変更、または削除する機能 -OBJCONTENT-s ・ -OBJLABEL-",
			"accessAutorPrivilege"=>"作成者と管理者のみが、アクセス権を編集したり、ファイルを削除したりできます -OBJLABEL-",
			"accessRightsInherited"=>"継承されたアクセス権 -OBJLABEL-",
			
			////	Libellé des objets
			"OBJECTcontainer"=>"コンテナ",
			"OBJECTelement"=>"項目",
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
			"listFieldsElems"=>"関係する項目",
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
			"HEADER_displaySpace"=>"利用可能スペース",
			"HEADER_displayAdmin"=>"管理者ビュー",
			"HEADER_displayAdminEnabled"=>"管理者ビューが有効",
			"HEADER_displayAdminInfo"=>"現在のスペースのすべての要素を表示 (管理者用に予約)",
			"HEADER_searchElem"=>"スペース内を検索",
			"HEADER_documentation"=>"ドキュメント",
			"HEADER_disconnect"=>"ログアウト",
			"HEADER_shortcuts"=>"ショートカット",
			"FOOTER_pageGenerated"=>"生成されたページ",

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
			"VISIO_urlAdd"=>"ビデオ会議を追加する",
			"VISIO_urlCopy"=>"ビデオ会議のリンクをコピーする",
			"VISIO_urlDelete"=>"ビデオ会議のリンクを削除する",
			"VISIO_launch"=>"ビデオ会議を開始する",
			"VISIO_launchFromEvent"=>"このイベントのビデオ会議を開始する",
			"VISIO_urlMail"=>"テキストの最後にリンクを追加して、新しいビデオ会議を開始します",
			"VISIO_launchInfo"=>"ウェブカメラとマイクへのアクセスを忘れずに許可してください",
			"VISIO_launchHelp"=>"ビデオ会議の開始に問題がある場合は、ここをクリックしてください",
			"VISIO_installJitsi"=>"ビデオ会議を開始するには、無料の Jitsi アプリケーションをインストールしてください",
			"VISIO_launchServerInfo"=>"プライマリ サーバーが正常に機能していない場合は、セカンダリ サーバーを選択してください。<br>連絡先は同じビデオ サーバーを選択する必要があります。",
			"VISIO_launchServerMain"=>"メインサーバー",
			"VISIO_launchServerAlt"=>"セカンダリサーバー",
			"VISIO_launchButton"=>"ビデオ会議を開始する",

			////	vueObjMenuEdit
			"EDIT_notifNoSelection"=>"少なくとも 1 人またはスペースを選択する必要があります",
			"EDIT_notifNoPersoAccess"=>"あなたはその要素に割り当てられていません。",
			"EDIT_notifWriteAccess"=>"割り当てられた人またはスペースが少なくとも存在する必要があります",
			"EDIT_parentFolderAccessError"=>"親フォルダのアクセス権を忘れずに確認してください ''<i>--FOLDER_NAME--</i>'': If it is not also assigned to ''<i>--TARGET_LABEL--</i>'', the present file will not be accessible to him.",
			"EDIT_accessRight"=>"アクセス権",
			"EDIT_accessRightContent"=>"コンテンツへのアクセス権",
			"EDIT_spaceNoModule"=>"現在のモジュールはまだこのスペースに追加されていません",
			"EDIT_allUsers"=>"すべてのユーザー",
			"EDIT_allUsersAndGuests"=>"すべてのユーザーとゲスト",
			"EDIT_allUsersInfo"=>"スペースのすべてのユーザー <i>--SPACENAME--</i>",
			"EDIT_allUsersAndGuestsInfo"=>"スペースのすべてのユーザー <i>--SPACENAME--</i> および読み取り専用アクセスを持つゲスト (ゲスト : ユーザー アカウントを持っていない人)",
			"EDIT_adminSpace"=>"このスペースの管理者:<br>このスペースのすべての要素への書き込みアクセス",
			"EDIT_showAllUsers"=>"すべてのユーザーを表示",
			"EDIT_showAllUsersAndSpaces"=>"すべてのユーザーとスペースを表示する",
			"EDIT_notifMail"=>"通知する",
			"EDIT_notifMail2"=>"作成・修正をメールで通知",
			"EDIT_notifMailInfo"=>"通知はアイテムに割り当てられた人に送信されます (-OBJLABEL-)",
			"EDIT_notifMailInfoCal"=>"<hr>イベントを個人のカレンダーに割り当てると、通知はこれらのカレンダーの所有者 (書き込みアクセス権) にのみ送信されます。",
			"EDIT_notifMailAddFiles"=>"通知にファイルを添付",
			"EDIT_notifMailSelect"=>"通知の受信者を選択する",
			"EDIT_accessRightSubFolders"=>"配下のフォルダに同じアクセス権を割り当てる",
			"EDIT_accessRightSubFolders_info"=>"編集可能なサブフォルダーへのアクセス権を拡張する",
			"EDIT_shortcut"=>"ショートカット",
			"EDIT_shortcutInfo"=>"メインメニューにショートカットを配置する",
			"EDIT_attachedFile"=>"添付ファイル",
			"EDIT_attachedFileAdd"=>"添付ファイルを追加",
			"EDIT_attachedFileInsert"=>"テキストに挿入",
			"EDIT_attachedFileInsertInfo"=>"画像/ビデオをエディター テキストに挿入 (jpg、png、または mp4 形式)",
			"EDIT_guestName"=>"名前・ニックネーム",
			"EDIT_guestNameNotif"=>"名前/ニックネームを指定していただきありがとうございます",
			"EDIT_guestMail"=>"あなたの電子メール",
			"EDIT_guestMailInfo"=>"提案の検証のため、メールアドレスを指定してください",
			"EDIT_guestElementRegistered"=>"ご提案ありがとうございます。 これは、検証前にできるだけ早く調査されます",
			
			////	Formulaire d'installation
			"INSTALL_dbConnect"=>"データベースへの接続",
			"INSTALL_dbHost"=>"データベース サーバーのホスト名",
			"INSTALL_dbName"=>"データベースの名前",
			"INSTALL_dbLogin"=>"ユーザー名",
			"INSTALL_adminAgora"=>"管理者に関する情報",
			"INSTALL_dbErrorDbName"=>"警告: データベースの名前には、できれば英数字とダッシュまたはアンダースコアのみを含める必要があります",
			"INSTALL_dbErrorUnknown"=>"MariaDB/MySQL データベースへの接続に失敗しました",
			"INSTALL_dbErrorIdentification"=>"MariaDB/MySQL データベースへの識別に失敗しました",
			"INSTALL_dbErrorAppInstalled"=>"インストールはすでに行われています。 インストールを再開するか、データベースを削除していただきますようお願いいたします。",
			"INSTALL_PhpOldVersion"=>"Agora-Project には新しいバージョンの PHP が必要です",
			"INSTALL_confirmInstall"=>"インストールを確認しますか?",
			"INSTALL_installOk"=>"Agora-Project が正しくインストールされました!",
			"INSTALL_spaceDescription"=>"共有と共同作業のためのスペース",
			"INSTALL_dataDashboardNews"=>"<h3>新しい共有スペースへようこそ！</h3>
													<h4><img src='app/img/file/iconSmall.png'> ファイル マネージャーで今すぐファイルを共有する</h4>
													<h4><img src='app/img/calendar/iconSmall.png'> 一般的なカレンダーまたは個人のカレンダーを共有する</h4>
													<h4><img src='app/img/dashboard/iconSmall.png'> コミュニティのニュース フィードを拡大する</h4>
													<h4><img src='app/img/messenger.png'> フォーラム、インスタント メッセージング、またはビデオ会議を介して通信する</h4>
													<h4><img src='app/img/task/iconSmall.png'> メモ、プロジェクト、連絡先を一元化する</h4>
													<h4><img src='app/img/mail/iconSmall.png'> ニュースレターをメールで送信する</h4>
													<h4><img src='app/img/postMessage.png'> <a href=\"javascript:lightboxOpen('?ctrl=user&action=SendInvitation')\">ここをクリックして招待メールを送信し、コミュニティを成長させてください!</a></h4>
													<h4><img src='app/img/pdf.png'> <a href='https://www.omnispace.fr/index.php?ctrl=offline&action=Documentation' target='_blank'>詳細については、Omnispace & Agora-Project の公式ドキュメントを参照してください。</a></h4>",
			"INSTALL_dataDashboardPoll"=>"ニュースフィードについてどう思いますか?",
			"INSTALL_dataDashboardPollA"=>"とてもおもしろい !",
			"INSTALL_dataDashboardPollB"=>"おもしろい",
			"INSTALL_dataDashboardPollC"=>"おもしろくない",
			"INSTALL_dataCalendarEvt"=>"オムニスペースへようこそ！",
			"INSTALL_dataForumSubject1"=>"オムニスペース フォーラムへようこそ!",
			"INSTALL_dataForumSubject2"=>"質問を共有したり、共有したいトピックについて話し合ったりしてください。",

			////	MODULE_PARAMETRAGE
			////
			"AGORA_generalSettings"=>"一般設定",
			"AGORA_versions"=>"Versions",
			"AGORA_dateUpdate"=>"Updated on",
			"AGORA_Changelog"=>"バージョン ログを表示する",
			"AGORA_funcMailDisabled"=>"メールを送信するための PHP 関数が無効になっています",
			"AGORA_funcImgDisabled"=>"画像操作用の PHP GD2 ライブラリが無効になっています",
			"AGORA_backupFull"=>"フルバックアップ",
			"AGORA_backupFullInfo"=>"スペースの完全なバックアップを復元します: すべてのファイルとデータベース",
			"AGORA_backupDb"=>"データベースのバックアップ",
			"AGORA_backupDbInfo"=>"スペース データベースのバックアップのみを回復する",
			"AGORA_backupConfirm"=>"この操作には数分かかる場合があります。ダウンロードを確認しますか?",
			"AGORA_diskSpaceInvalid"=>"ファイルのディスク容量は整数でなければなりません",
			"AGORA_visioHostInvalid"=>"ビデオ通話サーバーのウェブ アドレスが無効です: 「https」で始まる必要があります",
			"AGORA_mapApiKeyInvalid"=>"マッピング ツールとして Google マップを選択した場合は、「API キー」を指定する必要があります。",
			"AGORA_gIdentityKeyInvalid"=>"オプションで Google 経由の接続を選択した場合は、Google サインイン用の「API キー」を指定する必要があります",
			"AGORA_confirmModif"=>"変更しますか?",
			"AGORA_name"=>"サイト名",
			"AGORA_footerHtml"=>"フッター text/html",
			"AGORA_lang"=>"デフォルトの言語",
			"AGORA_timezone"=>"タイムゾーン",
			"AGORA_spaceName"=>"プリンシパル スペースの名前",
			"AGORA_diskSpaceLimit"=>"ファイルの保存に使用できるスペース",
			"AGORA_logsTimeOut"=>"イベント履歴 (ログ) の期間",
			"AGORA_logsTimeOutInfo"=>"イベント履歴の保持期間は、要素の追加または変更に関するものです。 削除ログは少なくとも 1 年間保持されます。",
			"AGORA_visioHost"=>"ビデオ会議サーバー Jitsi",
			"AGORA_visioHostInfo"=>"Jitsi ビデオ会議サーバーのアドレス。 例： https://meet.jit.si",
			"AGORA_visioHostAlt"=>"代替ビデオ会議サーバー",
			"AGORA_visioHostAltInfo"=>"代替ビデオ会議サーバー : メインのビデオ サーバーが使用できない場合",
			"AGORA_skin"=>"インターフェースの色",
			"AGORA_black"=>"黒",
			"AGORA_white"=>"白",
			"AGORA_wallpaperLogoError"=>"壁紙とロゴに使用できるのは jpg または png です",
			"AGORA_deleteWallpaper"=>"壁紙を削除する",
			"AGORA_logo"=>"各ページ下部のロゴ",
			"AGORA_logoUrl"=>"URL",
			"AGORA_logoConnect"=>"ログインページの Logo / Image",
			"AGORA_logoConnectInfo"=>"ログインフォーム上部に表示",
			"AGORA_usersCommentLabel"=>"ユーザーがアイテムにコメントできるようにする",
			"AGORA_usersComment"=>"コメント",
			"AGORA_usersComments"=>"コメント",
			"AGORA_usersLikeLabel"=>"Users can <i>Like</i> the item",
			"AGORA_usersLike_likeSimple"=>"Only like",
			"AGORA_usersLike_likeOrNot"=>"Like / Dislike",
			"AGORA_usersLike_like"=>"Like!",
			"AGORA_usersLike_dontlike"=>"Dislike",
			"AGORA_mapTool"=>"マッピング ツール",
			"AGORA_mapToolInfo"=>"ユーザーと連絡先を地図上に表示するマッピング ツール",
			"AGORA_mapApiKey"=>"マッピング ツールの API キー",
			"AGORA_mapApiKeyInfo"=>"Google マップ マッピング ツールの API キー",
			"AGORA_gIdentity"=>"Google 経由のオプション接続",
			"AGORA_gIdentityInfo"=>"ユーザーは、Google アカウントを介してより簡単に自分のスペースに接続できます : for that, an email <i>@gmail.com</ i> must already be registered on the account of the user.",
			"AGORA_gIdentityClientId"=>"Google ログイン設定 : Client ID",
			"AGORA_gIdentityClientIdInfo"=>"この設定は、Google ログインを有効にするために必要です : https://developers.google.com/identity/sign-in/web/",
			"AGORA_gPeopleApiKey"=>"Google People 設定 :  API KEY",
			"AGORA_gPeopleApiKeyInfo"=>"この設定は、Google / Gmail の連絡先を取得するために必要です : <a href='https://developers.google.com/people/' target='_blank'>https://developers.google.com/people/</a>",
			"AGORA_messengerDisabled"=>"インスタント メッセンジャーが有効になっています",
			"AGORA_moduleLabelDisplay"=>"メニューバーのモジュール名",
			"AGORA_folderDisplayMode"=>"フォルダのデフォルトの表示モード",
			"AGORA_personsSort"=>"ユーザーと連絡先を並べ替える",
			//SMTP
			"AGORA_smtpLabel"=>"SMTPとsendMailの接続",
			"AGORA_sendmailFrom"=>"Email 'From'",
			"AGORA_sendmailFromPlaceholder"=>"eg: 'noreply@mydomain.com'",
			"AGORA_smtpHost"=>"サーバーアドレス (ホスト名)",
			"AGORA_smtpPort"=>"ポート番号",
			"AGORA_smtpPortInfo"=>"'25' by défault. '587' or '465' for SSL/TLS",
			"AGORA_smtpSecure"=>"暗号化のタイプ (オプション)",
			"AGORA_smtpSecureInfo"=>"'ssl' または 'tls'",
			"AGORA_smtpUsername"=>"ユーザー名",
			"AGORA_smtpPass"=>"パスワード",
			//LDAP
			"AGORA_ldapLabel"=>"LDAP サーバーへの接続",
			"AGORA_ldapLabelInfo"=>"スペースでのユーザー作成のための LDAP サーバーへの接続: cf. ''User import/export'' option of the ''User'' module",
			"AGORA_ldapUri"=>"LDAPのURI",
			"AGORA_ldapUriInfo"=>"Full LDAP URI as LDAP://hostname:port or LDAPS://hostname:port for SSL encryption.",
			"AGORA_ldapPort"=>"ポート番号",
			"AGORA_ldapPortInfo"=>"接続に使用するポート: '' 389 '' by default",
			"AGORA_ldapLogin"=>"LDAP 管理者の DN (識別名)",
			"AGORA_ldapLoginInfo"=>"for example ''cn=admin,dc=mon-entreprise,dc=com''",
			"AGORA_ldapPass"=>"管理者のパスワード",
			"AGORA_ldapDn"=>"グループの DN (識別名)",
			"AGORA_ldapDnInfo"=>"グループの DN : ディレクトリ内のユーザーの場所。 Example ''ou=mon-groupe,dc=mon-entreprise,dc=com''",
			"importLdapFilterInfo"=>"LDAP 検索フィルター (cf. https://www.php.net/manual/function.ldap-search.php). Example ''(cn=*)'' or ''(&(samaccountname=MONLOGIN)(cn=*))''",
			"AGORA_ldapDisabled"=>"LDAP サーバーに接続するための PHP モジュールがインストールされていません",
			"AGORA_ldapConnectError"=>"LDAP サーバー接続エラー!",

			////	MODULE_LOG
			////
			"LOG_moduleDescription"=>"ログ - イベントログ",
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
			"SPACE_moduleInfo"=>"サイト（またはメインスペース）はいくつかのスペースに分割できます",
			"SPACE_manageSpaces"=>"サイトのスペースを管理する",
			"SPACE_config"=>"スペースの設定",
			//Index
			"SPACE_confirmDeleteDbl"=>"削除を確認しますか? 注意）この操作は元に戻せません!",
			"SPACE_space"=>"スペース",
			"SPACE_spaces"=>"スペース",
			"SPACE_accessRightUndefined"=>"設定します",
			"SPACE_modules"=>"モジュール",
			"SPACE_addSpace"=>"スペースを追加",
			//Edit
			"SPACE_usersAccess"=>"スペースに割り当てられたユーザー",
			"SPACE_selectModule"=>"モジュールを選択する必要があります",
			"SPACE_spaceModules"=>"スペース モジュール",
			"SPACE_moduleRank"=>"モジュールの表示順序を設定するために移動します",
			"SPACE_publicSpace"=>"パブリックスペース：ゲストアクセス",
			"SPACE_publicSpaceInfo"=>"パブリック スペースは、ユーザー アカウントを持っていない人、つまり「ゲスト」に開かれています。 このパブリック スペースへのアクセスを保護するために、一般的なパスワードを指定できます。 ゲストは次のモジュールにアクセスできません: 'mail' および 'user' (パブリック スペースにパスワードがない場合)",
			"SPACE_publicSpaceNotif"=>"パブリック スペースに個人の連絡先の詳細 (連絡先モジュール) やドキュメント (ファイル モジュール) などの機密データが含まれている場合: GDPR に準拠するために、パブリック スペースにパスワード アクセスを追加する必要があります。<hr>一般データ保護規則は、 個人データ保護の参照テキストを構成する欧州連合の規則。",
			"SPACE_usersInvitation"=>"ユーザーは電子メールで招待状を送信できます",
			"SPACE_usersInvitationInfo"=>"すべてのユーザーは、スペースに参加するための招待メールを送信できます",
			"SPACE_allUsers"=>"すべてのユーザー",
			"SPACE_user"=>" ユーザー",
			"SPACE_userInfo"=>"スペースのユーザー : <br> スペースへの通常アクセス",
			"SPACE_admin"=>"管理者",
			"SPACE_adminInfo"=>"スペースの管理者: <br>- スペースのすべての要素への書き込みアクセス権 <br>- 招待メールを送信する機能 <br>- ユーザーを追加する機能 <br>- スペースの設定",

			////	MODULE_UTILISATEUR
			////
			// Menu principal
			"USER_headerModuleName"=>"ユーザー",
			"USER_moduleDescription"=>"スペースのユーザー",
			"USER_option_allUsersAddGroup"=>"ユーザーはグループを作成することもできます",
			//Index
			"USER_allUsers"=>"すべてのユーザーを表示",
			"USER_allUsersInfo"=>"すべてのスペースのすべてのユーザーを表示",
			"USER_spaceUsers"=>"現在のスペースのユーザー",
			"USER_deleteDefinitely"=>"完全に削除",
			"USER_deleteFromCurSpace"=>"現在のスペースへの割り当てを解除",
			"USER_deleteFromCurSpaceConfirm"=>"現在のスペースへのユーザーの割り当てを解除しますか?",
			"USER_allUsersOnSpaceNotif"=>"すべてのユーザーがこのスペースに影響を受けます",
			"USER_user"=>"ユーザー",
			"USER_users"=>"ユーザー",
			"USER_addExistUser"=>"スペースに既存のユーザーを追加する",
			"USER_addExistUserTitle"=>"サイトの既存のユーザーをスペースに追加します: スペースへの割り当て",
			"USER_addUser"=>"ユーザーを追加する",
			"USER_addUserSite"=>"サイトにユーザーを作成します: デフォルトでは、任意のスペースに割り当てられます!",
			"USER_addUserSpace"=>"現在のスペースにユーザーを作成する",
			"USER_sendCoords"=>"ログインとパスワードを送信",
			"USER_sendCoordsInfo"=>"ログイン情報とパスワードを初期化するためのリンクを記載したメールをユーザーに送信します",
			"USER_sendCoordsInfo2"=>"ログイン情報を記載したメールをユーザーに送信する",
			"USER_sendCoordsConfirm"=>"パスワードが更新されます！ 続けますか？",
			"USER_sendCoordsMail"=>"スペースへのログイン情報",
			"USER_noUser"=>"現在、このスペースに割り当てられているユーザーはいません",
			"USER_spaceList"=>"ユーザーのスペース",
			"USER_spaceNoAffectation"=>"スペースはありません",
			"USER_adminGeneral"=>"サイトの総合管理者",
			"USER_adminGeneralInfo"=>"一般管理者は、サイトのすべての設定、割り当てられたすべてのユーザー、スペース、および要素を管理できます。 スペースの設定と要素を完全に制御できます。したがって、この権限を最大 2 人または 3 人のユーザーに割り当てることをお勧めします。",
			"USER_adminSpace"=>"スペースの管理者",
			"USER_userSpace"=>"スペースのユーザー",
			"USER_profilEdit"=>"プロフィールを修正する",
			"USER_myProfilEdit"=>"ユーザー プロファイルを変更する",
			// Invitation
			"USER_sendInvitation"=>"招待状をメールで送信",
			"USER_sendInvitationInfo"=>"現在のスペースに参加するために、連絡先に電子メールで招待状を送信します。<hr><img src='app/img/google.png' height=15> Google アカウントをお持ちの場合は、Gmail の連絡先から招待状を送信することもできます。",
			"USER_mailInvitationObject"=>"招待者", // ..Jean DUPOND
			"USER_mailInvitationFromSpace"=>"参加するように招待します", // Jean DUPOND "vous invite à rejoindre l'espace" Mon Espace
			"USER_mailInvitationConfirm"=>"ここをクリックして招待を確認します",
			"USER_mailInvitationWait"=>"招待はまだ確認されていません",
			"USER_exired_idInvitation"=>"招待状のウェブリンクの有効期限が切れています ...",
			"USER_invitPassword"=>"招待を確認する",
			"USER_invitPassword2"=>"招待を確認するためにパスワードを選択してください",
			"USER_invitationValidated"=>"あなたの招待は承認されました!",
			"USER_gPeopleImport"=>"Gmail アドレスから連絡先を取得する",
			"USER_importQuotaExceeded"=>"あなたは制限されています --USERS_QUOTA_REMAINING-- 新しいユーザーアカウント・全体のユーザー --LIMITE_NB_USERS-- 人",
			// groupes
			"USER_spaceGroups"=>"スペースのユーザーのグループ",
			"USER_spaceGroupsEdit"=>"スペースのユーザーのグループを編集する",
			"USER_groupEditInfo"=>"各グループは、作成者またはスペース管理者が変更できます",
			"USER_addGroup"=>"グループを追加",
			"USER_userGroups"=>"ユーザーグループ",
			// Utilisateur_affecter
			"USER_searchPrecision"=>"姓、名、または電子メールアドレスを指定していただきありがとうございます",
			"USER_userAffectConfirm"=>"割り当てを確認しますか？",
			"USER_userSearch"=>"現在のスペースに追加するユーザーを検索",
			"USER_allUsersOnSpace"=>"サイトのすべてのユーザーは既にこのスペースに割り当てられています",
			"USER_usersSpaceAffectation"=>"ユーザーをスペースに割り当てる:",
			"USER_usersSearchNoResult"=>"ユーザーが見つかりません",
			// Utilisateur_edit & CO
			"USER_langs"=>"言語",
			"USER_persoCalendarDisabled"=>"個人の予定表が無効になっています",
			"USER_persoCalendarDisabledInfo"=>"個人の議題は、デフォルトで各ユーザーに割り当てられます (「カレンダー」モジュールがスペースでアクティブ化されていない場合でも)。 このユーザーの個人用カレンダーを無効にするには、このオプションをオンにします。",
			"USER_connectionSpace"=>"接続後に表示されるスペース",
			"USER_loginExists"=>"ログイン/電子メールは既に存在します。 別のものを選択してください",
			"USER_mailPresentInAccount"=>"このメール アドレスのユーザー アカウントは既に存在します",
			"USER_loginAndMailDifferent"=>"両方のメールアドレスが同一である必要があります",
			"USER_mailNotifObject"=>"新しいアカウント ",  // "...sur" l'Agora machintruc
			"USER_mailNotifContent"=>"あなたのユーザー アカウントは作成されました ",  // idem
			"USER_mailNotifContent2"=>"次のログインとパスワードで接続します",
			"USER_mailNotifContent3"=>"このメールをアーカイブしていただきありがとうございます。",
			// Livecounter & Messenger & Visio
			"USER_messengerEdit"=>"インスタントメッセージを構成する",
			"USER_messengerEdit2"=>"インスタントメッセージを構成する",
			"USER_livecounterVisibility"=>"インスタント メッセージングとビデオ会議の可視性",
			"USER_livecounterAllUsers"=>"接続時にプレゼンスを表示: メッセージ/ビデオが有効",
			"USER_livecounterDisabled"=>"接続時に自分の存在を非表示にする: メッセージ/ビデオが無効になっています",
			"USER_livecounterSomeUsers"=>"ログインすると、特定のユーザーだけが見ることができます",

			////	MODULE_TABLEAU BORD
			////
			// Menu principal + options du module
			"DASHBOARD_headerModuleName"=>"ニュース",
			"DASHBOARD_moduleDescription"=>"ニュース、投票、最近の項目",
			"DASHBOARD_option_adminAddNews"=>"管理者のみがニュースを追加できます",//OPTION!
			"DASHBOARD_option_disablePolls"=>"投票を無効にする",//OPTION!
			"DASHBOARD_option_adminAddPoll"=>"管理者のみが投票を追加できます",//OPTION!
			//Index
			"DASHBOARD_menuNews"=>"ニュース",
			"DASHBOARD_menuPolls"=>"投票",
			"DASHBOARD_menuElems"=>"最近の項目",
			"DASHBOARD_addNews"=>"ニュースを追加",
			"DASHBOARD_offlineNews"=>"アーカイブされたニュースを表示",
			"DASHBOARD_offlineNewsNb"=>"アーカイブされたニュース",//"55 actualités archivées"
			"DASHBOARD_noNews"=>"今のところニュースはありません",
			"DASHBOARD_addPoll"=>"投票を追加する",
			"DASHBOARD_pollsVoted"=>"投票済みの投票のみを表示",
			"DASHBOARD_pollsVotedNb"=>"すでに投票した投票",//"55 sondages..déjà voté"
			"DASHBOARD_vote"=>"投票して結果を見てください！",
			"DASHBOARD_voteTooltip"=>"投票は匿名です: 誰もあなたの投票の選択を知りません",
			"DASHBOARD_answerVotesNb"=>"Voté --NB_VOTES-- times",
			"DASHBOARD_pollVotesNb"=>"The poll was voted --NB_VOTES-- times",
			"DASHBOARD_pollVotedBy"=>"投票者",//Bibi, boby, etc
			"DASHBOARD_noPoll"=>"今のところ投票はありません",
			"DASHBOARD_plugins"=>"新しい項目",
			"DASHBOARD_pluginsInfo"=>"作成された項目",
			"DASHBOARD_pluginsInfo2"=>"間",
			"DASHBOARD_plugins_day"=>"今日の",
			"DASHBOARD_plugins_week"=>"今週の",
			"DASHBOARD_plugins_month"=>"今月の",
			"DASHBOARD_plugins_previousConnection"=>"最後のログイン以降",
			"DASHBOARD_pluginsTooltipRedir"=>"フォルダ内の項目を表示する",
			"DASHBOARD_pluginEmpty"=>"この期間の新しい項目はありません",
			// Actualite/News
			"DASHBOARD_topNews"=>"トップニュース",
			"DASHBOARD_topNewsInfo"=>"リストの一番上にあるニュース",
			"DASHBOARD_offline"=>"アーカイブされたニュース",
			"DASHBOARD_dateOnline"=>"オンラインデート",
			"DASHBOARD_dateOnlineInfo"=>"ニュースを自動的にオンラインにする日付を選択してください。<br>それまで、ニュースはオフラインです",
			"DASHBOARD_dateOnlineNotif"=>"ニュースは一時的にアーカイブされます",
			"DASHBOARD_dateOffline"=>"アーカイブの日付",
			"DASHBOARD_dateOfflineInfo"=>"ニュースを自動的にアーカイブする日付を選択してください",
			// Sondage/Polls
			"DASHBOARD_titleQuestion"=>"Title / Question",
			"DASHBOARD_multipleResponses"=>"投票ごとに複数の回答が可能",
			"DASHBOARD_newsDisplay"=>"ニュースで表示 (左メニュー)",
			"DASHBOARD_publicVote"=>"公開投票: 有権者の選択は公開されています",
			"DASHBOARD_publicVoteInfos"=>"一般投票は、調査への参加を妨げる可能性があることに注意してください。",
			"DASHBOARD_dateEnd"=>"投票終了",
			"DASHBOARD_responseList"=>"考えられる答え",
			"DASHBOARD_responseNb"=>"回答 n°",
			"DASHBOARD_addResponse"=>"回答を追加",
			"DASHBOARD_controlResponseNb"=>"可能な回答を少なくとも 2 つ指定してください",
			"DASHBOARD_votedPollNotif"=>"注意: アンケートが投票されるとすぐに、タイトルや回答を変更することはできなくなります",
			"DASHBOARD_voteNoResponse"=>"答えを選択してください",
			"DASHBOARD_exportPoll"=>"調査結果をpdfでダウンロード",
			"DASHBOARD_exportPollDate"=>"調査結果",

			////	MODULE_AGENDA
			////
			// Menu principal
			"CALENDAR_headerModuleName"=>"カレンダー",
			"CALENDAR_moduleDescription"=>"個人用および共有カレンダー",
			"CALENDAR_option_adminAddRessourceCalendar"=>"管理者のみがリソース カレンダーを追加できます",
			"CALENDAR_option_adminAddCategory"=>"管理者のみがイベントのカテゴリを追加できます",
			"CALENDAR_option_createSpaceCalendar"=>"共有議題を作成する",
			"CALENDAR_option_createSpaceCalendarInfo"=>"カレンダーはスペースと同じ名前になります。 これは、ユーザーのカレンダーが無効になっている場合に役立ちます。",
			"CALENDAR_option_moduleDisabled"=>"ユーザー プロファイルで個人用カレンダーを非アクティブ化していないユーザーには、引き続きメニュー バーにカレンダー モジュールが表示されます。",
			//Index
			"CALENDAR_calsList"=>"利用可能なカレンダー",
			"CALENDAR_displayAllCals"=>"すべてのカレンダーを表示 (管理者向け)",
			"CALENDAR_hideAllCals"=>"すべてのカレンダーを非表示",
			"CALENDAR_printCalendars"=>"カレンダーを印刷する",
			"CALENDAR_printCalendarsInfos"=>"ランドスケープ モードで印刷する",
			"CALENDAR_addSharedCalendar"=>"共有予定表を追加する",
			"CALENDAR_addSharedCalendarInfo"=>"共有カレンダーを追加:<be>部屋、車両、ビデオ プロジェクターなどの予約用",
			"CALENDAR_exportIcal"=>"イベントのエクスポート (iCal)",
			"CALENDAR_icalUrl"=>"リンク/URL をコピーして、外部アプリでカレンダーを表示します",
			"CALENDAR_icalUrlCopy"=>"Microsoft Outlook、Google カレンダー、Mozilla Thunderbird などの外部アプリケーションを介してカレンダー イベントを読み取ることができます。",
			"CALENDAR_importIcal"=>"イベントのインポート (iCal)",
			"CALENDAR_ignoreOldEvt"=>"1 年以上前のイベントをインポートしない",
			"CALENDAR_importIcalState"=>"状態",
			"CALENDAR_importIcalStatePresent"=>"すでに存在",
			"CALENDAR_importIcalStateImport"=>"インポート",
			"CALENDAR_displayMode"=>"表示",
			"CALENDAR_display_day"=>"1日",
			"CALENDAR_display_4Days"=>"4日",
			"CALENDAR_display_workWeek"=>"就業週",
			"CALENDAR_display_week"=>"週",
			"CALENDAR_display_month"=>"月",
			"CALENDAR_weekNb"=>"週を見る n°",
			"CALENDAR_periodNext"=>"次期",
			"CALENDAR_periodPrevious"=>"前期",
			"CALENDAR_evtAffects"=>"カレンダー",
			"CALENDAR_evtAffectToConfirm"=>"カレンダーで待ち受け確認",
			"CALENDAR_evtProposed"=>"確認するイベントの提案", 
			"CALENDAR_evtProposedBy"=>"提案者",//..Mr SMITH
			"CALENDAR_evtProposedConfirm"=>"提案を確認する",
			"CALENDAR_evtProposedConfirmBis"=>"イベント提案が議題に統合されました",
			"CALENDAR_evtProposedConfirmMail"=>"イベントの提案が確認されました",
			"CALENDAR_evtProposedDecline"=>"提案を断る",
			"CALENDAR_evtProposedDeclineBis"=>"提案は却下されました",
			"CALENDAR_evtProposedDeclineMail"=>"あなたのイベント提案は却下されました",
			"CALENDAR_deleteEvtCal"=>"このカレンダーのみを削除しますか?",
			"CALENDAR_deleteEvtCals"=>"すべてのカレンダーを削除しますか?",
			"CALENDAR_deleteEvtDate"=>"この日付のみ削除しますか?",
			"CALENDAR_evtPrivate"=>"プライベートイベント",
			"CALENDAR_evtAutor"=>"私が作成したイベント",
			"CALENDAR_noEvt"=>"イベントなし",
			"CALENDAR_synthese"=>"暦合成",
			"CALENDAR_calendarsPercentBusy"=>"Busy calendars",
			"CALENDAR_noCalendarDisplayed"=>"カレンダーが表示されていません",
			// Evenement
			"CALENDAR_category"=>"カテゴリー",
			"CALENDAR_importanceNormal"=>"重要性(中)",
			"CALENDAR_importanceHight"=>"重要性(高)",
			"CALENDAR_visibilityPublic"=>"通常の可視性",
			"CALENDAR_visibilityPrivate"=>"プライベートな可視性",
			"CALENDAR_visibilityPublicHide"=>"セミプライベートな可視性",
			"CALENDAR_visibilityInfo"=>"<u>プライベート可視性</ u>: イベントが書面でアクセスできる人のみに表示されます <br><br> <u>セミプライベートな可視性</u> : イベントが読み取り専用の場合は、時間枠のみが表示されます (タイトルと詳細は表示されません)。",
			// Agenda/Evenement : edit
			"CALENDAR_noPeriodicity"=>"1回だけ",
			"CALENDAR_period_weekDay"=>"毎週",
			"CALENDAR_period_month"=>"毎月",
			"CALENDAR_period_year"=>"毎年",
			"CALENDAR_periodDateEnd"=>"繰り返しの終わり",
			"CALENDAR_periodException"=>"繰り返しの例外",
			"CALENDAR_calendarAffectations"=>"次のカレンダーに割り当てます",
			"CALENDAR_addEvt"=>"イベントを追加する",
			"CALENDAR_addEvtTooltip"=>"イベントを追加する",
			"CALENDAR_addEvtTooltipBis"=>"イベントをカレンダーに追加する",
			"CALENDAR_proposeEvtTooltip"=>"カレンダーの所有者にイベントを提案する",
			"CALENDAR_proposeEvtTooltipBis"=>"カレンダーの所有者にイベントを提案する",
			"CALENDAR_proposeEvtTooltipBis2"=>"カレンダーの所有者にイベントを提案します : カレンダーは読み取り専用です",
			"CALENDAR_inputProposed"=>"イベントはカレンダーの所有者に提案されます",
			"CALENDAR_verifCalNb"=>"カレンダーを選んでいただきありがとうございます",
			"CALENDAR_noModifInfo"=>"このカレンダーへの書き込み権限がないため、変更は禁止されています",
			"CALENDAR_editLimit"=>"あなたはイベントの作成者ではありません。カレンダーの割り当てのみを管理できます",
			"CALENDAR_busyTimeslot"=>"このカレンダーのスロットは既に使用されています:",
			"CALENDAR_timeSlot"=>"Time range of the ''week'' display",
			"CALENDAR_propositionNotify"=>"各イベントの提案をメールで通知",
			"CALENDAR_propositionNotifyInfo"=>"注: 各イベント提案は、カレンダーの所有者によって検証または無効化されます。",
			"CALENDAR_propositionGuest"=>"ゲストはイベントを提案できます",
			"CALENDAR_propositionGuestInfo"=>"注: 以下のアクセス権で「すべてのユーザーとゲスト」を選択することを忘れないでください。",
			"CALENDAR_propositionNotifTitle"=>"提案する新しいイベント",//.."boby SMITH"
			"CALENDAR_propositionNotifMessage"=>"New event proposed by --AUTOR_LABEL-- : &nbsp; <i><b>--EVT_TITLE_DATE--</b></i> <br><i>--EVT_DESCRIPTION--</i> <br>Access your space to confirm or cancel this proposal",
			// Categories
			"CALENDAR_editCategories"=>"イベント カテゴリの管理",
			"CALENDAR_editCategoriesRight"=>"各カテゴリは、作成者または一般管理者が変更できます",
			"CALENDAR_addCategory"=>"カテゴリを追加",
			"CALENDAR_filterByCategory"=>"カテゴリ別にイベントのみを表示",

			////	MODULE_FICHIER
			////
			// Menu principal
			"FILE_headerModuleName"=>"ファイルマネージャー",
			"FILE_moduleDescription"=>"ファイルマネージャー",
			"FILE_option_adminRootAddContent"=>"管理者のみがルート フォルダーにフォルダーとファイルを追加できます。",
			//Index
			"FILE_addFile"=>"追加ファイル",
			"FILE_addFileAlert"=>"サーバー上のフォルダーに書き込みでアクセスできません!",
			"FILE_downloadSelection"=>"ダウンロードの選択",
			"FILE_nbFileVersions"=>"ファイルのバージョン",//"55 versions du fichier"
			"FILE_downloadsNb"=>"(downloaded --NB_DOWNLOAD-- times)",
			"FILE_downloadedBy"=>"ファイルのダウンロード",//"..boby, will"
			"FILE_addFileVersion"=>"新しいファイル バージョンを追加する",
			"FILE_noFile"=>"今のところファイルはありません",
			// Fichier_edit  &  Dossier_edit  &  fichier_edit_ajouter  &  Versions_fichier
			"FILE_fileSizeLimit"=>"ファイルの最大サイズ:", // ...2 Mega Octets
			"FILE_uploadSimple"=>"シンプルアップロード",
			"FILE_uploadMultiple"=>"複数アップロード",
			"FILE_imgReduce"=>"画像を最適化する",
			"FILE_updatedName"=>"ファイル名は新しいバージョンに置き換えられます",
			"FILE_fileSizeError"=>"ファイルが大きすぎます",
			"FILE_addMultipleFilesInfo"=>"複数のファイルを選択するには、「Shift」または「Ctrl」を使います",
			"FILE_selectFile"=>"ファイルを選択していただきありがとうございます",
			"FILE_fileContent"=>"コンテンツ",
			// Versions_fichier
			"FILE_versionsOf"=>"Versions of", // versions de fichier.gif
			"FILE_confirmDeleteVersion"=>"このバージョンの削除を確認しますか?",

			////	MODULE_FORUM
			////
			// Menu principal
			"FORUM_headerModuleName"=>"フォーラム",
			"FORUM_moduleDescription"=>"フォーラム",
			"FORUM_option_adminAddSubject"=>"管理者のみがトピックを追加できます",
			"FORUM_option_allUsersAddTheme"=>"ユーザーはテーマを追加することもできます",
			// TRI
			"SORT_dateLastMessage"=>"Last message",
			//Index & Sujet
			"FORUM_subject"=>"トピックス",
			"FORUM_subjects"=>"トピックス",
			"FORUM_message"=>"メッセージ",
			"FORUM_messages"=>"メッセージ",
			"FORUM_lastSubject"=>"最後のトピック",
			"FORUM_lastMessage"=>"最後のメッセージ",
			"FORUM_noSubject"=>"今のところ話題なし",
			"FORUM_noMessage"=>"今のところメッセージはありません",
			"FORUM_subjectBy"=>"件名",
			"FORUM_addSubject"=>"新しい話題",
			"FORUM_displaySubject"=>"トピックを表示",
			"FORUM_addMessage"=>"投稿",
			"FORUM_quoteMessage"=>"このメッセージに答えて引用する",
			"FORUM_notifyLastPost"=>"メールで通知",
			"FORUM_notifyLastPostInfo"=>"新しいメッセージごとに電子メールで通知を送信する",
			// Sujet_edit  &  Message_edit
			"FORUM_accessRightInfos"=>"注意: 読み取りアクセスでは、ディスカッションに参加できません。 したがって、制限付きの書き込みアクセスを優先します。 書き込みアクセスは、モデレーター用に予約する必要があります。",
			"FORUM_themeSpaceAccessInfo"=>"トピックはスペースで利用可能です",
			// Themes
			"FORUM_subjectTheme"=>"テーマ",
			"FORUM_subjectThemes"=>"テーマ",
			"FORUM_forumRoot"=>"フォーラムホーム",
			"FORUM_forumRootResp"=>"ホーム",
			"FORUM_noTheme"=>"テーマなし",
			"FORUM_editThemes"=>"テーマを管理する",
			"FORUM_editThemesInfo"=>"各テーマは、その作成者または一般管理者が変更できます",
			"FORUM_addTheme"=>"テーマを追加する",

			////	MODULE_TACHE
			////
			// Menu principal
			"TASK_headerModuleName"=>"タスク",
			"TASK_moduleDescription"=>"タスク",
			"TASK_option_adminRootAddContent"=>"管理者のみがルート フォルダーにフォルダーとタスクを追加できます。",
			// TRI
			"SORT_priority"=>"優先順位",
			"SORT_advancement"=>"進捗",
			"SORT_dateBegin"=>"開始日",
			"SORT_dateEnd"=>"終了日",
			//Index
			"TASK_addTask"=>"タスクを追加する",
			"TASK_noTask"=>"今のところタスクはありません",
			"TASK_advancement"=>"進捗",
			"TASK_advancementAverage"=>"平均進捗",
			"TASK_priority"=>"優先順位",
			"TASK_priority1"=>"低",
			"TASK_priority2"=>"中",
			"TASK_priority3"=>"高",
			"TASK_priority4"=>"緊急",
			"TASK_responsiblePersons"=>"リーダー",
			"TASK_advancementLate"=>"進行遅延",

			////	MODULE_CONTACT
			////
			// Menu principal
			"CONTACT_headerModuleName"=>"コンタクト",
			"CONTACT_moduleDescription"=>"連絡先のディレクトリ",
			"CONTACT_option_adminRootAddContent"=>"管理者のみがルート フォルダーにフォルダーと連絡先を追加できます",
			//Index
			"CONTACT_addContact"=>"連絡先を追加",
			"CONTACT_noContact"=>"今のところ連絡なし",
			"CONTACT_createUser"=>"このスペースにユーザーを作成します",
			"CONTACT_createUserInfo"=>"この連絡先からこのスペースにユーザーを作成しますか?",
			"CONTACT_createUserConfirm"=>"ユーザーが正常に作成されました",

			////	MODULE_LIEN
			////
			// Menu principal
			"LINK_headerModuleName"=>"ブックマーク",
			"LINK_moduleDescription"=>"ブックマーク",
			"LINK_option_adminRootAddContent"=>"管理者だけがフォルダとブックマークをルートフォルダに追加できます",
			//Index
			"LINK_addLink"=>"ブックマークを追加",
			"LINK_noLink"=>"現在ブックマークなし",
			// lien_edit & dossier_edit
			"LINK_adress"=>"ブックマーク",

			////	MODULE_MAIL
			////
			//  Menu principal
			"MAIL_headerModuleName"=>"Eメール",
			"MAIL_moduleDescription"=>"ワンクリックでメール送信！",
			//Index
			"MAIL_specifyMail"=>"メールアドレスを入力していただきありがとうございます",
			"MAIL_title"=>"メールの件名",
			"MAIL_description"=>"電子メール メッセージ",
			// Historique Email
			"MAIL_historyTitle"=>"送信したメールの履歴",
			"MAIL_delete"=>"このメールを削除",
			"MAIL_resend"=>"このメールを再送する",
			"MAIL_resendInfo"=>"この電子メールの内容を取得し、新しい送信用のエディタに直接入力します",
			"MAIL_historyEmpty"=>"メールなし",
			"MAIL_recipients"=>"受信者",
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
		$dateList[$year."-01-01"]="新年";
		$dateList[$year."-12-25"]="クリスマス";

		//Retourne le résultat
		return $dateList;
	}
}