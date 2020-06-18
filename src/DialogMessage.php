<?php
declare(strict_types=1);

namespace Plaisio\DialogMessage;

/**
 * Generates JavaScript code creating dialog messages.
 */
interface DialogMessage
{
  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Adds a button to the dialog.
   *
   * @param string      $text       The text of the button.
   * @param array       $attributes The additional attributes of the button.
   * @param bool        $close      If true, clicking the button will close the dialog. If false, the action of the
   *                                button has to be set via other means.
   * @param string|null $uri        The URI to redirect the user agent to after the dialog has been closed (implies
   *                                $close = true).
   *
   * @return static
   */
  public function addButton(string $text, array $attributes = [], bool $close = true, ?string $uri = null): self;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Sets the message of the dialog.
   *
   * @param string|null $message The message of the dialog.
   * @param bool        $isHtml  If false, the message is plain text. If true, the message is HTML code.
   *
   * @return static
   */
  public function message(?string $message, bool $isHtml = false): self;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Sets modal. If set to true, the dialog will have modal behavior.
   *
   * @param bool $modal
   *
   * @return static
   */
  public function modal(bool $modal): self;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Shows the dialog. That is, generates JavaScript for display the dialog.
   */
  public function show(): void;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Sets the title of the dialog.
   *
   * @param string|null $title
   *
   * @return static
   */
  public function title(?string $title): self;

  //--------------------------------------------------------------------------------------------------------------------
}

//----------------------------------------------------------------------------------------------------------------------
