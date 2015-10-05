<?php

namespace MikeyMike\CliMenu\MenuItem;

/**
 * Class MenuItem
 *
 * @author Michael Woodward <michael@wearejh.com>
 */
class MenuItem implements MenuItemInterface
{
    use SelectableTrait;

    /**
     * @param string $text
     */
    public function __construct($text)
    {
        $this->text = $text;
    }

    /**
     * Execute the items callable if required
     *
     * @return callable|void
     */
    public function getSelectAction()
    {
        return;
    }

    /**
     * Return the raw string of text
     *
     * @return string
     */
    public function getText()
    {
       return $this->text;
    }
}
