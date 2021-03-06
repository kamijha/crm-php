<?php
/* Copyright (C) 2012	Regis Houssin	<regis.houssin@capnetworks.com>
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 */

$mails = array(
		'CHARSET' => 'UTF-8',
		'Mailing' => 'E-Mailing',
		'EMailing' => 'E-Mailing',
		'Mailings' => 'E-Mailings',
		'EMailings' => 'E-Mailings',
		'AllEMailings' => 'Todos los  E-Mailings',
		'MailCard' => 'Ficha E-Mailing',
		'MailTargets' => 'Destinatarios',
		'MailRecipients' => 'Destinatarios',
		'MailRecipient' => 'Destinatario',
		'MailTitle' => 'Descripción',
		'MailFrom' => 'Remitente',
		'MailErrorsTo' => 'Errores a',
		'MailReply' => 'Responder a',
		'MailTo' => 'Destinatario(s)',
		'MailCC' => 'Copia a',
		'MailCCC' => 'Adjuntar copia a',
		'MailTopic' => 'Asunto del e-mail',
		'MailText' => 'Mensaje',
		'MailFile' => 'Archivo',
		'MailMessage' => 'Mensaje del e-mail',
		'ShowEMailing' => 'Mostrar E-Mailing',
		'ListOfEMailings' => 'Listado de E-Mailings',
		'NewMailing' => 'Nuevo E-Mailing',
		'EditMailing' => 'Editar E-Mailing',
		'ResetMailing' => 'Nuevo envío',
		'DeleteMailing' => 'Eliminar E-Mailing',
		'DeleteAMailing' => 'Eliminar un E-Mailing',
		'PreviewMailing' => 'Previsualizar un E-Mailing',
		'PrepareMailing' => 'Preparar E-Mailing',
		'CreateMailing' => 'Crear E-Mailing',
		'MailingDesc' => 'Esta página le permite enviar e-mails a un grupo de personas.',
		'MailingResult' => 'Resultado del envío de e-mails',
		'TestMailing' => 'Probar E-Mailing',
		'ValidMailing' => 'Validar E-Mailing',
		'ApproveMailing' => 'Aprobar E-Mailing',
		'MailingStatusDraft' => 'Borrador',
		'MailingStatusValidated' => 'Validado',
		'MailingStatusApproved' => 'Aprovado',
		'MailingStatusSent' => 'Enviado',
		'MailingStatusSentPartialy' => 'Enviado parcialmente',
		'MailingStatusSentCompletely' => 'Enviado completamente',
		'MailingStatusError' => 'Error',
		'MailingStatusNotSent' => 'No enviado',
		'MailSuccessfulySent' => 'E-Mail enviado correctamente (de %s a %s)',
		'MailingSuccessfullyValidated' => 'E-mailing validado correctamente',
		'MailUnsubcribe' => 'Desuscribe',
		'Unsuscribe' => 'Desuscribe',
		'MailingStatusNotContact' => 'Don\'t contact anymore',
		'ErrorMailRecipientIsEmpty' => 'La dirección del destinatario está vacía',
		'WarningNoEMailsAdded' => 'Ningún nuevo E-Mailing a añadir a la lista destinatarios.',
		'ConfirmValidMailing' => '¿Confirma la validación del E-Mailing?',
		'ConfirmResetMailing' => 'Atención, en el reinicio del E-Mailing <b>%s</b>, autoriza de nuevo su emisión en masa. ¿Es esto lo que quiere hacer?',
		'ConfirmDeleteMailing' => '¿Confirma la eliminación del E-Mailing?',
		'NbOfRecipients' => 'Número de destinatarios',
		'NbOfUniqueEMails' => 'Nº de e-mails únicos',
		'NbOfEMails' => 'Nº de E-mails',
		'TotalNbOfDistinctRecipients' => 'Número de destinatarios únicos',
		'NoTargetYet' => 'Ningún destinatario definido',
		'AddRecipients' => 'Añadir destinatarios',
		'RemoveRecipient' => 'Eliminar destinatario',
		'CommonSubstitutions' => 'Substituciones comunes',
		'YouCanAddYourOwnPredefindedListHere' => 'Para crear su módulo de selección e-mails, vea htdocs/core/modules/mailings/README.',
		'EMailTestSubstitutionReplacedByGenericValues' => 'En modo prueba, las variables de sustitución son sustituidas por valores genéricos',
		'MailingAddFile' => 'Adjuntar este archivo',
		'NoAttachedFiles' => 'Sin archivos adjuntos',
		'BadEMail' => 'E-Mail incorrecto',
		'CloneEMailing' => 'Clonar E-Mailing',
		'ConfirmCloneEMailing' => '¿Está seguro de querer clonar este e-mailing?',
		'CloneContent' => 'Clonar mensaje',
		'CloneReceivers' => 'Clonar destinatarios',
		'DateLastSend' => 'Fecha último envío',
		'DateSending' => 'Fecha envío',
		'SentTo' => 'Enviado a <b>%s</b>',
		'MailingStatusRead' => 'Leido',
		'CheckRead' => 'Confirmación de lectura',
		'YourMailUnsubcribeOK' => 'El correo electrónico <b>%s</b> es correcta desuscribe.',
		'MailtoEMail' => 'mailto email (hyperlink)',
		'ActivateCheckRead' => 'Activar confirmación de lectura y opción de desuscripción',
		'ActivateCheckReadKey' => 'Clave usada para encriptar la URL de la confirmación de lectura y la función de desuscripción',
		// Libelle des modules de liste de destinataires mailing
		'MailingModuleDescContactCompanies' => 'Contactos de terceros (clientes potenciales, clientes, proveedores...)',
		'MailingModuleDescSpeedealingUsers' => 'Speedealing users',
		'MailingModuleDescFundationMembers' => 'Miembros',
		'MailingModuleDescEmailsFromFile' => 'E-Mails de un archivo (e-mail;nombre;varios)',
		'MailingModuleDescEmailsFromUser' => 'E-mails introducidos por el usuario (email;apellidos;nombre;otros)',
		'MailingModuleDescContactsCategories' => 'Terceros (por categoría)',
		'MailingModuleDescSpeedealingContractsLinesExpired' => 'Third parties with expired contract\'s lines',
		'MailingModuleDescContactsByCompanyCategory' => 'Contactos de terceros (por categoría de terceros)',
		'MailingModuleDescMembersCategories' => 'Miembros (por categoría)',
		'MailingModuleDescContactsByFunction' => 'Contactos de terceros (por puesto/función)',
		'LineInFile' => 'Línea %s en archivo',
		'RecipientSelectionModules' => 'Módulos de selección de los destinatarios',
		'MailSelectedRecipients' => 'Destinatarios seleccionados',
		'MailingArea' => 'Área E-Mailings',
		'LastMailings' => 'Los %s últimos E-Mailings',
		'TargetsStatistics' => 'Estadísticas destinatarios',
		'NbOfCompaniesContacts' => 'Contactos únicos de empresas',
		'MailNoChangePossible' => 'Destinatarios de un E-Mailing validado no modificables',
		'SearchAMailing' => 'Buscar un E-Mailing',
		'SendMailing' => 'Enviar E-Mailing',
		'SendMail' => 'Enviar e-mail',
		'SentBy' => 'Enviado por',
		'MailingNeedCommand' => 'Por razones de seguridad, el envío de un E-Mailing en masa debe realizarse en línea de comandos. Pida a su administrador que lance el comando siguiente para para enviar la correspondencia a a todos los destinatarios:',
		'MailingNeedCommand2' => 'Puede enviar en línea añadiendo el parámetro MAILING_LIMIT_SENDBYWEB con un valor numérico que indica el máximo nº de e-mails a enviar por sesión. Para ello vaya a Inicio - Configuración - Varios.',
		'ConfirmSendingEmailing' => '¿Confirma el envío del e-mailing?',
		'LimitSendingEmailing' => 'El envío de un e-mailing desde las pantallas está limitado por razones de seguridad y de timeout a <b>%s</b> destinatarios por sesión de envío.',
		'TargetsReset' => 'Vaciar lista',
		'ToClearAllRecipientsClickHere' => 'Para vaciar la lista de los destinatarios de este E-Mailing, haga click en el botón',
		'ToAddRecipientsChooseHere' => 'Para añadir destinatarios, escoja los que figuran en las listas a continuación',
		'NbOfEMailingsReceived' => 'E-Mailings en masa recibidos',
		'IdRecord' => 'ID registro',
		'DeliveryReceipt' => 'Acuse de recibo',
		'YouCanUseCommaSeparatorForSeveralRecipients' => 'Puede usar el carácter de separación <b>coma </b> para especificar múltiples destinatarios.',
		'TagCheckMail' => 'Seguimiento de la apertura del email',
		'TagUnsubscribe' => 'Link de desuscripción',
		'TagSignature' => 'Firma del usuario remitente',
		'TagMailtoEmail' => 'Email del destinatario',
		// Module Notifications
		'Notifications' => 'Notificaciones',
		'NoNotificationsWillBeSent' => 'Ninguna notificación por e-mail está prevista para este evento y empresa',
		'ANotificationsWillBeSent' => '1 notificación va a ser enviada por e-mail',
		'SomeNotificationsWillBeSent' => '%s notificaciones van a ser enviadas por e-mail',
		'AddNewNotification' => 'Activar una nueva solicitud de notificación',
		'ListOfActiveNotifications' => 'Lista de las solicitudes de notificaciones activas',
		'ListOfNotificationsDone' => 'Lista de notificaciones de e-mails enviadas'
);
?>