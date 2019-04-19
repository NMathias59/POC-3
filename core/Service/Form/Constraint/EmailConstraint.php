<?php

namespace Core\Service\Form\Constraint;


class EmailConstraint extends AbstractConstraint
{
    public function isValid($data)
    {
        if (empty($data)) {
            return true;
        }

        return filter_var($data, FILTER_VALIDATE_EMAIL);
    }
}