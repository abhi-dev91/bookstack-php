<?php
/**
 * Settings text strings
 * Contains all text strings used in the general settings sections of BookStack
 * including users and roles.
 */
return [

    // Common Messages
    'settings' => 'Beállítások',
    'settings_save' => 'Beállítások mentése',
    'system_version' => 'Rendszerverzió',
    'categories' => 'Kategóriák',

    // App Settings
    'app_customization' => 'Személyre szabás',
    'app_features_security' => 'Jellemzők és biztonság',
    'app_name' => 'Alkalmazás neve',
    'app_name_desc' => 'Ez a név meg fog jelenni a fejlécben és minden a rendszer által küldött emailben.',
    'app_name_header' => 'Név mutatása a fejlécben',
    'app_public_access' => 'Nyilvános hozzáférés',
    'app_public_access_desc' => 'Ha engedélyezett, a nem bejelentkezett felhasználók is hozzá tudnak férni a BookStack példány tartalmaihoz.',
    'app_public_access_desc_guest' => 'A nyilvános látogatók hozzáférése a "Guest" felhasználón keresztül irányítható.',
    'app_public_access_toggle' => 'Nyilvános hozzáférés engedélyezése',
    'app_public_viewing' => 'Nyilvános megtekintés engedélyezve?',
    'app_secure_images' => 'Magasabb biztonságú képfeltöltés',
    'app_secure_images_toggle' => 'Magasabb biztonságú képfeltöltés engedélyezése',
    'app_secure_images_desc' => 'Teljesítmény optimalizálási okokból minden kép nyilvános. Ez a beállítás egy véletlenszerű, nehezen kitalálható karakterláncot illeszt a képek útvonalának elejére. Meg kell győződni róla, hogy a könnyű hozzáférés megakadályozása érdekében a könyvtár indexek nincsenek engedélyezve.',
    'app_default_editor' => 'Alapértelmezett  oldal szerkesztő',
    'app_default_editor_desc' => 'Select which editor will be used by default when editing new pages. This can be overridden at a page level where permissions allow.',
    'app_custom_html' => 'Egyéni HTML fejléc tartalom',
    'app_custom_html_desc' => 'Az itt hozzáadott bármilyen tartalom be lesz illesztve minden oldal <head> szekciójának aljára. Ez hasznos a stílusok felülírásához van analitikai kódok hozzáadásához.',
    'app_custom_html_disabled_notice' => 'Az egyéni HTML fejléc tartalom le van tiltva ezen a beállítási oldalon, hogy az esetleg hibásan megadott módosításokat vissza lehessen állítani.',
    'app_logo' => 'Alkalmazás logó',
    'app_logo_desc' => 'This is used in the application header bar, among other areas. This image should be 86px in height. Large images will be scaled down.',
    'app_icon' => 'Alkalmazás ikon',
    'app_icon_desc' => 'This icon is used for browser tabs and shortcut icons. This should be a 256px square PNG image.',
    'app_homepage' => 'Alkalmazás kezdőlapja',
    'app_homepage_desc' => 'A kezdőlapon az alapértelmezés szerinti nézet helyett megjelenő nézet kiválasztása. A kiválasztott oldalakon figyelmen kívül lesznek hagyva az oldal engedélyek.',
    'app_homepage_select' => 'Egy oldal kiválasztása',
    'app_footer_links' => 'Lábléc linkek',
    'app_footer_links_desc' => 'Add links to show within the site footer. These will be displayed at the bottom of most pages, including those that do not require login. You can use a label of "trans::<key>" to use system-defined translations. For example: Using "trans::common.privacy_policy" will provide the translated text "Privacy Policy" and "trans::common.terms_of_service" will provide the translated text "Terms of Service".',
    'app_footer_links_label' => 'Link címke',
    'app_footer_links_url' => 'Link URL',
    'app_footer_links_add' => 'Lábléc hivatkozás hozzáadása',
    'app_disable_comments' => 'Megjegyzések letiltása',
    'app_disable_comments_toggle' => 'Megjegyzések letiltása',
    'app_disable_comments_desc' => 'Megjegyzések letiltása az alkalmazás összes oldalán.<br>A már létező megjegyzések el lesznek rejtve.',

    // Color settings
    'color_scheme' => 'Alkalmazás színséma',
    'color_scheme_desc' => 'Set the colors to use in the application user interface. Colors can be configured separately for dark and light modes to best fit the theme and ensure legibility.',
    'ui_colors_desc' => 'Set the application primary color and default link color. The primary color is mainly used for the header banner, buttons and interface decorations. The default link color is used for text-based links and actions, both within written content and in the application interface.',
    'app_color' => 'Elsődleges szín',
    'link_color' => 'Alapértelmezett link szín',
    'content_colors_desc' => 'Set colors for all elements in the page organisation hierarchy. Choosing colors with a similar brightness to the default colors is recommended for readability.',
    'bookshelf_color' => 'Polc színe',
    'book_color' => 'Könyv színe',
    'chapter_color' => 'Fejezet színe',
    'page_color' => 'Oldal színe',
    'page_draft_color' => 'Oldalvázlat színe',

    // Registration Settings
    'reg_settings' => 'Regisztráció',
    'reg_enable' => 'Regisztráció engedélyezése',
    'reg_enable_toggle' => 'Regisztráció engedélyezése',
    'reg_enable_desc' => 'Ha a regisztráció engedélyezett, akkor a felhasználó képes lesz bejelentkezni mint az alkalmazás egy felhasználója. Regisztráció után egy egyszerű, alapértelmezés szerinti felhasználói szerepkör lesz hozzárendelve.',
    'reg_default_role' => 'Regisztráció utáni alapértelmezett felhasználói szerepkör',
    'reg_enable_external_warning' => 'A fenti beállítási lehetőség nincs használatban, ha külső LDAP vagy SAML hitelesítés aktív. A nem létező tagok felhasználói fiókjai automatikusan létrejönnek ha a használatban lévő külső rendszeren sikeres a hitelesítés.',
    'reg_email_confirmation' => 'Email megerősítés',
    'reg_email_confirmation_toggle' => 'Email megerősítés szükséges',
    'reg_confirm_email_desc' => 'Ha a tartomány korlátozás be van állítva, akkor email megerősítés szükséges és ez a beállítás figyelmen kívül lesz hagyva.',
    'reg_confirm_restrict_domain' => 'Tartomány korlátozás',
    'reg_confirm_restrict_domain_desc' => 'Azoknak az email tartományoknak a vesszővel elválasztott listája, melyekre a regisztráció korlátozva lesz. A felhasználók egy emailt fognak kapni, hogy megerősítsék az email címüket mielőtt használni kezdhetnék az alkalmazást.<br>Fontos tudni, hogy a felhasználók a sikeres regisztráció után megváltoztathatják az email címüket.',
    'reg_confirm_restrict_domain_placeholder' => 'Nincs beállítva korlátozás',

    // Maintenance settings
    'maint' => 'Karbantartás',
    'maint_image_cleanup' => 'Képek tisztítása',
    'maint_image_cleanup_desc' => 'Végigolvassa az oldalakat és a tartalmak változatait, hogy leellenőrizze jelenleg mely képek és rajzok vannak használatban, és mely képek szerepelnek többször. A futtatása előtt feltétlen készíteni kell egy teljes adatbázis és lemezkép mentést.',
    'maint_delete_images_only_in_revisions' => 'Also delete images that only exist in old page revisions',
    'maint_image_cleanup_run' => 'Tisztítás futtatása',
    'maint_image_cleanup_warning' => ':count potenciálisan nem használt képet találtam. Biztosan törölhetőek ezek a képek?',
    'maint_image_cleanup_success' => ':count potenciálisan nem használt kép megtalálva és törölve!',
    'maint_image_cleanup_nothing_found' => 'Nincsenek nem használt képek, semmi sem lett törölve!',
    'maint_send_test_email' => 'Teszt e-mail küldése',
    'maint_send_test_email_desc' => 'Ez elküld egy teszt emailt a profilban megadott email címre.',
    'maint_send_test_email_run' => 'Teszt e-mail küldése',
    'maint_send_test_email_success' => 'Email elküldve :address címre',
    'maint_send_test_email_mail_subject' => 'Teszt e-mail',
    'maint_send_test_email_mail_greeting' => 'Az email kézbesítés működőképesnek tűnik!',
    'maint_send_test_email_mail_text' => 'Gratulálunk! Mivel ez az email figyelmeztetés megérkezett az email beállítások megfelelőek.',
    'maint_recycle_bin_desc' => 'Deleted shelves, books, chapters & pages are sent to the recycle bin so they can be restored or permanently deleted. Older items in the recycle bin may be automatically removed after a while depending on system configuration.',
    'maint_recycle_bin_open' => 'Lomtár megnyitása',
    'maint_regen_references' => 'Regenerate References',
    'maint_regen_references_desc' => 'This action will rebuild the cross-item reference index within the database. This is usually handled automatically but this action can be useful to index old content or content added via unofficial methods.',
    'maint_regen_references_success' => 'Reference index has been regenerated!',
    'maint_timeout_command_note' => 'Note: This action can take time to run, which can lead to timeout issues in some web environments. As an alternative, this action be performed using a terminal command.',

    // Recycle Bin
    'recycle_bin' => 'Lomtár',
    'recycle_bin_desc' => 'Here you can restore items that have been deleted or choose to permanently remove them from the system. This list is unfiltered unlike similar activity lists in the system where permission filters are applied.',
    'recycle_bin_deleted_item' => 'Törölt elem',
    'recycle_bin_deleted_parent' => 'Szülő',
    'recycle_bin_deleted_by' => 'Törölte',
    'recycle_bin_deleted_at' => 'Törlés ideje',
    'recycle_bin_permanently_delete' => 'Végleges törlés',
    'recycle_bin_restore' => 'Visszaállítás',
    'recycle_bin_contents_empty' => 'A lomtár jelenleg üres',
    'recycle_bin_empty' => 'Lomtár kiürítése',
    'recycle_bin_empty_confirm' => 'This will permanently destroy all items in the recycle bin including content contained within each item. Are you sure you want to empty the recycle bin?',
    'recycle_bin_destroy_confirm' => 'This action will permanently delete this item, along with any child elements listed below, from the system and you will not be able to restore this content. Are you sure you want to permanently delete this item?',
    'recycle_bin_destroy_list' => 'Megsemmisítendő elemek',
    'recycle_bin_restore_list' => 'Visszaállítandó elemek',
    'recycle_bin_restore_confirm' => 'This action will restore the deleted item, including any child elements, to their original location. If the original location has since been deleted, and is now in the recycle bin, the parent item will also need to be restored.',
    'recycle_bin_restore_deleted_parent' => 'The parent of this item has also been deleted. These will remain deleted until that parent is also restored.',
    'recycle_bin_restore_parent' => 'Szűlő visszaállítása',
    'recycle_bin_destroy_notification' => 'Deleted :count total items from the recycle bin.',
    'recycle_bin_restore_notification' => 'Restored :count total items from the recycle bin.',

    // Audit Log
    'audit' => 'Audit napló',
    'audit_desc' => 'This audit log displays a list of activities tracked in the system. This list is unfiltered unlike similar activity lists in the system where permission filters are applied.',
    'audit_event_filter' => 'Eseményszűrő',
    'audit_event_filter_no_filter' => 'Nincs szűrő',
    'audit_deleted_item' => 'Törölt elem',
    'audit_deleted_item_name' => 'Név: :name',
    'audit_table_user' => 'Felhasználó',
    'audit_table_event' => 'Esemény',
    'audit_table_related' => 'Related Item or Detail',
    'audit_table_ip' => 'IP Cím',
    'audit_table_date' => 'Tevékenység időpontja',
    'audit_date_from' => 'Kezdő dátum',
    'audit_date_to' => 'Végdátum',

    // Role Settings
    'roles' => 'Szerepkörök',
    'role_user_roles' => 'Felhasználói szerepkörök',
    'roles_index_desc' => 'Roles are used to group users & provide system permission to their members. When a user is a member of multiple roles the privileges granted will stack and the user will inherit all abilities.',
    'roles_x_users_assigned' => ':count user assigned|:count users assigned',
    'roles_x_permissions_provided' => ':count permission|:count permissions',
    'roles_assigned_users' => 'Hozzárendelt felhasználók',
    'roles_permissions_provided' => 'Provided Permissions',
    'role_create' => 'Új szerepkör létrehozása',
    'role_delete' => 'Szerepkör törlése',
    'role_delete_confirm' => 'Ez törölni fogja \':roleName\' szerepkört.',
    'role_delete_users_assigned' => 'Ehhez a szerepkörhöz :userCount felhasználó van hozzárendelve. Ha a felhasználókat át kell helyezni ebből a szerepkörből, akkor ki kell választani egy új szerepkört.',
    'role_delete_no_migration' => "Nincs felhasználó áthelyezés",
    'role_delete_sure' => 'Biztosan törölhető ez a szerepkör?',
    'role_edit' => 'Szerepkör szerkesztése',
    'role_details' => 'Szerepkör részletei',
    'role_name' => 'Szerepkör neve',
    'role_desc' => 'Szerepkör rövid leírása',
    'role_mfa_enforced' => 'Kétlépcsős hitelesítés megkövetelése',
    'role_external_auth_id' => 'Külső hitelesítés azonosítók',
    'role_system' => 'Rendszer jogosultságok',
    'role_manage_users' => 'Felhasználók kezelése',
    'role_manage_roles' => 'Szerepkörök és szerepkör engedélyek kezelése',
    'role_manage_entity_permissions' => 'Minden könyv, fejezet és oldalengedély kezelése',
    'role_manage_own_entity_permissions' => 'Saját könyv, fejezet és oldalak engedélyeinek kezelése',
    'role_manage_page_templates' => 'Oldalsablonok kezelése',
    'role_access_api' => 'Hozzáférés a rendszer API-hoz',
    'role_manage_settings' => 'Alkalmazás beállításainak kezelése',
    'role_export_content' => 'Tartalom exportálása',
    'role_editor_change' => 'Change page editor',
    'role_notifications' => 'Receive & manage notifications',
    'role_asset' => 'Eszköz jogosultságok',
    'roles_system_warning' => 'Be aware that access to any of the above three permissions can allow a user to alter their own privileges or the privileges of others in the system. Only assign roles with these permissions to trusted users.',
    'role_asset_desc' => 'Ezek a jogosultságok vezérlik az alapértelmezés szerinti hozzáférést a rendszerben található eszközökhöz. A könyvek, fejezetek és oldalak jogosultságai felülírják ezeket a jogosultságokat.',
    'role_asset_admins' => 'Az adminisztrátorok automatikusan hozzáférést kapnak minden tartalomhoz, de ezek a beállítások megjeleníthetnek vagy elrejthetnek felhasználói felület beállításokat.',
    'role_asset_image_view_note' => 'This relates to visibility within the image manager. Actual access of uploaded image files will be dependant upon system image storage option.',
    'role_all' => 'Összes',
    'role_own' => 'Saját',
    'role_controlled_by_asset' => 'Az általuk feltöltött eszköz által ellenőrzött',
    'role_save' => 'Szerepkör mentése',
    'role_users' => 'Felhasználók ebben a szerepkörben',
    'role_users_none' => 'Jelenleg nincsenek felhasználók hozzárendelve ehhez a szerepkörhöz',

    // Users
    'users' => 'Felhasználók',
    'users_index_desc' => 'Create & manage individual user accounts within the system. User accounts are used for login and attribution of content & activity. Access permissions are primarily role-based but user content ownership, among other factors, may also affect permissions & access.',
    'user_profile' => 'Felhasználói profil',
    'users_add_new' => 'Új felhasználó hozzáadása',
    'users_search' => 'Felhasználók keresése',
    'users_latest_activity' => 'Legújabb tevékenység',
    'users_details' => 'Felhasználó részletei',
    'users_details_desc' => 'Egy megjelenítendő név és email cím beállítása ennek a felhasználónak. Az email cím az alkalmazásba történő bejelentkezéshez lesz használva.',
    'users_details_desc_no_email' => 'Egy megjelenítendő név beállítása ennek a felhasználónak amiről mások felismerik.',
    'users_role' => 'Felhasználói szerepkörök',
    'users_role_desc' => 'A felhasználó melyik szerepkörhöz lesz rendelve. Ha a felhasználó több szerepkörhöz van rendelve, akkor ezeknek a szerepköröknek a jogosultságai összeadódnak, és a a felhasználó a hozzárendelt szerepkörök minden képességét megkapja.',
    'users_password' => 'Felhasználó jelszava',
    'users_password_desc' => 'Set a password used to log-in to the application. This must be at least 8 characters long.',
    'users_send_invite_text' => 'Lehetséges egy meghívó emailt küldeni ennek a felhasználónak ami lehetővé teszi, hogy beállíthassa a saját jelszavát. Máskülönben a jelszót az erre jogosult felhasználónak kell beállítania.',
    'users_send_invite_option' => 'Felhasználó meghívó levél küldése',
    'users_external_auth_id' => 'Külső hitelesítés azonosítója',
    'users_external_auth_id_desc' => 'When an external authentication system is in use (such as SAML2, OIDC or LDAP) this is the ID which links this BookStack user to the authentication system account. You can ignore this field if using the default email-based authentication.',
    'users_password_warning' => 'Only fill the below if you would like to change the password for this user.',
    'users_system_public' => 'Ez a felhasználó bármelyik, a példányt megtekintő felhasználót képviseli. Nem lehet vele bejelentkezni de automatikusan hozzá lesz rendelve.',
    'users_delete' => 'Felhasználó törlése',
    'users_delete_named' => ':userName felhasználó törlése',
    'users_delete_warning' => '\':userName\' felhasználó teljesen törölve lesz a rendszerből.',
    'users_delete_confirm' => 'Biztosan törölhető ez a felhasználó?',
    'users_migrate_ownership' => 'Tulajdonjog átruházása',
    'users_migrate_ownership_desc' => 'Select a user here if you want another user to become the owner of all items currently owned by this user.',
    'users_none_selected' => 'Nincs felhasználó kiválasztva',
    'users_edit' => 'Felhasználó szerkesztése',
    'users_edit_profile' => 'Profil szerkesztése',
    'users_avatar' => 'Avatar használata',
    'users_avatar_desc' => 'A felhasználót ábrázoló kép kiválasztása. Kb. 256px méretű négyzetes képnek kell lennie.',
    'users_preferred_language' => 'Előnyben részesített nyelv',
    'users_preferred_language_desc' => 'Ez a beállítás megváltoztatja az alkalmazás felhasználói felületén használt nyelvet. Nincs hatása a felhasználók által létrehozott tartalomra.',
    'users_social_accounts' => 'Közösségi fiókok',
    'users_social_accounts_desc' => 'View the status of the connected social accounts for this user. Social accounts can be used in addition to the primary authentication system for system access.',
    'users_social_accounts_info' => 'Itt lehet egyéb fiókokat hozzákapcsolni a gyorsabb és könnyebb bejelentkezés érdekében. Itt olyan fiókot lehet lecsatlakoztatni, melynek korábban nem volt engedélyezett hozzáférése. Visszavonja a hozzáférést a csatlakoztatott szociális fiók profilbeállításaiból.',
    'users_social_connect' => 'Fiók csatlakoztatása',
    'users_social_disconnect' => 'Fiók lecsatlakoztatása',
    'users_social_status_connected' => 'Connected',
    'users_social_status_disconnected' => 'Disconnected',
    'users_social_connected' => ':socialAccount fiók sikeresen csatlakoztatva a profilhoz.',
    'users_social_disconnected' => ':socialAccount fiók sikeresen lecsatlakoztatva a profilról.',
    'users_api_tokens' => 'API vezérjelek',
    'users_api_tokens_desc' => 'Create and manage the access tokens used to authenticate with the BookStack REST API. Permissions for the API are managed via the user that the token belongs to.',
    'users_api_tokens_none' => 'Ehhez a felhasználóhoz nincsenek létrehozva API vezérjelek',
    'users_api_tokens_create' => 'Vezérjel létrehozása',
    'users_api_tokens_expires' => 'Lejárat',
    'users_api_tokens_docs' => 'API dokumentáció',
    'users_mfa' => 'Többfaktoros hitelesítés',
    'users_mfa_desc' => 'Setup multi-factor authentication as an extra layer of security for your user account.',
    'users_mfa_x_methods' => ':count method configured|:count methods configured',
    'users_mfa_configure' => 'Configure Methods',

    // API Tokens
    'user_api_token_create' => 'API vezérjel létrehozása',
    'user_api_token_name' => 'Név',
    'user_api_token_name_desc' => 'Give your token a readable name as a future reminder of its intended purpose.',
    'user_api_token_expiry' => 'Lejárati dátum',
    'user_api_token_expiry_desc' => 'Dátum megadása ameddig a vezérjel érvényes. Ez után a dátum után az ezzel a vezérjellel történő kérések nem fognak működni. Üresen hagyva a lejárati idő 100 évre lesz beállítva.',
    'user_api_token_create_secret_message' => 'Immediately after creating this token a "Token ID" & "Token Secret" will be generated and displayed. The secret will only be shown a single time so be sure to copy the value to somewhere safe and secure before proceeding.',
    'user_api_token' => 'API vezérjel',
    'user_api_token_id' => 'Vezérjel azonosító',
    'user_api_token_id_desc' => 'Ez egy nem szerkeszthető, a rendszer által létrehozott azonosító ehhez a vezérjelhez amire API kérésekben lehet szükség.',
    'user_api_token_secret' => 'Vezérjel titkos kódja',
    'user_api_token_secret_desc' => 'This is a system generated secret for this token which will need to be provided in API requests. This will only be displayed this one time so copy this value to somewhere safe and secure.',
    'user_api_token_created' => 'Vezérjel létrehozva :timeAgo',
    'user_api_token_updated' => 'Vezérjel frissítve :timeAgo',
    'user_api_token_delete' => 'Vezérjel törlése',
    'user_api_token_delete_warning' => '\':tokenName\' nevű API vezérjel teljesen törölve lesz a rendszerből.',
    'user_api_token_delete_confirm' => 'Biztosan törölhető ez az API vezérjel?',

    // Webhooks
    'webhooks' => 'Webhook-ok',
    'webhooks_index_desc' => 'Webhooks are a way to send data to external URLs when certain actions and events occur within the system which allows event-based integration with external platforms such as messaging or notification systems.',
    'webhooks_x_trigger_events' => ':count trigger event|:count trigger events',
    'webhooks_create' => 'Create New Webhook',
    'webhooks_none_created' => 'No webhooks have yet been created.',
    'webhooks_edit' => 'Edit Webhook',
    'webhooks_save' => 'Save Webhook',
    'webhooks_details' => 'Webhook Details',
    'webhooks_details_desc' => 'Provide a user friendly name and a POST endpoint as a location for the webhook data to be sent to.',
    'webhooks_events' => 'Webhook Events',
    'webhooks_events_desc' => 'Select all the events that should trigger this webhook to be called.',
    'webhooks_events_warning' => 'Keep in mind that these events will be triggered for all selected events, even if custom permissions are applied. Ensure that use of this webhook won\'t expose confidential content.',
    'webhooks_events_all' => 'All system events',
    'webhooks_name' => 'Webhook Name',
    'webhooks_timeout' => 'Webhook Request Timeout (Seconds)',
    'webhooks_endpoint' => 'Webhook Endpoint',
    'webhooks_active' => 'Webhook Active',
    'webhook_events_table_header' => 'Events',
    'webhooks_delete' => 'Delete Webhook',
    'webhooks_delete_warning' => 'This will fully delete this webhook, with the name \':webhookName\', from the system.',
    'webhooks_delete_confirm' => 'Are you sure you want to delete this webhook?',
    'webhooks_format_example' => 'Webhook Format Example',
    'webhooks_format_example_desc' => 'Webhook data is sent as a POST request to the configured endpoint as JSON following the format below. The "related_item" and "url" properties are optional and will depend on the type of event triggered.',
    'webhooks_status' => 'Webhook Status',
    'webhooks_last_called' => 'Last Called:',
    'webhooks_last_errored' => 'Last Errored:',
    'webhooks_last_error_message' => 'Last Error Message:',


    //! If editing translations files directly please ignore this in all
    //! languages apart from en. Content will be auto-copied from en.
    //!////////////////////////////////
    'language_select' => [
        'en' => 'English',
        'ar' => 'العربية',
        'bg' => 'Bǎlgarski',
        'bs' => 'Bosanski',
        'ca' => 'Català',
        'cs' => 'Česky',
        'da' => 'Dansk',
        'de' => 'Deutsch (Sie)',
        'de_informal' => 'Deutsch (Du)',
        'el' => 'ελληνικά',
        'es' => 'Español',
        'es_AR' => 'Español Argentina',
        'et' => 'Eesti keel',
        'eu' => 'Euskara',
        'fa' => 'فارسی',
        'fr' => 'Français',
        'he' => 'עברית',
        'hr' => 'Hrvatski',
        'hu' => 'Magyar',
        'id' => 'Bahasa Indonesia',
        'it' => 'Italian',
        'ja' => '日本語',
        'ko' => '한국어',
        'lt' => 'Lietuvių Kalba',
        'lv' => 'Latviešu Valoda',
        'nb' => 'Norsk (Bokmål)',
        'nn' => 'Nynorsk',
        'nl' => 'Nederlands',
        'pl' => 'Polski',
        'pt' => 'Português',
        'pt_BR' => 'Português do Brasil',
        'ro' => 'Română',
        'ru' => 'Русский',
        'sk' => 'Slovensky',
        'sl' => 'Slovenščina',
        'sv' => 'Svenska',
        'tr' => 'Türkçe',
        'uk' => 'Українська',
        'uz' => 'O‘zbekcha',
        'vi' => 'Tiếng Việt',
        'zh_CN' => '简体中文',
        'zh_TW' => '繁體中文',
    ],
    //!////////////////////////////////
];