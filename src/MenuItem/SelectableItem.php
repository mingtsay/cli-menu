<?php

namespace MikeyMike\CliMenu\MenuItem;

/**
 * Class SelectableItem
 *
 * @author Michael Woodward <michael@wearejh.com>
 */
class SelectableItem implements MenuItemInterface
{
    use SelectableTrait;

    /**
     * @var callable
     */
    private $selectAction;

    /**
     * @param string $text
     * @param callable $selectAction
     */
    public function __construct($text, callable $selectAction)
    {
        $this->text         = $text;
        $this->selectAction = $selectAction;
    }

    /**
     * Execute the items callable if required
     *
     * @return callable|void
     */
    public function getSelectAction()
    {
        return $this->selectAction;
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
