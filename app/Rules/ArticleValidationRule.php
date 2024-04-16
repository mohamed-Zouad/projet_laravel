<?php
namespace App\Rules;
use Illuminate\Contracts\Validation\Rule;
class ArticleValidationRule implements Rule
{
public function __construct()
{
//
}
public function passes($attribute, $value)
{
// Validation conditionnelle basée sur le type d'article
if ($value == 'blog') {
// Les règles spécifiques pour les articles de blog
return request('blog_field') !== null;
} elseif ($value == 'news') {
// Les règles spécifiques pour les articles d'actualité
return request('news_field') !== null;
}
return false; // Retourne false si le type d'article n'est pas reconnu
}
public function message()
{
return 'Les informations spécifiques à l\'article ne sont pas correctes';
}
}