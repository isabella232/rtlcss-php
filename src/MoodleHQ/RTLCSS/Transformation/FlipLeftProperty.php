<?php
namespace MoodleHQ\RTLCSS\Transformation;

use Sabberworm\CSS\Rule\Rule;

/**
 * Flips properties containing 'left' to 'right'
 */
class FlipLeftProperty implements TransformationInterface
{
    /**
     * @inheritDoc
     */
    public function appliesFor($property)
    {
        return (preg_match('/left/im', $property) === 1);
    }

    /**
     * @inheritDoc
     */
    public function transform(Rule $rule)
    {
        $property = $rule->getRule();

        $rule->setRule(str_replace('left', 'right', $property));

        return $rule;
    }
}
