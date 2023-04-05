<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Plugin strings are defined here.
 *
 * @package     tool_policy
 * @category    string
 * @copyright   2018 David Mudrák <david@moodle.com>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acceptanceacknowledgement'] = 'I acknowledge that I have received a request to give consent on behalf of the above user(s).';
$string['acceptancenote'] = 'Remarks';
$string['acceptancepolicies'] = 'Policies';
$string['acceptancessavedsucessfully'] = 'The agreements have been saved successfully.';
$string['acceptancestatusaccepted'] = 'Accepted';
$string['acceptancestatusacceptedbehalf'] = 'Accepted on user\'s behalf';
$string['acceptancestatusdeclined'] = 'Declined';
$string['acceptancestatusdeclinedbehalf'] = 'Declined on user\'s behalf';
$string['acceptancestatusoverall'] = 'Overall';
$string['acceptancestatuspartial'] = 'Partially accepted';
$string['acceptancestatuspending'] = 'Pending';
$string['acceptanceusers'] = 'Users';
$string['actions'] = 'Actions';
$string['activate'] = 'Set status to "Active"';
$string['activating'] = 'Activating a policy';
$string['activateconfirm'] = '<p>You are about to activate policy <em>\'{$a->name}\'</em> and make the version <em>\'{$a->revision}\'</em> the current one.</p><p>All users will be required to agree to this new policy version to be able to use the site.</p>';
$string['activateconfirmyes'] = 'Activate';
$string['agreepolicies'] = 'Please agree to the following policies';
$string['backtoprevious'] = 'Go back to previous page';
$string['backtotop'] = 'Back to top';
$string['cachedef_policy_optional'] = 'Cache of the optional/compulsory flag for policy versions';
$string['consentbulk'] = 'Consent';
$string['consentpagetitle'] = 'Consent';
$string['contactdpo'] = 'For any questions about the policies please contact the privacy officer.';
$string['dataproc'] = 'Personal data processing';
$string['declineacknowledgement'] = 'I acknowledge that I have received a request to decline consent on behalf of the above user(s).';
$string['declinethepolicy'] = 'Decline user consent';
$string['deleting'] = 'Deleting a version';
$string['deleteconfirm'] = '<p>Are you sure you want to delete policy <em>\'{$a->name}\'</em>?</p><p>This operation can not be undone.</p>';
$string['editingpolicydocument'] = 'Editing policy';
$string['errorpolicyversioncompulsory'] = 'Compulsory policies cannot be declined!';
$string['errorpolicyversionnotfound'] = 'There isn\'t any policy version with this identifier.';
$string['errorsaveasdraft'] = 'Minor change can not be saved as draft';
$string['errorusercantviewpolicyversion'] = 'The user doesn\'t have access to this policy version.';
$string['event_acceptance_created'] = 'User policy agreement created';
$string['event_acceptance_updated'] = 'User policy agreement updated';
$string['filtercapabilityno'] = 'Permission: Can not agree';
$string['filtercapabilityyes'] = 'Permission: Can agree';
$string['filterrevision'] = 'Version: {$a}';
$string['filterrevisionstatus'] = 'Version: {$a->name} ({$a->status})';
$string['filterrole'] = 'Role: {$a}';
$string['filters'] = 'Filters';
$string['filterstatusdeclined'] = 'Status: Declined';
$string['filterstatuspending'] = 'Status: Pending';
$string['filterstatusyes'] = 'Status: Agreed';
$string['filterplaceholder'] = 'Search keyword or select filter';
$string['filterpolicy'] = 'Policy: {$a}';
$string['guestconsent:continue'] = 'Continue';
$string['guestconsentmessage'] = 'If you continue browsing this website, you agree to our policies:';
$string['iagree'] = 'I agree to the {$a}';
$string['idontagree'] = 'No thanks, I decline {$a}';
$string['iagreetothepolicy'] = 'Give consent';
$string['inactivate'] = 'Set status to "Inactive"';
$string['inactivating'] = 'Inactivating a policy';
$string['inactivatingconfirm'] = '<p>You are about to inactivate policy <em>\'{$a->name}\'</em> version <em>\'{$a->revision}\'</em>.</p>';
$string['inactivatingconfirmyes'] = 'Inactivate';
$string['invalidversionid'] = 'There is no policy with this identifier!';
$string['irevokethepolicy'] = 'Withdraw user consent';
$string['listactivepolicies'] = 'List of active policies';
$string['minorchange'] = 'Minor change';
$string['minorchangeinfo'] = 'A minor change does not alter the meaning of the policy. Users are not required to agree to the policy again if the edit is marked as a minor change.';
$string['managepolicies'] = 'Manage policies';
$string['movedown'] = 'Move down';
$string['moveup'] = 'Move up';
$string['mustagreetocontinue'] = 'Before continuing you need to acknowledge all these policies.';
$string['newpolicy'] = 'New policy';
$string['newversion'] = 'New version';
$string['noactivepolicies'] = 'There are no policies with an active version.';
$string['nofiltersapplied'] = 'No filters applied';
$string['nopermissiontoagreedocs'] = 'No permission to agree to the policies';
$string['nopermissiontoagreedocs_desc'] = 'Sorry, you do not have the required permissions to agree to the policies.<br />You will not be able to use this site until the following policies are agreed:';
$string['nopermissiontoagreedocsbehalf'] = 'No permission to agree to the policies on behalf of this user';
$string['nopermissiontoagreedocsbehalf_desc'] = 'Sorry, you do not have the required permission to agree to the following policies on behalf of {$a}:';
$string['nopermissiontoagreedocscontact'] = 'For further assistance, please contact';
$string['nopermissiontoviewpolicyversion'] = 'You do not have permissions to view this policy version.';
$string['nopolicies'] = 'There are no policies for registered users with an active version.';
$string['selectpolicyandversion'] = 'Use the filter above to select policy and/or version';
$string['steppolicies'] = 'Policy {$a->numpolicy} out of {$a->totalpolicies}';
$string['pluginname'] = 'Policies';
$string['policiesagreements'] = 'Policies and agreements';
$string['policy:accept'] = 'Agree to the policies';
$string['policy:acceptbehalf'] = 'Give consent for policies on someone else\'s behalf';
$string['policy:managedocs'] = 'Manage policies';
$string['policy:viewacceptances'] = 'View user agreement reports';
$string['policydocaudience'] = 'User consent';
$string['policydocaudience0'] = 'All users';
$string['policydocaudience1'] = 'Authenticated users';
$string['policydocaudience2'] = 'Guests';
$string['policydoccontent'] = 'Full policy';
$string['policydochdrpolicy'] = 'Policy';
$string['policydochdrversion'] = 'Document version';
$string['policydocname'] = 'Name';
$string['policydocoptional'] = 'Agreement optional';
$string['policydocoptionalyes'] = 'Optional';
$string['policydocoptionalno'] = 'Compulsory';
$string['policydocrevision'] = 'Version';
$string['policydocsummary'] = 'Summary';
$string['policydocsummary_help'] = 'This text should provide a summary of the policy, potentially in a simplified and easily accessible form, using clear and plain language.';
$string['policydoctype'] = 'Type';
$string['policydoctype0'] = 'Site policy';
$string['policydoctype1'] = 'Privacy policy';
$string['policydoctype2'] = 'Third parties policy';
$string['policydoctype99'] = 'Other policy';
$string['policydocuments'] = 'Policy documents';
$string['policynamedversion'] = 'Policy {$a->name} (version {$a->revision} - {$a->id})';
$string['policypriorityagreement'] = 'Show policy before showing other policies';
$string['policyversionacceptedinbehalf'] = 'Consent for this policy has been given on your behalf.';
$string['policyversionacceptedinotherlang'] = 'Consent for this policy version has been given in a different language.';
$string['previousversions'] = '{$a} previous versions';
$string['privacy:metadata:acceptances'] = 'Information about policy agreements made by users.';
$string['privacy:metadata:acceptances:policyversionid'] = 'The version of the policy for which consent was given.';
$string['privacy:metadata:acceptances:userid'] = 'The user for whom this policy agreement relates to.';
$string['privacy:metadata:acceptances:status'] = 'The status of the agreement.';
$string['privacy:metadata:acceptances:lang'] = 'The language used to display the policy when consent was given.';
$string['privacy:metadata:acceptances:usermodified'] = 'The user who gave consent for the policy, if made on behalf of another user.';
$string['privacy:metadata:acceptances:timecreated'] = 'The time when the user agreed to the policy.';
$string['privacy:metadata:acceptances:timemodified'] = 'The time when the user updated their agreement.';
$string['privacy:metadata:acceptances:note'] = 'Any comments added by a user when giving consent on behalf of another user.';
$string['privacy:metadata:subsystem:corefiles'] = 'The policy tool stores files included in the summary and full policy.';
$string['privacy:metadata:versions'] = 'Policy version information.';
$string['privacy:metadata:versions:name'] = 'The name of the policy.';
$string['privacy:metadata:versions:type'] = 'Policy type.';
$string['privacy:metadata:versions:audience'] = 'The type of users required to give their consent.';
$string['privacy:metadata:versions:archived'] = 'The policy status (active or inactive).';
$string['privacy:metadata:versions:usermodified'] = 'The user who modified the policy.';
$string['privacy:metadata:versions:timecreated'] = 'The time that this version of the policy was created.';
$string['privacy:metadata:versions:timemodified'] = 'The time that this version of the policy was updated.';
$string['privacy:metadata:versions:policyid'] = 'The policy that this version is associated with.';
$string['privacy:metadata:versions:revision'] = 'The revision name of this version of the policy.';
$string['privacy:metadata:versions:summary'] = 'The summary of this version of the policy.';
$string['privacy:metadata:versions:summaryformat'] = 'The format of the summary field.';
$string['privacy:metadata:versions:content'] = 'The content of this version of the policy.';
$string['privacy:metadata:versions:contentformat'] = 'Format pola treści.';
$string['privacysettings'] = 'Ustawienia prywatności';
$string['readpolicy'] = 'Przeczytaj nasz {$a}';
$string['refertofullpolicytext'] = 'Proszę zapoznać się z pełną {$a} jeśli chcesz przejrzeć tekst.';
$string['response'] = 'Odpowiedź';
$string['responseby'] = 'Pozwany';
$string['responseon'] = 'Data';
$string['revokeacknowledgement'] = 'Uznaję, że otrzymałem wniosek o wycofanie zgody w imieniu powyższych użytkowników.';
$string['save'] = 'Zapisz';
$string['saveasdraft'] = 'Zapisz jako szkic';
$string['selectuser'] = 'Wybierz użytkownika {$a}';
$string['selectusersforconsent'] = 'Wybierz użytkowników, aby wyrazić zgodę w imieniu.';
$string['settodraft'] = 'Utwórz nowy szkic';
$string['status'] = 'Status polityki';
$string['statusformtitleaccept'] = 'Akceptacja polityki';
$string['statusformtitledecline'] = 'Polityka malejąca';
$string['statusformtitlerevoke'] = 'Wycofanie polityki';
$string['statusinfo'] = 'Polityka z \'Active\' Status wymaga, aby użytkownicy wyrazili zgodę, albo po pierwszym logowaniu się, albo w przypadku istniejących użytkowników, gdy następnie się zalogują.';
$string['status0'] = 'Projekt';
$string['status1'] = 'Aktywny';
$string['status2'] = 'Nieaktywny';
$string['useracceptanceactionaccept'] = 'Zaakceptować';
$string['useracceptanceactionacceptone'] = 'Zaakceptować {$a}';
$string['useracceptanceactionacceptpending'] = 'Przyjmować oczekujące zasady';
$string['useracceptanceactiondecline'] = 'Spadek';
$string['useracceptanceactiondeclineone'] = 'Spadek {$a}';
$string['useracceptanceactiondeclinepending'] = 'Spadek oczekujących polityk';
$string['useracceptanceactiondetails'] = 'Detale';
$string['useracceptanceactionrevoke'] = 'Wycofać';
$string['useracceptanceactionrevokeall'] = 'Wycofać zaakceptowane zasady';
$string['useracceptanceactionrevokeone'] = 'Wycofać akceptację {$a}';
$string['useracceptancecount'] = '{$a->agreedcount} z {$a->userscount} ({$a->percent}%)';
$string['useracceptancecountna'] = 'N/A';
$string['useracceptances'] = 'Umowy użytkownika';
$string['userpolicysettings'] = 'Zasady';
$string['usersaccepted'] = 'Umowy';
$string['viewarchived'] = 'Zobacz poprzednie wersje';
$string['viewconsentpageforuser'] = 'Przeglądanie tej strony w imieniu {$a}';
