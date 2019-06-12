<?php

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Behat\MinkExtension\Context\MinkContext;

/**
 * Defines application features from the specific context.
 */
class FeatureContext extends MinkContext implements Context
{
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
    }

    /**
     * @When Je vais sur :arg1
     */
    public function jeVaisSur($arg1)
    {
        $this->getSession()->visit($arg1);
        $this->getSession()->wait(5000);
    }

    /**
     * @Then Je vois :arg1
     */
    public function jeVois($arg1)
    {
        $this->assertPageContainsText($arg1);
    }
}
