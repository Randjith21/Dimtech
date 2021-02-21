<?php


if(isset($_POST['msg_mail']) && $_POST['msg_mail']!='')
{
$expediteur = 'moimeme@gmail.com';
$destinataire = 'votre adresse de compte de messagerie';
$sujet = $_POST['msg_sujet'];
$entete = 'From: '.$expediteur;

$contenu_message = utf8_decode($_POST['msg_contenu']).'rn';
$contenu_message = 'De : '.$_POST['msg_mail'].', Sujet : '.$ sujet.', '.$contenu_message.'rn';
}

?>
