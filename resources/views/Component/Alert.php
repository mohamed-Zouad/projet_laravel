<?php
namespace App\View\Component;
use Illuminate\View\Component;
class Alert extends Component
{
public $type;
public $message;
public function __construct($type, $message)
{
$this->type = $type;
$this->message = $message;
}
public function render()
{
return view('Component.alert');
}
}
