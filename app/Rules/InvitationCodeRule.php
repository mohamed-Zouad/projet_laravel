<?php

namespace App\Rules;
use Illuminate\Contracts\Validation\Rule;
class InvitationCodeRule implements Rule
{
/**
* Create a new rule instance.
*
* @return void
*/
public function __construct()
{
//
}
/**
* Determine if the validation rule passes.
*
* @param string $attribute
* @param mixed $value
* @return bool
*/
public function passes($attribute, $value)
{
// Vous devrez remplacer cette liste par votre propre liste prédéfinie
$validInvitationCodes = ['code1', 'code2', 'code3'];
return in_array($value, $validInvitationCodes);
}
public function message()
{
return 'Le code d\'invitation n\'est pas valide.';
}
}

