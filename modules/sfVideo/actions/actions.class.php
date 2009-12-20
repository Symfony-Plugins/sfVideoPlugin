<?php

/**
 * sfVideo actions.
 *
 * @package     sfVideoPlugin
 * @author      Tomasz Ducin <tomasz.ducin@gmail.com>
 */

class sfVideoActions extends sfActions
{
  /**
   * Demo action. Displays an example external flv file.
   *
   * @param sfRequest $request A request object
   */
  public function executeShow(sfWebRequest $request)
  {
    // chhose one of the following examples found on the web:
    // $this->link = "http://www.mediacollege.com/video-gallery/testclips/20051210-w50s.flv";
    $this->link = "http://e1h13.simplecdn.net/flowplayer/flowplayer.flv";

    // adding js flash embedding script
    $this->getResponse()->addJavascript('/sfVideoPlugin/js/flowplayer-3.1.4.min.js');

    // adding default flowplayer stylesheet
    $this->getResponse()->addStylesheet('/sfVideoPlugin/css/flowplayer');
  }

  /**
   * Demo action. Displays an example local flv file.
   *
   * @param sfRequest $request A request object
   */
  public function executeShow(sfWebRequest $request)
  {
    $this->link = "/path/to/local/flv/file.flv";

    // adding js flash embedding script
    $this->getResponse()->addJavascript('/sfVideoPlugin/js/flowplayer-3.1.4.min.js');

    // adding default flowplayer stylesheet
    $this->getResponse()->addStylesheet('/sfVideoPlugin/css/flowplayer');
  }
}
