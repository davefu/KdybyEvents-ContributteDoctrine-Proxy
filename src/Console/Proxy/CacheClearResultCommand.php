<?php

/**
 * This file is part of the Kdyby (http://www.kdyby.org)
 *
 * Copyright (c) 2008 Filip Procházka (filip@prochazka.su)
 *
 * For the full copyright and license information, please view the file license.txt that was distributed with this source code.
 */

namespace Davefu\KdybyContributteBridge\Console\Proxy;

use Davefu\KdybyContributteBridge\Console\OrmDelegateCommand;
use Doctrine\ORM\Tools\Console\Command\ClearCache\ResultCommand;
use Symfony\Component\Console\Command\Command;

/**
 * Command to clear the result cache of the various cache drivers.
 */
class CacheClearResultCommand extends OrmDelegateCommand {

	protected function createCommand(): Command {
		return new ResultCommand();
	}
}
