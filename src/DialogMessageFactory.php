<?php
declare(strict_types=1);

namespace Plaisio\DialogMessage;

/**
 * Factory for creating dialog messages.
 */
interface DialogMessageFactory
{
  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Creates a dialog message.
   *
   * @return DialogMessage
   */
  public function create(): DialogMessage;

  //--------------------------------------------------------------------------------------------------------------------
}

//----------------------------------------------------------------------------------------------------------------------
