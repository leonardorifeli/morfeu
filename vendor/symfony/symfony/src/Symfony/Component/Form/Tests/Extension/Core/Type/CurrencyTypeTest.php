<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Form\Tests\Extension\Core\Type;

use Symfony\Component\Form\Test\TypeTestCase as TestCase;
use Symfony\Component\Form\ChoiceList\View\ChoiceView;
use Symfony\Component\Intl\Util\IntlTestHelper;

class CurrencyTypeTest extends TestCase
{
    protected function setUp()
    {
        IntlTestHelper::requireIntl($this);

        parent::setUp();
    }

    public function testCurrenciesAreSelectable()
    {
        $form = $this->factory->create('currency');
        $view = $form->createView();
        $choices = $view->vars['choices'];

        $this->assertContains(new ChoiceView('EUR', 'EUR', 'Euro'), $choices, '', false, false);
        $this->assertContains(new ChoiceView('USD', 'USD', 'US Dollar'), $choices, '', false, false);
        $this->assertContains(new ChoiceView('SIT', 'SIT', 'Slovenian Tolar'), $choices, '', false, false);
    }
}
