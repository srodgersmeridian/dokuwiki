<?php
/**
 * German (informal) language file
 *
 * @author Frank Loizzi <contact@software.bacal.de>
 * @author Matthias Schulte <dokuwiki@lupo49.de>
 */
$lang['account_suffix']        = 'Ihr Account-Suffix. Z. B. <code>@my.domain.org</code>';
$lang['base_dn']               = 'Ihr Base-DN. Z. B. <code>DC=my,DC=domain,DC=org</code>';
$lang['domain_controllers']    = 'Eine Komma-separierte Liste von Domänen-Controllern. Z. B. <code>srv1.domain.org,srv2.domain.org</code>';
$lang['ad_username']           = 'Ein priviligierter Active Directory-Benutzer mit Zugriff zu allen anderen Benutzerdaten. Optional, aber wird benötigt für Aktionen wie z. B. dass Senden von Benachrichtigungs-Mails.';
$lang['ad_password']           = 'Das Passwort des obigen Benutzers.';
$lang['sso']                   = 'Soll Single-Sign-On via Kerberos oder NTLM benutzt werden?';
$lang['real_primarygroup']     = 'Soll die echte primäre Gruppe aufgelöst werden anstelle der Annahme "Domain Users" (langsamer)';
$lang['use_ssl']               = 'SSL-Verbindung benutzen? Falls ja, TLS unterhalb nicht aktivieren.';
$lang['use_tls']               = 'TLS-Verbindung benutzen? Falls ja, SSL oberhalb nicht aktivieren.';
$lang['debug']                 = 'Zusätzliche Debug-Informationen bei Fehlern anzeigen?';
$lang['expirywarn']            = 'Tage im Voraus um Benutzer über ablaufende Passwörter zu informieren. 0 zum Ausschalten.';
$lang['additional']            = 'Eine Komma-separierte Liste von zusätzlichen AD-Attributen, die von den Benutzerobjekten abgefragt werden. Wird von einigen Plugins benutzt.';