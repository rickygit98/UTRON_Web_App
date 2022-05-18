<?php
class Messages
{
  public static function setMessages($messages, $action, $type)
  {
    $_SESSION["messages"] = [
      "messages" => $messages,
      "action" => $action,
      "type" => $type,
    ];
  }

  public static function messages()
  {
    if (isset($_SESSION["messages"])) {
      echo '
            <div class="alert alert-' .
        $_SESSION["messages"]["type"] .
        ' alert-dismissible fade show" role="alert">
            Data
            <strong>' .
        $_SESSION["messages"]["messages"] .
        "</strong> " .
        $_SESSION["messages"]["action"] .
        '
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
      unset($_SESSION["messages"]);
    }
  }
}
?>
