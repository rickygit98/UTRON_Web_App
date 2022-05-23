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

  public static function setAuthMessages($messages, $action, $type)
  {
    $_SESSION["auth_messages"] = [
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

  public static function auth_messages()
  {
    if (isset($_SESSION["auth_messages"])) {
      echo '
            <div class="alert alert-' .
        $_SESSION["auth_messages"]["type"] .
        ' alert-dismissible fade show" role="alert">
            Anda 
            <strong>' .
        $_SESSION["auth_messages"]["messages"] .
        "</strong> " .
        $_SESSION["auth_messages"]["action"] .
        '
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
      unset($_SESSION["auth_messages"]);
    }
  }

}
?>
