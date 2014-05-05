<?php

namespace Grafit\CoreBundle\Entity;

interface UserAware
{
    public function setUser(UserInterface $user = null);
}
